<?php
/*
* @version 0.8.9 $Id: eventlist.html.php 227 2007-06-22 13:08:22Z schlu $
* @package Eventlist
* @copyright (C) 2005 - 2007 Christoph Lukes
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

class eventlist_HTML
{
	/**
	*
	*Ausgabe Startseite
	*
	**/
	function listeventsfront($option, &$rows, &$pageNav, $dellink, $total, $idx, $layoutsettings, $layoutcontents, $search, $filter)
	{

	global $database, $mosConfig_live_site, $Itemid, $mainframe, $params, $hide_js, $pop;
	require(ELPATH."/../../administrator/components/com_eventlist/config.eventlist.php");
	//Druckfunktion

	$params->def( 'print', !$mainframe->getCfg( 'hidePrint' ) );
	$params->def( 'icons', $mainframe->getCfg( 'icons' ) );

	if ( $pop ) {//wenn druckansicht true setzen
		$params->set( 'popup', 1 );
	}

	$print_link = $mosConfig_live_site. '/index2.php?option=com_eventlist&amp;Itemid='. $Itemid .'&amp;pop=1';

	//men?name anzeigen
	$menuname = new mosMenu( $database );
	$menuname->load($Itemid);
	$eventlisthead = $menuname->name;

	echo "<div id=\"eventlist\">"; // Einfuegen einer ID, so dass alle Elemente mit CSS bzw. Javascript angesteuert werden k�nnen

	if ($layoutsettings[ $idx['header']]->set_show == 1) {
		echo "<h5 class='componentheading'>$eventlisthead</h5>";
	}
	?>
	<table class="contentpaneopen">
		<tr>
			<td width="100%">&nbsp;</td>
				<?php mosHTML::PrintIcon( $row, $params, $hide_js, $print_link ); ?>
		</tr>
	</table>
	<?php
	//Page titel setzen
	$mainframe->setPageTitle( $eventlisthead );
    $mainframe->addMetaTag( 'title' , $eventlisthead );

	//Introtext anzeigen?
  	if ($layoutsettings[ $idx['introtext']]->set_show == 1) {

	?>

	<?php
	if (!empty($layoutcontents->introtext)) {
	  	echo "<p class=\"intro\">".stripslashes($layoutcontents->introtext)."</p>";
	}
	?>

	<?php
	}
	//Link zum events einliefern/archiv anzeigen
	if ( !$pop ) { //in druckansicht nicht darstellen
?>

		<div class="link">
			<?php
			if ($dellink == 1) {
				echo"<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=deliver')."'>"._EVENTLIST_DELIVER."</a> | ";
			}
			if ($oldevent == 2) {
				echo"<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shcatarchive')."'>"._EVENTLIST_SHARCHIVE."</a>";
			}
			?>
		</div>
	<?php
	}

 	?>

 	<form action="index.php?option=com_eventlist&amp;Itemid=<?php echo $Itemid; ?>" method="post" name="adminForm">

 	<?php if ( $showfilter ) { ?>
	<table width="<?php echo $layoutsettings[$idx['table']]->set_width; ?>" border="0" cellspacing="0" cellpadding="0">
		<tr align="right">
			<td>
			<?php echo _ADMIN_EVENTS_SEARCH_LI_EV." ";
			$filters = array();
			$filters[] = mosHTML::makeOption( '1', $layoutcontents->titlename );
			$filters[] = mosHTML::makeOption( '2', $layoutcontents->locationname );
			$filters[] = mosHTML::makeOption( '3', $layoutcontents->cityname );
			$filters[] = mosHTML::makeOption( '4', $layoutcontents->catfroname );
			$html = mosHTML::selectList( $filters, 'filter', 'size="1" class="inputbox"', 'value', 'text', $filter );
			echo $html;
			?>
			<input type="text" name="search" value="<?php echo $search;?>" class="text_area" onChange="document.adminForm.submit();" />
			</td>
		</tr>
	</table>
	<br />
	<?php } ?>

	<table width="<?php echo $layoutsettings[$idx['table']]->set_width; ?>"  border="0" cellspacing="0" cellpadding="0">
		<tr>
				<th width="<?php echo $layoutsettings[$idx['date']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->datename; ?></th>
				<?php
				if ($layoutsettings[$idx['title']]->set_show == 1) {
				?>
				<th width="<?php echo $layoutsettings[$idx['title']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->titlename; ?></th>
				<?php
				}
				//wenn width leer
				if ($layoutsettings[$idx['info']]->set_width != '') {
				?>
				<th width="<?php echo $layoutsettings[$idx['info']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->infobuttonname; ?></th>
				<?php
				}
				if ($layoutsettings[$idx['location']]->set_show == 1) {
				?>
				<th width="<?php echo $layoutsettings[$idx['location']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->locationname; ?></th>
				<?php
				}
				if ($layoutsettings[$idx['city']]->set_show == 1) {
				?>
				<th width="<?php echo $layoutsettings[$idx['city']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->cityname; ?></th>
				<?php
				}
				if ($layoutsettings[$idx['category']]->set_show == 1) {
				?>
				<th width="<?php echo $layoutsettings[$idx['category']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->catfroname; ?></th>
				<?php
				}
				?>
			</tr>
		<?php
		$k = 0;
		for ($i=0, $n=count($rows); $i < $n; $i++) {
		$row = $rows[$i];

		//versch. farbige Ausgabe
		$tabclass = array( 'sectiontableentry1', 'sectiontableentry2' );

		?>
  			<tr class="<?php echo $tabclass[$k]; ?>">
    			<td width="<?php echo $layoutsettings[ $idx['date']]->set_width; ?>">
    				<div class="date">
    				<?php
    				//Datum aus Tabelle formatieren
					$datum = strftime( $formatdate, strtotime( $row->dates ));
    				if ($row->enddates == '0000-00-00') {
						$datum = $datum;
					} else {
						$enddate 	= strftime( $formatdate, strtotime( $row->enddates ));
						$datum = $datum.' - '.$enddate;
					}
    				echo $datum;
    				?>
    				</div>
					<?php
					//Zeitabfrage
					if ($layoutsettings[$idx['time']]->set_show == 1) {

						if ($row->times != '00:00:00') {
							$zeit = strftime( $formattime, strtotime( $row->times ));

							echo '<div class="time">'.$zeit.' '.$timename;
							if ($row->endtimes != '00:00:00') {
								$endzeit = strftime( $formattime, strtotime( $row->endtimes ));
								echo ' - '.$endzeit.' '.$timename;
							}
							echo '</div>';
						}
					}
					?>
				</td>
				<?php
				//Link zu Details erzeugen
				$detaillink = sefRelToAbs( 'index.php?option=com_eventlist&amp;Itemid='. $Itemid .'&amp;func=details&amp;did='. $row->id );
				//titel
				if (($layoutsettings[$idx['title']]->set_show == 1 ) && (($showdetails == 1) || ($showdetails == 3)) ) {
				?>
					<td width="<?php echo $layoutsettings[$idx['title']]->set_width; ?>">
						<a href="<?php echo $detaillink ; ?>"> <?php echo $row->titel; ?></a>
					</td>
				<?php
				}
				if (( $layoutsettings[$idx['title']]->set_show == 1 ) && (($showdetails == 2) || ($showdetails == 0)) ) {
				?>
					<td width="<?php echo $layoutsettings[$idx['title']]->set_width; ?>">
						<?php echo $row->titel; ?>
					</td>
				<?php
				}

				//Infomation icon
				if ($layoutsettings[$idx['info']]->set_width != "") {
					if (($showdetails == 2) || ($showdetails == 3)) {
				?>
						<td align="center" width="<?php echo $layoutsettings[$idx['info']]->set_width; ?>">
							<a href="<?php echo $detaillink ; ?>"><img src="<?php echo "$mosConfig_live_site/components/com_eventlist/images/information.png"; ?>" width="16" height="16" alt="information" /></a>
						</td>
				<?php
					}
				}
				if ($layoutsettings[$idx['location']]->set_show == 1) {
				?>
					<td  width="<?php echo $layoutsettings[$idx['location']]->set_width; ?>">
				<?php
					if ($layoutsettings[$idx['location']]->set_linked == 1) {
							echo "<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shlocevents&amp;locatid='.$row->locid)."'>".$row->club."</a>";
						} else {
							echo $row->club;
						}
				?>
					</td>
				<?php
				}
				if ($layoutsettings[$idx['city']]->set_show == 1) {
				?>
					<td width="<?php echo $layoutsettings[$idx['city']]->set_width; ?>"><?php echo $row->city; ?></td>
				<?php
				}
				if ($layoutsettings[$idx['category']]->set_show == 1) {
					if ($layoutsettings[$idx['category']]->set_linked == 1) {
					?>
						<td width="<?php echo $layoutsettings[$idx['category']]->set_width; ?>">
							<?php echo "<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shcatev1&amp;categid='.$row->catid)."'>".$row->catname."</a>";?>
						</td>
					<?php
					} else {
					?>
						<td width="<?php echo $layoutsettings[$idx['category']]->set_width; ?>">
							<?php echo $row->catname; ?>
						</td>
				<?php
					}
				}
				?>
			</tr>
  		<?php $k = 1 - $k; } ?>

	</table>
	</form>
	<?php
	$page = $total - $eventspage;
	if (( $page > 0 ) && ( !$pop )) {
	?>

		<br /><br />

	<?php
			$link = "index.php?option=com_eventlist&amp;Itemid=".$Itemid;
	?>
	<div class="pagenavi">
		<?php echo $pageNav->writePagesLinks($link); ?>
  		<div><?php echo $pageNav->writePagesCounter(); ?></div>
  	</div>

	<?php
	}
	?>

		<br />
		<div class="copyright">
			EventList 0.8.9 Alpha by <a href="http://www.schlu.net" target="_blank">schlu.net </a><br /><br />
		</div>
	</div>
	<?php

	//function ListEvents ende
	}

