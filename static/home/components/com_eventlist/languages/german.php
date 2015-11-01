<?php
/**
* @version 0.8.9 $Id: german.php 227 2007-06-22 13:08:22Z schlu $
* @package Eventlist
* @copyright (C) 2005 - 2007 Christoph Lukes
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*/

//Frontend
DEFINE("_EVENTS_DATE","Datum");
DEFINE("_EVENTS_CLUB","Veranstaltungsort");
DEFINE("_EVENTS_CITY","Ort");
DEFINE("_EVENTS_DETAILS","Details");
DEFINE("_EVENTS_BACK","zur&uuml;ck");
DEFINE("_EVENTS_EVENT","Event");
DEFINE("_EVENTS_WHEN","Wann:");
DEFINE("_EVENTS_WHERE","Wo:");
DEFINE("_EVENTS_DESC","Eventbeschreibung:");
DEFINE("_EVENTS_LOCAT","Location");
DEFINE("_EVENTS_LOCDESC","Beschreibung der Location:");
DEFINE("_EVENTS_DESCALERT","Zur Zeit keine Beschreibung verf&uuml;gbar");
DEFINE("_EVENTS_COUNTRY_LO","Land:");
DEFINE("_ADMIN_EVENTS_DETA_REDI","Zugriff ist nicht erlaubt");
DEFINE("_EVENTS_HOMEPAGE_LO","Homepage:");
DEFINE("_EVENTS_HOMEPAGENO_LO","Keine Homepage angegeben");
DEFINE("_EVENTLIST_SHARCHIVE","Archiv anzeigen");
DEFINE("_EVENTS_MAP","Karte");

//images
DEFINE("_EVENTS_IMAGEEMPT","Bitte Bild zum hochladen ausw&auml;hlen");
DEFINE("_EVENTS_IMAGESIZEBIG","Datei ist zu gro&szlig;");
DEFINE("_EVENTS_IMAGECHARACT","Dateiname muss alphanumerisch und ohne Leerzeichen sein.");
DEFINE("_EVENTS_IMAGEEXIST","Datei existiert bereits. Bitte anderen Namen ausw&auml;hlen.");
DEFINE("_EVENTS_IMAGETYPE","Datei muss vom Typ gif, png, jpg, bmp sein");
DEFINE("_EVENTS_IMAGEFAIL","Hochladen gescheitert");
DEFINE("_ADMIN_EVENTS_CHOOIMAGE","Bild ausw&auml;hlen:");
DEFINE("_ADMIN_EVENTS_IMAGEUPL","Bild zum hochladen ausw&auml;hlen:");
DEFINE("_EVENTS_IMAGEUPLSUCCESS","Upload erfolgreich");
DEFINE("_EVENTS_IMAGEUPLNOGD","GD-Bibliothek nicht verf&uuml;gbar! Deaktivieren Sie bitte die Thumbnail Erzeugung in den Einstellungen.");
DEFINE("_EVENTS_IMAGEUPLPNG","PNG wird unterst&uuml;tzt");
DEFINE("_EVENTS_IMAGEUPLNOPNG","PNG wird NICHT unterst&uuml;tzt");
DEFINE("_EVENTS_IMAGEUPLJPG","JPG wird unterst&uuml;tzt");
DEFINE("_EVENTS_IMAGEUPLNOJPG","JPG wird NICHT unterst&uuml;tzt");
DEFINE("_EVENTS_IMAGEUPLGIF","GIF wird unterst&uuml;tzt");
DEFINE("_EVENTS_IMAGEUPLNOGIF","GIF wird NICHT unterst&uuml;tzt");
DEFINE("_ADMIN_EVENTS_IMAGETARGET","Zielverzeichnis:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERS","GD Version:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERSWARN","Achtung: Eventlist ben&ouml;tigt f&uuml;r das erstellen von Thumbnails die GD-Bibliothek ab Version 2. Sollte auf Ihrem Server keine GD-Bibliothek, oder noch in Version 1 installiert sein, deaktivieren Sie bitte die Thumbnail Erzeugung in den Einstellungen.");

//Backend

