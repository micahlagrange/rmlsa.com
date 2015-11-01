<?php
/**
* @package My Content
* @copyright Copyright (C) 2006 Owl Watch Consulting Services. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
*/

// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );

require_once( $mainframe->getPath( 'front_html', 'com_mycontent' ) );

$lang = dirname( __FILE__) . '/lang/' . $mosConfig_lang . '.php';
if(!file_exists($lang)){
    $lang = dirname( __FILE__) . '/lang/english.php';
}
require_once($lang);

$limit 		= intval( mosGetParam( $_REQUEST, 'limit', '' ) );
$order 		= mosGetParam( $_REQUEST, 'order', '' );
$filter 	= mosGetParam( $_REQUEST, 'filter', '');
$id		= mosGetParam( $_REQUEST, 'id', '');
$limitstart = intval( mosGetParam( $_REQUEST, 'limitstart', 0 ) );

$now = date( 'Y-m-d H:i:s', time() );

// Editor usertype check
$access = new stdClass();
$access->canEdit    = $acl->acl_check( 'action', 'edit', 'users', $my->usertype, 'content', 'all' );
$access->canEditOwn = $acl->acl_check( 'action', 'edit', 'users', $my->usertype, 'content', 'own' );
$access->canPublish = $acl->acl_check( 'action', 'publish', 'users', $my->usertype, 'content', 'all' );
$access->canPublishOwn = $acl->acl_check( 'action', 'publish', 'users', $my->usertype, 'content', 'own' );

// cache activation
$cache =& mosCache::getCache( 'com_mycontent' );

// call the showMyItems function
switch( strtolower( $task ) ){
    	case 'publish':
    		togglePublish($id, $access, $limit, $order, $limitstart, $now);
		break;
	case 'view':
		showItem($id, $gid, $access, $option, $now);
		break;
	default:
		showMyItems($access, $limit, $order, $limitstart, $now);
		break;
    
}