function ShowDeliverEvent($option, &$locations, &$categories, $delloclink, $dellink, &$row, &$idx, &$layoutsettings, &$layoutcontents)
{

	global $mainframe, $Itemid, $database, $my, $params;
	require(ELPATH."/../../administrator/components/com_eventlist/config.eventlist.php");

	//Kalender holen
	if ($my->id) {
		mosCommonHTML::loadCalendar();
	}
	//pathway
	$mainframe->appendPathWay(_EVENTS_DELIVER);

	//Menüname auslesen
	$menuname = new mosMenu( $database );
	$menuname->load($Itemid);
	$eventlisthead = $menuname->name;

	//Page titel setzen
	$mainframe->setPageTitle( $eventlisthead );
    $mainframe->addMetaTag( 'title' , $eventlisthead );

	//Zugriff pr?fen
	if ($dellink == 0){
		mosRedirect('index.php?option=com_eventlist&amp;Itemid='.$Itemid, _ADMIN_EVENTS_DELIV_REDI." ");
	}
	?>

	<div id="eventlist">

	<h5 class="componentheading">
		<?php echo $eventlisthead; ?> - <?php echo _EVENTS_DELIVER." "; ?>
	</h5>

	<script language="javascript" type="text/javascript">
	function chkFormular () {
		var form = document.Eventlist;
		if (form.dates.value == "") {
    		alert("<?php echo _EVENTS_DEL_DATE_EMPT." "; ?>");
    		form.dates.focus();
    		return false;
  		} else if(!form.dates.value.match(/20[0-9]{2}-[0-1][0-9]-[0-3][0-9]/gi)) {
    		alert("<?php echo _ADMIN_EVENTS_DELFORM." "; ?>");
    		form.dates.focus();
    		return false;
    	} else if (form.enddates.value != "" && form.dates.value == "") {
			alert("<?php echo _EVENTS_DEL_DATE_EMPT." "; ?>");
			form.dates.focus();
			return false;
		} else if (form.enddates.value != "" && !form.enddates.value.match(/20[0-9]{2}-[0-1][0-9]-[0-3][0-9]/gi)) {
			alert("<?php echo _ADMIN_EVENTS_DELFORM." "; ?>");
			form.enddates.focus();
			return false;
		<?php if (!$my->id) { ?>
			} else if (form.sendername.value == "") {
    			alert("<?php echo _ADMIN_EVENTS_DELIVNAME_DESC." "; ?>");
    			form.sendername.focus();
    			return false;
  			} else if (form.sendermail.value == "") {
    			alert("<?php echo _ADMIN_EVENTS_DELIVMAIL_DESC." "; ?>");
    			form.sendermail.focus();
    			return false;
  			} else if (form.sendermail.value.indexOf("@") == -1) {
    			alert("<?php echo _ADMIN_EVENTS_DELMAILFORM." "; ?>");
    			form.sendermail.focus();
   				return false;
   		<?php } ?>
		} else if (form.times.value == "" && form.endtimes.value != "") {
			alert("<?php echo _EVENTS_DEL_TIME_EMPT." "; ?>");
			form.times.focus();
			return false;
		} else if (form.times.value != "" && !form.times.value.match(/[0-2][0-9]:[0-5][0-9]/gi)) {
			alert("<?php echo _EVENTS_DEL_TIME_FORM." "; ?>");
			form.times.focus();
			return false;
		} else if (form.endtimes.value != "" && !form.endtimes.value.match(/[0-2][0-9]:[0-5][0-9]/gi)) {
			alert("<?php echo _EVENTS_DEL_TIME_FORM." "; ?>");
			form.endtimes.focus();
			return false;
		} else if (form.titel.value == "") {
    		alert("<?php echo _EVENTS_DEL_TITEL_EMPT." "; ?>");
    		form.titel.focus();
    		return false;
  		} else if (form.catsid.value == "0") {
    		alert("<?php echo _EVENTS_DEL_CATEG_EMPT." "; ?>");
    		form.catsid.focus();
    		return false;
  		} else if (form.locid.value == "0") {
    		alert("<?php echo _EVENTS_DEL_LOCAT_EMPT." "; ?>");
    		form.locid.focus();
    		return false;
  		}
	}

	var tastendruck = false
	function rechne(restzeichen)
	{
		maximum = <?php echo $datdesclimit; ?>

		if (restzeichen.datdescription.value.length > maximum) {
        	restzeichen.datdescription.value = restzeichen.datdescription.value.substring(0, maximum)
          	links = 0
        } else {
        	links = maximum - restzeichen.datdescription.value.length
        }
 		restzeichen.zeige.value = links
	}

	function berechne(restzeichen)
   	{
  		tastendruck = true
  		rechne(restzeichen)
   	}
	</script>


	<form enctype="multipart/form-data" name="Eventlist" action="index.php" method="post" onsubmit="return chkFormular()">

	<table class="edit" cellpadding="0" cellspacing="4" border="0">
		<tr>
			<th colspan="2" class="sectiontableheader"><?php echo _ADMIN_EVENTS_HEADER_EV." "; ?></th>
		</tr>
		<?php
		if (!$my->id) {
		?>
		<tr>
          	<td><?php echo _ADMIN_EVENTS_DELIVNAME." "; ?></td>
			<td><input name="sendername" value="<?php echo $row->sendername; ?>" class="inputbox" size="35" maxlength="20"/>
				<strong><?php echo _ADMIN_EVENTS_DELIVNAME_DESC." "; ?></strong>
			</td>
		</tr>
		<tr>
			<td><?php echo _ADMIN_EVENTS_DELIVMAIL." "; ?></td>
          	<td><input name="sendermail" value="<?php echo $row->sendermail; ?>" class="inputbox" size="35" maxlength="40"/>
			  <strong><?php echo _ADMIN_EVENTS_DELIVMAIL_DESC." "; ?></strong>
			</td>
		</tr>
		<?php
		}
		?>
		<tr>
			<td><?php echo _EVENTS_CITY.": "; ?></td>
			<td>
				<script type="text/javascript">
				<?php
				//Venue grouping by city: creating Javascript city=>venues array
				//Thanks Rick

				$cities = array();
				$selected_city = '';

				foreach ($locations as $location) {
					if (!is_null($location->city)) {
						$location->city = strtoupper(substr($location->city,0,1)) . strtolower(substr($location->city,1));
						//sanitize city/venue names
					//	$location->city = str_replace(array("'","\""),array("\\\\\'","\\\\\""), $location->city);
					//	$location->text = str_replace(array("'","\""),array("\\\\\'","\\\\\""), $location->text);
						$location->city = str_replace(array("'","\""),array("",""), $location->city);
						$location->text = str_replace(array("'","\""),array("",""), $location->text);

						if (!array_key_exists($location->city,$cities))
						$cities[$location->city] = array(array('id' => $location->value, 'name' => $location->text));
						else
						$cities[$location->city][] = array('id' => $location->value, 'name' => $location->text);
						if ((int)$location->value === (int)$row->locid) {
							$selected_city = $location->city;
						}
					}
				}

				$citytext	= str_replace("+", " ", urlencode(_ADMIN_CHOOSE_CITY));	// replace the plus, because it isn't used in a URL
				$venuetext	= str_replace("+", " ", urlencode(_ADMIN_CHOOSE_A_VENUE));

				$citiesJS = "var city = new Array(
  							\"'$citytext','',true\"";
				$venuesJS = "var venue = new Array();";
				if (count($cities) > 0) {
					foreach ($cities as $city => $venues) {
					//	$city = str_replace("+", " ", urlencode($city));
						$citiesJS .= ",\n\"'$city','$city',false\"";
						$venuesJS .= "\nvenue[\"$city\"] = new Array(\"'$venuetext $city','0',true\"";
						foreach($venues as $venue) {
							$venuesJS .= ",\"'{$venue['name']}', '{$venue['id']}', false\"";
						}
						$venuesJS .= ");";
					}
				}

				$citiesJS .= ");";

				//Venue grouping by city: outputting Javascript arrays
				echo $citiesJS . "\n" . $venuesJS;
				?>

				var nullArray  =  new Array("'<?php echo str_replace("+", " ", urlencode(_ADMIN_CHOOSE_A_CITY)).""; ?>', '0', true");

				function loadCity(cityField,selected) {
					for(i=0;i<city.length;i++) {
						eval("cityField.options[i] = new Option(" + decodeURI(city[i]) + ");");
						if (cityField.options[i].value == selected)
						cityField.options[i].selected = true;
					}
					// New option, if only one city is include, this city will be selected
					if (city.length == 2) {
						cityField.options[0].selected = false;
						cityField.options[1].selected = true;
					}
				}

				function loadVenue(venueField,selected,cityField) {
					if (!cityField.options[cityField.selectedIndex].value || cityField.options[cityField.selectedIndex].value == '')
					//no city selected
					selectedVenues = nullArray;
					else
					selectedVenues = venue[cityField.options[cityField.selectedIndex].value];

					for (i=0;i<selectedVenues.length;i++) {
						eval("venueField.options[i] = new Option(" + decodeURI(selectedVenues[i]) + ");");
						if (venueField.options[i].value == selected)
						venueField.options[i].selected = true;
					}

				}

				function refreshVenue(venueField,city) {

					var selectedVenues;
					if (!city || city == '')
					selectedVenues = nullArray;
					else
					selectedVenues = venue[city];

					//make sure it has the right length
					while (venueField.options.length > selectedVenues.length) {
						venueField.options[(venueField.options.length -1)] = null;
					}
					//populate list
					for (i=0;i<selectedVenues.length;i++) {
						eval("venueField.options[i] = new Option(" + decodeURI(selectedVenues[i]) + ");");
					}
				}
				</script>

				<noscript><p><strong>Javascript must be enabled to use this form.</strong></p></noscript>

				<select name="city" size="1" onChange="refreshVenue(document.Eventlist.locid,this.options[this.selectedIndex].value)">
				</select>
				<script type="text/javascript">loadCity(document.Eventlist.city,'<?php echo $selected_city;?>');</script>

			</td>
		<tr>
			<td><?php echo _ADMIN_EVENTS_CLUB_ID." "; ?>
			</td>
			<td>
				<select name="locid" size="1">
				</select>
				<script type="text/javascript">	loadVenue(document.Eventlist.locid,'<?php echo $row->locid;?>',document.Eventlist.city);</script>
				<?php
				//Locationeinlieferung LINK
				if ( $delloclink == 1 ) {
					echo"<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=deliverloc')."' class=\"link\">"._EVENTLIST_DELIVER_LOC."</a>";
				}
				?>
				<br /><br />
			</td>
		</tr>
		<tr>
			<td><?php echo _ADMIN_EVENTS_DATE." "; ?></td>
			<td>
				<input id="dates" name="dates" value="<?php echo $row->dates; ?>" class="inputbox" size="15" maxlength="10"/>
				<?php if ($my->id) { ?>
					<input class="button" value="..." onclick="return showCalendar('dates', 'Y-m-d');" class="inputbox" type="reset"/>
				<?php }	?>
				<strong><?php echo _ADMIN_EVENTS_DATE_NOTICE." "; ?></strong>
			</td>
		</tr>
		<tr>
			<td><?php echo _ADMIN_EVENTS_ENDDATE." "; ?></td>
			<td>
				<input id="enddates" name="enddates" value="<?php echo $row->enddates; ?>" class="inputbox" size="15" maxlength="10"/>
				<?php if ($my->id) { ?>
					<input class="button" value="..." onclick="return showCalendar('enddates', 'Y-m-d');" class="inputbox" type="reset"/>
				<?php }	?>
				<strong><?php echo _ADMIN_EVENTS_DATE_NOTICE." "; ?></strong>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo _ADMIN_EVENTS_TIME." "; ?>
			</td>
			<td>
				<input name="times" value="<?php echo $row->times; ?>" class="inputbox" size="15" maxlength="8"/>
				<strong>
				<?php echo _ADMIN_EVENTS_ENDTIME_NOTICE." "; ?>
				</strong>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo _ADMIN_EVENTS_ENDTIME." "; ?>
			</td>
			<td>
				<input name="endtimes" value="<?php echo $row->endtimes; ?>" class="inputbox" size="15" maxlength="8"/>
				<strong>
				<?php echo _ADMIN_EVENTS_ENDTIME_NOTICE." "; ?>
				</strong>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo _ADMIN_EVENTS_TITEL." "; ?>
			</td>
			<td>
				<input name="titel" value="<?php echo $row->titel; ?>" class="inputbox" size="65" maxlength="60"/></td>
		</tr>
		<tr>
			<td>
				<?php echo _ADMIN_EVENTS_CAT_ID." "; ?>
			</td>
			<td>
				<?php
					$html = mosHTML::selectList( $categories, 'catsid','size="1" class="inputbox"', 'value', 'text', $row->catsid );
					echo $html;
				?>
			</td>
		</tr>
		<?php if ( $showfroregistra == 2 ) {
		?>
		<tr>
			<td><?php echo _ADMIN_EVENTS_REGISTRA." "; ?></td>
			<td>
				<?php
			  	$html = mosHTML::yesnoSelectList( 'registra', 'class="inputbox"', $row->registra );
				echo $html;
				?>
			</td>
		</tr>
		<?php if ( $showfrounregistra == 2 ) { ?>
		<tr>
			<td><?php echo _ADMIN_EVENTS_UNREGISTRA." "; ?></td>
			<td>
			<?php
			$html = mosHTML::yesnoSelectList( 'unregistra', 'class="inputbox"', $row->unregistra );
			echo $html;
			?>
			</td>
		</tr>
		  	<?php
			}//register ende
			}//abmelden ende

			if (( $imageenabled == 2 ) || ($imageenabled == 1)) {
			?>
		<tr>
			<td>
				<?php echo _ADMIN_EVENTS_IMAGEUPL." "; ?>
			</td>
			<td>
				<input name="userfile" class="inputbox" type="file" /> <strong><?php echo _ADMIN_EVENTS_SETT_IMAGESIZE." "; ?></strong> <?php echo $sizelimit; ?> KB
			</td>
		</tr>
			<?php
			}
			?>
		<tr>
			<td>
				<?php echo _ADMIN_EVENTS_DESCR_OPT." "; ?>
			</td>
			<td>
				<strong>
				<?php echo _ADMIN_EVENTS_DESCR_INTRO." "; ?>
				</strong>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<?php echo _ADMIN_EVENTS_DESCR." "; ?>
			</td>
			<td valign="top">
				<?php
				$is_chef = (strtolower($my->usertype) == 'editor' || strtolower($my->usertype) == 'publisher' || strtolower($my->usertype) == 'manager' || strtolower($my->usertype) == 'administrator' || strtolower($my->usertype) == 'super administrator' );
				if ($is_chef) {
					// parameters : areaname, content, hidden field, width, height, rows, cols
					editorArea( 'editor1',  $row->datdescription , 'datdescription', '80%;', '350', '20', '20' ) ;
				} else {
				?>
				<textarea style="width:80%;" ROWS="10" name="datdescription" class="inputbox" onkeyup="berechne(this.form)"></textarea><br />
					<?php echo _EVENTS_DELTEXTARHTML." "; ?><br />
					<input disabled value="<?php echo $datdesclimit; ?>" size="4" name="zeige" class="disable" /><?php echo _EVENTS_RESTZ." "; ?><br />
					<a href="javascript:rechne(document.Eventlist);"><?php echo _EVENTS_RESTZAKT." "; ?></a>
				<?php
				}
				?>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="send" class="inputbox"/>
			</td>
		</tr>
	</table>

	<input type="hidden" name="option" value="<?php echo $option ; ?>"/>
	<input type="hidden" name="Itemid" value="<?php echo $Itemid ; ?>"/>
	<input type="hidden" name="func" value="deliversend"/>
	</form>

		<div class="copyright">
			EventList 0.8.9 Alpha by <a href="http://www.schlu.net" target="_blank">schlu.net </a><br /><br />
		</div>
	</div>
<?php
	}//funktion showdeliverevent ende

	function ShowDetails($option, &$row, &$registers, &$usercheck, &$idx, &$layoutsettings, &$layoutcontents)
	{

		global $mainframe, $Itemid, $database, $mosConfig_live_site, $my, $params, $hide_js, $pop;
		require(ELPATH."/../../administrator/components/com_eventlist/config.eventlist.php");

		//pathway
		$mainframe->appendPathWay(_EVENTS_DETAILS);

		//Men?name auslesen
		$menuname = new mosMenu( $database );
		$menuname->load($Itemid);
		$eventlisthead = $menuname->name;

		//Wenn link deaktiviert zugriff sperren
		if ($showdetails == 0) {
			mosRedirect('index.php?option=com_eventlist&amp;Itemid='.$Itemid, _ADMIN_EVENTS_DETA_REDI." ");
		}

		//Druckfunktion
		$params->def( 'print', !$mainframe->getCfg( 'hidePrint' ) );
		$params->def( 'icons', $mainframe->getCfg( 'icons' ) );

		if ( $pop ) {
			$params->set( 'popup', 1 );
		}

		$print_link = $mosConfig_live_site. '/index2.php?option=com_eventlist&amp;Itemid='. $Itemid .'&amp;func=details&amp;did='. $row->did .'&amp;pop=1';

	echo "<div id=\"eventlist\">"; // Einfuegen einer ID, so dass alle Elemente mit CSS bzw. Javascript angesteuert werden k�nnen
	//Details ausgabe
	?>
	<table class="contentpaneopen" style="width:<?php echo $layoutsettings[$idx['table']]->set_width; ?>">
		<tr>
			<td width="100%">&nbsp;</td>
				<?php mosHTML::PrintIcon( $row, $params, $hide_js, $print_link ); ?>
		</tr>
	</table>

	<h5 class="componentheading"><?php echo $eventlisthead ; ?> - <?php echo _EVENTS_DETAILS." " ;?></h5>

	<br />

<table width="<?php echo $layoutsettings[$idx['table']]->set_width; ?>" class="details">
  		<tr>
  			<th class="sectiontableheader" colspan="3"><?php echo _EVENTS_EVENT." " ; ?></th>
  		</tr>
  		<tr>
    		<td class="details"><?php echo _EVENTS_WHEN." " ;?></td>
    		<td width="100%">
			<?php
				//Datum aus Tabelle formatieren
				$datum = strftime( $formatdate, strtotime( $row->dates ));
    			if ($row->enddates == '0000-00-00') {
					$datum = $datum;
				} else {
					$enddate 	= strftime( $formatdate, strtotime( $row->enddates ));
					$datum = $datum.' - '.$enddate;
				}
    			echo $datum;

				if (( $showtimedetails == 1) && ($row->times != '00:00:00')) {
					echo ' | ';
					$zeit = strftime( $formattime, strtotime( $row->times ));
					echo $zeit.' '.$timename;
					$endzeit = strftime( $formattime, strtotime( $row->endtimes ));
					if ($row->endtimes != '00:00:00') {
						echo ' - '.$endzeit.' '.$timename;
					}
				}
			?>
			</td>
    		<td rowspan="4" align="left">
				<?php //Zellenbereich f?r flyer
				if (!empty($row->datimage)) {
					$original = $mosConfig_live_site."/images/eventlist/events/".$row->datimage;
					$thumb = $mosConfig_live_site."/images/eventlist/events/small/".$row->datimage;
					if (file_exists(ELPATH."/../../images/eventlist/events/small/".$row->datimage)) {
						$iminfo = @getimagesize("images/eventlist/events/".$row->datimage);
						$widthev = $iminfo[0];
						$heightev = $iminfo[1];
					?>
						<a href="javascript:void(window.open('<?php echo $original; ?>','Popup','width=<?php echo $widthev; ?>,height=<?php echo $heightev; ?>,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,resizable=no'));">
						<img src="<?php echo $thumb; ?>" alt="thumb" /></a>
					<?php
					} else { ?>
						<img src="<?php echo $original; ?>" width="<?php echo $imagewidth; ?>" height="<?php echo $imagehight; ?>" alt="orginal" />
					<?php
					}
				} else {
					echo "&nbsp;";
				}
				?>
			</td>
  		</tr>

  	<?php
  	if ($showdetailstitel == 1) {
  	?>

  		<tr>
    		<td class="details"><?php echo _ADMIN_EVENTS_TITEL_LI_EV." ";  ?></td>
    		<td><?php echo $row->titel; ?></td>
  		</tr>

  	<?php
  	}
  	?>

  		<tr>
    		<td class="details"><?php echo _EVENTS_WHERE." " ;?></td>
    		<td>
			<?php
				if (( $showdetlinkclub == 1) && (!empty($row->url))) {
					if(strtolower(substr($row->url, 0, 7)) == "http://") {
           				// Wenn der Teilstring gleich "http://" ist,
           				// dann  Link ohne "http://" erzeugen
				?>
						<a href="<?php echo $row->url; ?>" target="_blank"> <?php echo $row->club; ?></a>
				<?php
					} else {
						// Wenn nicht, dann "http://" so dazu
				?>
						<a href="http://<?php echo $row->url; ?>" target="_blank"> <?php echo $row->club; ?></a>
				<?php
					}
				} else {
					echo $row->club;
				}
				?> - <?php echo $row->city; ?>
			</td>
  		</tr>
		<tr>
    		<td class="details"><?php echo _ADMIN_EVENTS_CAT_ID." " ;?></td>
    		<td>
				<?php echo "<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shcatev1&amp;categid='.$row->catsid)."'>".$row->catname."</a>";?>
			</td>
  		</tr>
		<?php
		if ($hidedetloc == 1) {
		?>
		<tr>
		  <td colspan="2">&nbsp;</td>
		  <td class="map">
		  		<?php
				//Link zu map
				switch ($showmapserv) {
					case 0:
					break;

					case 1:
  						if ($map24id != '') {
						?>
							<a href="http://link2.map24.com/?lid=<?php echo $map24id ?>&amp;maptype=JAVA&amp;width0=2000&amp;street0=<?php echo $row->street ?>&amp;zip0=<?php echo $row->plz ?>&amp;city0=<?php echo $row->city ?>&amp;country0=<?php echo $row->country ?>&amp;sym0=10280&amp;description0=<?php echo $row->club ?>" target="_blank">
							<img src="http://img.map24.com/map24/link2map24/de/show_address_7.gif" border="0" alt="Map24" /></a>
						<?php
						}
					break;

					case 2:
				?>
						<a href="http://maps.google.com/maps?q=<?php echo $row->street; ?>+<?php echo $row->city ?>+<?php echo $row->plz ?>+<?php echo $row->country ?>" title="<?php echo _EVENTS_MAP." "; ?>" target="_blank"><?php echo _EVENTS_MAP." "; ?></a>
				<?php
					break;
				}//switch ende
				?>
		  </td>
	  	</tr>
		<?php
		} //hideloc ende
		?>
  		<tr>
    		<td colspan="3">&nbsp;</td>
  		</tr>

  	<?php
	if ($showevdescription == 1) {
	?>

  		<tr>
    		<td class="sectiontableheader" colspan="3"><?php echo _EVENTS_DESC." "; ?></td>
  		</tr>
  		<tr>
    		<td colspan='3'>
				<?php
				if (($row->datdescription == "") || ($row->datdescription == "<br />")) {
					echo _EVENTS_DESCALERT." " ;
				} else {
					//execute Mambots
					$row->text = $row->datdescription;
					$row->title = $row->titel;
					global $_MAMBOTS;
					$_MAMBOTS->loadBotGroup( 'content' );
					$results = $_MAMBOTS->trigger( 'onPrepareContent', array( &$row, &$params, 0 ), true );
					echo $row->text;
				}
				?>
			</td>
  		</tr>
  		<tr>
    		<td colspan="3">&nbsp;</td>
  		</tr>
  	<?php
  	}//showevdescription ende
  	?>

  	</table>

	<?php
  	if ($hidedetloc == 0) {
  	?>
  	<table width="<?php echo $layoutsettings[$idx['table']]->set_width; ?>" class="details">
		<tr>
  			<td class="sectiontableheader" colspan="3"><?php echo _EVENTS_LOCAT." " ; ?></td>
  		</tr>
  		<tr>
  			<td class="details"><?php echo $layoutcontents->locationname; ?></td>
			<td colspan="2"><?php echo "<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shlocevents&amp;locatid='.$row->locid)."'>".$row->club."</a>"; ?></td>
  		</tr>
  		<tr>
    		<td class="details"><?php echo _EVENTS_HOMEPAGE_LO." "; ?></td>
   			<td width="100%">
				<?php
				if (($showdetlinkclub == 1) && (!empty($row->url))) {
					if(strtolower(substr($row->url, 0, 7)) == "http://") {
          				// Wenn der Teilstring gleich "http://" ist,
           				// dann  Link ohne "http://" erzeugen
						?>
						<a href="<?php echo $row->url; ?>" target="_blank"> <?php echo $row->url; ?></a>
						<?php
					} else {
						// Wenn nicht, dann "http://" so dazu
						?>
						<a href="http://<?php echo $row->url; ?>" target="_blank"> <?php echo $row->url; ?></a>
						<?php
					}
				} else {
					echo _EVENTS_HOMEPAGENO_LO." ";
				}
				?>
			</td>
    		<td rowspan="3">
				<?php //Zellenbereich f?r flyer
				if (!empty($row->locimage)) {
					$originalloc = $mosConfig_live_site."/images/eventlist/location/".$row->locimage;
					$thumbloc = $mosConfig_live_site."/images/eventlist/location/small/".$row->locimage;

					if (file_exists(ELPATH."/../../images/eventlist/location/small/".$row->locimage)) {
						$iminfoloc = @getimagesize("images/eventlist/location/".$row->locimage);
						$widthloc = $iminfoloc[0];
						$heightloc = $iminfoloc[1];
						?>
						<a href="javascript:void(window.open('<?php echo $originalloc; ?>','Popup','width=<?php echo $widthloc; ?>,height=<?php echo $heightloc; ?>,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,resizable=no'));">
						<img src="<?php echo $thumbloc; ?>" alt="thumb" /></a>
						<?php
					} else { ?>
						<img src="<?php echo $originalloc; ?>" width="<?php echo $imagewidth; ?>" height="<?php echo $imagehight; ?>" alt="orginal" />
					<?php
					}
				} else {
					echo "&nbsp;";
				}
				?>

			</td>
  		</tr>
  		<?php
  		if ($showdetailsadress == 1) {
  		?>
  		<tr>
    		<td class="details"><?php echo _ADMIN_EVENTS_CLUBSTREET_LO." "; ?></td>
    		<td><?php echo $row->street; ?></td>
  		</tr>
  		<tr>
    		<td class="details"><?php echo _ADMIN_EVENTS_CLUBPLZ_LO." "; ?></td>
    		<td><?php echo $row->plz; ?></td>
  		</tr>
  		<tr>
    		<td class="details"><?php echo _EVENTS_CITY." " ;?></td>
    		<td colspan="2"><?php echo $row->city; ?></td>
  		</tr>
  		<tr>
    		<td class="details"><?php echo _EVENTS_COUNTRY_LO." "; ?></td>
    		<td><?php echo $row->country; ?></td>
    		<td class="map">
				<?php
				//Link zu map
				switch ($showmapserv) {
					case 0:
					break;

					case 1:
  						if ($map24id != '') {
						?>
							<a href="http://link2.map24.com/?lid=<?php echo $map24id ?>&amp;maptype=JAVA&amp;width0=2000&amp;street0=<?php echo $row->street ?>&amp;zip0=<?php echo $row->plz ?>&amp;city0=<?php echo $row->city ?>&amp;country0=<?php echo $row->country ?>&amp;sym0=10280&amp;description0=<?php echo $row->club ?>" target="_blank">
							<img src="http://img.map24.com/map24/link2map24/de/show_address_7.gif" border="0" alt="Map24" /></a>
						<?php
						}
					break;

					case 2:
				?>
						<a href="http://maps.google.com/maps?q=<?php echo $row->street; ?>+<?php echo $row->city ?>+<?php echo $row->plz ?>+<?php echo $row->country ?>" title="<?php echo _EVENTS_MAP." "; ?>" target="_blank"><?php echo _EVENTS_MAP." "; ?></a>
				<?php
					break;
				}//switch ende
				?>
			</td>
  		</tr>
  		<?php
		}//showdetails ende

  		if ($showlocdescription == 1) {
		?>
  		<tr>
    		<td colspan="3">&nbsp;</td>
  		</tr>
  		<tr>
    		<td class="sectiontableheader" colspan="3"><?php echo _EVENTS_LOCDESC." " ;?></td>
  		</tr>
  		<tr>
    		<td colspan="3">
				<?php
				if (empty ($row->locdescription)) {
					echo _EVENTS_DESCALERT." " ;
				} else {
					//execute the Mambot
					$row->text = $row->locdescription;
					$row->title = $row->club;
					global $_MAMBOTS;
					$_MAMBOTS->loadBotGroup( 'content' );
					$results = $_MAMBOTS->trigger( 'onPrepareContent', array( &$row, &$params, 0 ), true );
					echo $row->text;
				}
				?>
			</td>
  		</tr>
   		<tr>
			<td colspan="3">&nbsp;</td>
  		</tr>
		<?php

		}//end showlocdescription
	?>
	</table>

	<?php

	}//end hidedetloc

  	//
  	//Registration
  	//
  	//if aktivated
  	if ($row->registra == 1) {

  	?>
  	<table width="<?php echo $layoutsettings[$idx['table']]->set_width; ?>" class="details">
  		<tr>
			<td class="sectiontableheader" colspan="3"><?php echo _EVENTS_REGISTRA_HEAD." "; ?>
			</td>
		</tr>
  		<tr>
			<td colspan="3">&nbsp;

			</td>
		</tr>
  		<tr>
			<td colspan="3">
			<div>
				<ul class="user">

  			<?php
  				foreach ($registers as $register) {
					//Wenn CB
  					if ($comunsolution == 1) {
  						$query_avatar = "SELECT avatar FROM #__comprofiler WHERE user_id='".$register->uid."' AND avatarapproved=1";
						$database->setQuery( $query_avatar );
						$pics = $database->loadObjectList();

						$thumb_path ="images/comprofiler/tn";
						$no_photo = ' alt="'.$register->urname.'" border=0';

						foreach ($pics as $pic) {
							//Avatare sollen dargestellt werden
							if (($comunoption == 2) && ($comunoption != 0)){
								//User hat avatar
								if(($pic->avatar!='') && ($register->uid!='0')) {
									echo "<li><a href='".sefRelToAbs("index.php?option=com_comprofiler&task=userProfile&user=$register->uid")."'><img src=".$thumb_path.$pic->avatar.$no_photo." alt='no photo' /><span class='username'>".$register->urname."</span></a></li>";
								//Wenn nicht
								}else {
									echo "<li><a href='".sefRelToAbs("index.php?option=com_comprofiler&task=userProfile&user=$register->uid")."'><img src=\"components/com_comprofiler/images/english/tnnophoto.jpg\" border=0 alt=\"no photo\"><span class='username'>".$register->urname."</span></a></li>";
								}
							//Wenn nicht dann nur link
							}
							if ($comunoption == 1) {
								echo "<li><a href='".sefRelToAbs("index.php?option=com_comprofiler&task=userProfile&user=$register->uid")."' class='username'>".$register->urname." </a></li>";
							}
						}
					//Wenn CB ende - Wenn nicht CB dann
					}

					if (($comunoption == 0) || ($comunsolution == 0)) {
						echo "<li>".$register->urname."</li>";
					}
				}
  			?>
  				</ul>
  			<div style="clear:both;">&nbsp;</div>
			</div>
  			</td>
  		</tr>
  		<tr>
    		<td colspan="3">&nbsp;</td>
  		</tr>
  		<tr>
			<td colspan="3">
  			<?php
				$jetzt = date("Y-m-d");
				$now = strtotime($jetzt);
				$date = strtotime($row->dates);
				$timecheck = $now - $date;
				if ($timecheck <= 0) {
  					if ($my->id) {
  						if (!$usercheck) {
			?>
							<form name="Eventlist" action="index.php" method="post">
							<input type="hidden" name="option" value="<?php echo $option ; ?>"/>
							<input type="hidden" name="Itemid" value="<?php echo $Itemid ; ?>"/>
							<input type="hidden" name="rdid" value="<?php echo $row->did ; ?>"/>
							<input type="hidden" name="func" value="userregister"/>
							<?php echo _EVENTS_REGISTRA_REG." "; ?>
							<input type="checkbox" name="reg_check" onClick="check(this, document.Eventlist.senden)" class="inputbox"/>
							<br /><br />
							<input type="submit" name="senden" value="<?php echo _EVENTS_REGISTRA_BUTTON." "; ?>" disabled class="disable"/>
							</form>

							<script language="JavaScript">
								function check(checkbox, senden) {
									if(checkbox.checked==true){
										senden.disabled = false;
									} else {
										senden.disabled = true;
									}
								}
							</script>
			<?php
						} else {
							if ($row->unregistra == 0) {
								echo _EVENTS_REGISTRA_ALLRE." ";
							} else {
							?>
							<form name="Eventlist" action="index.php" method="post">
							<input type="hidden" name="option" value="<?php echo $option ; ?>"/>
							<input type="hidden" name="Itemid" value="<?php echo $Itemid ; ?>"/>
							<input type="hidden" name="rdid" value="<?php echo $row->did ; ?>"/>
							<input type="hidden" name="func" value="delreguser"/>
							<?php echo _EVENTS_REGISTRA_UNREG." "; ?>
							<input type="checkbox" name="reg_check" onClick="check(this, document.Eventlist.senden)" class="inputbox"/>
							<br /><br />
							<input type="submit" name="senden" value="<?php echo _EVENTS_REGISTRA_BUTTON_UNREG." "; ?>" disabled class="disable"/>
							</form>

							<script language="JavaScript">
								function check(checkbox, senden) {
									if(checkbox.checked==true){
										senden.disabled = false;
									} else {
										senden.disabled = true;
									}
								}
							</script>
							<?php
							}//ende unregistra
						}//ende usercheck
					} else {
						echo _EVENTS_REGISTRA_LOGIN." ";
					}//ende my->id
				} else {
					echo _EVENTS_REGISTRA_TOLATE." ";
				}//ende timecheck
	?>
  			</td>
  		</tr>
	</table>
	<?php
  	}
	?>

	<br />
	<div align="center"><?php
		$back 	= $params->get('back_button', $mainframe->getCfg('back_button'));
		$params->set('back_button', $back);
		mosHTML::BackButton( $params );
		?>
	</div>

	<div class="copyright">
		EventList 0.8.9 Alpha by <a href="http://www.schlu.net" target="_blank">schlu.net </a>
	</div>


	</div>
	<?php

	}//funktion showDetails ende