//add/edit event
DEFINE("_ADMIN_EVENTS_HEADER_EV","Eventlist Event");
DEFINE("_ADMIN_EVENTS_DATE","Eventdatum:");
DEFINE("_ADMIN_EVENTS_DATE_NOTICE","im Format yyyy-mm-dd angeben!");
DEFINE("_ADMIN_EVENTS_TIME_NOTICE","Format: hh:mm!");
DEFINE("_ADMIN_EVENTS_CLUB_ID","Veranstaltungsort:");
DEFINE("_ADMIN_EVENTS_DEL"," Event(s) gel&ouml;scht");
DEFINE("_ADMIN_EVENTS_DELFORM","FEHLER: Datum hat falsches Format");
DEFINE("_ADMIN_EVENTS_DELFORMT","FEHLER: Zeit hat falsches Format oder es wurde angegeben die Zeit anzuzeigen, dann muss dieses Feld ausgef&uuml;llt werden");
DEFINE("_ADMIN_EVENTS_EMPTY","FEHLER: Bitte erst Location anlegen");
DEFINE("_ADMIN_EVENTS_SAVE","Event gespeichert");
DEFINE("_ADMIN_EVENTS_DESCR","Event Beschreibung:");
DEFINE("_ADMIN_EVENTS_DESCR_OPT","optional");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO","Beschreiben Sie hier den Event");
DEFINE("_ADMIN_EVENTS_TIME","Zeit:");
DEFINE("_ADMIN_EVENTS_TITEL","Eventtitel:");
DEFINE("_ADMIN_EVENTS_NO_LOC","Es muss hier erst eine Location angelegt werden. Danach k&ouml;nnen Events hinzugef&uuml;gt werden");
DEFINE("_ADMIN_EVENTS_ENDTIME","Endzeit:");
DEFINE("_ADMIN_EVENTS_ENDTIME_NOTICE","Format: hh:mm! (optional)");
DEFINE("_ADMIN_EVENTS_PUBLI","Ver&ouml;ffentlicht?");
DEFINE("_ADMIN_EVENTS_CAT_ID","Kategorie:");
DEFINE("_ADMIN_EVENTS_SEL_CAT","Kategorie ausw&auml;hlen");
DEFINE("_ADMIN_EVENTS_SEL_LOC","Veranstaltungsort ausw&auml;hlen");
DEFINE("_ADMIN_EVENTS_CATEMPTY","FEHLER: Kategorie ausw&auml;hlen oder es muss hier erst eine Location angelegt werden.");
DEFINE("_ADMIN_EVENTS_SUC_ARCH"," Event(s) erfolgreich archiviert");
DEFINE("_ADMIN_EVENTS_SUC_PUBL"," Event(s) erfolgreich ver&ouml;ffentlicht");
DEFINE("_ADMIN_EVENTS_SUC_UNARCH"," Event(s) erfolgreich aus dem Archiv entfernt");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL"," Event(s) erfolgreich nicht mehr ver&ouml;ffentlicht");
DEFINE("_ADMIN_EVENTS_OTHER","Allgemein");
DEFINE("_ADMIN_EVENTS_REGISTRA","Registrieren aktivieren:");

//add/edit location
DEFINE("_ADMIN_EVENTS_HEADER_LO","Eventlist Location");
DEFINE("_ADMIN_EVENTS_CLUB_LO","Veranstaltungsort:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LO","Homepage:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_NOTICE_LO","Muss das Format http://www.google.de haben!");
DEFINE("_ADMIN_EVENTS_CITY_LO","Ort / Stadt:");
DEFINE("_ADMIN_EVENTS_DEL_LO", "FEHLER: Min. eine Location ist noch mit einem Event verkn&uuml;pft");
DEFINE("_ADMIN_EVENTS_DELYES_LO", " Location(s) gel&ouml;scht");
DEFINE("_ADMIN_EVENTS_SAVECLUB_LO","FEHLER: Veranstaltungsort eingeben");
DEFINE("_ADMIN_EVENTS_SAVEHOMEP_LO","FEHLER: Homepage eingeben");
DEFINE("_ADMIN_EVENTS_SAVETOWN_LO","FEHLER: Ort eingeben");
DEFINE("_ADMIN_EVENTS_SAVE_LO","Location gespeichert");
DEFINE("_ADMIN_EVENTS_DESCR_LO","Beschreibung der Location");
DEFINE("_ADMIN_EVENTS_DESCR_OPT_LO","optional");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO_LO","Beschreiben Sie hier die Location");
DEFINE("_ADMIN_EVENTS_CLUBSTREET_LO","Stra&szlig;e:");
DEFINE("_ADMIN_EVENTS_CLUBPLZ_LO","PLZ:");
DEFINE("_ADMIN_EVENTS_CLUBCOUNTRY_LO","Land (DE,AT,CH, etc.):");
DEFINE("_ADMIN_EVENTS_SAVEADRESS_LO","FEHLER: Es ist min. eine der folgenden Optionen aktiviert: link zu map24 anzeigen, Adresse anzeigen. Deaktivieren Sie diese Optionen, wenn Sie diese Felder nicht ausf&uuml;llen m&ouml;chten.");
DEFINE("_ADMIN_EVENTS_OPTIONAL_LO","Felder mit * sind nicht zwingend auszuf&uuml;llen. Achtung: Die Adressfelder sind zwingend wenn der map24 Service aktiviert wurde!");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_LO"," Location(s) erfolgreich ver&ouml;ffentlicht");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_LO"," Location(s) erfolgreich nicht mehr ver&ouml;ffentlicht");
DEFINE("_ADMIN_EVENTS_ADRESSDET","Adresse");

