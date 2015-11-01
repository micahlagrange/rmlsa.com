<?php
/**
* @package My Content
* @author Mark Fabrizio Jr.
* @copyright Copyright (C) 2006 Owl Watch Consulting Services. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
*/

// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );

/**
* Utility class for writing the HTML for content
* @package Joomla
* @subpackage Content
*/

class HTML_mycontent {
	/**
	* Draws a Content List
	* Used by Content Category & Content Section
	*/
	function showContentList( &$items, &$access, &$params, &$pageNav, &$lists, $order ) {
		global $Itemid, $mosConfig_live_site, $my, $database;

		if ( $params->get( 'page_title' ) ) {
		    $title = $params->get( 'my_page_title' );
		    if(!$title){
			$menu = new mosMenu( $database );
			$menu->load( $Itemid );
			$title = $menu->name;
		    }
			?>
			<div class="componentheading<?php echo $params->get( 'pageclass_sfx' ); ?>">
			<?php echo $title; ?>
			</div>
			<?php
		}
		if($params->get( 'new_position' ) == 1){
			HTML_mycontent :: createNewForm( $lists, $access, $params );
		}
		?>
		<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="contentpane<?php echo $params->get( 'pageclass_sfx' ); ?>">
		<tr>
			<td width="60%" valign="top" class="contentdescription<?php echo $params->get( 'pageclass_sfx' ); ?>" >
			<?php echo _MYC_ALL_CONTENT .'<strong>'.$my->username.'</strong>'; ?>
			</td>
		</tr>
		<tr>
			<td>
			<?php
			// Displays the Table of Items in Category View
			if ( $items ) {
				HTML_mycontent::showTable( $params, $items, $pageNav, $access, $lists, $order );
			} else {
				echo _MYC_NO_ITEMS;
			}
			?>
			</td>
		</tr>
		</table>
		<?php
		if($params->get( 'new_position' ) == 2){
			HTML_mycontent :: createNewForm( $lists, $access, $params );
		}
		// displays back button
		mosHTML::BackButton ( $params );
	}
	
	
	function createNewForm( &$lists, $access, $params ){
		global $mosConfig_live_site, $Itemid;
		// New Content Icon
		if ( ($access->canEdit || $access->canEditOwn) && $params->get( 'allow_create') ) {
			?>
			<script type='text/javascript'>
			function createNewSubmit(){
				if(document.newContentForm.sectionid.options[document.newContentForm.sectionid.selectedIndex] != -1){
					document.newContentForm.submit();
				}else{
					alert('<?php echo _MYC_SELECT_SECTION; ?>');
				}
			}
			</script>
			<form name="newContentForm" style="margin: 10px 0px;" action="<?php echo sefRelToAbs('index.php?option=com_content&amp;task=new&amp;Itemid='.$Itemid); ?>" method="POST">
			<img src="<?php echo $mosConfig_live_site;?>/images/M_images/new.png" width="13" height="14" align="middle" border="0" alt="<?php echo _CMN_NEW;?>" />
			<?php echo _CMN_NEW;?>: <?php echo $lists['sections']; ?>
			</form>
			<?php
		}
	}

