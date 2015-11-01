<?php
/**
* @version 0.8.9 $Id: eventlist.php 185 2007-06-06 15:32:09Z schlu $
* @package Eventlist
* @copyright (C) 2005 - 2007 Christoph Lukes
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

define( 'ELPATH', dirname(__FILE__) );

if (file_exists(ELPATH.'/languages/'.$mainframe->getCfg('lang').'.php')) {
   	include(ELPATH.'/languages/'.$mainframe->getCfg('lang').'.php');
} else {
    include(ELPATH.'/languages/english.php');
}

require_once( $mainframe->getPath( 'class' ) );
require_once( $mainframe->getPath( 'front_html' ) );
require_once(ELPATH.'/../../includes/pageNavigation.php');

$mainframe->addCustomHeadTag('<link type="text/css" rel="stylesheet" href="components/com_eventlist/eventlist.css" />');

$limitstart = intval( mosGetParam( $_REQUEST, 'limitstart', 0 ) );
$pop 		= intval( mosGetParam( $_REQUEST, 'pop', 0 ) );
$filter 	= intval( mosGetParam( $_POST, 'filter', 0 ) );
$func 		= mosGetParam( $_REQUEST, 'func' );
$search 	= mosGetParam( $_POST, 'search' );

	switch ($func)
	{
		case 'details':
			ShowDetails($option);
			break;

		case 'deliver':
        	showDeliverEvent($option);
        	break;

		case 'deliversend':
			DeliverSendEvent($option);
			break;

		case 'deliverloc':
    		showDeliverLocation($option);
    		break;

		case 'deliversendloc':
			deliversendloc($option);
			break;

		case 'shcatev1':
			ShowCatEvents($option, $func, $pop, $filter, $search);
			break;

		case 'shcategv1':
			ShowCatView($option, $func);
		 	break;

		case 'shcategvdet':
			ShowCatViewDet($option);
			break;

		case 'shlocevents':
			ShowlocEvents($option, $pop, $filter, $search);
			break;

		case 'sharchive':
			ShowCatEvents($option, $func, $pop, $filter, $search);
			break;

		case 'shcatarchive':
			ShowCatView($option, $func);
			break;

		case 'userregister':
			userregister($option);
			break;

		case 'delreguser':
			delreguser($option);
			break;

		case 'dayview':
			dayview($option, $pop);
			break;

		default:
			require(ELPATH.'/../../administrator/components/com_eventlist/config.eventlist.php');

			//not tested enough
			//	if ( time() % 5 == 0 ) {
					cleanup();
			//	}

			//Anzeige bestimmen
			if ( $evfrontview == 0 ) {
	 			listeventsfront($option, $pop, $filter, $search);
			}

			if ( $evfrontview == 1 ) {
	 			ShowCatView($option, $func);
			}

			if ( $evfrontview == 2 ) {
	 			ShowCatViewDet($option);
			}

			break;

	}

	function listeventsfront($option, $pop, $filter, $search)
	{
		global $database, $mainframe, $limitstart, $my, $acl;
		require(ELPATH."/../../administrator/components/com_eventlist/config.eventlist.php");

		$limit 	= intval($eventspage);
		$gid 	= intval($my->gid);


		$where = ' WHERE a.published = 1';
		$where .= ' AND c.access <= '.$gid;

		if ($search)
		{
			// clean filter variables
			$search 		= $database->getEscaped( trim( strtolower( $search ) ) );
			$filter 		= intval( $filter );

			switch ($filter)
			{
				case '1' :
					$where .= ' AND LOWER( a.titel ) LIKE "%'.$search.'%"';
					break;

				case '2' :
					$where .= ' AND LOWER( l.club ) LIKE "%'.$search.'%"';
					break;

				case '3' :
					$where .= ' AND LOWER( l.city ) LIKE "%'.$search.'%"';
					break;

				case '4' :
					$where .= ' AND LOWER( c.catname ) LIKE "%'.$search.'%"';
					break;
			}
		}

		$database->SetQuery( 'SELECT count(*)'
							. ' FROM #__eventlist_dates AS a'
							. ' LEFT JOIN #__eventlist_locate AS l ON l.id = a.locid'
							. ' LEFT JOIN #__eventlist_categories AS c ON c.id = a.catsid'
							. $where
							);
  		$total = $database->loadResult();

		echo $database->getErrorMsg();


		$pageNav = new mosPageNav( $total, $limitstart, $limit );

		//Events auslesen
				$query = 'SELECT a.id, a.dates, a.enddates, a.times, a.endtimes, a.titel, a.locid, l.club, l.city, l.url, c.catname, c.id AS catid'
						. ' FROM #__eventlist_dates AS a'
						. ' LEFT JOIN #__eventlist_locate AS l ON l.id = a.locid'
						. ' LEFT JOIN #__eventlist_categories AS c ON c.id = a.catsid'
						. $where
						. ' ORDER BY a.dates, a.times'
						;

		if ($pop) {
			$database->SetQuery($query);
		} else {
			$database->SetQuery($query, $pageNav->limitstart, $pageNav->limit);
		}
		$rows = $database->loadObjectList();

		//Link zum einliefern
		//Workaround: Administrator und Super administrator koennen Link sehen auch wenn public frontend
		$is_chef = (strtolower($my->usertype) == 'administrator' || strtolower($my->usertype) == 'super administrator' );

		//Gruppe feststellen
		$group = $acl->getAroGroup( $my->id );

		//id holen
		if (isset($group)) {
			$groupid = $group->group_id;
		} else {
			$groupid = '';
		}

    	// Prepare reading of settings out of database to pass on to the frontend
    	prepareSettings ( $idx, $layoutsettings, $layoutcontents);

		$dellink = evlist_authent::validate_user( $evdelrec, $delivereventsyes, $groupid, $is_chef, $acl );

		//uebergeben
		eventlist_HTML::listeventsfront($option, $rows, $pageNav, $dellink, $total, $idx, $layoutsettings, $layoutcontents, $search, $filter);
	}

	function showDeliverEvent($option)
	{
		global $database, $my, $acl;
		require(ELPATH.'/../../administrator/components/com_eventlist/config.eventlist.php');

		$gid = intval($my->gid);

		//Locationliste
		$query = 'SELECT id AS value, club AS text, city'
				. ' FROM #__eventlist_locate'
				. ' WHERE publishedloc = 1'
				. ' ORDER BY ordering'
				;
		$database->setQuery( $query );

		$locations = $database->loadObjectList();

		//Kategorienliste

		$query = 'SELECT id AS value, catname AS text'
				. ' FROM #__eventlist_categories'
				. ' WHERE publishedcat = 1'
				. ' AND access <= '.$gid
				. ' ORDER BY ordering'
				;
		$database->setQuery( $query );

		$categories = array();
		$categories[] = mosHTML::makeOption( '0', _ADMIN_EVENTS_SEL_CAT.' ' );
		$categories = array_merge( $categories, $database->loadObjectList() );

		//Link f�r Locationeinlieferung
		//Workaround: Administrator und Super administrator k�nnen Link sehen auch wenn public frontend
		$is_chef = (strtolower($my->usertype) == 'administrator' || strtolower($my->usertype) == 'super administrator' );

		//Gruppe feststellen
		$group = $acl->getAroGroup( $my->id );

		//id holen
		if (isset($group)) {
			$groupid = $group->group_id;
		} else {
			$groupid = '';
		}

		$dellink = evlist_authent::validate_user( $evdelrec, $delivereventsyes, $groupid, $is_chef, $acl );
		$delloclink = evlist_authent::validate_user( $locdelrec, $deliverlocsyes, $groupid, $is_chef, $acl );

		prepareSettings ( $idx, $layoutsettings, $layoutcontents);

		//prepare output
		$row->locid				= 0;
		$row->catsid			= 0;
		$row->dates				= '';
		$row->enddates			= '';
		$row->titel				= '';
		$row->times				= '';
		$row->endtimes			= '';
		$row->datdescription	= '';
		$row->registra			= 0;
		$row->unregistra		= 0;
		$row->sendername		= '';
		$row->sendermail		= '';

		//�bergeben
		eventlist_HTML::ShowDeliverEvent($option, $locations, $categories, $delloclink, $dellink, $row, $idx, $layoutsettings, $layoutcontents);
	}

	function ShowDeliverLocation($option)
	{
		global $database, $my, $acl;
		require(ELPATH."/../../administrator/components/com_eventlist/config.eventlist.php");

		//Workaround: Administrator und Super administrator k�nnen Link sehen auch wenn public frontend
		$is_chef = (strtolower($my->usertype) == 'administrator' || strtolower($my->usertype) == 'super administrator' );

		//Gruppe feststellen
		$group = $acl->getAroGroup( $my->id );

		//id holen
		if (isset($group)) {
			$groupid = $group->group_id;
		} else {
			$groupid = '';
		}

		$delloclink = evlist_authent::validate_user( $locdelrec, $deliverlocsyes, $groupid, $is_chef, $acl );

		//prepare output
		$row->club				= '';
		$row->url				= '';
		$row->street			= '';
		$row->plz				= '';
		$row->locdescription	= '';
		$row->city				= '';
		$row->country			= '';
		$row->sendernameloc		= '';
		$row->sendermailloc		= '';

		//�bergeben
		eventlist_HTML::ShowDeliverLocation($option, $delloclink, $row);
	}

	//Location speichern
	function deliversendloc($option)
	{
		global $database, $mainframe, $mosConfig_sitename, $my, $acl, $Itemid, $mosConfig_mailfrom, $mosConfig_fromname;
		require(ELPATH."/../../administrator/components/com_eventlist/config.eventlist.php");

		$is_chef = (strtolower($my->usertype) == 'editor' || strtolower($my->usertype) == 'publisher' || strtolower($my->usertype) == 'manager' || strtolower($my->usertype) == 'administrator' || strtolower($my->usertype) == 'super administrator' );

		$row = new eventlist_locate($database);

		$_POST['club'] = mosGetParam($_POST, 'club');
		$_POST['city'] = mosGetParam($_POST, 'city');
		$_POST['street'] = mosGetParam($_POST, 'street');
		$_POST['plz'] = mosGetParam($_POST, 'plz');
		$_POST['country'] = mosGetParam($_POST, 'country');

		//Bild
		$userfile2=(isset($_FILES['userfile']['tmp_name']) ? $_FILES['userfile']['tmp_name'] : "");
		$userfile_name=(isset($_FILES['userfile']['name']) ? $_FILES['userfile']['name'] : "");
		$imagesize = $_FILES['userfile']['size'];

		if (( $imageenabled == 2 ) || ( ($imageenabled == 1) && (!empty($userfile_name)) ) ) {

			$base_Dir = ELPATH.'/../../images/eventlist/location/';
			$sizelimit = $sizelimit*1024; //size limit in kb

			if (empty($userfile_name)) {
				mosRedirect("index.php?option=$option&Itemid=$Itemid", _EVENTS_IMAGEEMPT." ");
			}

			if ($imagesize > $sizelimit) {
				mosRedirect("index.php?option=$option&Itemid=$Itemid", _EVENTS_IMAGESIZEBIG." ");
			}

			$filename = split("\.", $userfile_name);

			if (eregi("[^0-9a-zA-Z_]", $filename[0])) {
				mosRedirect("index.php?option=$option&Itemid=$Itemid", _EVENTS_IMAGECHARACT." ");
			}

			if (file_exists($base_Dir.$userfile_name)) {
				mosRedirect("index.php?option=$option&Itemid=$Itemid", _EVENTS_IMAGEEXIST." ");
			}

			if ((strcasecmp(substr($userfile_name,-4),".gif")) && (strcasecmp(substr($userfile_name,-4),".jpg")) && (strcasecmp(substr($userfile_name,-4),".png")) && (strcasecmp(substr($userfile_name,-4),".bmp"))) {
				mosRedirect("index.php?option=$option&Itemid=$Itemid", _EVENTS_IMAGETYPE." ");
			}

			if (!move_uploaded_file ($_FILES['userfile']['tmp_name'],$base_Dir.$_FILES['userfile']['name']) || !mosChmod($base_Dir.$_FILES['userfile']['name'])) {
				mosRedirect("index.php?option=$option&Itemid=$Itemid", _EVENTS_IMAGEFAIL." ");
			} else {
				$file = $base_Dir.$userfile_name;

				//chmod Bild
				@chmod ($file, octdec($imagechmod));

				//Vorbereiten auf Thumbnailerstellung
				$thumbdir = $base_Dir.'small/';
				$save = $thumbdir.$userfile_name;

				if ($imageprob = 1) {
					$imageprob = TRUE;
				} else {
					$imageprob = FALSE;
				}

				if ($gddisabled == 1) {
					evlist_imgd::thumb($file, $save, $imagewidth, $imagehight, $imageprob);
				}
			}

			$_POST['locimage'] = $userfile_name ;
		}

		//Felder leer?
		if(empty($_POST['club'])) {
    	    mosRedirect("index.php?option=$option&Itemid=$Itemid", _ADMIN_EVENTS_SAVECLUB_LO." ");
		}

		if ($showcity == 1) {
			if(empty($_POST['city'])) {
       		 	mosRedirect("index.php?option=$option&Itemid=$Itemid", _ADMIN_EVENTS_SAVETOWN_LO." ");
			}
		}

		if (($showmap24 == "1") && ($showdetailsadress == "1")){
			if ((empty($_POST['street'])) || (empty($_POST['plz'])) || (empty($_POST['city'])) || (empty($_POST['country']))) {
				mosRedirect("index.php?option=$option&Itemid=$Itemid", _ADMIN_EVENTS_SAVEADRESS_LO." ");
			}
		}

		//IP+Zeit der Einlieferung holen
		$_POST['deliveriploc'] = getenv('REMOTE_ADDR');
		$_POST['deliverdateloc'] = time();

		if (!$my->id) {

			//check name
			$_POST['sendernameloc'] = strip_tags($_POST['sendernameloc']);
			$namelength = strlen($_POST['sendernameloc']);

			if ($namelength > 20) {
      			mosRedirect("index.php?option=com_eventlist&Itemid=$Itemid", _ADMIN_EVENTS_DELNAMLEN." ");
			}

			//check Email

			$_POST['sendermailloc'] = strip_tags($_POST['sendermailloc']);
			$maillength = strlen($_POST['sendermailloc']);

			if ($maillength > 40) {
    		  	mosRedirect("index.php?option=com_eventlist&Itemid=$Itemid", _ADMIN_EVENTS_DELMAILFORM." ");
			}

			if (isset($_POST['sendermailloc'])) {
				$uemaill = $_POST['sendermailloc'];
				$regExp="^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,4})$";

				if (!ereg($regExp, $uemaill)) {
					mosRedirect("index.php?option=com_eventlist&Itemid=$Itemid", _ADMIN_EVENTS_DELMAILFORM." ");
				}
			}


		} else {
			$_POST['sendernameloc'] = $my->username;
			$_POST['sendermailloc'] = $my->email;
		}


		//check URL
		if (!empty($_POST['url'])) {
			$_POST['url'] = strip_tags($_POST['url']);
			$urllength = strlen($_POST['url']);

			if ($urllength > 50) {
      			mosRedirect("index.php?option=com_eventlist&Itemid=$Itemid", _EVENTS_DELURLLOCFORM." ");
			}

			if (!preg_match( '/^(http|https):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}'
     		   .'((:[0-9]{1,5})?\/.*)?$/i' , $_POST['url'])) {
				mosRedirect("index.php?option=com_eventlist&Itemid=$Itemid", _EVENTS_DELURLLOCFORM2." ");
			}
		}

		//Strasse pr�fen
		$_POST['street'] = strip_tags($_POST['street']);
		$streetlength = strlen($_POST['street']);

		if ($streetlength > 50) {
     	 	mosRedirect("index.php?option=com_eventlist&Itemid=$Itemid", _EVENTS_DELSTREETLOCFORM." ");
		}

		//PLZ pr�fen
		$_POST['plz'] = strip_tags($_POST['plz']);
		$plzlength = strlen($_POST['plz']);

		if ($plzlength > 10) {
      		mosRedirect("index.php?option=com_eventlist&Itemid=$Itemid", _EVENTS_DELPLZLOCFORM." ");
		}

		//Stadt pr�fen
		$_POST['city'] = strip_tags($_POST['city']);
		$citylength = strlen($_POST['city']);

		if ($citylength > 50) {
      		mosRedirect("index.php?option=com_eventlist&Itemid=$Itemid", _EVENTS_DELCITYLOCFORM." ");
		}

		//Land pr�fen
		$_POST['country'] = strip_tags($_POST['country']);
		$countrylength = strlen($_POST['country']);

		if ($countrylength > 3) {
     	 	mosRedirect("index.php?option=com_eventlist&Itemid=$Itemid", _EVENTS_DELCOUNTRYLOCFORM." ");
		}

		//Locdescription pr�fen
		if (!$is_chef) {
			//locdescriptio pr�fen --> Code entfernen
			$_POST['locdescription'] = strip_tags($_POST['locdescription'], '<br />');

			//convert all linebreaks in the linux \n (Mac \r, Win \r\n)
			$_POST['locdescription'] = ereg_replace('(\r\n|\n|\r)', '\n', $_POST['locdescription']);

			//convert to <br />
			$_POST['locdescription'] = nl2br($_POST['locdescription']);

			// zu lange w�rter k�rzen
			$_POST['locdescription'] = wordwrap($_POST['locdescription'], 75, " ", 1);

			//l�nge pr�fen
			$beschnitten = strlen($_POST['locdescription']);

			if ($beschnitten > $datdesclimit) {

				// wenn zu lang datdescription k�rzen
				$_POST['locdescription'] = substr($_POST['locdescription'], 0, $datdesclimit);

				//wenn beschnitten ...[striped] dazu
				$_POST['locdescription'] = $_POST['locdescription'].'...[striped]';
			}
		}

		//Autover�ffentlichen

		//Workaround: Administrator und Super administrator k�nnen Link sehen auch wenn public frontend
		$is_chef = (strtolower($my->usertype) == 'administrator' || strtolower($my->usertype) == 'super administrator' );

		//Gruppe feststellen
		$group = $acl->getAroGroup( $my->id );

		//id holen
		if (isset($group)) {
			$groupid = $group->group_id;
		} else {
			$groupid = '';
		}

		$autopublloc = evlist_authent::validate_user( $locpubrec, $autopublocate, $groupid, $is_chef, $acl );

		if ($autopublloc) {
			$_POST['publishedloc'] = 1 ;
		} else {
			$_POST['publishedloc'] = 0 ;
		}

		// bind it to the table
		if (!$row->bind($_POST)) {
			echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
			exit();
		}

		// store it in the db
		if (!$row->store()) {
			echo "<script> alert('".$row -> getError()."'); window.history.go(-1); </script>\n";
			exit();
		}

		//Mail erzeugen
		if (($mailinform == 2) || ($mailinform == 3)) {

			$mailbody = _EVENTS_DELIVMAILLOCBOD_1." ".$_POST['sendernameloc']." \n";
			$mailbody .= " \n";
			$mailbody .= _EVENTS_DELIVMAILLOCBOD_2." ".$_POST['sendermailloc']." \n";
			$mailbody .= _EVENTS_DELIVMAILLOCBOD_3." ".$_POST['deliveriploc']." \n";
			$mailbody .= _EVENTS_DELIVMAILLOCBOD_4." ".strftime("%c",$_POST['deliverdateloc'] + ($mosConfig_offset*60*60))." \n";
			$mailbody .= " \n";
			$mailbody .= _EVENTS_DELIVMAILLOCBOD_5." ".$_POST['club']." \n";
			$mailbody .= _EVENTS_DELIVMAILLOCBOD_6." ".$_POST['url']." \n";
			$mailbody .= _EVENTS_DELIVMAILLOCBOD_7." ".$_POST['street']." \n";
			$mailbody .= _EVENTS_DELIVMAILLOCBOD_8." ".$_POST['plz']." \n";
			$mailbody .= _EVENTS_DELIVMAILLOCBOD_9." ".$_POST['city']." \n";
			$mailbody .= _EVENTS_DELIVMAILLOCBOD_10." ".$_POST['country']." \n";
			$mailbody .= " \n";
			$mailbody .= _EVENTS_DELIVMAILLOCBOD_11." ".$_POST['locdescription']." \n";

			$row->updateOrder();

			mosMail( $mosConfig_mailfrom, $mosConfig_fromname , $mailinformrec, $mosConfig_sitename._EVENTS_DELIVMAILLOCBOD_12.' ', $mailbody, 0, $mailinformrec2 );
		}
		mosRedirect("index.php?option=$option&Itemid=$Itemid&func=deliver", _ADMIN_EVENTS_SAVE_LO." ");

	}

	function ShowDetails($option)
	{
		global $database, $mainframe, $my, $Itemid;

		$did 	= mosGetParam( $_REQUEST, 'did' );

		//Query to work with Joom!Fish aliasing on all id's
		$query1 = 'SELECT a.id AS did, a.dates, a.enddates, a.titel, a.times, a.endtimes, a.datdescription, a.datimage, a.registra, a.unregistra, a.locid, a.catsid,'
					. ' l.id as lid, l.club, l.city, l.url, l.locdescription, l.locimage, l.city, l.plz, l.street, l.country,'
					. ' c.id as cid, c.catname, c.image, c.catdescription, c.access'
					. ' FROM #__eventlist_dates AS a'
					. ' LEFT JOIN #__eventlist_locate AS l ON a.locid = l.id'
					. ' LEFT JOIN #__eventlist_categories AS c ON c.id = a.catsid'
					. ' WHERE a.id = '.(int)$did
					;

		$database->SetQuery( $query1 );

    	$database->loadObject( $row );

		//Zugriff pr�fen
		if ( $row->access > $my->gid ) {
			mosRedirect('index.php?option=com_eventlist&Itemid='.$Itemid, _ADMIN_EVENTS_ACCESS_DENIED." ");
		}

		//Register holen
		$query2 = 'SELECT r.urname, r.uid'
				. ' FROM #__eventlist_register AS r'
				. ' WHERE r.rdid = '.(int)$did
				;
		$database->setQuery( $query2 );

		$registers = $database->loadObjectList();

		//usercheck
		$uid = $my->id;
		$query = 'SELECT r.urname'
				. ' FROM #__eventlist_register AS r'
				. ' WHERE r.uid = '.(int)$uid
				. ' AND r.rdid = '.(int)$did
				;
		$check = $database->setQuery( $query );
		$usercheck = $database->loadObject($check);

		//Page titel setzen
		$mainframe->setPageTitle( $row->titel );
        $mainframe->addMetaTag( 'title' , $row->titel );

		// Prepare reading of settings out of database to pass on to the frontend
		prepareSettings ( $idx, $layoutsettings, $layoutcontents);

		//�bergeben
		eventlist_HTML::ShowDetails($option, $row, $registers, $usercheck, $idx, $layoutsettings, $layoutcontents);
	}

	function DeliverSendEvent($option)
	{
		//Eingabe speichern
		global $database, $mainframe, $mosConfig_sitename, $my, $acl, $Itemid, $mosConfig_mailfrom, $mosConfig_fromname;
		require(ELPATH."/../../administrator/components/com_eventlist/config.eventlist.php");
		require_once( $mainframe->getPath( 'class' ) );

		$is_chef = (strtolower($my->usertype) == 'editor' || strtolower($my->usertype) == 'publisher' || strtolower($my->usertype) == 'manager' || strtolower($my->usertype) == 'administrator' || strtolower($my->usertype) == 'super administrator' );
		$row = new eventlist_dates($database);

		$_POST['titel'] = mosGetParam($_POST, 'titel');

		//Bild
		$userfile2=(isset($_FILES['userfile']['tmp_name']) ? $_FILES['userfile']['tmp_name'] : "");
		$userfile_name=(isset($_FILES['userfile']['name']) ? $_FILES['userfile']['name'] : "");
		$imagesize = $_FILES['userfile']['size'];

		if (( $imageenabled == 2 ) || ( ($imageenabled == 1) && (!empty($userfile_name)) ) ) {
			$base_Dir = ELPATH.'/../../images/eventlist/events/';
			$sizelimit = $sizelimit*1024; //size limit in kb

			if (empty($userfile_name)) {
				mosRedirect("index.php?option=$option&Itemid=$Itemid", _EVENTS_IMAGEEMPT." ");
			}

			if ($imagesize > $sizelimit) {
				mosRedirect("index.php?option=$option&Itemid=$Itemid", _EVENTS_IMAGESIZEBIG." ");
			}

			$filename = split("\.", $userfile_name);

			if (eregi("[^0-9a-zA-Z_]", $filename[0])) {
				mosRedirect("index.php?option=$option&Itemid=$Itemid", _EVENTS_IMAGECHARACT." ");
			}

			if (file_exists($base_Dir.$userfile_name)) {
				mosRedirect("index.php?option=$option&Itemid=$Itemid", _EVENTS_IMAGEEXIST." ");
			}

			if ((strcasecmp(substr($userfile_name,-4),".gif")) && (strcasecmp(substr($userfile_name,-4),".jpg")) && (strcasecmp(substr($userfile_name,-4),".png")) && (strcasecmp(substr($userfile_name,-4),".bmp"))) {
				mosRedirect("index.php?option=$option&Itemid=$Itemid", _EVENTS_IMAGETYPE." ");
			}

			if (!move_uploaded_file ($_FILES['userfile']['tmp_name'],$base_Dir.$_FILES['userfile']['name']) || !mosChmod($base_Dir.$_FILES['userfile']['name'])) {
				mosRedirect("index.php?option=$option&Itemid=$Itemid", _EVENTS_IMAGEFAIL." ");
			} else {
				$file = $base_Dir.$userfile_name;
				//chmod Bild
				@chmod ($file, octdec($imagechmod));
				//Vorbereiten auf Thumbnailerstellung
				$thumbdir = $base_Dir.'small/';
				$save = $thumbdir.$userfile_name ;
				if ($imageprob = 1) {
					$imageprob = TRUE;
				} else {
					$imageprob = FALSE;
				}
				if ($gddisabled == 1) {
				evlist_imgd::thumb($file, $save, $imagewidth, $imagehight, $imageprob);
				}
			}
			$_POST['datimage'] = $userfile_name ;
		}

		//IP+Zeit der Einlieferung holen
		$_POST['deliverip'] = getenv('REMOTE_ADDR');
		$_POST['deliverdate'] = time();

		//Datumsformat pr�fen
		$datum = $_POST['dates'];
		if (!preg_match("/^[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]$/", $datum)) {
	 	   		mosRedirect("index.php?option=com_eventlist&Itemid=$Itemid", _ADMIN_EVENTS_DELFORM." ");
		}

		if ($_POST['enddates']) {
			$enddatum = $_POST['enddates'];
			if (!preg_match("/^[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]$/", $enddatum)) {
	 	   		mosRedirect("index.php?option=com_eventlist&Itemid=$Itemid", _ADMIN_EVENTS_DELFORM." ");
			}
		}


		//Zeitformat pr�fen
		if (!empty($_POST['times'])) {
   			$times = $_POST['times'];
   			if (!preg_match("/^[0-2][0-9]:[0-5][0-9]$/", $times)) {
      				mosRedirect("index.php?option=com_eventlist&Itemid=$Itemid", _ADMIN_EVENTS_DELFORMT." ");
	  		}
		}

		//Endzeit pr�fen
		if ($_POST['endtimes'] != 0) {
	   			$endtimes = $_POST['endtimes'];
   			if (!preg_match("/^[0-2][0-9]:[0-5][0-9]$/", $endtimes)) {
      			mosRedirect("index2.php?option=$option&task=events", _ADMIN_EVENTS_DELFORMT." ");
	  		}
		}

		if (!$my->id) {

			//Name pr�fen
			$_POST['sendername'] = strip_tags($_POST['sendername']);
			$namelength = strlen($_POST['sendername']);
			if ($namelength > 20) {
      			mosRedirect("index.php?option=com_eventlist&Itemid=$Itemid", _ADMIN_EVENTS_DELNAMLEN." ");
			}

			//Email pr�fen
			$_POST['sendermail'] = strip_tags($_POST['sendermail']);
			$namelength = strlen($_POST['sendermail']);
			if ($namelength > 40) {
      			mosRedirect("index.php?option=com_eventlist&Itemid=$Itemid", _ADMIN_EVENTS_DELMAILFORM." ");
			}

			if (isset($_POST['sendermail'])) {
				$uemail = $_POST['sendermail'];
				$regExp="^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,4})$";
				if (!ereg($regExp, $uemail)) {
					mosRedirect("index.php?option=com_eventlist&Itemid=$Itemid", _ADMIN_EVENTS_DELMAILFORM." ");
				}
			}

		} else {
			$_POST['sendername'] = $my->username;
			$_POST['sendermail'] = $my->email;
		}


		//title pr�fen
		$_POST['title'] = strip_tags($_POST['title']);
		$titlelength = strlen($_POST['title']);
		if ($titlelength > 60) {
      		mosRedirect("index.php?option=com_eventlist&Itemid=$Itemid", _ADMIN_EVENTS_DELTITLLEN." ");
		}

		if (!$is_chef) {
			//datdescriptio pr�fen --> Code entfernen
			$_POST['datdescription'] = strip_tags($_POST['datdescription'], '<br />');

			//convert all linebreaks in the linux \n (Mac \r, Win \r\n)
			$_POST['datdescription'] = ereg_replace('(\r\n|\n|\r)', '\n', $_POST['datdescription']);

			//convert to <br />
			$_POST['datdescription'] = nl2br($_POST['datdescription']);

			// zu lange w�rter k�rzen
			$_POST['datdescription'] = wordwrap($_POST['datdescription'], 75, " ", 1);

			//l�nge pr�fen
			$beschnitten = strlen($_POST['datdescription']);
			if ($beschnitten > $datdesclimit) {

				// wenn zu lang datdescription k�rzen
				$_POST['datdescription'] = substr($_POST['datdescription'], 0, $datdesclimit);
				//wenn beschnitten ...[striped] dazu
				$_POST['datdescription'] = $_POST['datdescription'].'...[striped]';
			}
		}

		//Registrierung setzen
		switch ($showfroregistra) {
			case 0:
				$_POST['registra'] = 0;
			break;

			case 1:
				$_POST['registra'] = 1;
			break;

			case 2:
				$_POST['registra'] =  mosGetParam( $_POST, 'registra' ) ;
			break;
		}

		switch ($showfrounregistra) {
			case 0:
				$_POST['unregistra'] = 0;
			break;

			case 1:
				$_POST['unregistra'] = 1;
			break;

			case 2:
				if ( $showfroregistra >= 1 ) {
					$_POST['unregistra'] = mosGetParam( $_POST, 'unregistra' );
				} else {
					$_POST['unregistra'] = 0;
				}
			break;
		}

		//Autover�ffentlichen
		//Workaround: Administrator und Super administrator k�nnen Link sehen auch wenn public frontend
		$is_chef = (strtolower($my->usertype) == 'administrator' || strtolower($my->usertype) == 'super administrator' );

		//Gruppe feststellen
		$group = $acl->getAroGroup( $my->id );

		//id holen
		if (isset($group)) {
			$groupid = $group->group_id;
		} else {
			$groupid = '';
		}

		$autopubev = evlist_authent::validate_user( $evpubrec, $autopubl, $groupid, $is_chef, $acl );

		if ($autopubev) {
			$_POST['published'] = 1 ;
		} else {
			$_POST['published'] = 0 ;
		}

		// bind it to the table
		if (!$row->bind($_POST)) {
			echo "<script> alert('".$row -> getError()."'); window.history.go(-1); </script>\n";
			exit();
		}

		// store it in the db
		if (!$row->store()) {
			echo "<script> alert('".$row -> getError()."'); window.history.go(-1); </script>\n";
			exit();
		}
		//Mail erzeugen
		if (($mailinform == 1) || ($mailinform == 3)) {

			$mailloc = intval(mosGetParam( $_POST, 'locid' ));

			$query = 'SELECT * FROM #__eventlist_locate WHERE id = '.$mailloc;

			$database->SetQuery( $query );

			$database->loadObject($rowloc);

			$mailbody = _EVENTS_DELIVMAILBOD_1." ".$_POST['sendername']." \n";
			$mailbody .= " \n";
			$mailbody .= _EVENTS_DELIVMAILBOD_2." ".$_POST['sendermail']." \n";
			$mailbody .= _EVENTS_DELIVMAILBOD_3." ".$_POST['deliverip']." \n";
			$mailbody .= _EVENTS_DELIVMAILBOD_4." ".strftime("%c",$_POST['deliverdate'] + ($mosConfig_offset*60*60))." \n";
			$mailbody .= " \n";
			$mailbody .= _EVENTS_DELIVMAILBOD_5." ".$_POST['titel']." \n";
			$mailbody .= _EVENTS_DELIVMAILBOD_6." ".$_POST['dates']." \n";
			$mailbody .= _EVENTS_DELIVMAILBOD_7." ".$_POST['times']." \n";
			$mailbody .= _EVENTS_DELIVMAILBOD_8." ".$rowloc->club." / ".$rowloc->city." \n";
			$mailbody .= _EVENTS_DELIVMAILBOD_9." ".$_POST['datdescription']." \n";

			$row->updateOrder();

			mosMail($mosConfig_mailfrom, $mosConfig_fromname, $mailinformrec, $mosConfig_sitename._EVENTS_DELIVMAILBOD_10.' ', $mailbody, 0, $mailinformrec2);
		}

		mosRedirect('index.php?option=com_eventlist&Itemid='.$Itemid, _ADMIN_EVENTS_SAVE." ");
   		//functiondeliverevents ende

	}

	//Kategorieansicht
	function ShowCatView($option, $func)
	{
		global $database, $my, $acl, $mainframe;
		require(ELPATH."/../../administrator/components/com_eventlist/config.eventlist.php");

		$gid = $my->gid;

		//Kategorien holen
		$query = 'SELECT *'
				. ' FROM #__eventlist_categories'
				. ' WHERE publishedcat = 1'
				. ' AND access <= '.(int)$gid
				. ' ORDER BY ordering'
				;
		$database->setQuery( $query );

		$rows = $database->loadObjectList();

		//Link zum einliefern
		//Workaround: Administrator und Super administrator k�nnen Link sehen auch wenn public frontend
		$is_chef = (strtolower($my->usertype) == 'administrator' || strtolower($my->usertype) == 'super administrator' );

		//Gruppe feststellen
		$group = $acl->getAroGroup( $my->id );

		//id holen
		if (isset($group)) {
			$groupid = $group->group_id;
		} else {
			$groupid = '';
		}

		$dellink = evlist_authent::validate_user( $evdelrec, $delivereventsyes, $groupid, $is_chef, $acl );

		//�bergeben
		eventlist_HTML::ShowCatView($option, $rows, $dellink, $func);
	}

	//Kategorieansicht
	function ShowCatEvents($option, $func, $pop, $filter, $search)
	{
		global $database, $limitstart, $my, $acl, $mainframe;
		require(ELPATH."/../../administrator/components/com_eventlist/config.eventlist.php");

		//ID der Kategorie holen+saeubern
		$categid 	= mosGetParam( $_REQUEST, 'categid' );
		$gid 		= $my->gid;
		$limit 		= (int)$eventspage;

		if ($func == 'shcatev1') {
			$where = ' WHERE a.published = 1 && a.catsid = '.(int)$categid;
		} else {
			$where = ' WHERE a.published = -1 && a.catsid = '.(int)$categid;
		}

		$where .= ' AND c.access <= '.(int)$gid;

		if ($search)
		{
			// clean filter variables
			$search 		= $database->getEscaped( trim( strtolower( $search ) ) );
			$filter 		= (int)$filter;

			switch ($filter)
			{
				case '1' :
					$where .= ' AND LOWER( a.titel ) LIKE "%'.$search.'%"';
					break;

				case '2' :
					$where .= ' AND LOWER( l.club ) LIKE "%'.$search.'%"';
					break;

				case '3' :
					$where .= ' AND LOWER( l.city ) LIKE "%'.$search.'%"';
					break;

			}
		}

		$database->SetQuery( 'SELECT count(*)'
							. ' FROM #__eventlist_dates AS a'
							. ' LEFT JOIN #__eventlist_locate AS l ON l.id = a.locid'
							. ' LEFT JOIN #__eventlist_categories AS c ON c.id = a.catsid'
							. $where
							);
  		$total = $database->loadResult();

		echo $database->getErrorMsg();

		//Kategorie holen
		$queryc = 'SELECT * FROM #__eventlist_categories WHERE id = '.(int)$categid.' LIMIT 1';

		$database->setQuery( $queryc );
		$c_rows = $database->loadObjectList();


		$pageNav = new mosPageNav( $total, $limitstart, $limit );

		//Events auslesen
		$query = 'SELECT a.id, a.dates, a.enddates, a.times, a.endtimes, a.titel, a.locid, l.club, l.city, l.url, c.catname, c.id AS catid'
					. ' FROM #__eventlist_dates AS a'
					. ' LEFT JOIN #__eventlist_locate AS l ON l.id = a.locid'
					. ' LEFT JOIN #__eventlist_categories AS c ON c.id = a.catsid'
					. $where
					. ' ORDER BY a.dates, a.times'
					;

		if ($pop) {
			$database->SetQuery($query);
		} else {
			$database->SetQuery( $query, $pageNav->limitstart, $pageNav->limit );
		}

		$rows = $database->loadObjectList();

		//Link zum einliefern
		//Workaround: Administrator und Super administrator koennen Link sehen auch wenn public frontend
		$is_chef = (strtolower($my->usertype) == 'administrator' || strtolower($my->usertype) == 'super administrator' );

		//Gruppe feststellen
		$group = $acl->getAroGroup( $my->id );

		//id holen
		if (isset($group)) {
			$groupid = $group->group_id;
		} else {
			$groupid = '';
		}

		$dellink = evlist_authent::validate_user( $evdelrec, $delivereventsyes, $groupid, $is_chef, $acl );

   		// Prepare reading of settings out of database to pass on to the frontend
		prepareSettings ( $idx, $layoutsettings, $layoutcontents);

		//uebergeben
		eventlist_HTML::ShowCatEvents($option, $c_rows, $rows, $pageNav, $dellink, $func, $total, $idx, $layoutsettings, $layoutcontents, $filter, $search);
	}

	function ShowCatViewDet($option)
	{
		global $database, $my, $acl, $mainframe;
		require(ELPATH."/../../administrator/components/com_eventlist/config.eventlist.php");

		$gid = $my->gid;

		//Kategorien holen
		$query = 'SELECT *'
				. ' FROM #__eventlist_categories AS c'
				. ' WHERE c.publishedcat = 1'
				. ' AND c.access <= '.(int)$gid
				. ' ORDER BY c.ordering'
				;

		$database->setQuery( $query );
		$rows = $database->loadObjectList();

		//Link zum einliefern
		//Workaround: Administrator und Super administrator k�nnen Link sehen auch wenn public frontend
		$is_chef = (strtolower($my->usertype) == 'administrator' || strtolower($my->usertype) == 'super administrator' );

		//Gruppe feststellen
		$group = $acl->getAroGroup( $my->id );

		//id holen
		if (isset($group)) {
			$groupid = $group->group_id;
		} else {
			$groupid = '';
		}

		$dellink = evlist_authent::validate_user( $evdelrec, $delivereventsyes, $groupid, $is_chef, $acl );

		prepareSettings ( $idx, $layoutsettings, $layoutcontents);

		//�bergeben
		eventlist_HTML::ShowCatViewDet($option, $rows, $dellink, $idx, $layoutsettings, $layoutcontents);
	}

	function ShowlocEvents($option, $pop, $filter, $search)
	{
		global $database, $limitstart, $my, $acl, $mainframe;

		require(ELPATH."/../../administrator/components/com_eventlist/config.eventlist.php");

		$limit 		= (int)$eventspage ;
		$gid 		= (int)$my->gid;
		$locatid 	= mosGetParam( $_REQUEST, 'locatid' );
		$locatid 	= (int)$locatid;

		$where = ' WHERE a.published = 1 && a.locid = '.$locatid;
		$where .= ' AND c.access <= '.$gid;

		if ($search)
		{
			// clean filter variables
			$search 		= $database->getEscaped( trim( strtolower( $search ) ) );
			$filter 		= (int)$filter;

			switch ($filter)
			{
				case '1' :
					$where .= ' AND LOWER( a.titel ) LIKE "%'.$search.'%"';
					break;

				case '2' :
					$where .= ' AND LOWER( c.catname ) LIKE "%'.$search.'%"';
					break;
			}
		}

		$database->SetQuery( 'SELECT count(*)'
							. ' FROM #__eventlist_dates AS a'
							. ' LEFT JOIN #__eventlist_locate AS l ON l.id = a.locid'
							. ' LEFT JOIN #__eventlist_categories AS c ON c.id = a.catsid'
							. $where
							);
  		$total = $database->loadResult();

		echo $database->getErrorMsg();

		//Location holen
		$queryl = 'SELECT * FROM #__eventlist_locate WHERE id = '.$locatid.' LIMIT 1';

		$database->setQuery( $queryl );
		$l_rows = $database->loadObjectList();

		$pageNav = new mosPageNav( $total, $limitstart, $limit );

		//Events auslesen
		$query = 'SELECT a.id, a.dates, a.enddates, a.times, a.endtimes, a.titel, a.locid, l.club, l.city, l.url, c.catname, c.id AS catid'
				. ' FROM #__eventlist_dates AS a'
				. ' LEFT JOIN #__eventlist_locate AS l ON l.id = a.locid'
				. ' LEFT JOIN #__eventlist_categories AS c ON c.id = a.catsid'
				. $where
				. ' ORDER BY a.dates, a.times'
				;

		if ($pop) {
			$database->SetQuery($query);
		} else {
			$database->SetQuery( $query, $pageNav->limitstart, $pageNav->limit );
		}

		$rows = $database->loadObjectList();

		//Link zum einliefern
		//Workaround: Administrator und Super administrator koennen Link sehen auch wenn public frontend
		$is_chef = (strtolower($my->usertype) == 'administrator' || strtolower($my->usertype) == 'super administrator' );

		//Gruppe feststellen
		$group = $acl->getAroGroup( $my->id );

		//id holen
		if (isset($group)) {
			$groupid = $group->group_id;
		} else {
			$groupid = '';
		}

		$dellink = evlist_authent::validate_user( $evdelrec, $delivereventsyes, $groupid, $is_chef, $acl );

		prepareSettings ( $idx, $layoutsettings, $layoutcontents);

		//uebergeben
		eventlist_HTML::ShowlocEvents($option, $l_rows, $rows, $pageNav, $dellink, $total, $idx, $layoutsettings, $layoutcontents, $filter, $search);
	}

	//Registrieren
	function userregister($option)
	{

		global $database, $my, $Itemid;
		require(ELPATH.'/../../administrator/components/com_eventlist/config.eventlist.php');

		$row = new eventlist_register($database);

		// bind it to the table
		if (!$row->bind($_POST)) {
			echo "<script> alert('".$row -> getError()."'); window.history.go(-1); </script>\n";
			exit();
		}

		$row->uid = (int)$my->id;
		$row->urname = $my->username;

		$rdid = (int)$row->rdid;

		//IP+Zeit der Registrierung holen
		$row->uip 		= getenv('REMOTE_ADDR');
		$row->uregdate 	= time();

		// store it in the db
		if (!$row->store()) {
			echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
			exit();
		}
		mosRedirect('index.php?option=com_eventlist&Itemid='.$Itemid.'&func=details&did='.$rdid, _EVENTS_REGISTRA_SUCCESS." ");

	}

	function delreguser($option)
	{
		global $database, $my, $Itemid;

		$user = (int)$my->id;
		$rdid = mosGetParam( $_REQUEST, 'rdid' );

		$query = 'DELETE FROM #__eventlist_register WHERE '.(int)$rdid.' = rdid AND '.$user.' = uid';

		$database->SetQuery($query);

		if ( !$database->query() ) {
			echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
			exit();
		}

		$msg = _EVENTS_REGISTER_DEL." ";
		mosRedirect( 'index.php?option=com_eventlist&Itemid='.$Itemid.'&func=details&did='.$rdid, $msg );
  	}

	function prepareSettings ( &$idx, &$layoutsettings, &$layoutcontents)
	{
		global $database;

  	  	/**
	 	 * Prepares indexes for settings to be passes on to the presentation
	 	 * layer. This code snippet is a good candidate to make a function
	 	 * maybe even make it a global variable although might compromise
	 	 * security.
	 	 *
	 	 * @$idx Array variable holding named indexes to reference settings
	 	 */

  	  	$query1 = 'SELECT settingname FROM #__eventlist_settings';

	 	$database->SetQuery( $query1 );

    	$testrows = $database->loadObjectList();
		$idx = array();
		$i = 0;

		foreach ( $testrows as $testvalues){
			$idx[$i] = $testvalues->settingname;
			$i++;
		}

		$idx = array_flip ( $idx);
		//END prepare indexes

		/**
		* Prepare query to pass on to presentation layer
		*
		* @$layoutsettings Array variable holding non translatable layout settings
		*/

		$query2 = 'SELECT * FROM #__eventlist_settings';

    	$database->SetQuery( $query2 );
    	$layoutsettings = $database->loadObjectList();
   	 	//END query layoutsettings

    	/**
    	* Prepare query to pass on to presentation layer
    	*
    	* @$layoutcontents Array variable holding Joom!Fish translatable layout names
    	*/

    	$query3 = 'SELECT * FROM #__eventlist_settings_jfish WHERE jfid = 1';

    	$database->SetQuery( $query3 );
    	$database->loadObject( $layoutcontents);
    	//END query layoutcontents
  }

  function dayview($option, $pop)
  {
  		global $database, $mainframe, $limitstart, $my, $acl;
		require(ELPATH."/../../administrator/components/com_eventlist/config.eventlist.php");

		$day = mosGetParam( $_REQUEST, 'day' );
		$gid = intval($my->gid);
		if (!preg_match("/^[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]$/", $day)) {
	 	     mosRedirect("index.php?option=com_eventlist&Itemid=$Itemid", _ADMIN_EVENTS_DELFORM." ");
		}

		$limit = intval($eventspage);

		$query1 = 'SELECT count(*)'
				. ' FROM #__eventlist_dates AS a'
				. ' LEFT JOIN #__eventlist_categories AS c ON c.id = a.catsid'
				. ' WHERE a.published = 1'
				. ' AND c.access <= '.$gid
				. ' AND '.$day.' = a.dates'
				;

		$database->SetQuery( $query1 );

  		$total = $database->loadResult();

		echo $database->getErrorMsg();

		$pageNav = new mosPageNav( $total, $limitstart, $limit );

		//Events auslesen
		$query2 = 'SELECT a.id, a.dates, a.times, a.endtimes, a.titel, a.locid, l.club, l.city, l.url, c.catname, c.id AS catid'
				. ' FROM #__eventlist_dates AS a'
				. ' LEFT JOIN #__eventlist_locate AS l ON l.id = a.locid'
				. ' LEFT JOIN #__eventlist_categories AS c ON c.id = a.catsid'
				. ' WHERE a.published = 1'
				. ' AND c.access <= '.$gid
				. ' AND '.$day.' = a.dates'
				. ' ORDER BY a.dates, a.times'
				;

		if ($pop) {
			$database->SetQuery($query2);
		} else {
			$database->SetQuery($query2, $pageNav->limitstart, $pageNav->limit);
		}

		$rows = $database->loadObjectList();

		//Link zum einliefern
		//Workaround: Administrator und Super administrator k�nnen Link sehen auch wenn public frontend
		$is_chef = (strtolower($my->usertype) == 'administrator' || strtolower($my->usertype) == 'super administrator' );

		//Gruppe feststellen
		$group = $acl->getAroGroup( $my->id );

		//id holen
		if (isset($group)) {
			$groupid = $group->group_id;
		} else {
			$groupid = '';
		}

    	// Prepare reading of settings out of database to pass on to the frontend
    	prepareSettings ( $idx, $layoutsettings, $layoutcontents);

		$dellink = evlist_authent::validate_user( $evdelrec, $delivereventsyes, $groupid, $is_chef, $acl );

		//�bergeben
		eventlist_HTML::listeventsfront($option, $rows, $pageNav, $dellink, $total, $idx, $layoutsettings, $layoutcontents);

	}

	function cleanup()
	{
  		global $database;

  		require(ELPATH.'/../../administrator/components/com_eventlist/config.eventlist.php');

  		$nulldate = '0000-00-00';

  		//Datens�tze l�schen die �lter als $minus Tage sind
		if ($oldevent == 1) {

			$query = 'DELETE FROM #__eventlist_dates WHERE DATE_SUB(NOW(), INTERVAL '.(int)$minus.' DAY) > (IF (enddates <> '.$nulldate.', enddates, dates))';

			$database->SetQuery($query);
			$database->Query();
		}

		//Datens�tze in das Archiv verschieben die �lter als $minus Tage sind
		if ($oldevent == 2) {

			$query = 'UPDATE #__eventlist_dates SET published = -1 WHERE DATE_SUB(NOW(), INTERVAL '.(int)$minus.' DAY) > (IF (enddates <> '.$nulldate.', enddates, dates))';

			$database->SetQuery( $query );
			$database->Query();
		}
	}
?>