//list events
DEFINE("_ADMIN_EVENTS_DATE_LI_EV","Datum");
DEFINE("_ADMIN_EVENTS_CLUB_LI_EV","Veranstaltungsort");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_EV","Homepage");
DEFINE("_ADMIN_EVENTS_CITY_LI_EV","Ort / Stadt");
DEFINE("_ADMIN_EVENTS_LIMITBOX_LI_EV","Display: ");
DEFINE("_ADMIN_EVENTS_TITEL_LI_EV","Eventtitel:");
DEFINE("_ADMIN_EVENTS_TIME_LI_EV","Beginn");
DEFINE("_ADMIN_EVENTS_PUBLISH_LI_EV","Ver&ouml;ffentlicht");
DEFINE("_ADMIN_EVENTS_USERDELI_LI_EV","Userevent?");
DEFINE("_ADMIN_EVENTS_CAT_LI_EV","Kategorie");
DEFINE("_ADMIN_EVENTS_SEARCH_LI_EV","Suche:");

//list locations
DEFINE("_ADMIN_EVENTS_CLUB_LI_LO","Veranstaltungsort");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_LO","Homepage");
DEFINE("_ADMIN_EVENTS_CITY_LI_LO","Ort / Stadt");
DEFINE("_ADMIN_EVENTS_ORDER_LI_LO","Sortieren");

//Frontend deliver
DEFINE("_ADMIN_EVENTS_DELIVNAME","Ihr Name:");
DEFINE("_ADMIN_EVENTS_DELIVNAME_DESC","Bitte geben Sie hier Ihren Namen ein");
DEFINE("_ADMIN_EVENTS_DELIVMAIL","Ihre Emailadresse:");
DEFINE("_ADMIN_EVENTS_DELIVMAIL_DESC","Bitte geben Sie hier Ihre E-Mail Adresse an");
DEFINE("_EVENTS_DELIVER","Event einliefern");
DEFINE("_EVENTS_VALIDATE","FEHLER: Bitte alle Felder ausf&uuml;llen");
DEFINE("_ADMIN_EVENTS_DELIV_REDI","Event Einlieferung nicht erlaubt");
DEFINE("_EVENTS_DELIVMAILBOD_1","Ein neuer Event wurde eigetragen. Benutzer: ");
DEFINE("_EVENTS_DELIVMAILBOD_2"," E-Mail des Benutzers: ");
DEFINE("_EVENTS_DELIVMAILBOD_3"," Benutzer - IP: ");
DEFINE("_EVENTS_DELIVMAILBOD_4"," Zeit der Einlieferung: ");
DEFINE("_EVENTS_DELIVMAILBOD_5"," Eventtitel: ");
DEFINE("_EVENTS_DELIVMAILBOD_6"," Eventdatum: ");
DEFINE("_EVENTS_DELIVMAILBOD_7"," Eventzeit: ");
DEFINE("_EVENTS_DELIVMAILBOD_8"," Veranstaltungsort: ");
DEFINE("_EVENTS_DELIVMAILBOD_9"," Eventbeschreibung: ");
DEFINE("_EVENTS_DELIVMAILBOD_10"," : Neuer Event ");
DEFINE("_EVENTLIST_DELIVER","Event einliefern");
DEFINE("_EVENTLIST_BACK","zur&uuml;ck");
DEFINE("_ADMIN_EVENTS_DELMAILFORM","FEHLER: Email hat falsches Format!");
DEFINE("_ADMIN_EVENTS_DELTITLLEN","FEHLER: Titel ist zu lang!");
DEFINE("_ADMIN_EVENTS_DELNAMLEN","FEHLER: Name ist zu lang!");
DEFINE("_EVENTS_DELTEXTARHTML","HTML ist nicht erlaubt!");
DEFINE("_EVENTS_RESTZ","Zeichen &uuml;brig");
DEFINE("_EVENTS_RESTZAKT","aktualisieren!");
DEFINE("_EVENTS_DEL_DATE_EMPT","Bitte Datum eingeben!");
DEFINE("_EVENTS_DEL_TIME_EMPT","Bitte Zeit eingeben!");
DEFINE("_EVENTS_DEL_TITEL_EMPT","Bitte Titel eingeben!");
DEFINE("_EVENTS_DEL_CATEG_EMPT","Bitte Kategorie ausw&auml;hlen!");
DEFINE("_EVENTS_DEL_LOCAT_EMPT","Bitte Veranstaltungsort ausw&auml;hlen!");
DEFINE("_EVENTS_DEL_TIME_FORM","Zeit hat falsches Format!");