	/**
	* Display Table of items
	*/
	function showTable( &$params, &$items, &$pageNav, &$access, &$lists, $order ) {
		global $mosConfig_live_site, $Itemid;
		$link = 'index.php?option=com_mycontent&amp;Itemid='. $Itemid;
		?>
		<form action="<?php echo sefRelToAbs($link); ?>" method="post" name="adminForm">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<?php
		if ( $params->get( 'filter' ) || $params->get( 'order_select' ) || $params->get( 'display' ) ) {
			?>
			<tr>
				<td colspan="6">
					<table>
					<tr>
						<?php
						if ( $params->get( 'filter' ) ) {
							?>
							<td align="right" width="100%" nowrap="nowrap">
							<?php
							echo _FILTER .'&nbsp;';
							?>
							<input type="text" name="filter" value="<?php echo $lists['filter'];?>" class="inputbox" onchange="document.adminForm.submit();" />
							</td>
							<?php
						}
	
						if ( $params->get( 'order_select' ) ) {
							?>
							<td align="right" width="100%" nowrap="nowrap">
							<?php
							echo '&nbsp;&nbsp;&nbsp;'. _ORDER_DROPDOWN .'&nbsp;';
							echo $lists['order'];
							?>
							</td>
							<?php
						}
	
						if ( $params->get( 'display' ) ) {
							?>
							<td align="right" width="100%" nowrap="nowrap">
							<?php
							echo '&nbsp;&nbsp;&nbsp;'. _PN_DISPLAY_NR .'&nbsp;';
							$link = 'index.php?option=com_mycontent&amp;Itemid='. $Itemid;
							echo $pageNav->getLimitBox( $link );
							?>
							</td>
							<?php
						}
						?>
					</tr>
					</table>
				</td>
			</tr>
			<?php
		}
		
		if ( $params->get( 'headings' ) ) {
			?>
			<tr>
					<td class="sectiontableheader<?php echo $params->get( 'pageclass_sfx' ); ?>" width="12">&nbsp;</td>
				<?php
				if ( $params->get( 'date' ) ) {
					?>
					<td class="sectiontableheader<?php echo $params->get( 'pageclass_sfx' ); ?>" width="10%">
					&nbsp;<?php echo _DATE; ?>
					</td>
					<?php
				}
				?>
					<td class="sectiontableheader<?php echo $params->get( 'pageclass_sfx' ); ?>" width='14'>&nbsp;</td>
				<?php
				if ( $params->get( 'title' ) ) {
					?>
					<td class="sectiontableheader<?php echo $params->get( 'pageclass_sfx' ); ?>">
					<?php echo _HEADER_TITLE; ?>
					</td>
					<?php
				}
				if ( $params->get( 'section' ) ) {
					?>
					<td class="sectiontableheader<?php echo $params->get( 'pageclass_sfx' ); ?>" align="left" width="30%">
					<?php echo _MYC_HEADING_SECTION;  ?>
					</td>
					<?php
				}
				if ( $params->get( 'hits' ) ) {
					?>
					<td align="center" class="sectiontableheader<?php echo $params->get( 'pageclass_sfx' ); ?>" width="5%">
					<?php echo _HEADER_HITS; ?>
					</td>
					<?php
				}
				?>
			</tr>
			<?php
		}

		$k = 0;
		foreach ( $items as $row ) {
			?>
			<tr class="sectiontableentry<?php echo ($k+1) . $params->get( 'pageclass_sfx' ); ?>" >
					<td>
					<?php
					$icon = $row->published ? "<img src='$mosConfig_live_site/administrator/images/publish_g.png' border='0' alt='"._CMN_PUBLISHED."' />" : "<img src='$mosConfig_live_site/administrator/images/publish_r.png' border='0' alt='"._CMN_UNPUBLISHED."' />";
					if($access->canPublish || ( $row->created_by == $my->id && $access->canPublishOwn ) ){
					    $link = 'index.php?option=com_mycontent&amp;task=publish&amp;id='.$row->id.'&amp;order=' .$order.'&amp;limit='.$lists['limit'].'&amp;limitstart='.$lists['limitstart'].'&amp;Itemid='. $Itemid;
					    echo "<a href='".sefRelToAbs($link)."'>$icon</a>";
					}else{
					    echo $icon;
					}
					?>
					</td>
				<?php
				if ( $params->get( 'date' ) ) {
					?>
					<td>
					<?php echo mosFormatDate ($row->created, $params->get( 'date_format' ));  ?>
					</td>
					<?php
				}
					?>
					<td>
					<?php
					HTML_mycontent::EditIcon( $row, $params, $access );
					?>
					</td>
					<?php
				if ( $params->get( 'title' ) ) {
				    	$link = sefRelToAbs( 'index.php?option=com_mycontent&amp;task=view&amp;id='. $row->id .'&amp;Itemid='. $Itemid );
					?>
					<td>
					<a href="<?php echo $link; ?>">
					<?php echo $row->title; ?>
					</a>
					</td>
					<?php
				}
				if ( $params->get( 'section' ) ) {
					?>
					<td align="left">
					<?php echo $row->section . ' / ' . $row->category ?>
					</td>
					<?php
				}
				if ( $params->get( 'hits' ) ) {
				?>
					<td align="center">
					<?php echo $row->hits ? $row->hits : '-'; ?>
					</td>
				<?php
			} ?>
		</tr>
		<?php
			$k = 1 - $k;
		}
		if ( $params->get( 'navigation' ) ) {
			?>
			<tr>
				<td colspan="6">&nbsp;</td>
			</tr>
			<tr>
				<td align="center" colspan="6" class="sectiontablefooter<?php echo $params->get( 'pageclass_sfx' ); ?>">
				<?php
				$link = 'index.php?option=com_mycontent&amp;task=category&amp;Itemid='. $Itemid. '&amp;order=' .$order;
				echo $pageNav->writePagesLinks( $link );
				?>
				</td>
			</tr>
			<tr>
				<td colspan="6" align="right">
				<?php echo $pageNav->writePagesCounter(); ?>
				</td>
			</tr>
			<?php
		}
		?>
		</table>
		<input type="hidden" name="option" value="com_mycontent" />
		</form>
		<?php
	}
	function EditIcon( $row, $params, $access ) {
		global $Itemid, $my, $mainframe;

		if ( $params->get( 'popup' ) ) {
			return;
		}
		if ( $row->state < 0 ) {
			return;
		}
		if ( !$access->canEdit && !( $access->canEditOwn && $row->created_by == $my->id ) ) {
			return;
		}

		mosCommonHTML::loadOverlib();

		$link = 'index.php?option=com_content&amp;task=edit&amp;id='. $row->id .'&amp;Itemid='. $Itemid .'&amp;Returnid='. $Itemid;
		$image = mosAdminMenus::ImageCheck( 'edit.png', '/images/M_images/', NULL, NULL, _E_EDIT, _E_EDIT );

		if ( $row->state == 0 ) {
			$overlib = _CMN_UNPUBLISHED;
		} else {
			$overlib = _CMN_PUBLISHED;
		}
		$date 		= mosFormatDate( $row->created );
		$author		= $row->created_by_alias ? $row->created_by_alias : $row->author;

		$overlib 	.= '<br />';
		$overlib 	.= $row->groups;
		$overlib 	.= '<br />';
		$overlib 	.= $date;
		$overlib 	.= '<br />';
		$overlib 	.= $author;
		?>
		<a href="<?php echo sefRelToAbs( $link ); ?>" onmouseover="return overlib('<?php echo $overlib; ?>', CAPTION, '<?php echo _E_EDIT; ?>', BELOW, RIGHT);" onmouseout="return nd();">
		<?php echo $image; ?>
		</a>
		<?php
	}
	
	
	/**
	*
	* This is directly from the html class for com_content in Joomla 1.0.10 - provides compatability for people running older versions
	* of Joomla that require more arguments.
	*
	* Show a content item
	* @param object An object with the record data
	* @param boolean If <code>false</code>, the print button links to a popup window.  If <code>true</code> then the print button invokes the browser print method.
	*/
	function show( &$row, &$params, &$access, $page=0 ) {
		global $mainframe, $hide_js;
		global $mosConfig_live_site;
		global $_MAMBOTS, $_VERSION;

		$mainframe->appendMetaTag( 'description', 	$row->metadesc );
		$mainframe->appendMetaTag( 'keywords', 		$row->metakey );

		// adds mospagebreak heading or title to <site> Title
		if ( isset($row->page_title) && $row->page_title ) {
			$mainframe->setPageTitle( $row->title .' '. $row->page_title );
		}
		
		// calculate Itemid
		HTML_mycontent::_Itemid( $row );
		
		// determines the link and `link text` of the readmore button & linked title
		HTML_mycontent::_linkInfo( $row, $params );
		
		// link used by print button
		$print_link = $mosConfig_live_site. '/index2.php?option=com_content&amp;task=view&amp;id=' . $row->id .'&amp;pop=1&amp;page='. $page . $row->Itemid_link;
		
		// process the new bots
		$_MAMBOTS->loadBotGroup( 'content' );
		$results = $_MAMBOTS->trigger( 'onPrepareContent', array( &$row, &$params, $page ), true );

		if ( $params->get( 'item_title' ) || $params->get( 'pdf' )  || $params->get( 'print' ) || $params->get( 'email' ) ) {
			?>
			<table class="contentpaneopen<?php echo $params->get( 'pageclass_sfx' ); ?>">
			<tr>
				<?php
				// displays Item Title
				if( intval($_VERSION->DEV_LEVEL) < 9 || $_VERSION->PRODUCT == 'Mambo'){
					HTML_content::Title( $row, $params, false, $access );
				}
				else{
					HTML_content::Title( $row, $params, $access );
				}

				// displays PDF Icon
				if( intval($_VERSION->DEV_LEVEL) < 9 || $_VERSION->PRODUCT == 'Mambo'){
					HTML_content::PdfIcon( $row, $params, false, $hide_js );
				}
				else{
					HTML_content::PdfIcon( $row, $params, $hide_js );
				}

				// displays Print Icon
				mosHTML::PrintIcon( $row, $params, $hide_js, $print_link );

				// displays Email Icon
				HTML_content::EmailIcon( $row, $params, $hide_js );
				?>
			</tr>
			</table>
			<?php
 		} else if ( $access->canEdit ) {
 			// edit icon when item title set to hide
 			?>
			<table class="contentpaneopen<?php echo $params->get( 'pageclass_sfx' ); ?>">
 			<tr>
 				<td>
	 				<?php
	 				HTML_content::EditIcon( $row, $params, $access );
	 				?>
 				</td>
 			</tr>
 			</table>
 			<?php
  		}

		if ( !$params->get( 'intro_only' ) ) {
			$results = $_MAMBOTS->trigger( 'onAfterDisplayTitle', array( &$row, &$params, $page ) );
			echo trim( implode( "\n", $results ) );
		}

		$results = $_MAMBOTS->trigger( 'onBeforeDisplayContent', array( &$row, &$params, $page ) );
		echo trim( implode( "\n", $results ) );
		?>

		<table class="contentpaneopen<?php echo $params->get( 'pageclass_sfx' ); ?>">
		<?php
		// displays Section & Category
		HTML_content::Section_Category( $row, $params );

		// displays Author Name
		HTML_content::Author( $row, $params );

		// displays Created Date
		HTML_content::CreateDate( $row, $params );

		// displays Urls
		HTML_content::URL( $row, $params );
		?>
		<tr>
			<td valign="top" colspan="2">
				<?php
				// displays Table of Contents
				HTML_content::TOC( $row );
	
				// displays Item Text
				echo ampReplace( $row->text );
				?>
			</td>
		</tr>
		<?php

		// displays Modified Date
		HTML_content::ModifiedDate( $row, $params );

		// displays Readmore button
		if( intval($_VERSION->DEV_LEVEL) < 9 || $_VERSION->PRODUCT == 'Mambo'){
			HTML_content::ReadMore( $params, false, _READ_MORE );
		}
		else{
			HTML_content::ReadMore( $row, $params );
		}
		?>
		</table>
		
		<span class="article_seperator">&nbsp;</span>
		
		<?php
		$results = $_MAMBOTS->trigger( 'onAfterDisplayContent', array( &$row, &$params, $page ) );
		echo trim( implode( "\n", $results ) );

		// displays the next & previous buttons
		HTML_content::Navigation ( $row, $params );

		// displays close button in pop-up window
		mosHTML::CloseButton ( $params, $hide_js );

		// displays back button in pop-up window
		mosHTML::BackButton ( $params, $hide_js );
	}
	/**
	* calculate Itemid
	*/
	function _Itemid( &$row ) {
		global $task, $Itemid, $mainframe;
		
		if ( $task != 'view' && $task != 'category' ) {
			$row->_Itemid = $mainframe->getItemid( $row->id, 0, 0 );
		} else {
			// when viewing a content item, it is not necessary to calculate the Itemid
			$row->_Itemid = $Itemid;
		}
		
		if ( $row->_Itemid && $row->_Itemid != 99999999 ) {
			// where Itemid value is returned, do not add Itemid to url
			$row->Itemid_link = '&amp;Itemid='. $row->_Itemid;
		} else {
			// where Itemid value is NOT returned, do not add Itemid to url
			$row->Itemid_link = '';
		}	
	}

	/**
	* determines the link and `link text` of the readmore button & linked title
	*/
	function _linkInfo( &$row, &$params ) {
		global $my;
		
		$row->link_on 	= '';
		$row->link_text	= '';
		
		if ($params->get( 'readmore' ) || $params->get( 'link_titles' )) {
			if ( $params->get( 'intro_only' ) ) {
				// checks if the item is a public or registered/special item
				if ( $row->access <= $my->gid ) {
					$row->link_on = sefRelToAbs( 'index.php?option=com_content&amp;task=view&amp;id=' . $row->id . $row->Itemid_link );
					
					if ( isset($row->readmore) && @$row->readmore) {
						// text for the readmore link
						$row->link_text = _READ_MORE;
					}
				} else {
					$row->link_on = sefRelToAbs( 'index.php?option=com_registration&amp;task=register' );
					
					if ( isset($row->readmore) && @$row->readmore ) {
						// text for the readmore link if accessible only if registered
						$row->link_text	= _READ_MORE_REGISTER;
					}
				}
			}
		}
	}

}
?>