/**
* @param int The access level of the user
* @param int The section id
* @param int The number of items to dislpay
* @param int The offset for pagination
*/
function showMyItems( &$access, $limit, $selected, $limitstart, $now  ) {
	
    	global $database, $mainframe, $Itemid, $mosConfig_list_limit, $my, $mosConfig_live_site;

	$nullDate = '0000-00-00 00:00:00';
	$noauth = !$mainframe->getCfg( 'shownoauth' );

	
	// Paramters
	$params = new stdClass();
	if ( $Itemid ) {
		$menu = new mosMenu( $database );
		$menu->load( $Itemid );
		$params = new mosParameters( $menu->params );
	} else {
		$menu = '';
		$params = new mosParameters( '' );
	}

	
	$params->def('date', 1);
	$params->def('hits', 1);
	$params->def('filter', 1);
	$params->def('title', 1);
	$params->def('section', 1);
	$params->def('order_select', 1);
	$params->def('headings', 1);
	$params->def('navigation', 1);
	$params->def('page_title', 1);
	$params->def('allow_create', 1);
	$params->def('display_num', 50);
	$params->def('display', 1);
	$params->def('publisher_view', 1);
	$params->def('show_unpublished', 1);
	$params->def('new_position', 1);
	$params->def('date_format', '%D');
	
	
	if ( $selected ) {
		$orderby = $selected;
	} else {
		$orderby = $params->get( 'orderby', 'rdate' );
		$selected = $orderby;
	}

	// Ordering control
	$orderby = _orderby_sec( $orderby );
	
	// get the total number of published items in the category
	// filter functionality
	$and = '';
	if ( $params->get( 'filter' ) ) {
		$filter = mosGetParam( $_POST, 'filter', '' );
		
		if ( $filter ) {
			// clean filter variable
			$filter = strtolower( $filter );
			
			switch ( $params->get( 'filter_type' ) ) {
				case 'title':
					$and = "\n AND LOWER( a.title ) LIKE '%$filter%'";
					break;
	
				case 'hits':
					$and = "\n AND a.hits LIKE '%$filter%'";
					break;
			}
		}
	}
	

	$pagetitle = '';
	if ( $Itemid ) {
		$menu = new mosMenu( $database );
		$menu->load( $Itemid );
		$pagetitle = $menu->name;
	} // if
	
	
	// inital where statement
	$where = "\n WHERE a.created_by = " . (($my->id) ? $my->id : '-1');
	
	if($params->get( 'publisher_view' ) && $access->canPublish){
	    $where = "\n WHERE a.created_by > 0";
	}
	
	
	// only for standard joomla groups Registered and Author
	if($params->get( 'show_unpublished' ) == 0 && ($my->usertype == 'Registered' || $my->usertype == 'Author') ){
		$where .= "\n AND published > 0";
	}
	
	$query = "SELECT COUNT(a.id) as numitems"
	. "\n FROM #__content AS a"
	. "\n LEFT JOIN #__users AS u ON u.id = a.created_by"
	. $where
	. $and
	;
	
	$database->setQuery( $query );
	$counter = $database->loadObjectList();
	$total = $counter[0]->numitems;
	$limit = $limit ? $limit : $params->get( 'display_num' ) ;
	if ( $total <= $limit ) $limitstart = 0;

	require_once( $GLOBALS['mosConfig_absolute_path'] . '/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit );

	
	// get the list of items for this category
	$query = "SELECT a.id, a.state AS published, a.title, a.hits, a.created_by, a.created_by_alias, a.created AS created, a.access, u.name AS author, a.state, g.name AS groups,"
	. "\n c.name AS category, s.name AS section"
	. "\n FROM #__content AS a"
	. "\n LEFT JOIN #__users AS u ON u.id = a.created_by"
	. "\n LEFT JOIN #__groups AS g ON a.access = g.id"
	. "\n LEFT JOIN #__categories AS c on a.catid = c.id"
	. "\n LEFT JOIN #__sections AS s on s.id = c.section"
	. $where
	. "\n AND a.state > -1"
	. $and
	. "\n ORDER BY $orderby"
	. "\n LIMIT $limitstart, $limit"
	;
	$database->setQuery( $query );
	//echo $database->getQuery();
	$items = $database->loadObjectList();

	$check = 0;
	if ( $params->get( 'date' ) ) {
		$order[] = mosHTML::makeOption( 'date', _ORDER_DROPDOWN_DA );
		$order[] = mosHTML::makeOption( 'rdate', _ORDER_DROPDOWN_DD );
		$check .= 1;
	}
	if ( $params->get( 'title' ) ) {
		$order[] = mosHTML::makeOption( 'alpha', _ORDER_DROPDOWN_TA );
		$order[] = mosHTML::makeOption( 'ralpha', _ORDER_DROPDOWN_TD );
		$check .= 1;
	}
	if ( $params->get( 'hits' ) ) {
		$order[] = mosHTML::makeOption( 'hits', _ORDER_DROPDOWN_HA );
		$order[] = mosHTML::makeOption( 'rhits', _ORDER_DROPDOWN_HD );
		$check .= 1;
	}
	if ( $params->get( 'section' ) ) {
		$order[] = mosHTML::makeOption( 'section', _ORDER_DROPDOWN_SCA );
		$order[] = mosHTML::makeOption( 'rsection', _ORDER_DROPDOWN_SCD );
		$check .= 1;
	}
	$order[] = mosHTML::makeOption( 'order', _ORDER_DROPDOWN_O );
	$lists['order'] = mosHTML::selectList( $order, 'order', 'class="inputbox" size="1"  onchange="document.adminForm.submit();"', 'value', 'text', $selected );
	if ( $check < 1 ) {
		$lists['order'] = '';
		$params->set( 'order_select', 0 );
	}
	// added for myContent 1.1.11
	$usertype = 1;
	switch( $my->usertype ){
		case 'Super Administrator':
		case 'Administrator':
		case 'Manager':
		case 'Publisher':
			$usertype=2;
			break;
		default: 
			$usertype= 1;
			break;
	}
	
	$query = "SELECT s.name as name, s.id as id from #__sections as s WHERE s.published = 1 AND s.access <= '$usertype' ORDER BY s.ordering";
	$database->setQuery($query);
	$sections = $database->loadObjectList();
	$mysections = array();
	$mysections[] = mosHTML::makeOption( -1, _MYC_CHOOSE_SECTION);
	foreach($sections as $obj){
	    $mysections[] = mosHTML::makeOption( $obj->id, $obj->name);
	}
	$lists['sections'] = mosHTML::selectList( $mysections, 'sectionid', 'class="inputbox" size="1" onchange="createNewSubmit()"', 'value', 'text');

	$lists['task'] = 'category';
	$lists['filter'] = $filter;
	$lists['limit'] = $limit;
	$lists['limitstart'] = $limitstart;

	// Dynamic Page Title
	$mainframe->SetPageTitle( $pagetitle );
	HTML_mycontent::showContentList( $items, $access, $params, $pageNav, $lists, $selected );
} // showCategory

function togglePublish($id, $access, $limit, $order, $limitstart, $now){
    	global $my, $database;
    	if($access->canPublish){
		$query = "SELECT a.*"
		. "\n FROM #__content AS a"
		. "\n WHERE a.id = $id"
		;
		$database->setQuery( $query );
		$row = NULL;
	
		if ( $database->loadObject( $row ) ) {
		    if($row->state){
			$query = "UPDATE #__content SET state = 0 WHERE id = $id";
			$database->setQuery($query);
			$database->query() or die( $database->stderr() );
		    }
		    else{
			$query = "UPDATE #__content SET state = 1  WHERE id = $id";
			$database->setQuery($query);
			$database->query() or die( $database->stderr() );
		    }
		}
	}
	showMyItems( $access, $limit, null, $limitstart, $now  );    
}

function showItem( $uid, $gid, &$access, $option='com_content', $now ) {
	global $database, $mainframe, $Itemid, $my;
	global $mosConfig_MetaTitle, $mosConfig_MetaAuthor;
	
	require_once( $mainframe->getPath( 'front_html', 'com_content' ) );
	
	// mambo compatability
	if(!defined( '_CURRENT_SERVER_TIME' )){
		$now = date( 'Y-m-d H:i', time() );
		DEFINE( '_CURRENT_SERVER_TIME', $now );
	}
	
	$now 		= _CURRENT_SERVER_TIME;
	$nullDate 	= '0000-00-00 00:00:00';
	
	if ( $access->canEdit) {
		$xwhere = '';
	}else if( $my->id ) {
		$xwhere = "\n AND a.created_by = $my->id";
	}
	
	$params = new stdClass();
	if ( $Itemid ) {
		$menu = new mosMenu( $database );
		$menu->load( $Itemid );
		$params = new mosParameters( $menu->params );
	} else {
		$menu = '';
		$params = new mosParameters( '' );
	}
	
	// main query
	$query = "SELECT a.*, u.name AS author, u.usertype, cc.name AS category, s.name AS section, g.name AS groups,"
	. "\n s.published AS sec_pub, cc.published AS cat_pub, s.access AS sec_access, cc.access AS cat_access,"
	. "\n s.id AS sec_id, cc.id as cat_id"
	. "\n FROM #__content AS a"
	. "\n LEFT JOIN #__categories AS cc ON cc.id = a.catid"
	. "\n LEFT JOIN #__sections AS s ON s.id = cc.section AND s.scope = 'content'"
	. "\n LEFT JOIN #__users AS u ON u.id = a.created_by"
	. "\n LEFT JOIN #__groups AS g ON a.access = g.id"
	. "\n WHERE a.id = $uid"
	. $xwhere
	. "\n AND a.access <= $gid"
	;
	$database->setQuery( $query );
	$row = NULL;

	if ( $database->loadObject( $row ) ) {
		/*
		* check whether category is published
		*/
		if ( !$row->cat_pub && $row->catid ) {
			mosNotAuth();
			return;
		}
		/*
		* check whether section is published
		*/
		if ( !$row->sec_pub && $row->sectionid ) {
			mosNotAuth(); 
			return;
		}
		/*
		* check whether category access level allows access
		*/
		if ( ($row->cat_access > $gid) && $row->catid ) {
			mosNotAuth();  
			return;
		}
		/*
		* check whether section access level allows access
		*/
		if ( ($row->sec_access > $gid) && $row->sectionid ) {
			mosNotAuth();  
			return;
		}

		$params = new mosParameters( $row->attribs );
		$params->set( 'intro_only', 	0 );
		$params->def( 'back_button', 	$mainframe->getCfg( 'back_button' ) );
		if ( $row->sectionid == 0) {
			$params->set( 'item_navigation', 0 );
		} else {
			$params->set( 'item_navigation', $mainframe->getCfg( 'item_navigation' ) );
		}
		
		// loads the links for Next & Previous Button
		// Just disable for this
		if ( $params->get( 'item_navigation' ) ) {				
			// Paramters for menu item as determined by controlling Itemid
			$mparams = new mosParameters( $params );

			// the following is needed as different menu items types utilise a different param to control ordering
			// for Blogs the `orderby_sec` param is the order controlling param
			// for Table and List views it is the `orderby` param
			//$mparams_list = $mparams->toArray();
			//if ( array_key_exists( 'orderby_sec', $mparams_list ) ) {
			//	$order_method = $mparams->get( 'orderby_sec', '' );
			//} else {
				$order_method = $mparams->get( 'orderby', '' );
			//}
			// additional check for invalid sort ordering
			if ( $order_method == 'front' ) {
				$order_method = '';
			}
			$orderby = _orderby_sec( $order_method );			

			// array of content items in same category correctly ordered
			$query = "SELECT a.id"
			. "\n FROM #__content AS a"
			. "\n WHERE a.catid = $row->catid"
			. "\n AND a.state = $row->state"
			. ($access->canEdit ? '' : "\n AND a.access <= $gid" )
			. $xwhere
			. "\n ORDER BY $orderby"
			;
			$database->setQuery( $query );
			$list = $database->loadResultArray();

			// this check needed if incorrect Itemid is given resulting in an incorrect result
			if ( !is_array($list) ) {
				$list = array();
			}
			// location of current content item in array list
			$location = array_search( $uid, $list );

			$row->prev = '';
			$row->next = '';
			if ( $location - 1 >= 0 ) {
			// the previous content item cannot be in the array position -1
				$row->prev = $list[$location - 1]; 
			}
			if ( ( $location + 1 ) < count( $list ) ) {
			// the next content item cannot be in an array position greater than the number of array postions
				$row->next = $list[$location + 1];
			}
		}
		$row->prev = '';
		$row->next = '';
		// page title
		$mainframe->setPageTitle( $row->title );
		if ($mosConfig_MetaTitle=='1') {
			$mainframe->addMetaTag( 'title' , $row->title );
		}
		if ($mosConfig_MetaAuthor=='1') {
			$mainframe->addMetaTag( 'author' , $row->author );
		}

		show( $row, $params, $gid, $access);
	} else {
		mosNotAuth();
		return;
	}
}


function show( $row, $params, $gid, &$access, $option='com_mycontent', $ItemidCount=null ) {
	global $database, $mainframe;
	global $cache;

	$noauth = !$mainframe->getCfg( 'shownoauth' );

	if ( $access->canEdit ) {
		if ( $row->id === null || $row->access > $gid ) {
			mosNotAuth();
			return;
		}
	} else {
		if ( $row->id === null ) {
			mosNotAuth();
			return;
		}
		if ( $row->access > $gid ) {
			if ( $noauth ) {
				mosNotAuth();
				return;
			} else {
				if ( !( $params->get( 'intro_only' ) ) ) {
					mosNotAuth();
					return;
				}
			}
		}
	}

	// GC Parameters
	$params->def( 'link_titles', 	$mainframe->getCfg( 'link_titles' ) );
	$params->def( 'author', 		!$mainframe->getCfg( 'hideAuthor' ) );
	$params->def( 'createdate', 	!$mainframe->getCfg( 'hideCreateDate' ) );
	$params->def( 'modifydate', 	!$mainframe->getCfg( 'hideModifyDate' ) );
	$params->def( 'print', 			!$mainframe->getCfg( 'hidePrint' ) );
	$params->def( 'pdf', 			!$mainframe->getCfg( 'hidePdf' ) );
	$params->def( 'email', 			!$mainframe->getCfg( 'hideEmail' ) );
	$params->def( 'icons', 			$mainframe->getCfg( 'icons' ) );
	$params->def( 'readmore', 		$mainframe->getCfg( 'readmore' ) );
	// Other Params
	$params->def( 'image', 			1 );
	$params->def( 'section', 		0 );
	$params->def( 'section_link', 	0 );
	$params->def( 'category', 		0 );
	$params->def( 'category_link', 	0 );
	$params->def( 'introtext', 		1 );
	$params->def( 'pageclass_sfx', 	'' );
	$params->def( 'item_title', 	1 );
	$params->def( 'url', 			1 );
	
	if ( $params->get( 'section_link' ) || $params->get( 'category_link' ) ) {
		// loads the link for Section name
		if ( $params->get( 'section_link' ) || $params->get( 'category_link' ) ) {
			// pull values from mainframe
			$secLinkID 	= $mainframe->get( 'secID_'. $row->sectionid, -1 );
			$secLinkURL = $mainframe->get( 'secURL_'. $row->sectionid );
			
			// check if values have already been placed into mainframe memory
			if ( $secLinkID == -1 ) {
				$query = "SELECT id, link"
				. "\n FROM #__menu"
				. "\n WHERE published = 1"
				. "\n AND type IN ( 'content_section', 'content_blog_section' )"
				. "\n AND componentid = $row->sectionid"
				. "\n ORDER BY type DESC, ordering"
				;
				$database->setQuery( $query );
				//$secLinkID = $database->loadResult();
				$result = $database->loadRow();
				
				$secLinkID 	= $result[0];
				$secLinkURL = $result[1];
				
				if ($secLinkID == null) {
					$secLinkID = 0;
					// save 0 query result to mainframe
					$mainframe->set( 'secID_'. $row->sectionid, 0 );
				} else {
					// save query result to mainframe
					$mainframe->set( 'secID_'. $row->sectionid, $secLinkID );
					$mainframe->set( 'secURL_'. $row->sectionid, $secLinkURL );
				}
			}

			$_Itemid = '';
			// use Itemid for section found in query
			if ($secLinkID != -1 && $secLinkID) {				
				$_Itemid = '&amp;Itemid='. $secLinkID;
			}
			if ($secLinkURL) {
				$link 			= sefRelToAbs( $secLinkURL . $_Itemid );
			} else {
				$link 			= sefRelToAbs( 'index.php?option=com_content&amp;task=section&amp;id='. $row->sectionid . $_Itemid );
			}
			$row->section 	= '<a href="'. $link .'">'. $row->section .'</a>';
		}
	
		// loads the link for Category name
		if ( $params->get( 'category_link' ) && $row->catid ) {
			// pull values from mainframe
			$catLinkID 	= $mainframe->get( 'catID_'. $row->catid, -1 );
			$catLinkURL = $mainframe->get( 'catURL_'. $row->catid );

			// check if values have already been placed into mainframe memory
			if ( $catLinkID == -1 ) {
				$query = "SELECT id, link"
				. "\n FROM #__menu"
				. "\n WHERE published = 1"
				. "\n AND type IN ( 'content_category', 'content_blog_category' )"
				. "\n AND componentid = $row->catid"
				. "\n ORDER BY type DESC, ordering"
				;
				$database->setQuery( $query );
				//$catLinkID = $database->loadResult();
				$result = $database->loadRow();
				
				$catLinkID 	= $result[0];
				$catLinkURL = $result[1];				

				if ($catLinkID == null) {
					$catLinkID = 0;
					// save 0 query result to mainframe
					$mainframe->set( 'catID_'. $row->catid, 0 );
				} else {
					// save query result to mainframe
					$mainframe->set( 'catID_'. $row->catid, $catLinkID );
					$mainframe->set( 'catURL_'. $row->catid, $catLinkURL );
				}
			}

			$_Itemid = '';
			// use Itemid for category found in query
			if ($catLinkID != -1 && $catLinkID) {				
				$_Itemid = '&amp;Itemid='. $catLinkID;
			} else if ($secLinkID != -1 && $secLinkID) {				
			// use Itemid for section found in query
				$_Itemid = '&amp;Itemid='. $secLinkID;
			}
			if ($catLinkURL) {
				$link 			= sefRelToAbs( $catLinkURL . $_Itemid );
			} else {
				$link 			= sefRelToAbs( 'index.php?option=com_content&amp;task=category&amp;sectionid='. $row->sectionid .'&amp;id='. $row->catid . $_Itemid );
			}
			$row->category 	= '<a href="'. $link .'">'. $row->category .'</a>';
		}
	}

	// show/hides the intro text
	if ( $params->get( 'introtext'  ) ) {
		$row->text = $row->introtext. ( $params->get( 'intro_only' ) ? '' : chr(13) . chr(13) . $row->fulltext);
	} else {
		$row->text = $row->fulltext;
	}

	// deal with the {mospagebreak} mambots
	// only permitted in the full text area
	$page = intval( mosGetParam( $_REQUEST, 'limitstart', 0 ) );

	// record the hit
	if ( !$params->get( 'intro_only' ) && ($page == 0)) {
		$obj = new mosContent( $database );
		$obj->hit( $row->id );
	}

	// needed for caching purposes to stop different cachefiles being created for same item
	// does not affect anything else as hits data not outputted
	$row->hits = 0;
	
	HTML_mycontent::show( $row, $params, $access, $page );
}


function _orderby_sec( $orderby ) {
	switch ( $orderby ) {
		case 'date':
			$orderby = 'a.created';
			break;

		case 'rdate':
			$orderby = 'a.created DESC';
			break;

		case 'alpha':
			$orderby = 'a.title';
			break;

		case 'ralpha':
			$orderby = 'a.title DESC';
			break;

		case 'hits':
			$orderby = 'a.hits';
			break;

		case 'rhits':
			$orderby = 'a.hits DESC';
			break;

		case 'order':
			$orderby = 'a.ordering';
			break;

		case 'section':
			$orderby = 's.name, c.name, a.created DESC';
			break;

		case 'rsection':
			$orderby = 's.name DESC, c.name DESC, a.created DESC';
			break;

		case 'front':
			$orderby = 'f.ordering';
			break;

		default:
			$orderby = 'a.ordering';
			break;
	}

	return $orderby;
}
?>