//Frontend deliver location
DEFINE("_EVENTLIST_DELIVER_LOC","Neue Location einliefern");
DEFINE("_EVENTS_DELIVMAILLOCBOD_1"," Eine neue Location wurde eigetragen. Benutzer: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_2"," E-Mail des Benutzers: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_3"," Benutzer - IP: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_4"," Zeit der Einlieferung: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_5"," Veranstaltungsort: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_6"," URL: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_7"," Stra&szlig;e: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_8"," PLZ: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_9"," Stadt: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_10"," L&auml;nder Code: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_11"," Beschreibung: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_12"," : Neue Location ");
DEFINE("_EVENTS_DELIVER_LOC","Location einliefern");
DEFINE("_EVENTS_DELURLLOCFORM","URL ist zu lang");
DEFINE("_EVENTS_DELSTREETLOCFORM","Strasse ist zu lang");
DEFINE("_EVENTS_DELPLZLOCFORM","PLZ ist zu lang");
DEFINE("_EVENTS_DELCITYLOCFORM","Stadt ist zu lang");
DEFINE("_EVENTS_DELCOUNTRYLOCFORM","L&auml;nder Code ist zu lang");
DEFINE("_EVENTS_DELURLLOCFORM2","FEHLER: URL hat falsches Format!");
DEFINE("_EVENTS_DEL_LOC_STREET_EMPT","Bitte Stra&szlig;e eingeben!");
DEFINE("_EVENTS_DEL_LOC_PLZ_EMPT","Bitte PLZ eingeben!");
DEFINE("_EVENTS_DEL_LOC_COUNTRY_EMPT","Bitte L&auml;ndercode eingeben!");