function ShowDeliverLocation($option, $delloclink, &$row)
	{
	global $mainframe, $Itemid, $database, $my, $params;
	require(ELPATH."/../../administrator/components/com_eventlist/config.eventlist.php");

	//pathway
	$mainframe->appendPathWay(_EVENTS_DELIVER_LOC);

	//Men?name auslesen
	$menuname = new mosMenu( $database );
	$menuname->load($Itemid);
	$eventlisthead = $menuname->name;

	//Page titel setzen
	$mainframe->setPageTitle( $eventlisthead );
    $mainframe->addMetaTag( 'title' , $eventlisthead );

	//Zugriff pr?fen
	if ($delloclink == 0){
		mosRedirect('index.php?option=com_eventlist&amp;Itemid='.$Itemid, _ADMIN_EVENTS_DELIV_REDI." ");
	}
	?>
	<div id="eventlist">
		<h5 class="componentheading">
		<?php echo $eventlisthead ; ?> - <?php echo _EVENTS_DELIVER_LOC." "; ?>
		</h5>

		<script language="javascript" type="text/javascript">
		function chkFormular () {
			var form = document.Eventlist;

			if (form.club.value == "") {
    			alert("<?php echo _ADMIN_EVENTS_SAVECLUB_LO." "; ?>");
   	 			form.club.focus();
    			return false;
    		<?php if (!$my->id) { ?>
  				} else if (form.sendernameloc.value == "") {
    				alert("<?php echo _ADMIN_EVENTS_DELIVNAME_DESC." "; ?>");
    				form.sendernameloc.focus();
    				return false;
  				} else if (form.sendermailloc.value == "") {
    				alert("<?php echo _ADMIN_EVENTS_DELIVMAIL_DESC." "; ?>");
    				form.sendermailloc.focus();
    				return false;
  				}else if (form.sendermailloc.value.indexOf("@") == -1) {
    				alert("<?php echo _ADMIN_EVENTS_DELMAILFORM." "; ?>");
    				form.sendermailloc.focus();
   					return false;
   			<?php } ?>
  			} else if (form.street.value == "") {
    			alert("<?php echo _EVENTS_DEL_LOC_STREET_EMPT." "; ?>");
    			form.street.focus();
    			return false;
  			} else if (form.plz.value == "") {
    			alert("<?php echo _EVENTS_DEL_LOC_PLZ_EMPT." "; ?>");
    			form.plz.focus();
    			return false;
  			}else if (form.city.value == "") {
    			alert("<?php echo _ADMIN_EVENTS_SAVETOWN_LO." "; ?>");
    			form.city.focus();
    			return false;
  			}else if (form.country.value == "") {
    			alert("<?php echo _EVENTS_DEL_LOC_COUNTRY_EMPT." "; ?>");
    			form.country.focus();
    			return false;
  			}
		}

		var tastendruck = false
		function rechne(restzeichen)
		{
			maximum = <?php echo $datdesclimit; ?>

			if (restzeichen.locdescription.value.length > maximum) {
          		restzeichen.locdescription.value = restzeichen.locdescription.value.substring(0, maximum)
          		links = 0
          	} else {
        		links = maximum - restzeichen.locdescription.value.length
         	}
 			restzeichen.zeige.value = links
  		}

		function berechne(restzeichen)
   		{
  			tastendruck = true
  			rechne(restzeichen)
  		}
		</script>
		<form enctype="multipart/form-data" name="Eventlist" action="index.php" method="post" onsubmit="return chkFormular()">
		<table class="edit">
  			<tr>
    			<th colspan="2" class="sectiontableheader"><?php echo _ADMIN_EVENTS_HEADER_LO." "; ?></th>
  			</tr>
			<?php
			if ($my->id == 0) {
		   	?>
		   	<tr>
          	  	<td><?php echo _ADMIN_EVENTS_DELIVNAME." "; ?></td>
          	  	<td><input name="sendernameloc" value="<?php echo $row->sendernameloc; ?>" class="inputbox" size="35" maxlength="20"/>
			  		<strong><?php echo _ADMIN_EVENTS_DELIVNAME_DESC." "; ?></strong>
				</td>
       	  	</tr>
		  	<tr>
          	  	<td><?php echo _ADMIN_EVENTS_DELIVMAIL." "; ?></td>
          	  	<td><input name="sendermailloc" value="<?php echo $row->sendermailloc; ?>" class="inputbox" size="35" maxlength="40"/>
			  		<strong><?php echo _ADMIN_EVENTS_DELIVMAIL_DESC." "; ?></strong>
				</td>
       	  	</tr>
		  	<?php
			}
			?>
  			<tr>
    			<td><?php echo _ADMIN_EVENTS_CLUB_LO." "; ?></td>
    			<td><input name="club" value="<?php echo $row->club; ?>" class="inputbox" size="55" maxlength="50"/></td>
  			</tr>
  			<tr>
    			<td><?php echo _ADMIN_EVENTS_CLUBHOME_LO." "; ?></td>
    			<td><input name="url" value="<?php echo $row->url; ?>" class="inputbox" size="55" maxlength="50"/>
    			</td>
  			</tr>
  			<tr>
  			  	<td>&nbsp;</td>
  			  	<td><strong><?php echo _ADMIN_EVENTS_CLUBHOME_NOTICE_LO." "; ?></strong></td>
		  	</tr>
  			<tr>
  				<td><?php echo _ADMIN_EVENTS_CLUBSTREET_LO." "; ?></td>
				<td><input name="street" value="<?php echo $row->street; ?>" size="55" class="inputbox" maxlength="50"/></td>
		  	</tr>
  			<tr>
  			  	<td><?php echo _ADMIN_EVENTS_CLUBPLZ_LO." "; ?></td>
  			  	<td><input name="plz" value="<?php echo $row->plz; ?>" size="15" class="inputbox" maxlength="10"/></td>
		  	</tr>
  			<tr>
  				<td><?php echo _ADMIN_EVENTS_CITY_LO." "; ?></td>
  				<td><input name="city" value="<?php echo $row->city; ?>" size="55" class="inputbox" maxlength="50"/>
				</td>
  			</tr>
  			<tr>
  			  	<td><?php echo _ADMIN_EVENTS_CLUBCOUNTRY_LO." "; ?></td>
  			  	<td>
					<input name="country" value="<?php echo $row->country; ?>" class="inputbox" size="4" maxlength="3"/>
  			  		<br /><br />
				</td>
		  	</tr>
			<?php
			if (( $imageenabled == 2 ) || ($imageenabled == 1)) {
			?>
		   	<tr>
  			  	<td><?php echo _ADMIN_EVENTS_IMAGEUPL." "; ?></td>
  			  	<td>
					<input name="userfile" class="inputbox" type="file" /> <strong><?php echo _ADMIN_EVENTS_SETT_IMAGESIZE." "; ?></strong> <?php echo $sizelimit; ?> kb
  			  		<br /><br />
				</td>
		  	</tr>
			<?php
			}
			?>
		  	<tr>
				<td colspan="2"><?php //echo _ADMIN_EVENTS_OPTIONAL_LO." "; ?></td>
		  	</tr>
			<tr>
  				<td>
				</td>
  				<td>
					<strong><?php echo _ADMIN_EVENTS_DESCR_INTRO_LO." "; ?></strong>
				</td>
  			</tr>
			<tr>
  				<td valign="top"><?php echo _ADMIN_EVENTS_DESCR_LO." "; ?></td>
  				<td valign="top">
				<?php
					$is_chef = (strtolower($my->usertype) == 'editor' || strtolower($my->usertype) == 'publisher' || strtolower($my->usertype) == 'manager' || strtolower($my->usertype) == 'administrator' || strtolower($my->usertype) == 'super administrator' );
					if ($is_chef) {
					// parameters : areaname, content, hidden field, width, height, rows, cols
					editorArea( 'editor1',  $row->locdescription , 'locdescription', '80%;', '350', '20', '20' ) ;
					} else {
				?>
						<textarea style="width:80%;" ROWS="10" name="locdescription" class="inputbox" onkeyup="berechne(this.form)"></textarea><br />
						<?php echo _EVENTS_DELTEXTARHTML." "; ?><br />
						<input disabled value="<?php echo $datdesclimit; ?>" size="4" name="zeige" class="disable"/><?php echo _EVENTS_RESTZ." "; ?><br />
						<a href="javascript:rechne(document.Eventlist);"><?php echo _EVENTS_RESTZAKT." "; ?></a>
				<?php
					}
				?>
				</td>
  			</tr>
			<tr>
            	<td colspan="2" align="center"><input type="submit" name="send" class="inputbox"/></td>
           </tr>
		</table>
		<input type="hidden" name="option" value="<?php echo $option ; ?>"/>
		<input type="hidden" name="Itemid" value="<?php echo $Itemid ; ?>"/>
		<input type="hidden" name="func" value="deliversendloc"/>
		</form>

		<div class="copyright">
			EventList 0.8.9 Alpha by <a href="http://www.schlu.net" target="_blank">schlu.net </a><br /><br />
		</div>
	</div>

	<?php

	}//funktion showDeliverLocation ende

