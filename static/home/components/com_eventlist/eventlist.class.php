<?php
/**
* @version 0.8.9 $Id: eventlist.class.php 183 2007-06-05 14:42:16Z schlu $
* @package Eventlist
* @copyright (C) 2005 - 2007 Christoph Lukes
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*/
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

class eventlist_dates extends mosDBTable {
	var $id = null;
	var $locid = null;
	var $catsid = null;
	var $dates = null;
	var $enddates = null;
	var $times = null;
	var $endtimes = null;
	var $titel = null;
	var $datdescription = null;
	var $datimage = null;
	var $sendername = null;
	var $sendermail = null;
	var $deliverip = null;
	var $deliverdate = null;
	var $published = null;
	var $registra = null;
	var $unregistra = null;
	var $checked_out = null;
	var $checked_out_time = null;

	function eventlist_dates(&$db){
		$this->mosDBTable('#__eventlist_dates', 'id', $db);
	}
}

class eventlist_locate extends mosDBTable {
	var $id = null;
	var $club = null;
	var $url = null;
	var $street = null;
	var $plz = null;
	var $city = null;
	var $country = null;
	var $locdescription = null;
	var $locimage = null;
	var $sendernameloc = null;
	var $sendermailloc = null;
	var $deliveriploc = null;
	var $deliverdateloc = null;
	var $publishedloc = null;
	var $checked_out = null;
	var $checked_out_time = null;
	var $ordering = null;

	function eventlist_locate(&$db){
		$this->mosDBTable('#__eventlist_locate', 'id', $db);
	}
}

class eventlist_categories extends mosDBTable {
	var $id = null;
	var $catname = null;
	var $catdescription = null;
	var $image = null;
	var $publishedcat = null;
	var $checked_out = null;
	var $checked_out_time = null;
	var $access = null;
	var $ordering = null;

	function eventlist_categories(&$db){
		$this->mosDBTable('#__eventlist_categories', 'id', $db);
	}
}

class eventlist_register extends mosDBTable {
	var $rid = null;
	var $rdid = null;
	var $uid = null;
	var $urname = null;
	var $uregdate = null;
	var $uip = null;

	function eventlist_register(&$db){
		$this->mosDBTable('#__eventlist_register', 'rid', $db);
	}
}

class evlist_authent {
	function validate_user ( $recurse, $level, $groupid, $is_chef, &$acl )
		{
		if ($recurse) {
         		$recursec="RECURSE";
      		} else {
         		$recursec="NO_RECURSE";
      	}

		if (( $level == 0 ) || (( $level == -1 ) && ( $groupid > 0 )) || (( $is_chef ) && ( $level != -2 ))) {
			//offen f�r alle oder benutzer ist registriert und das ist nur erforderlich
			return 1;
			//Wenn nicht jeder oder alle registrierte einliefern dann weiter pr�fen
      		} else {
				if( $groupid == $level ) {
         			//Benutzer hat die gleiche groupid wie erforderlich->erlaubt
         			return 1;
         		} else {
            		if ($recursec=='RECURSE') {
               			//Untergruppen f�r diesen level?
               			$group_childs=array();
               			$group_childs=$acl->get_group_children( $level, 'ARO', $recursec );

               				if ( is_array( $group_childs ) && count( $group_childs ) > 0) {
                  				//Untergruppen vorhanden also pr�fen ob benutzer in einer davon ist
                  				if ( in_array($groupid, $group_childs) ) {
                     				//Benutzer ist in einer->erlaubt
                     				return 1;
                  				}
               				}
            		}
         		}
		 	}
		//nix erlaubt
     	return 0;
	//ENDE funktion
	}
//ENDE CLASS Authent
}

class evlist_imgd {

	function thumb($file, $save, $width, $height, $prop = true) {
    // GD-Lib > 2.0
    // Ist $prop=TRUE, so werden die Proportionen des Bildes
    // auch im Thumbnail eingehalten

    	@unlink($save);
    	$infos = @getimagesize($file);

    	if ($prop) {
			// Proportionen erhalten
       		$iWidth = $infos[0];
        	$iHeight = $infos[1];
        	$iRatioW = $width / $iWidth;
        	$iRatioH = $height / $iHeight;
        		if ($iRatioW < $iRatioH) {
        			$iNewW = $iWidth * $iRatioW;
        			$iNewH = $iHeight * $iRatioW;
        		} else {
        			$iNewW = $iWidth * $iRatioH;
        			$iNewH = $iHeight * $iRatioH;
        		} // end if
    	} else {
        	// Strecken und Stauchen auf Gr��e
        	$iNewW = $width;
        	$iNewH = $height;
    	}

    	/*
		* Don't resize images which are smaller than thumbs
		*/
		if ($infos[0] < $width && $infos[1] < $height) {
			$iNewW = $infos[0];
			$iNewH = $infos[1];
		}

		if($infos[2] == 1) {
			/*
			* Image is typ gif
			*/
			$imgA = imagecreatefromgif($file);
			$imgB = imagecreatetruecolor($iNewW,$iNewH);
			imagecopyresampled($imgB, $imgA, 0, 0, 0, 0, $iNewW, $iNewH, $infos[0], $infos[1]);
			imagegif($imgB, $save);

		} elseif($infos[2] == 2) {
        	/*
			* Image is typ jpg
			*/
        	$imgA = imagecreatefromjpeg($file);
        	$imgB = imagecreatetruecolor($iNewW,$iNewH);
        	imagecopyresampled($imgB, $imgA, 0, 0, 0, 0, $iNewW, $iNewH, $infos[0], $infos[1]);
        	imagejpeg($imgB, $save);

    	} elseif($infos[2] == 3) {
        	/*
			* Image is typ png
			*/
        	$imgA = imagecreatefrompng($file);
        	$imgB = imagecreatetruecolor($iNewW, $iNewH);
        	imagealphablending($imgB, false);
        	imagecopyresampled($imgB, $imgA, 0, 0, 0, 0, $iNewW, $iNewH, $infos[0], $infos[1]);
        	imagesavealpha($imgB, true);
        	imagepng($imgB, $save);
    	} else {
        	return FALSE;
   		}
	}//ENDE function thumb

	function gdVersion($user_ver = 0)
	{
		if (! extension_loaded('gd')) {
			return;
		}
		static $gd_ver = 0;

		// Just accept the specified setting if it's 1.
		if ($user_ver == 1) {
			$gd_ver = 1;
			return 1;
		}
		// Use the static variable if function was called previously.
		if ($user_ver !=2 && $gd_ver > 0 ) {
			return $gd_ver;
		}
		// Use the gd_info() function if possible.
		if (function_exists('gd_info')) {
			$ver_info = gd_info();
			preg_match('/\d/', $ver_info['GD Version'], $match);
			$gd_ver = $match[0];
			return $match[0];
		}
		// If phpinfo() is disabled use a specified / fail-safe choice...
		if (preg_match('/phpinfo/', ini_get('disable_functions'))) {
			if ($user_ver == 2) {
				$gd_ver = 2;
				return 2;
			} else {
				$gd_ver = 1;
				return 1;
			}
		}
		// ...otherwise use phpinfo().
		ob_start();
		phpinfo(8);
		$info = ob_get_contents();
		ob_end_clean();
		$info = stristr($info, 'gd version');
		preg_match('/\d/', $info, $match);
		$gd_ver = $match[0];
		return $match[0];
	} // End gdVersion()
}//ENDE CLASS imgd
?>