//settings
DEFINE("_ADMIN_EVENTS_SETT_HEADER","Eventlist Einstellungen");
DEFINE("_ADMIN_EVENTS_SETT_SAVE","Einstellungen gespeichert");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD","Alte (abgelaufene) Veranstaltungen:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD1","Nichts tun");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD2","L&ouml;schen");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD3","Archivieren");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD_DESC","Wenn aktiviert werden automatisch abgelaufene Veranstaltungen gel&ouml;scht oder archiviert.");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR","Wieviele Tage:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR_DESC","Wieviele Tage sollen alte Veranstaltungen noch angezeigt werden, bevor sie gel&ouml;scht, archiviert werden. Das hat keinen Effekt wenn diese Einstellung oben deaktiviert wurde.");
DEFINE("_ADMIN_EVENTS_SETT_EVNR","Anzahl an Events auf der Frontpage:");
DEFINE("_ADMIN_EVENTS_SETT_EVNR_DESC","Anzahl an Events die auf der Frontpage angezeigt werden.");
DEFINE("_ADMIN_EVENTS_SETT_MAPID","Deine Map24 ID:");
DEFINE("_ADMIN_EVENTS_SETT_MAPID_DESC","Es ist eine Registrierung bei Map24 erforderlich. Dort erh&auml;lt man die ben&ouml;tigte ID.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME","Zeit anzeigen:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME_DESC","Anzeige des Beginns einer Veranstaltung auf der Frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL","Titel der Veranstaltung anzeigen:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL_DESC","Anzeige des Titels der Veranstaltung auf der Frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC","Location anzeigen:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC_DESC","Anzeige des Veranstaltungsorts/Location auf der Frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY","Stadt anzeigen:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY_DESC","Anzeige der Stadt auf der Frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP","Link zu Karte anzeigen:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP_DESC","Link zu einer Karte auf der Details Seite anzeigen. Achtung: Map24 ID wird ben&ouml;tigt falls dieser Service aktiviert wird.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER","Header anzeigen:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER_DESC","Anzeige des Headers auf der Frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO","Introtext anzeigen:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO_DESC","Anzeige des Introtexts auf der Frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_INTROT","Introtext f&uuml;r Eventlist:");
DEFINE("_ADMIN_EVENTS_SETT_INTROT_DESC","Dieser Text wird &uuml;ber der Event Liste auf der Frontpage angezeigt.");
DEFINE("_ADMIN_EVENTS_SETT_TABLW","Tabellenbreite in % :");
DEFINE("_ADMIN_EVENTS_SETT_TABLW_DESC","Gesamte Breite der Eventlist.");
DEFINE("_ADMIN_EVENTS_SETT_DATEC","Breite der Datumsspalte in %:");
DEFINE("_ADMIN_EVENTS_SETT_DATEC_DESC","Breite der Datumsspalte (Bsp.: 15%).");
DEFINE("_ADMIN_EVENTS_SETT_CNAME","Name der Spalte:");
DEFINE("_ADMIN_EVENTS_SETT_CNAME_DESC","Der Name des Spaltenkopfs.");
DEFINE("_ADMIN_EVENTS_SETT_TITELW","Breite der Titelspalte in %:");
DEFINE("_ADMIN_EVENTS_SETT_TITELW_DESC","Breite der Titelspalte (Leer lassen fals die Anzeige des Titels ausgeschalten wurde)");
DEFINE("_ADMIN_EVENTS_SETT_INFOB","Breite der Infospalte in %:");
DEFINE("_ADMIN_EVENTS_SETT_INFOB_DESC","Breite der Infospalte (Bsp.: 10%)");
DEFINE("_ADMIN_EVENTS_SETT_LOCA","Breite der Veranstaltungsort/Locationspalte in %:");
DEFINE("_ADMIN_EVENTS_SETT_LOCA_DESC","Breite der Veranstaltungsort/Locationspalte (Leer lassen fals die Anzeige des Titels ausgeschalten wurde)");
DEFINE("_ADMIN_EVENTS_SETT_CITYW","Breite der Stadtspalte in %:");
DEFINE("_ADMIN_EVENTS_SETT_CITYW_DESC","Breite der Stadtspalte (Leer lassen fals die Anzeige des Titels ausgeschalten wurde)");
DEFINE("_ADMIN_EVENTS_SETT_UNWR","Konfigurationsdatei ist nich beschreibbar!");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE","Datumsformat:");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE_DESC","Um das Datum zu formatieren, kann zum Beispiel folgender Code verwendet werden: %d.%m.%Y. Mehr Information: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME","Zeitformat:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME_DESC","Um die Zeit zu formatieren, kann zum Beispiel folgender Code verwendet werden:%H.%M. Mehr Information: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME","Name:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME_DESC","Zum Beispiel &quot;h&quot; oder &quot;Uhr&quot;. Diese Angabe wird nach der Zeit angezeigt. Leer lassen wenn nicht ben&ouml;tigt.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS","Link zur Detailseite anzeigen:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS_DESC","Link zur Detailseite anzeigen und wo? (link auf Titel nur wenn Titel anzeigen ja und icons nur wenn der Spalte in den Layout Settings eine breite zugewiesen wurde)");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIMEDET_DESC","Zeit auf der Detailseite anzeigen.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC","Eventbeschreibung anzeigen:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC_DESC","Eventbeschreibung auf der Detailseite anzeigen.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL","Eventtitel anzeigen:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL_DESC","Eventtitel auf der Detailseite anzeigen.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS","Adresse der Location anzeigen:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS_DESC","Adresse der Location auf der Detailseite anzeigen.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC","Beschreibung der Location anzeigen:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC_DESC","Beschreibung der Location auf der Detailseite anzeigen.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB","Link zu Locationansicht anzeigen:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB_DESC","Link zur Locationansicht auf der Frontpage anzeigen.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB","Link zu Location anzeigen:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB_DESC","Link zur Location auf der Detailseite anzeigen.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL","Events einliefern erlauben:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL_DESC","D&uuml;rfen Events &uuml;ber das Frontend eingeliefert werden und ab welchem User Rang?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL","Mail bei neuem Event von Benutzern:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL_DESC","Soll per Mail &uuml;ber neue Events von Benutzern informiert werden?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1","Mail Empf&auml;nger:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1_DESC","Empf&auml;nger der Infomail (E-Mail Adresse)?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2","Mail Empf&auml;nger CC:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2_DESC","Empf&auml;nger der CC Infomail (optional)");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT","Max. l&auml; nge der Eventbeschreibung.");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT_DESC","Ist die Eventbeschreibung zu lang wird sie automatisch gek&uuml;rzt. Gek&uuml;rztem Text wird folgendes hinzugef&uuml;gt: [striped]. Dies gilt nur f&uuml;r Einlieferungen aus dem frontend");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET1","Details aus");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET2","Link auf Titel");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET3","Link auf Icon");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET4","Beides");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB","Autover&ouml;ffentlichen?");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB_DESC","Automatisch Events vom Frontend ver&ouml;ffentlichen? Wenn ja alle Benutzer, registrierte oder nur Rang Publisher und h&ouml;her?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC","Locations einliefern erlauben:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC_DESC","D&uuml;rfen Locations &uuml;ber das Frontend eingeliefert werden und ab welchem User Rang?");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUBLOCS_DESC","Automatisch Locations vom Frontend ver&ouml;ffentlichen? Wenn ja alle Benutzer, registrierte oder nur Rang Publisher und h&ouml;her?");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF1","Aus");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF2","Nur Events");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF3","Nur Locations");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF4","Beide");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT","Kategorie anzeigen:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT_DESC","Anzeige der Kategorie auf der Frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_CATW","Breite der Kategoriespalte in %:");
DEFINE("_ADMIN_EVENTS_SETT_CATW_DESC","Breite der Kategoriespalte (Leer lassen fals die Anzeige der Kategorie ausgeschalten wurde)");
DEFINE("_ADMIN_EVENTS_SETT_VIEW","Default Frontend Layout ausw&uuml;len:");
DEFINE("_ADMIN_EVENTS_SETT_VIEW1","Simple List View");
DEFINE("_ADMIN_EVENTS_SETT_VIEW2","Simple Category List");
DEFINE("_ADMIN_EVENTS_SETT_VIEW3","Detailed Category List");
DEFINE("_ADMIN_EVENTS_SETT_VIEW4","Platzhalter2");
DEFINE("_ADMIN_EVENTS_SETT_VIEW_DESC","Hier Default Frontend Layout ausw&uuml;len. 'Simple List View' ist das altbekannte Layout.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC_DESC","Child groups Zugiff erlauben? Falls Nein, hat nur die ausgew&auml;hlte Gruppe Zugriff. Achtung: Administratoren haben immer Zugriff.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC","Rekursiv:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE","Max. Bildgr&ouml;&szlig;e:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE_DESC","Max. Bildgr&ouml;&szlige in kb");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT","Max. H&ouml;he des Thumbnails:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT_DESC","Max. H&ouml;he des Thumbnails und Kategoriebildes");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH","Max. Breite des Thumbnails:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH_DESC","Max. Breite des Thumbnails und Kategoriebildes");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB","Proportionen erhalten:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB_DESC","Proportionen erhalten oder oben angegebene Bildgr&ouml;&szlig;e erzwingen?");
DEFINE("_ADMIN_EVENTS_SETT_GDSTATUS","Status: ");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE","Thumbnails aktivieren:");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE_DESC","Sollte auf Ihrem Server keine GD-Bibliothek, oder noch in Version 1 installiert sein, deaktivieren Sie bitte die Thumbnailerzeugung.");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB","Bilder uploads:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB1","Aus");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB2","Optional");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB3","Zwingend");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB_DESC","Bild upload deaktiviert oder optional f&uuml;r Benutzer, zwingend bedeutet, es muss bei jeder Einlieferung ein Bild hochgeladen werden");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD","Chmod f&uuml;r Bilder:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD_DESC","Welche Rechte sollen die hochgeladenen Bilder haben? Beispiel 0740");
DEFINE("_ADMIN_EVENTS_SETT_HEAD1","Event Optionen");
DEFINE("_ADMIN_EVENTS_SETT_HEAD2","Anzeige Optionen");
DEFINE("_ADMIN_EVENTS_SETT_HEAD3","Intro");
DEFINE("_ADMIN_EVENTS_SETT_HEAD4","AC - Veranstaltung");
DEFINE("_ADMIN_EVENTS_SETT_HEAD5","AC - Veranstaltungsort");
DEFINE("_ADMIN_EVENTS_SETT_HEAD6","Locations");
DEFINE("_ADMIN_EVENTS_SETT_HEAD7","Beschreibung");
DEFINE("_ADMIN_EVENTS_SETT_HEAD8","Mail Optionen");
DEFINE("_ADMIN_EVENTS_SETT_HEAD9","Bild Optionen");
DEFINE("_ADMIN_EVENTS_SETT_HEAD10","Frontend");
DEFINE("_ADMIN_EVENTS_SETT_HEAD11","Events");
DEFINE("_ADMIN_EVENTS_SETT_HEAD12","Generelle Layout Settings");
DEFINE("_ADMIN_EVENTS_SETT_HEAD13","Breite der Tabelle");
DEFINE("_ADMIN_EVENTS_SETT_HEAD14","Datums Spalte");
DEFINE("_ADMIN_EVENTS_SETT_HEAD15","Titel Spalte");
DEFINE("_ADMIN_EVENTS_SETT_HEAD16","Info Spalte");
DEFINE("_ADMIN_EVENTS_SETT_HEAD17","Location Spalte");
DEFINE("_ADMIN_EVENTS_SETT_HEAD18","Stadt Spalte");
DEFINE("_ADMIN_EVENTS_SETT_HEAD19","Kategorie Spalte");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG1","Integration");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL","W&auml;hle Community L&ouml;sung:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL1","Ich nutze keine");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL2","CB / CBE"); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL_DESC","W&auml;hlen Sie hier Ihre Community L&ouml;sung aus. Community Builder von Joomlapolis.com oder Community Builder Enhanced from www.kolloczek.com"); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEADREG2","Community Optionen");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION","Wie soll integriert werden:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION1","Keine Integration");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION2","Link zum Profil");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION3","Link zum Profil und Avatar zeigen");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION_DESC","W&auml;hlen Sie hier die Form der Integration. Event List unterst&uuml;tzt die Anzeige des Avatar und das erzeugen von Links zum Profil der zu einem Event registrierten Benutzer");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG3","Achtung");
DEFINE("_ADMIN_EVENTS_SETT_COMM_NOTES","Event List unterst&uuml;tzt AKReservations wenn detailiertere/ausf&uuml;hrlichere Registrierungen erforderlich sind. Platzieren Sie dazu den mambot trigger von AKReservations in die Eventbeschreibung des entsprechenden Events. Link: ");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION1","No Map service");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION2","Map 24");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION3","Google Map");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC","Location verstecken");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC_DESC","Location komplett verstecken. Alle anderen Einstellungen dies bez&uuml;glich k&ouml;nnen integriert werden.");
DEFINE("_ADMIN_EVENTS_SETT_WARNING","!! Achtung: Diese Funktion entweder hier oder im Modul aktivieren. NIE in beidem !!");
DEFINE("_ADMIN_EVENTS_SETT_INFOBUT_WARNING","!! Breite l&ouml;schen wenn &uuml;ber den Titel oder gar nicht auf die Detail Seite gelinkt wird !!");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK","Link zur Kategorieansicht anzeigen:");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK_DESC","Link zur Kategorieansicht auf der Frontpage anzeigen.");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG4","Frontend einliefern:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE","Registration erlauben:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE_DESC","Beim einliefern Benutzer entscheiden lassen ob registrieren erlaubt ist oder Standard setzen");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE","Abmelden erlauben:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE_DESC","Beim einliefern Benutzer entscheiden lassen ob abmelden erlaubt ist oder Standard setzen");
DEFINE("_ADMIN_EVENTS_SETT_GD_VERSION_TWO","GD Version ist 2. Thumbnails k&ouml;nnen aktiviert werden.");
DEFINE("_ADMIN_EVENTS_SETT_GD_VERSION_ONE","GD Version ist 1. Deaktivieren Sie bitte die Thumbnail Erzeugung.");