function ShowCatView($option, &$rows, $dellink, $func)
	{
	global $database, $Itemid, $mosConfig_live_site, $mainframe, $params, $hide_js, $pop, $acl, $my;
	require(ELPATH."/../../administrator/components/com_eventlist/config.eventlist.php");

	//men?name anzeigen
	$menuname = new mosMenu( $database );
	$menuname->load($Itemid);
	$eventlisthead = $menuname->name;

	//Page titel setzen
	$mainframe->setPageTitle( $eventlisthead );
    $mainframe->addMetaTag( 'title' , $eventlisthead );

		//Druckfunktion
	$params->def( 'print', !$mainframe->getCfg( 'hidePrint' ) );
	$params->def( 'icons', $mainframe->getCfg( 'icons' ) );

	if ( $pop ) {
		$params->set( 'popup', 1 );
	}

	$print_link = $mosConfig_live_site. '/index2.php?option=com_eventlist&amp;Itemid='. $Itemid .'&amp;pop=1';
	echo "<div id=\"eventlist\">"; // Einfuegen einer ID, so dass alle Elemente mit CSS bzw. Javascript angesteuert werden k�nnen

	if ( !$pop ) {

	if ($func == "shcatarchive") {
		$func = "sharchive";
	}
		if (($dellink == 1) || ($func == "sharchive") || ($oldevent == 2)) {
	?>

	<div class="link">
			<?php
			if ($dellink == 1) {
				echo"<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=deliver')."'>"._EVENTLIST_DELIVER."</a> | ";
			}
			if ($func == "sharchive") {
				echo"<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid)."'>"._EVENTLIST_CATVIEW1."</a>";
			}
			if (($oldevent == 2) && ($func != "sharchive")){
				echo"<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shcatarchive')."'>"._EVENTLIST_SHARCHIVE."</a>";
			}
			?>
	</div>
	<?php
		}
	}//if pop ende
	?>
	<table class="contentpaneopen" style="width:<?php echo $layoutsettings[$idx['table']]->set_width; ?>">
		<tr>
			<td width="100%">&nbsp;</td>
				<?php mosHTML::PrintIcon( $row, $params, $hide_js, $print_link ); ?>
		</tr>
	</table>

	<?php
		$k = 0;
		for ($i=0, $n=count($rows); $i < $n; $i++) {
		$row = $rows[$i];
	?>
	<div class="category">


    <?php
	echo "<h5 class=\"componentheading\">".$eventlisthead." - ".$row->catname."</h5>";
	if ($row->image != '') {
		echo "\t\n<div class=\"image\"><a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shcatev1&amp;categid='.$row->id)."'><img src='".$mosConfig_live_site."/images/stories/".$row->image."' name='image' width='".$imagewidth."' height='".$imagehight."' border='0' alt='image' /></a></div>\n";
	}
	//Anzahl Events in Kategorie holen
	if ($func == "sharchive") {
			$database->SetQuery( "SELECT count(*)"
							   . "\nFROM #__eventlist_dates"
							   . "\nWHERE published = -1 && catsid = $row->id"
								);
  			$total = $database->loadResult();
	} else {
			$database->SetQuery( "SELECT count(*)"
							   . "\nFROM #__eventlist_dates"
							   . "\nWHERE published = 1 && catsid = $row->id"
							);
  			$total = $database->loadResult();
	}

	if (!empty($row->catdescription)) {
		echo "<p>".$row->catdescription."</p>";
	}

	echo _EVENTLIST_CATVIEWCOUNTEV." ";

	if ($func == "sharchive") {
		echo "<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=sharchive&amp;categid='.$row->id)."'>". $total."</a>";
	} else {
		echo "<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shcatev1&amp;categid='.$row->id)."'>". $total."</a>";
	}

	echo "<p>";

	if ($func == "sharchive") {
			echo "<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=sharchive&amp;categid='.$row->id)."'>"._EVENTLIST_SHARCHIVE."</a>";
	} else {
			echo "<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shcatev1&amp;categid='.$row->id)."'>"._EVENTLIST_CATVIEW1."</a>";
	}
	?></p>
	</div>

	<div class="clear"></div>

	<?php
	$k = 1 - $k; }
	?>

	<div class="clear"></div>

		<div class="copyright">
			EventList 0.8.9 Alpha by <a href="http://www.schlu.net" target="_blank">schlu.net </a><br /><br />
		</div>
	</div>
	<?php

	}//funktion ShowCatView ende