//Categories
DEFINE("_ADMIN_CATEGORIES_NAME","Name");
DEFINE("_ADMIN_CATEGORIES_PUBLISH","Ver&ouml;ffentlicht");
DEFINE("_ADMIN_CATEGORIES_ORDER","Sortieren");
DEFINE("_ADMIN_CATEGORIES_PUBLI","Ver&ouml;ffentlichen:");
DEFINE("_ADMIN_CATEGORIES_DESCR_OPT_LO","(optional)");
DEFINE("_ADMIN_CATEGORIES_DESCR_INTRO_LO","Die Kategoriebeschreibung");
DEFINE("_ADMIN_CATEGORIES_DESCR_LO","Kategoriebeschreibung:");
DEFINE("_ADMIN_EVENTS_DEL_CAT","FEHLER: Min. ein Event ist noch mit dieser Kategorie verkn&uuml;pft");
DEFINE("_ADMIN_CATEGORIES_DEL"," Kategorie(n) gel&ouml;scht");
DEFINE("_ADMIN_CATEGORIES_NAME_EMPTY","FEHLER: Bitte Feld Kategoriename ausf&uuml;llen!");
DEFINE("_ADMIN_CATEGORIES_IMAGE","Kategoriebild:");
DEFINE("_ADMIN_CATEGORIES_IMAGEPREV","Vorschau:");
DEFINE("_ADMIN_CATEGORIES_SAVE","Kategorie gespeichert");
DEFINE("_EVENTLIST_CATVIEW1","Veranstaltungen anzeigen");
DEFINE("_EVENTLIST_CATVIEWCOUNTEV","Veranstaltungen:");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_CAT"," Kategorie(n) erfolgreich ver&ouml;ffentlicht");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_CAT"," Kategorie(n) erfolgreich nicht mehr ver&ouml;ffentlicht");
DEFINE("_ADMIN_CATEGORIES_HEAD","Eventlist Kategorieen");

//Registration
DEFINE("_ADMIN_EVENTS_REGCOUNT","Reg. Benutzer");
DEFINE("_ADMIN_EVENTS_USERNAME","Benutzername");
DEFINE("_ADMIN_EVENTS_USERIP","IP");
DEFINE("_ADMIN_EVENTS_UREGDATE","Reg. Datum");
DEFINE("_ADMIN_EVENTS_USERID","Benutzer ID");
DEFINE("_ADMIN_EVENTS_USERDELETE","L&ouml;schen");
DEFINE("_ADMIN_REGISTER_DEL"," Benutzer gel&ouml;scht");
DEFINE("_ADMIN_EVENTS_UNREGISTRA","Abmelden erlauben?");
DEFINE("_EVENTS_REGISTRA_HEAD","Bereits Registrierte Benutzer:");
DEFINE("_EVENTS_REGISTRA_ALLRE","Sie haben sich bereits zu diesem Event angemeldet.");
DEFINE("_EVENTS_REGISTRA_LOGIN","Sie m&uuml;ssen angemeldet sein um sich an Events registrieren zu k&ouml;nnen.");
DEFINE("_EVENTS_REGISTRA_TOLATE","Der Registrationszeitraum ist abgelaufen.");
DEFINE("_EVENTS_REGISTRA_REG","Ich m&ouml;chte an diesem Event teilnehmen:");
DEFINE("_EVENTS_REGISTRA_BUTTON","Anmelden");
DEFINE("_EVENTS_REGISTRA_SUCCESS","Sie haben sich erfolgreich zu diesem Event angemeldet.");
DEFINE("_EVENTS_REGISTRA_UNREG","Von Event abmelden:");
DEFINE("_EVENTS_REGISTRA_BUTTON_UNREG","Abmelden");
DEFINE("_EVENTS_REGISTER_DEL","Sie haben sich erfolgreich von diesem Event abgemeldet.");