function ShowCatEvents($option, &$c_rows, &$rows, &$pageNav, $dellink, $func, $total, &$idx, &$layoutsettings, &$layoutcontents, $filter, $search)
{
	global $database, $Itemid, $mosConfig_live_site, $mainframe, $params, $hide_js, $pop, $params;
	require(ELPATH."/../../administrator/components/com_eventlist/config.eventlist.php");

	//men?name anzeigen
	$menuname = new mosMenu( $database );
	$menuname->load($Itemid);
	$eventlisthead = $menuname->name;

	//Page titel setzen
	$mainframe->setPageTitle( $eventlisthead );
    $mainframe->addMetaTag( 'title' , $eventlisthead );

	//Druckfunktion
	$params->def( 'print', !$mainframe->getCfg( 'hidePrint' ) );
	$params->def( 'icons', $mainframe->getCfg( 'icons' ) );

	if ( $pop ) {
		$params->set( 'popup', 1 );
	}

	$print_link = $mosConfig_live_site. '/index2.php?option=com_eventlist&amp;Itemid='. $Itemid .'&amp;func=shcatev1&amp;categid='. $c_rows[0]->id .'&amp;pop=1';

	echo "<div id=\"eventlist\">"; // Einfuegen einer ID, so dass alle Elemente mit CSS bzw. Javascript angesteuert werden k�nnen
	?>
		<table class="contentpaneopen" style="width:<?php echo $layoutsettings[$idx['table']]->set_width; ?>">
			<tr>
				<td width="100%">&nbsp;</td>
					<?php mosHTML::PrintIcon( $row, $params, $hide_js, $print_link ); ?>
			</tr>
		</table>

	<?php
	if ( !$pop ) {
	?>
	<div class="link">
	<?php
			if ($dellink == 1) {
				echo"<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=deliver')."'>"._EVENTLIST_DELIVER."</a>";
			}
	?>
	</div>
	<?php
	}
	?>

	<div class="category">

		<h5 class="componentheading"><?php echo "$eventlisthead - ".$c_rows[0]->catname; ?></h5>
				<?php
				if ($c_rows[0]->image != '') {
				?>
     		    	<div class="image"><img src="<?php echo $mosConfig_live_site."/images/stories/".$c_rows[0]->image ; ?>" name="image" width="<?php echo $imagewidth; ?>" height="<?php echo $imagehight; ?>" border="0" alt="image" /></div>
				<?php
				} else {
					echo "&nbsp;";
				}

				if (!empty($c_rows[0]->catdescription)) {
					echo "<p>".$c_rows[0]->catdescription."</p>";
				}
				?>
   	</div>

	<div class="clear"></div>

	<br />

	<form action="index.php?option=com_eventlist&amp;Itemid=<?php echo $Itemid; ?>&amp;func=<?php echo $func; ?>&amp;categid=<?php echo $c_rows[0]->id; ?>" method="post" name="adminForm">

	<?php if ( $showfilter ) { ?>
	<table width="<?php echo $layoutsettings[$idx['table']]->set_width; ?>" border="0" cellspacing="0" cellpadding="0">
		<tr align="right">
			<td>
			<?php echo _ADMIN_EVENTS_SEARCH_LI_EV." ";
			$filters = array();
			$filters[] = mosHTML::makeOption( '1', $layoutcontents->titlename );
			$filters[] = mosHTML::makeOption( '2', $layoutcontents->locationname );
			$filters[] = mosHTML::makeOption( '3', $layoutcontents->cityname );
			$html = mosHTML::selectList( $filters, 'filter', 'size="1" class="inputbox"', 'value', 'text', $filter );
			echo $html;
			?>
			<input type="text" name="search" value="<?php echo $search;?>" class="text_area" onChange="document.adminForm.submit();" />
			</td>
		</tr>
	</table>
	<br />
	<?php } ?>
		<table width="<?php echo $layoutsettings[ $idx['table']]->set_width; ?>" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<th width="<?php echo $layoutsettings[$idx['date']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->datename; ?></th>
				<?php
				if ($layoutsettings[ $idx['title']]->set_show == 1) {
				?>
				<th width="<?php echo $layoutsettings[ $idx['title']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->titlename; ?></th>
				<?php
				}
				//designsache
				if ($layoutsettings[ $idx['info']]->set_width != '') {
				?>
				<th width="<?php echo $layoutsettings[ $idx['info']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->infobuttonname; ?></th>
				<?php
				}
				if ($layoutsettings[ $idx['location']]->set_show == 1) {
				?>
				<th width="<?php echo $layoutsettings[ $idx['location']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->locationname; ?></th>
				<?php
				}
				if ($layoutsettings[ $idx['city']]->set_show == 1) {
				?>
				<th width="<?php echo $layoutsettings[ $idx['city']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->cityname; ?></th>
				<?php
				}
				if ($layoutsettings[ $idx['category']]->set_show == 1) {
				?>
				<th width="<?php echo $layoutsettings[ $idx['category']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->catfroname; ?></th>
				<?php
				}
				?>
			</tr>
	<?php
		$k = 0;
		for ($i=0, $n=count($rows); $i < $n; $i++) {
		$row = $rows[$i];

		//versch. farbige Ausgabe
		$tabclass = array( 'sectiontableentry1', 'sectiontableentry2' );

		?>
  			<tr class="<?php echo $tabclass[$k]; ?>">
    			<td width="<?php echo $layoutsettings[ $idx['date']]->set_width; ?>">
    			    <div class="date">
    				<?php
    				//Datum aus Tabelle formatieren
					$datum = strftime( $formatdate, strtotime( $row->dates ));
    				if ($row->enddates == '0000-00-00') {
						$datum = $datum;
					} else {
						$enddate 	= strftime( $formatdate, strtotime( $row->enddates ));
						$datum = $datum.' - '.$enddate;
					}
    				echo $datum;
    				?>
    				</div>
					<?php
					//Zeitabfrage
					if ($layoutsettings[$idx['time']]->set_show == 1) {

						if ($row->times != '00:00:00') {
							$zeit = strftime( $formattime, strtotime( $row->times ));

							echo '<div class="time">'.$zeit.' '.$timename;
							if ($row->endtimes != '00:00:00') {
								$endzeit = strftime( $formattime, strtotime( $row->endtimes ));
								echo ' - '.$endzeit.' '.$timename;
							}
							echo '</div>';
						}
					}
					?>
				</td>
				<?php
				//Link zu Details erzeugen
				$detaillink = sefRelToAbs( 'index.php?option=com_eventlist&amp;Itemid='. $Itemid .'&amp;func=details&amp;did='. $row->id );
				//titel
				if (($layoutsettings[ $idx['title']]->set_show == 1 ) && (($showdetails == 1) || ($showdetails == 3)) ) {
				?>
				<td width="<?php echo $layoutsettings[ $idx['title']]->set_width; ?>"><a href="<?php echo $detaillink ; ?>"> <?php echo $row->titel; ?></a></td>
				<?php
				}
				if (( $layoutsettings[ $idx['title']]->set_show == 1 ) && (($showdetails == 2) || ($showdetails == 0)) ) {
				?>
				<td width="<?php echo $layoutsettings[ $idx['title']]->set_width; ?>"><?php echo $row->titel; ?></td>
				<?php
				}

				//Infomation icon
				if ($layoutsettings[$idx['info']]->set_width != '') {
					if (($showdetails == 2) || ($showdetails == 3)) {
					?>
						<td width="<?php echo $layoutsettings[ $idx['info']]->set_width; ?>" align="center">
							<a href="<?php echo $detaillink ; ?>"><img src="<?php echo "$mosConfig_live_site/components/com_eventlist/images/information.png"; ?>" width="16" height="16" alt="information"/></a>
						</td>
					<?php
					}
				}
				if ($layoutsettings[ $idx['location']]->set_show == 1) {
				?>
				<td width="<?php echo $layoutsettings[ $idx['location']]->set_width; ?>">
				<?php
				if ($layoutsettings[ $idx['location']]->set_show == 1) {
					echo "<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shlocevents&amp;locatid='.$row->locid)."'>".$row->club."</a>";
				} else {
					echo $row->club;
				}
				?>
				</td>
				<?php
				}
				if ($layoutsettings[ $idx['city']]->set_show == 1) {
				?>
				<td width="<?php echo $layoutsettings[ $idx['city']]->set_width; ?>"><?php echo $row->city; ?></td>
				<?php
				}
				if ($layoutsettings[ $idx['category']]->set_show == 1) {
					if ($layoutsettings[ $idx['category']]->set_linked == 1) {
					?>
						<td width="<?php echo $layoutsettings[ $idx['category']]->set_width; ?>">
						<?php echo "<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shcatev1&amp;categid='.$row->catid)."'>".$row->catname."</a>";?>
						</td>
					<?php
					} else {
					?>
						<td width="<?php echo $layoutsettings[ $idx['category']]->set_width; ?>"><?php echo $row->catname; ?></td>
				<?php
					}
				}
				?>
			</tr>
		<?php
		$k = 1 - $k; }
		?>
		</table>
		</form>


		<?php
		$page = $total - $eventspage;
		if (( $page > 0 ) && ( !$pop )) {
		?>
			<br />
		<?php
			if ($func == "sharchive") {
				$link = "index.php?option=com_eventlist&amp;Itemid=".$Itemid."&amp;func=sharchive&amp;categid=".$row->catid;
			} else {
				$link = "index.php?option=com_eventlist&amp;Itemid=".$Itemid."&amp;func=shcatev1&amp;categid=".$row->catid;
			}
		?>

		<div class="pagenavi">
		<?php echo $pageNav->writePagesLinks($link); ?>
  		<div><?php echo $pageNav->writePagesCounter(); ?></div>
  		</div>

		<?php
		}//if page > 0 ende
		?>
		<br />
		<div class="copyright">EventList 0.8.9 Alpha by <a href="http://www.schlu.net" target="_blank">schlu.net </a>
		<br />
		<?php
			$back 	= $params->get('back_button', $mainframe->getCfg('back_button'));
			$params->set('back_button', $back);
			mosHTML::BackButton( $params );
		?>
		<br/>
		</div>
	</div>
	<?php
	}//funktion ShowCatEvents ende

	function ShowCatViewDet($option, &$rows, $dellink, &$idx, &$layoutsettings, &$layoutcontents)
	{
	global $database, $Itemid, $mosConfig_live_site, $mainframe, $params, $hide_js, $pop, $my;
	require(ELPATH."/../../administrator/components/com_eventlist/config.eventlist.php");

	//men?name anzeigen
	$menuname = new mosMenu( $database );
	$menuname->load($Itemid);
	$eventlisthead = $menuname->name;

	//Page titel setzen
	$mainframe->setPageTitle( $eventlisthead );
    $mainframe->addMetaTag( 'title' , $eventlisthead );

	//Druckfunktion
	$params->def( 'print', !$mainframe->getCfg( 'hidePrint' ) );
	$params->def( 'icons', $mainframe->getCfg( 'icons' ) );

	if ( $pop ) {
		$params->set( 'popup', 1 );
	}

	$print_link = $mosConfig_live_site. '/index2.php?option=com_eventlist&amp;Itemid='. $Itemid .'&amp;pop=1';
	echo "<div id=\"eventlist\">"; // Einfuegen einer ID, so dass alle Elemente mit CSS bzw. Javascript angesteuert werden k�nnen
	?>
		<table class="contentpaneopen" style="width:<?php echo $layoutsettings[$idx['table']]->set_width; ?>">
			<tr>
				<td width="100%">&nbsp;</td>
					<?php mosHTML::PrintIcon( $row, $params, $hide_js, $print_link ); ?>
			</tr>
		</table>

	<?php
	if ( !$pop ) {
	?>
		<div class="link">
		<?php
			if ($dellink == 1) {
				echo"<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=deliver')."'>"._EVENTLIST_DELIVER."</a> | ";
			}
			if ($oldevent == 2) {
				echo"<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shcatarchive')."'>"._EVENTLIST_SHARCHIVE."</a>";
			}
		?>
		</div>

	<?php
	}//if pop ende

		$k = 0;
		for ($i=0, $n=count($rows); $i < $n; $i++) {
		$row = $rows[$i];
		?>
		<div class="category">
		<h5 class="componentheading"><?php echo "$eventlisthead - $row->catname"; ?></h5>
		<?php
					if ($row->image != '') {
						echo "<div class=\"image\"><a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shcatev1&amp;categid='.$row->id)."'><img src='".$mosConfig_live_site."/images/stories/".$row->image."' name='image' width='".$imagewidth."' height='".$imagehight."' border='0' alt='image'/></a></div>";
					}
					//Anzahl Events in Kategorie holen
					$database->SetQuery( "SELECT count(*)"
										. "\nFROM #__eventlist_dates"
										. "\nWHERE published = 1 && catsid = $row->id"
										);
					$total = $database->loadResult();

					?>
					<br />
					<?php

					if (!empty($row->catdescription)) {
						echo "<p>".$row->catdescription."</p>";
					}

					echo _EVENTLIST_CATVIEWCOUNTEV." ";
					echo "<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shcatev1&amp;categid='.$row->id)."'>". $total."</a>";
					?>
					<p><?php echo "<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shcatev1&amp;categid='.$row->id)."'>"._EVENTLIST_CATVIEW1."</a>"; ?></p>
	</div>
	<br /><br />

		<table width="<?php echo $layoutsettings[ $idx['table']]->set_width; ?>" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<th width="<?php echo $layoutsettings[ $idx['date']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->datename; ?></th>
				<?php
				if ($layoutsettings[ $idx['title']]->set_show == 1) {
				?>
				<th width="<?php echo $layoutsettings[ $idx['title']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->titlename; ?></th>
				<?php
				}
				//designsache
				if ($layoutsettings[ $idx['info']]->set_width != '') {
				?>
				<th width="<?php echo $layoutsettings[ $idx['info']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->infobuttonname; ?></th>
				<?php
				}
				if ($layoutsettings[ $idx['location']]->set_show == 1) {
				?>
				<th width="<?php echo $layoutsettings[ $idx['location']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->locationname; ?></th>
				<?php
				}
				if ($layoutsettings[ $idx['city']]->set_show == 1) {
				?>
				<th width="<?php echo $layoutsettings[ $idx['city']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->cityname; ?></th>
				<?php
				}
				if ($layoutsettings[ $idx['category']]->set_show == 1) {
				?>
				<th width="<?php echo $layoutsettings[ $idx['category']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->catfroname; ?></th>
				<?php
				}
			?>
			</tr>
			<?php
			//Events auslesen
			$query = "SELECT a.*, l.club, l.city, l.url, c.catname, c.id AS catid"
					. "\nFROM #__eventlist_dates AS a"
					. "\nLEFT JOIN #__eventlist_locate AS l ON l.id = a.locid"
					. "\nLEFT JOIN #__eventlist_categories AS c ON c.id = a.catsid"
					. "\nWHERE a.published = 1 && a.catsid = ".$row->id
					. "\n AND access <= ".$my->gid
					. "\nORDER BY a.dates, a.times"
					. "\nLIMIT 3"
					;
			$database->SetQuery($query);
			$rowse = $database->loadObjectList();

			$ke = 0;
			for ($ie=0, $ne=count($rowse); $ie < $ne; $ie++) {
				$rowe = $rowse[$ie];

				//Datum aus Tabelle formatieren
				$datum = strftime($formatdate,strtotime( $rowe->dates ));

				if ($rowe->enddates == '0000-00-00') {
					$datum = $datum;
				} else {
					$enddate 	= strftime( $formatdate, strtotime( $rowe->enddates ));
					$datum = $datum.' - '.$enddate;
				}

				//versch. farbige Ausgabe
				$tabclass = array( 'sectiontableentry1', 'sectiontableentry2' );

			?>
  			<tr class="<?php echo $tabclass[$ke]; ?>">
    			<td width="<?php echo $layoutsettings[ $idx['date']]->set_width; ?>"><div class="date"><?php echo $datum; ?></div>
				<?php
				//Zeitabfrage
				if ($layoutsettings[$idx['time']]->set_show == 1) {

					if ($rowe->times != '00:00:00') {
						$zeit = strftime( $formattime, strtotime( $rowe->times ));

						echo '<div class="time">'.$zeit.' '.$timename;
						if ($rowe->endtimes != '00:00:00') {
							$endzeit = strftime( $formattime, strtotime( $rowe->endtimes ));
							echo ' - '.$endzeit.' '.$timename;
						}
						echo '</div>';
					}
				}
				?>
				</td>
					<?php
					//Link zu Details erzeugen
					$detaillink = sefRelToAbs( 'index.php?option=com_eventlist&amp;Itemid='. $Itemid .'&amp;func=details&amp;did='. $rowe->id );
					//titel
					if (($layoutsettings[ $idx['title']]->set_show == 1 ) && (($showdetails == 1) || ($showdetails == 3)) ) {
					?>
				<td width="<?php echo $layoutsettings[ $idx['title']]->set_width; ?>"><a href="<?php echo $detaillink ; ?>"> <?php echo $rowe->titel; ?></a></td>
					<?php
					}
					if (( $layoutsettings[ $idx['title']]->set_show == 1 ) && (($showdetails == 2) || ($showdetails == 0)) ) {
					?>
				<td width="<?php echo $layoutsettings[ $idx['title']]->set_width; ?>"><?php echo $rowe->titel; ?></td>
					<?php
					}
					//Infomation icon
					if (($showdetails == 2) || ($showdetails == 3)) {
						if (empty ($rowe->datdescription) && empty($rowe->locdescription)) {
					?>
							<td width="<?php echo $layoutsettings[ $idx['info']]->set_width; ?>" align="center">
							<img src="<?php echo "$mosConfig_live_site/components/com_eventlist/images/information_no.png"; ?>" width="16" height="16" alt="no information" />
							</td>
						<?php
						} else {
						?>
							<td width="<?php echo $layoutsettings[ $idx['info']]->set_width; ?>" align="center">
							<a href="<?php echo $detaillink ; ?>"><img src="<?php echo "$mosConfig_live_site/components/com_eventlist/images/information.png"; ?>" width="16" height="16" alt="information" /></a>
							</td>
						<?php
						}
					}
					if ($layoutsettings[ $idx['location']]->set_show == 1) {
					?>
				<td width="<?php echo $layoutsettings[ $idx['location']]->set_width; ?>">
					<?php
						if ($layoutsettings[ $idx['location']]->set_linked == 1) {
							echo "<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shlocevents&amp;locatid='.$rowe->locid)."'>".$rowe->club."</a>";
						} else {
							echo $rowe->club;
						}
					?>
				</td>
					<?php
					}//showlocate ende
					if ($layoutsettings[ $idx['city']]->set_show == 1) {
					?>
				<td width="<?php echo $layoutsettings[ $idx['city']]->set_width; ?>"><?php echo $rowe->city; ?></td>
					<?php
					}
					if ($layoutsettings[ $idx['category']]->set_show == 1) {
					if ($layoutsettings[ $idx['category']]->set_linked == 1) {
					?>
						<td width="<?php echo $layoutsettings[ $idx['category']]->set_width; ?>"><?php echo "<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shcatev1&amp;categid='.$rowe->catid)."'>".$row->catname."</a>";?></td>
					<?php
					} else {
					?>
						<td width="<?php echo $layoutsettings[ $idx['category']]->set_width; ?>"><?php echo $row->catname; ?></td>
				<?php
					}
					}
				?>
			</tr>
	<?php
	$ke = 1 - $ke; }
	?>
		</table>

		<br /><br />

	<?php
	$k = 1 - $k; }
	?>

		<div class="copyright">
			EventList 0.8.9 Alpha by <a href="http://www.schlu.net" target="_blank">schlu.net </a><br /><br />
		</div>
	</div>
	<?php
	}//funktion ShowCatViewDet ende

	function ShowlocEvents($option, &$l_rows, &$rows, &$pageNav, $dellink, $total, $idx, $layoutsettings, $layoutcontents, $filter, $search)
	{
	global $database, $Itemid, $mosConfig_live_site, $mainframe, $params, $hide_js, $pop, $params;
	require(ELPATH."/../../administrator/components/com_eventlist/config.eventlist.php");

	//menuname anzeigen
	$menuname = new mosMenu( $database );
	$menuname->load($Itemid);
	$eventlisthead = $menuname->name;

	//Page titel setzen
	$mainframe->setPageTitle( $eventlisthead );
    $mainframe->addMetaTag( 'title' , $eventlisthead );

	//Druckfunktion
	$params->def( 'print', !$mainframe->getCfg( 'hidePrint' ) );
	$params->def( 'icons', $mainframe->getCfg( 'icons' ) );

	if ( $pop ) {
		$params->set( 'popup', 1 );
	}

	$print_link = $mosConfig_live_site. '/index2.php?option=com_eventlist&amp;Itemid='. $Itemid .'&amp;func=shlocevents&amp;locatid='. $l_rows[0]->id .'&amp;pop=1';

	echo "<div id=\"eventlist\">"; // Einfuegen einer ID, so dass alle Elemente mit CSS bzw. Javascript angesteuert werden k�nnen

	if ( !$pop ) {
	?>
		<div class="link">
			<?php
			if ($dellink == 1) {
				echo"<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=deliver')."'>"._EVENTLIST_DELIVER."</a>";
			}
			?>
		</div>

	<?php
	}
	?>
		<h5 class="componentheading"><?php echo "$eventlisthead - ".$l_rows[0]->club; ?></h5>

		<table class="contentpaneopen" style="width:<?php echo $layoutsettings[$idx['table']]->set_width; ?>">
			<tr>
				<td width="100%">&nbsp;</td>
					<?php mosHTML::PrintIcon( $row, $params, $hide_js, $print_link ); ?>
			</tr>
		</table>

		<table width="<?php echo $layoutsettings[$idx['table']]->set_width; ?>" border="0" cellspacing="0" cellpadding="4" align="center">
     		<tr>
  				<td class="details" colspan="1"><?php echo $layoutcontents->locationname; ?></td>
				<td colspan="2"><?php echo $l_rows[0]->club; ?></td>
  			</tr>
 			<tr>
    			<td class="details"><?php echo _EVENTS_HOMEPAGE_LO." "; ?></td>
  				<td>
				<?php
					if (($showdetlinkclub == 1) && (!empty($l_rows[0]->url))) {
						if(strtolower(substr($l_rows[0]->url, 0, 7)) == "http://") {
          				 // Wenn der Teilstring gleich "http://" ist,
          				 // dann  Link ohne "http://" erzeugen
					?>
							<a href="<?php echo $l_rows[0]->url; ?>" target="_blank"> <?php echo $l_rows[0]->url; ?></a>
						<?php
						} else {
							// Wenn nicht, dann "http://" so dazu
						?>
							<a href="http://<?php echo $l_rows[0]->url; ?>" target="_blank"> <?php echo $l_rows[0]->url; ?></a>
						<?php
						}
					} else {
						echo _EVENTS_HOMEPAGENO_LO." ";
					}
				?>
				</td>
   				<td rowspan="3">
					<?php //Zellenbereich f?r flyer
					if (!empty($l_rows[0]->locimage)) {
					$originalloc = $mosConfig_live_site."/images/eventlist/location/".$l_rows[0]->locimage;
					$thumbloc = $mosConfig_live_site."/images/eventlist/location/small/".$l_rows[0]->locimage;
						if (file_exists(ELPATH."/../../images/eventlist/location/small/".$l_rows[0]->locimage)) {
							$iminfoloc = @getimagesize("images/eventlist/location/".$l_rows[0]->locimage);
							$widthloc = $iminfoloc[0];
							$heightloc = $iminfoloc[1];
					?>
							<a href="javascript:void(window.open('<?php echo $originalloc; ?>','Popup','width=<?php echo $widthloc; ?>,height=<?php echo $heightloc; ?>,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,resizable=no'));">
							<img src="<?php echo $thumbloc; ?>" alt="thumb" /></a>
					<?php
						} else { ?>
							<img src="<?php echo $originalloc; ?>" width="<?php echo $imagewidth; ?>" height="<?php echo $imageheight; ?>" alt="orginal" />
					<?php
						}
					}
					?>
				</td>
  			</tr>
  			<?php
  			if ($showdetailsadress == 1) {
  			?>
  			<tr>
    			<td class="details"><?php echo _ADMIN_EVENTS_CLUBSTREET_LO." "; ?></td>
    			<td><?php echo $l_rows[0]->street; ?></td>
  			</tr>
  			<tr>
    			<td class="details"><?php echo _ADMIN_EVENTS_CLUBPLZ_LO." "; ?></td>
    			<td><?php echo $l_rows[0]->plz; ?></td>
  			</tr>
  			<tr>
    			<td class="details"><?php echo _EVENTS_CITY." " ;?></td>
   				<td><?php echo $l_rows[0]->city; ?></td>
  			</tr>
  			<tr>
    			<td class="details"><?php echo _EVENTS_COUNTRY_LO." "; ?></td>
    			<td><?php echo $l_rows[0]->country; ?></td>
    			<td>
					<?php
					//Link zu map
					switch ($showmapserv) {
						case 0:
						break;

						case 1:
  							if ($map24id != "") {
							?>
								<a href="http://link2.map24.com/?lid=<?php echo $map24id ?>&amp;maptype=JAVA&amp;width0=2000&amp;street0=<?php echo $l_rows[0]->street ?>&amp;zip0=<?php echo $l_rows[0]->plz ?>&amp;city0=<?php echo $l_rows[0]->city ?>&amp;country0=<?php echo $l_rows[0]->country ?>&amp;sym0=10280&amp;description0=<?php echo $l_rows[0]->club ?>" target="_blank">
								<img src="http://img.map24.com/map24/link2map24/de/show_address_7.gif" border="0" alt="Map24" /></a>
							<?php
							}
						break;

						case 2:
					?>
						<a href="http://maps.google.com/maps?q=<?php echo $l_rows[0]->street; ?>+<?php echo $l_rows[0]->city ?>+<?php echo $l_rows[0]->plz ?>+<?php echo $l_rows[0]->country ?>" title="<?php echo _EVENTS_MAP." "; ?>" target="_blank"><?php echo _EVENTS_MAP." "; ?></a>
					<?php
					break;
					}//switch ende
					?>
				</td>
  			</tr>
  			<?php
			}//showdetailsadress ende

			if ($showlocdescription == "1") {
  			?>
  			<tr>
    			<td colspan="3">&nbsp;</td>
  			</tr>
  			<tr>
   	 			<td class="sectiontableheader" colspan="3"><?php echo _EVENTS_LOCDESC." " ;?></td>
  			</tr>
  			<tr>
    			<td colspan="3">
					<?php
					if (empty ($l_rows[0]->locdescription)) {
						echo _EVENTS_DESCALERT." " ;
					} else {
						//execute the Mambot
						$l_rows[0]->text = $l_rows[0]->locdescription;
						$l_rows[0]->title = $l_rows[0]->club;
						global $_MAMBOTS;
						$_MAMBOTS->loadBotGroup( 'content' );
						$results = $_MAMBOTS->trigger( 'onPrepareContent', array( &$l_rows[0], &$params, 0 ), true );
						echo $l_rows[0]->text;
					}
					?>
				</td>
  			</tr>
			<?php
			}
			?>
      	</table>

		<br />

		<form action="index.php?option=com_eventlist&amp;Itemid=<?php echo $Itemid; ?>&amp;func=shlocevents&amp;locatid=<?php echo $l_rows[0]->id; ?>" method="post" name="adminForm">

		<?php if ( $showfilter ) { ?>
		<table width="<?php echo $layoutsettings[$idx['table']]->set_width; ?>" border="0" cellspacing="0" cellpadding="0">
			<tr align="right">
				<td>
				<?php echo _ADMIN_EVENTS_SEARCH_LI_EV." ";
				$filters = array();
				$filters[] = mosHTML::makeOption( '1', $layoutcontents->titlename );
				$filters[] = mosHTML::makeOption( '2', $layoutcontents->catfroname );
				$html = mosHTML::selectList( $filters, 'filter', 'size="1" class="inputbox"', 'value', 'text', $filter );
				echo $html;
				?>
				<input type="text" name="search" value="<?php echo $search;?>" class="text_area" onChange="document.adminForm.submit();" />
				</td>
			</tr>
		</table>
		<br />
		<?php } ?>

		<table width="<?php echo $layoutsettings[ $idx['table']]->set_width; ?>" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<th width="<?php echo $layoutsettings[ $idx['date']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->datename; ?></th>
				<?php
				if ($layoutsettings[ $idx['title']]->set_show == 1) {
				?>
				<th width="<?php echo $layoutsettings[ $idx['title']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->titlename; ?></th>
				<?php
				}
				//wenn width leer
				if ($layoutsettings[ $idx['info']]->set_width != "") {
				?>
				<th width="<?php echo $layoutsettings[ $idx['info']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->infobuttonname; ?></th>
				<?php
				}
				if ($layoutsettings[ $idx['location']]->set_show == 1) {
				?>
				<th width="<?php echo $layoutsettings[ $idx['location']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->locationname; ?></th>
				<?php
				}
				if ($layoutsettings[ $idx['city']]->set_show == 1) {
				?>
				<th width="<?php echo $layoutsettings[ $idx['city']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->cityname; ?></th>
				<?php
				}
				if ($layoutsettings[ $idx['category']]->set_show == 1) {
				?>
				<th width="<?php echo $layoutsettings[ $idx['category']]->set_width; ?>" class="sectiontableheader"><?php echo $layoutcontents->catfroname; ?></th>
				<?php
				}
				?>
			</tr>
			<?php
			$k = 0;
			for ($i=0, $n=count($rows); $i < $n; $i++) {
				$row = $rows[$i];

				//versch. farbige Ausgabe
				$tabclass = array( 'sectiontableentry1', 'sectiontableentry2' );

			?>
  			<tr class="<?php echo $tabclass[$k]; ?>">
    			<td width="<?php echo $layoutsettings[ $idx['date']]->set_width; ?>"><div class="date"><?php echo $datum; ?></div>
				    <div class="date">
    				<?php
    				//Datum aus Tabelle formatieren
					$datum = strftime( $formatdate, strtotime( $row->dates ));
    				if ($row->enddates == '0000-00-00') {
						$datum = $datum;
					} else {
						$enddate 	= strftime( $formatdate, strtotime( $row->enddates ));
						$datum = $datum.' - '.$enddate;
					}
    				echo $datum;
    				?>
    				</div>
					<?php
					//Zeitabfrage
					if ($layoutsettings[$idx['time']]->set_show == 1) {

						if ($row->times != '00:00:00') {
							$zeit = strftime( $formattime, strtotime( $row->times ));

							echo '<div class="time">'.$zeit.' '.$timename;
							if ($row->endtimes != '00:00:00') {
								$endzeit = strftime( $formattime, strtotime( $row->endtimes ));
								echo ' - '.$endzeit.' '.$timename;
							}
							echo '</div>';
						}
					}
					?>
				</td>
				<?php
				//Link zu Details erzeugen
				$detaillink = sefRelToAbs( 'index.php?option=com_eventlist&amp;Itemid='. $Itemid .'&amp;func=details&amp;did='. $row->id );
				//titel
				if (($layoutsettings[ $idx['title']]->set_show == 1 ) && (($showdetails == 1) || ($showdetails == 3)) ) {
				?>
				<td width="<?php echo $layoutsettings[ $idx['title']]->set_width; ?>"><a href="<?php echo $detaillink ; ?>"> <?php echo $row->titel; ?></a></td>
				<?php
				}
				if (( $layoutsettings[ $idx['title']]->set_show == 1 ) && (($showdetails == 2) || ($showdetails == 0)) ) {
				?>
				<td width="<?php echo $layoutsettings[ $idx['title']]->set_width; ?>"><?php echo $row->titel; ?></td>
				<?php
				}

				//Infomation icon
				if ($layoutsettings[$idx['info']]->set_width != '') {
					if (($showdetails == 2) || ($showdetails == 3)) {
					?>
						<td width="<?php echo $layoutsettings[ $idx['info']]->set_width; ?>" align="center">
							<a href="<?php echo $detaillink ; ?>"><img src="<?php echo "$mosConfig_live_site/components/com_eventlist/images/information.png"; ?>" width="16" height="16" alt="information" /></a>
						</td>
					<?php
					}
				}
				if ($layoutsettings[ $idx['location']]->set_show == 1) {
				?>
				<td width="<?php echo $layoutsettings[ $idx['location']]->set_width; ?>">
				<?php
				if ($layoutsettings[ $idx['location']]->set_linked == 1) {
					echo "<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shlocevents&amp;locatid='.$row->locid)."'>".$row->club."</a>";
				} else {
					echo $row->club;
				}
				?>
				</td>
				<?php
				}
				if ($layoutsettings[ $idx['city']]->set_show == 1) {
				?>
				<td width="<?php echo $layoutsettings[ $idx['city']]->set_width; ?>"><?php echo $row->city; ?></td>
				<?php
				}
				if ($layoutsettings[ $idx['category']]->set_show == 1) {
					if ($layoutsettings[ $idx['category']]->set_linked == 1) {
					?>
						<td width="<?php echo $layoutsettings[ $idx['category']]->set_width; ?>"><?php echo "<a href='".sefRelToAbs('index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shcatev1&amp;categid='.$row->catid)."'>".$row->catname."</a>";?></td>
					<?php
					} else {
					?>
						<td width="<?php echo $layoutsettings[ $idx['category']]->set_width; ?>"><?php echo $row->catname; ?></td>
				<?php
					}
				}
				?>
			</tr>
	<?php
	$k = 1 - $k; }
	?>
	</table>

	</form>

	<?php
	$page = $total - $eventspage;
	if (( $page > 0 ) && ( !$pop )) {
	?>

		<br /><br />

		<?php
		$link = 'index.php?option=com_eventlist&amp;Itemid='.$Itemid.'&amp;func=shlocevents&amp;locatid='.$row->locid;
		?>

		<div class="pagenavi">
		<?php echo $pageNav->writePagesLinks($link); ?>
  		<div><?php echo $pageNav->writePagesCounter(); ?></div>
  		</div>

	<?php
	}
	?>
	<div align="center">
	<br />
			<?php
			$back 	= $params->get('back_button', $mainframe->getCfg('back_button'));
			$params->set('back_button', $back);
			mosHTML::BackButton( $params );
			?>
	<br />
			<div class="copyright">EventList 0.8.9 Alpha by <a href="http://www.schlu.net" target="_blank">schlu.net </a></div><br /><br />
	</div>
	</div>
	<?php
	}//funktion ShowlocEvents ende

//class ende
}
?>