//new 0.8
DEFINE("_ADMIN_CATEGORIES_ACCESS","Zugriff");
DEFINE("_ADMIN_EVENTS_ACCESS_DENIED","Zugriff verweigert.");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION1","Nein");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION2","Ja");

//new 0.8.6
DEFINE("_ADMIN_GDVERSION_TWO","GD Version ist 2. Thumbnails k&ouml;nnen aktiviert werden.");
DEFINE("_ADMIN_GDVERSION_ONE","GD Version ist 1. Thumbnails m&uuml;ssen deaktiviert werden");

//new 0.8.7 (js no entities)
DEFINE("_ADMIN_CHOOSE_CITY","Stadt auswählen");
DEFINE("_ADMIN_CHOOSE_A_VENUE","Wähle Veranstaltungsort in");
DEFINE("_ADMIN_CHOOSE_A_CITY","Bitte wählen Sie eine Stadt");

//new 0.8.9
DEFINE("_ADMIN_EVENTS_ENDDATE","Veranstaltungsdatum (Ende):");
DEFINE("_ADMIN_EVENTS_INFOBUTTON_ERROR_MSG", "Sie haben die Einstellung gew&auml;hlt durch den infoicon auf die Details zu linken. Wenn Sie dies wirklich m&ouml;chten, geben sie eine Breite f&uuml;r die Infospalte im Layout Tab an");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER","Filterfunktion aktivieren:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER_DESC","Wennn aktiviert wird ein Suchfeld auf der Frontpage in manchen Ansichten angezeigt.");
?>