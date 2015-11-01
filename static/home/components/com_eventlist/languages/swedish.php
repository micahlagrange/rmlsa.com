<?php
/**
* @version 0.8.9 $Id: swedish.php 217 2007-06-18 14:49:07Z schlu $
* @package Eventlist
* @copyright (C) 2005 - 2006 Christoph Lukes
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @Swedish translation done (2007-01-10) by Christopher Hindefjord if you have any comments or changes then mail me at
*					translations@kachtus.net or mrchisol@kachtus.net or visit http://kachtus.net
* @Svensk översättning gjord (2007-01-10) av Christopher Hindefjord, kommentarer eller ändringar kan du skicka till 
*					translations@kachtus.net eller mrchisol@kachtus.net, du kan även besöka http://kachtus.net
*/

// Skicka in --> Lägger in

//Frontend
DEFINE("_EVENTS_DATE","Datum");
DEFINE("_EVENTS_CLUB","Plats");
DEFINE("_EVENTS_CITY","Ort");
DEFINE("_EVENTS_DETAILS","Detaljer");
DEFINE("_EVENTS_BACK","tillbaka");
DEFINE("_EVENTS_EVENT","Evenemang");
DEFINE("_EVENTS_WHEN","N&auml;r:");
DEFINE("_EVENTS_WHERE","Var:");
DEFINE("_EVENTS_DESC","Evenemangsbeskrivning:");
DEFINE("_EVENTS_LOCAT","Plats");
DEFINE("_EVENTS_LOCDESC","Platsbeskrivning:");
DEFINE("_EVENTS_DESCALERT","Ledsen, Saknar beskrivning");
DEFINE("_EVENTS_COUNTRY_LO","Land:");
DEFINE("_ADMIN_EVENTS_DETA_REDI","Tilltr&auml;de nekas");
DEFINE("_EVENTS_HOMEPAGE_LO","Webplats:"); // Ja, webplats (alt. website), orden hemsida och websida betyder en sida (hemsida == första-/startsidan)
DEFINE("_EVENTS_HOMEPAGENO_LO","Ingen webplats angiven!");
DEFINE("_EVENTLIST_SHARCHIVE","Visa arkivet");
DEFINE("_EVENTS_MAP","Visa karta");

//images
DEFINE("_EVENTS_IMAGEEMPT","V&auml;nligen v&auml;lj en bild f&ouml;r uppladdning");
DEFINE("_EVENTS_IMAGESIZEBIG","Filen &auml;r f&ouml;rstor");	// Bilden <> Filen ?
DEFINE("_EVENTS_IMAGECHARACT","Filnamnet f&aring;r bara best&aring; av alfanumeriksa tecken (a-z A-Z 0-9) och inga mellanslag.");
DEFINE("_EVENTS_IMAGEEXIST","Filen finns redan. V&auml;nligen ange ett annat namn.");
DEFINE("_EVENTS_IMAGETYPE","Filtypen m&aring;ste vara en av följande: gif, png, jpg eller bmp.");
DEFINE("_EVENTS_IMAGEFAIL","Uppladdningen misslyckades");
DEFINE("_ADMIN_EVENTS_CHOOIMAGE","V&auml;lj bild:");
DEFINE("_ADMIN_EVENTS_IMAGEUPL","V&auml;lj en bild att ladda upp:");
DEFINE("_EVENTS_IMAGEUPLSUCCESS","Uppladdning &auml;r klar!");
DEFINE("_EVENTS_IMAGEUPLNOGD","GD-Library hittades inte! V&auml;nligen st&auml;ng av skapning av tumnaglar.");
DEFINE("_EVENTS_IMAGEUPLPNG","PNG-st&ouml;d finns");
DEFINE("_EVENTS_IMAGEUPLNOPNG","PNG-st&ouml;d finns INTE");
DEFINE("_EVENTS_IMAGEUPLJPG","JPG-st&ouml;d finns");
DEFINE("_EVENTS_IMAGEUPLNOJPG","JPG-st&ouml;d finns INTE");
DEFINE("_EVENTS_IMAGEUPLGIF","GIF-st&ouml;d finns");
DEFINE("_EVENTS_IMAGEUPLNOGIF","GIF-st&ouml;d finns INTE");
DEFINE("_ADMIN_EVENTS_IMAGETARGET","M&aring;lkatalog:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERS","GD Version:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERSWARN","Notera: Eventlist kr&auml;ver minst GD-Library Version 2 för att kunna skapa tumnaglar. Om Ni inte har GD, eller bara version 1, s&aring; b&ouml;r ni avaktivera skapandet av tumnaglar.");

//Backend

//add/edit event
DEFINE("_ADMIN_EVENTS_HEADER_EV","EventList - Evenemang");
DEFINE("_ADMIN_EVENTS_DATE","Datum:");
DEFINE("_ADMIN_EVENTS_DATE_NOTICE","Format &aring;&aring;&aring;&aring;-mm-dd");
DEFINE("_ADMIN_EVENTS_TIME_NOTICE","Format: tt:mm");
DEFINE("_ADMIN_EVENTS_CLUB_ID","Plats:");
DEFINE("_ADMIN_EVENTS_DEL"," Evenemang raderade");
DEFINE("_ADMIN_EVENTS_DELFORM","FEL: Datum har fel format");
DEFINE("_ADMIN_EVENTS_DELFORMT","FEL: Tid har fel format, eller så har Ni aktiverat visning av tid i frontenden. Om så, så måste Du fylla i tid.");
DEFINE("_ADMIN_EVENTS_EMPTY","FEL: L&auml;gg till en plats f&ouml;rst.");
DEFINE("_ADMIN_EVENTS_SAVE","Evenemang sparat.");
DEFINE("_ADMIN_EVENTS_DESCR","Evenemangsbeskrivning:");
DEFINE("_ADMIN_EVENTS_DESCR_OPT","frivillig");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO","Evenemangsbeskrivning");
DEFINE("_ADMIN_EVENTS_TIME","Tid:");
DEFINE("_ADMIN_EVENTS_TITEL","Titel:");
DEFINE("_ADMIN_EVENTS_NO_LOC","FEL: Välj en plats eller lägg till en plats först. Du kan lägga till evenemang efter det");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_ENDTIME","Sluttid:");
DEFINE("_ADMIN_EVENTS_ENDTIME_NOTICE","Format: tt:mm! (frivilligt)");
DEFINE("_ADMIN_EVENTS_PUBLI","Publicerad?");
DEFINE("_ADMIN_EVENTS_CAT_ID","Kategori:");
DEFINE("_ADMIN_EVENTS_SEL_CAT","V&auml;lj en kategori");
DEFINE("_ADMIN_EVENTS_SEL_LOC","V&auml;lj en plats");
DEFINE("_ADMIN_EVENTS_CATEMPTY","FEL: Välj en kategori eller lägg till en kategori först. Du kan lägga till evenemang efter det");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SUC_ARCH"," Evenemang(en) har Arkiverats");
DEFINE("_ADMIN_EVENTS_SUC_PUBL"," Evenemang(en) har Publicerats");
DEFINE("_ADMIN_EVENTS_SUC_UNARCH"," Evenemang(en) har tagits bort fr&aring;n arkivet");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL"," Evenemang(en) har g&ouml;mts");
DEFINE("_ADMIN_EVENTS_OTHER","Annat");
DEFINE("_ADMIN_EVENTS_REGISTRA","M&ouml;jligg&ouml;r registrering:");

//add/edit location
DEFINE("_ADMIN_EVENTS_HEADER_LO","Eventlist - Plats");
DEFINE("_ADMIN_EVENTS_CLUB_LO","Plats:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LO","Platsens website:");		//	website ist. för webplats (upprepning)
DEFINE("_ADMIN_EVENTS_CLUBHOME_NOTICE_LO","URL måste vara formaterad som http://www.google.com!");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_CITY_LO","Ort:");
DEFINE("_ADMIN_EVENTS_DEL_LO", "FEL: det finns minst ett evenemang för platsen.");
DEFINE("_ADMIN_EVENTS_DELYES_LO", " Plats(er) radderade");
DEFINE("_ADMIN_EVENTS_SAVECLUB_LO","FEL: lägg till plats");
DEFINE("_ADMIN_EVENTS_SAVEHOMEP_LO","FEL: lägg till website");
DEFINE("_ADMIN_EVENTS_SAVETOWN_LO","FEL: lägg till ort");
DEFINE("_ADMIN_EVENTS_SAVE_LO","Plats sparad");
DEFINE("_ADMIN_EVENTS_DESCR_LO","Platsbeskrivning");
DEFINE("_ADMIN_EVENTS_DESCR_OPT_LO","valfri");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO_LO","Platsbeskrivningen");
DEFINE("_ADMIN_EVENTS_CLUBSTREET_LO","Gata:");
DEFINE("_ADMIN_EVENTS_CLUBPLZ_LO","Postkod:");
DEFINE("_ADMIN_EVENTS_CLUBCOUNTRY_LO","Land (SE,DE,AT,CH, etc.):");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SAVEADRESS_LO","FEL: Du har valt någon av följande: Visa map24, Visa adress. Avaktivera dessa om du inte vill ange en adress");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_OPTIONAL_LO","* är valfria f&auml;lt. Notera: Adressf&auml;lten &auml;r bara valfria om du har avaktiverat map24!");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_LO"," Plats(er) har publicerats");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_LO"," Plats(er) har g&ouml;mts");
DEFINE("_ADMIN_EVENTS_ADRESSDET","Adressinformation");
//list events
DEFINE("_ADMIN_EVENTS_DATE_LI_EV","Datum");
DEFINE("_ADMIN_EVENTS_CLUB_LI_EV","Plats");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_EV","Platsens website");
DEFINE("_ADMIN_EVENTS_CITY_LI_EV","Ort");
DEFINE("_ADMIN_EVENTS_LIMITBOX_LI_EV","Visa: ");
DEFINE("_ADMIN_EVENTS_TITEL_LI_EV","Titel");
DEFINE("_ADMIN_EVENTS_TIME_LI_EV","Evenemangsstart");
DEFINE("_ADMIN_EVENTS_PUBLISH_LI_EV","Publicerad");
DEFINE("_ADMIN_EVENTS_USERDELI_LI_EV","Anv&auml;ndarevenemang?");
DEFINE("_ADMIN_EVENTS_CAT_LI_EV","Kategori");
DEFINE("_ADMIN_EVENTS_SEARCH_LI_EV","S&ouml;k:");

//list locations
DEFINE("_ADMIN_EVENTS_CLUB_LI_LO","Plats");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_LO","Platsens website");
DEFINE("_ADMIN_EVENTS_CITY_LI_LO","Ort");
DEFINE("_ADMIN_EVENTS_ORDER_LI_LO","Flytta om"); // Sortera ?

//Frontend deliver events
DEFINE("_ADMIN_EVENTS_DELIVNAME","Ditt namn:");
DEFINE("_ADMIN_EVENTS_DELIVNAME_DESC","V&auml;nligen ange ditt namn h&auml;r");
DEFINE("_ADMIN_EVENTS_DELIVMAIL","Din E-post adress:");
DEFINE("_ADMIN_EVENTS_DELIVMAIL_DESC","V&auml;nligen ange din E-post adress h&auml;r");
DEFINE("_EVENTS_DELIVER","Dela ut evenemang"); // Deliver...
DEFINE("_EVENTS_VALIDATE","FEL: Vänligen fyll i alla fält");
DEFINE("_ADMIN_EVENTS_DELIV_REDI","Det &auml;r inte till&aring;tet att skicka in evenemang");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILBOD_1"," Du har f&aring;tt ett inskickad evenemang fr&aring;n en anv&auml;ndare ");
DEFINE("_EVENTS_DELIVMAILBOD_2"," Anv&auml;ndarens mailadress: ");
DEFINE("_EVENTS_DELIVMAILBOD_3"," Anv&auml;ndarens IP: ");
DEFINE("_EVENTS_DELIVMAILBOD_4"," Inskickad kl.: ");
DEFINE("_EVENTS_DELIVMAILBOD_5"," Evenemangstitel: ");
DEFINE("_EVENTS_DELIVMAILBOD_6"," Datum: ");
DEFINE("_EVENTS_DELIVMAILBOD_7"," Evenemangsstart: ");
DEFINE("_EVENTS_DELIVMAILBOD_8"," Plats: ");
DEFINE("_EVENTS_DELIVMAILBOD_9"," Beskrivning: ");
DEFINE("_EVENTS_DELIVMAILBOD_10"," : Nytt Evenemang ");
DEFINE("_EVENTLIST_DELIVER","Skicka in nytt Evenemang");
DEFINE("_EVENTLIST_BACK","tillbaka");
DEFINE("_ADMIN_EVENTS_DELMAILFORM","FEL: Email-adressen är av fel format!");
DEFINE("_ADMIN_EVENTS_DELTITLLEN","FEL: Titeln är för lång!");
DEFINE("_ADMIN_EVENTS_DELNAMLEN","FEL: Namnet är för långt!");
DEFINE("_EVENTS_DELTEXTARHTML","HTML &auml;r inte till&aring;tet!");
DEFINE("_EVENTS_RESTZ","tillg&auml;nglig");
DEFINE("_EVENTS_RESTZAKT","uppdatera");
DEFINE("_EVENTS_DEL_DATE_EMPT","Vänligen skriv in ett datum!");
DEFINE("_EVENTS_DEL_TIME_EMPT","Vänligen skriv in en tid!");
DEFINE("_EVENTS_DEL_TITEL_EMPT","Vänligen skriv in en titel!");
DEFINE("_EVENTS_DEL_CATEG_EMPT","Vänligen vä;lj en kategori!");
DEFINE("_EVENTS_DEL_LOCAT_EMPT","Vänligen välj en plats!");
DEFINE("_EVENTS_DEL_TIME_FORM","FEL: Fel format på tiden");

//Frontend deliver location
DEFINE("_EVENTLIST_DELIVER_LOC","Skicka in ny plats");
DEFINE("_EVENTS_DELIVMAILLOCBOD_1"," Du har f&aring;tt en ny plats inskickad av en anv&auml;ndare ");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILLOCBOD_2"," Anv&auml;ndarens mailadress: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_3"," Anv&auml;ndare - IP: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_4"," Inskickad klockslag: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_5"," Plats: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_6"," Plats URL: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_7"," Gata: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_8"," Postnummer: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_9"," Ort: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_10"," Landskod: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_11"," Beskrivning: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_12"," : Ny plats ");
DEFINE("_EVENTS_DELIVER_LOC","Leverera plats");
DEFINE("_EVENTS_DELURLLOCFORM","URLen är för lång");
DEFINE("_EVENTS_DELSTREETLOCFORM","Gatunamnet är för långt");
DEFINE("_EVENTS_DELPLZLOCFORM","Postnummret är för långt");
DEFINE("_EVENTS_DELCITYLOCFORM","Ort är för långt");
DEFINE("_EVENTS_DELCOUNTRYLOCFORM","Landskoden är för lång");
DEFINE("_EVENTS_DELURLLOCFORM2","FEL: Fel format på webadressen!");
DEFINE("_EVENTS_DEL_LOC_STREET_EMPT","FEL: Vänligen fyll i en gata!");
DEFINE("_EVENTS_DEL_LOC_PLZ_EMPT","FEL: Vänligen fyll i en postkod!");
DEFINE("_EVENTS_DEL_LOC_COUNTRY_EMPT","FEL: Vänligen fyll i en landskod!");

//settings
DEFINE("_ADMIN_EVENTS_SETT_HEADER","Eventlist - Inst&auml;llningar");
DEFINE("_ADMIN_EVENTS_SETT_SAVE","Inst&auml;llningarna har sparats");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD","Hantera gamla evenemang:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD1","G&ouml;r ingenting");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD2","Radera gamla evenemang");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD3","Arkivera gamla evenemang");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD_DESC","Radera eller Arkivera gamla evenemang automatiskt.");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR","Antal dagar:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR_DESC","Antal g&aring;gna dagar som inte skall raderas eller arkiveras. Det h&auml;r har ingen effekt om valet ovan &auml;r avaktiverat.");
DEFINE("_ADMIN_EVENTS_SETT_EVNR","Antal evenemang p&aring; framsidan:");
DEFINE("_ADMIN_EVENTS_SETT_EVNR_DESC","Antal evenemang som skall visas p&aring; framsidan.");
DEFINE("_ADMIN_EVENTS_SETT_MAPID","Ditt Map24 ID:");
DEFINE("_ADMIN_EVENTS_SETT_MAPID_DESC","Du m&aring;ste registrera dig hos Map24 f&ouml;r att f&aring; ett ID.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME","Visa tid:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME_DESC","Visa tiden p&aring; framsidan.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL","Visa titel:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL_DESC","Visa evenemangstitel p&aring; framsidan.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC","Visa plats:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC_DESC","Visa plats p&aring; framsidan.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY","Visa ort:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY_DESC","Visa ort p&aring; framsidan.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP","Visa L&auml;nk till karta:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP_DESC","Visa L&auml;nk till karta p&aring; Detaljsidan. Notera: Du m&aring;ste fylla i ditt Map24 ID om du vill anv&auml;nda denna m&ouml;jligheten.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER","Visa rubrik:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER_DESC","Visa rubrik p&aring; framsidan.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO","Visa inledningen:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO_DESC","Visa inledningen p&aring; f&ouml;rsta sidan.");
DEFINE("_ADMIN_EVENTS_SETT_INTROT","Inledning f&ouml;r Eventlist:");
DEFINE("_ADMIN_EVENTS_SETT_INTROT_DESC","Den h&auml;r texten visas ovanf&ouml;r listningen p&aring; framsidan.");
DEFINE("_ADMIN_EVENTS_SETT_TABLW","Tabbelbredd i % :");
DEFINE("_ADMIN_EVENTS_SETT_TABLW_DESC","Listans bredd p&aring framsidan.");
DEFINE("_ADMIN_EVENTS_SETT_DATEC","Datumkolumnens bredd i %:");
DEFINE("_ADMIN_EVENTS_SETT_DATEC_DESC","Datumkolumnens bredd.");
DEFINE("_ADMIN_EVENTS_SETT_CNAME","Valfritt namn:");
DEFINE("_ADMIN_EVENTS_SETT_CNAME_DESC","&Auml;ndra detta till vad du vill.");
DEFINE("_ADMIN_EVENTS_SETT_TITELW","Titelkolumens bredd i %:");
DEFINE("_ADMIN_EVENTS_SETT_TITELW_DESC","Titelkolumens bredd (l&auml;mna tom om du har avaktiverat den)");
DEFINE("_ADMIN_EVENTS_SETT_INFOB","Infoknappskolumnens bredd i %:");
DEFINE("_ADMIN_EVENTS_SETT_INFOB_DESC","Bredden av infoknappskolumnen");
DEFINE("_ADMIN_EVENTS_SETT_LOCA","Platskolumnens bredd i %:");
DEFINE("_ADMIN_EVENTS_SETT_LOCA_DESC","Platskolumnens bredd (l&auml;mna tom om du har avaktiverat den)");
DEFINE("_ADMIN_EVENTS_SETT_CITYW","Ortskolumnens bredd i %:");
DEFINE("_ADMIN_EVENTS_SETT_CITYW_DESC","Ortskolumnens bredd (l&auml;mna tom om du har avaktiverat den)");
DEFINE("_ADMIN_EVENTS_SETT_UNWR","Konfigureringsfilen &auml;r inte skrivbar!");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE","Datumformat:");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE_DESC","Datumformat anv&auml;nder samma format som PHP-funktionen strftime, t.ex.: %d.%m.%Y. Mer information: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME","Tidsformat:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME_DESC","Tidsformat anv&auml;nder samma format som PHP-funktionen strftime, t.ex.:%H.%M. Mer information: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME","Namn:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME_DESC","Fyll t.ex. i &quot;kl.&quot; eller &quot;klockan&quot;. Detta visas framf&ouml;r tiden i frontenden. L&auml;mna den tom om du inte beh&ouml;ver den."); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS","Visa L&auml;nk till detaljsidan:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS_DESC","Visa L&auml;nk till detaljsidan och var? (Titel som l&auml;nk fungerar bara om &quot;Visa titel&quote; &auml;r ja, Ikoner fungerar endast om Du har satt bredden p&aring; ikonkolumnen vid Utseendeinst&auml;llningar)");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIMEDET_DESC","Visa tid p&aring detaljsidan.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC","Visa evenemangsbeskrivning:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC_DESC","Visa evenemangsbeskrivning p&aring detaljsidan");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL","Visa evenemangstitel:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL_DESC","Visa evenemangstitel p&aring detaljsidan.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS","Visa platsens adress:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS_DESC","Visa platsens adress p&aring detaljsidan.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC","Visa platsbeskrivning:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC_DESC","Visa platsbeskrivning p&aring detaljsidan.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB","Visa l&auml;nk till platsvyn:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB_DESC","Visa l&auml;nk till platsvyn p&aring framsidan.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB","Visa l&auml;nk till plats:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB_DESC","Visa l&auml;nk till plats p&aring detaljsidan.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL","Nya evenemang fr&aring;n anv&auml;ndare:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL_DESC","Till&aring;t anv&auml;ndare att skicka in evenemang fr&aring;n framsidan och s&auml;tta anv&auml;ndarrankningen.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL","Skicka mail vid nya inskickningar:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL_DESC","Informera admin via email om nya inskickade evenemang fr&aring; anv&auml;ndare?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1","Mailmottagare:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1_DESC","E-mail adressen till den person som skall f&aring; informationsmailet.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2","CC: Mailmottagare:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2_DESC","E-mail adressen till den andra personen som skall f&aring; informationsmailet (valfri).");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT","Max. l&auml;ngd av evenemangs- och platsbeskrivningarna.");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT_DESC","Max. l&auml;ngd av evenemangs- och platsbeskrivningar. Om beskrivningen &auml;r f&ouml;r l&arign;ng kommer beskrivningen kortas ner och noteringen [f&ouml;rkortad] att l&auml;ggas till.");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET1","Detaljer av");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET2","Titel som L&auml;nk"); // Dålig översättning?
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET3","Ikon som L&auml;nk"); // Dålig översättning?
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET4","B&aring;da");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB","Autopublicera?");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB_DESC","Publicera evenemang automatiskt?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC","Nya platser fr&auml;n anv&auml;ndare:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC_DESC","Till&aring;t anv&auml;ndare att skicka in platser fr&aring;n framsidan och s&auml;tta anv&auml;ndarrankningen.");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUBLOCS_DESC","Publicera platser automatiskt?");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF1","Av");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF2","Bara nytt evenemang");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF3","Bara ny plats");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF4","B&aring;da");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT","Visa kategori:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT_DESC","Visa kategori p&aring;framsidan.");
DEFINE("_ADMIN_EVENTS_SETT_CATW","Kategorikolumnens bredd i %:");
DEFINE("_ADMIN_EVENTS_SETT_CATW_DESC","Kategorikolumnens bredd (l&auml;mna tom om du har inaktiverat detta)");
DEFINE("_ADMIN_EVENTS_SETT_VIEW","V&auml;lj f&ouml;rvald frontend-layout:");
DEFINE("_ADMIN_EVENTS_SETT_VIEW1","Enkel Listvy");
DEFINE("_ADMIN_EVENTS_SETT_VIEW2","Enkel Kategorilista");
DEFINE("_ADMIN_EVENTS_SETT_VIEW3","Detaljerad Kategorilista");
DEFINE("_ADMIN_EVENTS_SETT_VIEW4","Platsh&aring;llare2");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_VIEW_DESC","V&auml;lj f&ouml;rvald frontend-layout h&auml;r. 'Enkel Listvy' &auml;r den gamla layouten.");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC_DESC","Ge &auml;ven &quot;barngrupper&quot; tillg&aring;ng? Om nej s&aring; &auml;r tillg&aring;ng begr&auml;nsad till endast vald grupp. Notera: Administrat&ouml;rer har alltid tillg&aring;ng.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC","Rekursivt:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE","Max. bildfilsstorlek:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE_DESC","Maximal bildfilsstorlek i KB");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT","Max. h&ouml;jd p&aring; tumnaglar:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT_DESC","Maximal h&ouml;jd p&aring; tumnaglar och kategoribilder");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH","Max. bredd p&aring; tumnaglar:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH_DESC","Maximal bredd p&aring; tumnaglar och kategoribilder");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB","Beh&aring;ll proportioner:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB_DESC","Beh&aring;ll proportioner eller skala om?");
DEFINE("_ADMIN_EVENTS_SETT_GDSTATUS","Status: ");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE","Aktivera tumnaglar:");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE_DESC","Avaktivera detta om status visar att GD-Library inte hittades eller att versionen bara &auml;r version 1.");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB","Bilduppladdning:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB1","Avaktiverad");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB2","Valfri");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB3","Obligatorisk");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB_DESC","Ska uppladdning vara avaktiverat, valfri eller ett m&aring;ste f&ouml;r anv&auml;ndare");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD","Chmod f&ouml;r bilder:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD_DESC","Fyll i de r&auml;ttigheter du vill ge till bilderna. T.ex. 0740");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD1","Evenemangshantering");
DEFINE("_ADMIN_EVENTS_SETT_HEAD2","Visning - Inst&auml;llningar");
DEFINE("_ADMIN_EVENTS_SETT_HEAD3","Intro");
DEFINE("_ADMIN_EVENTS_SETT_HEAD4","AC - Evenemang");
DEFINE("_ADMIN_EVENTS_SETT_HEAD5","AC - Platser");
DEFINE("_ADMIN_EVENTS_SETT_HEAD6","Platser");
DEFINE("_ADMIN_EVENTS_SETT_HEAD7","Beskrivning - L&auml;ngd");
DEFINE("_ADMIN_EVENTS_SETT_HEAD8","Mailhantering");
DEFINE("_ADMIN_EVENTS_SETT_HEAD9","Bildhantering");
DEFINE("_ADMIN_EVENTS_SETT_HEAD10","Frontend");
DEFINE("_ADMIN_EVENTS_SETT_HEAD11","Evenemang");
DEFINE("_ADMIN_EVENTS_SETT_HEAD12","Generalla Layoutinst&auml;llningar");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD13","Bredd p&aring; tabellen");
DEFINE("_ADMIN_EVENTS_SETT_HEAD14","Datumkolumn");
DEFINE("_ADMIN_EVENTS_SETT_HEAD15","Titelkolumn");
DEFINE("_ADMIN_EVENTS_SETT_HEAD16","Infokolumn");
DEFINE("_ADMIN_EVENTS_SETT_HEAD17","Platskolumn");
DEFINE("_ADMIN_EVENTS_SETT_HEAD18","Ortskolumn");
DEFINE("_ADMIN_EVENTS_SETT_HEAD19","Kategorikolumn");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG1","Integration");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL","V&auml;lj Community-l&ouml;sning:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL1","Anv&auml;nd ingen");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL2","CB / CBE"); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL_DESC","V&auml;lj &quot;Community-l&ouml;sningen&quot; du anv&auml;nder. &quot;Community Builder&quot; fr&aring;n Joomlapolis eller &quot;Community Builder Enhanced&quot; fr&aring;n www.kolloczek.com");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEADREG2","Community Solution Options");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION","V&auml;lj integrationsinst&auml;llningar:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION1","Ingen integration");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION2","L&auml;nk till profil");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION3","L&auml;nk till profil och visa Avatar");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION_DESC","V&auml;lj typ av Integration. EventList st&ouml;djer visning av Avataren och skapning av l&auml;nkar till Profilen fr&aring;n anv&auml;ndaren som har registrerat sig till ett evenemang"); // ?? osäker...
DEFINE("_ADMIN_EVENTS_SETT_HEADREG3","Se hit!");
DEFINE("_ADMIN_EVENTS_SETT_COMM_NOTES","EventList st&ouml;djer &quote;AKReservation&quote; om du beh&ouml;ver mer detaljerada registeringar. Placera helt enkelt mambot triggern i Evenemangsbeskrivningen fr&aring; EventList. Link: "); // ??? Förstår inte riktigt vad de menar på engelska, konstig formulering...
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION1","Ingen karttj&auml;nst");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION2","Map 24");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION3","Google Map");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC","G&ouml;m platsdata");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC_DESC","G&ouml;m platsdetaljer helt. De &ouml;vriga inst&auml;llningarna kommer inte ha n&aring;gon effekt.");
DEFINE("_ADMIN_EVENTS_SETT_WARNING","!! Kolla dina modulinst&auml;llningar! Aktivera bara detta om det &auml;r avaktiverat i modulen. Anv&auml;nd inte detta tv&aring; g&aring;nger !!");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_INFOBUT_WARNING","!! Raddera bredden om du l&auml;nkar till detaljsidan med titeln eller om du inte anv&auml;nder den !!");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK","Visa l&auml;nk till kategorivy:");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK_DESC","Visa l&auml;nk till kategorivy p&aring framsidan.");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG4","Frontend:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE","Till&aring;t registrering:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE_DESC","Till&aring;t anv&auml;ndare att v&auml;lja om de vill till&aring;ta registrering till Evenemangen som de l&auml;gger in, eller anv&auml;nd standard");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE","Till&aring;t avregistrering:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE_DESC","Till&aring;t anv&auml;ndare att v&auml;lja om de vill till&aring;ta avregistrering till the Evenemangen som de l&auml;gger in, eller anv&auml;nd standard");
DEFINE("_ADMIN_EVENTS_SETT_GD_VERSION_TWO","GD version &auml;r 2. Skapning av tumnaglar kan aktiveras.");
DEFINE("_ADMIN_EVENTS_SETT_GD_VERSION_ONE","GD version &auml; 1. Avaktivera skapning av tumnaglar.");

//Categories
DEFINE("_ADMIN_CATEGORIES_NAME","Namn");
DEFINE("_ADMIN_CATEGORIES_PUBLISH","Publicera?");
DEFINE("_ADMIN_CATEGORIES_ORDER","Flytta om");
DEFINE("_ADMIN_CATEGORIES_PUBLI","Publicera:");
DEFINE("_ADMIN_CATEGORIES_DESCR_OPT_LO","(valfri)");
DEFINE("_ADMIN_CATEGORIES_DESCR_INTRO_LO","Kategoribeskrivning");
DEFINE("_ADMIN_CATEGORIES_DESCR_LO","Kategoribeskrivning:");
DEFINE("_ADMIN_EVENTS_DEL_CAT","FEL: minst ett evenemang är kopplat till den här kategorin");
DEFINE("_ADMIN_CATEGORIES_DEL"," Kategori(er) radderad(e)");
DEFINE("_ADMIN_CATEGORIES_NAME_EMPTY","FEL: Vänligen fyll i ett kategorinamn!");
DEFINE("_ADMIN_CATEGORIES_IMAGE","Kategoribild:");
DEFINE("_ADMIN_CATEGORIES_IMAGEPREV","F&ouml;rhandsgranskning:");
DEFINE("_ADMIN_CATEGORIES_SAVE","Kategori sparad");
DEFINE("_EVENTLIST_CATVIEW1","Visa Evenemang");
DEFINE("_EVENTLIST_CATVIEWCOUNTEV","Evenemang:");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_CAT"," Kategori(er) publicerat");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_CAT"," Kategori(er) g&ouml;mda");
DEFINE("_ADMIN_CATEGORIES_HEAD","EventList - Kategorier");

//Registration
DEFINE("_ADMIN_EVENTS_REGCOUNT","Reg. Anv&auml;ndare");
DEFINE("_ADMIN_EVENTS_USERNAME","Anv&auml;ndarnamn");
DEFINE("_ADMIN_EVENTS_USERIP","IP");
DEFINE("_ADMIN_EVENTS_UREGDATE","Reg. Datum");
DEFINE("_ADMIN_EVENTS_USERID","Anv&auml;ndarID");
DEFINE("_ADMIN_EVENTS_USERDELETE","Raddera");
DEFINE("_ADMIN_REGISTER_DEL"," Registrerad(e) Anv&auml;ndare radderad(e)");
DEFINE("_ADMIN_EVENTS_UNREGISTRA","Till&aring;t anv&auml;ndare att avregistrera?");
DEFINE("_EVENTS_REGISTRA_HEAD","Registrerade Anv&auml;ndare:");
DEFINE("_EVENTS_REGISTRA_ALLRE","Du &auml;r redan registrerad f&ouml;r detta Evenemang.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_LOGIN","Du m&aring;ste logga in f&ouml;r att registrera dig f&ouml;r detta evenemang.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_TOLATE","Det &auml;r redan f&ouml;rsent att registrera sig f&ouml;r detta evenemang.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_REG","Jag skall g&aring; p&aring; detta evenemang:");
DEFINE("_EVENTS_REGISTRA_BUTTON","Registrera");
DEFINE("_EVENTS_REGISTRA_SUCCESS","Du har nu registrerat dig f&ouml;r detta evenemang.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_UNREG","Avregistrera fr&aring;n detta Evenemang:");
DEFINE("_EVENTS_REGISTRA_BUTTON_UNREG","Avregistrera");
DEFINE("_EVENTS_REGISTER_DEL","Du &aring;re inte l&aring;ngre registrerad f&ouml;r detta evenemang");	//changed in 0.8.3

//new 0.8
DEFINE("_ADMIN_CATEGORIES_ACCESS","Tilltr&auml;de");
DEFINE("_ADMIN_EVENTS_ACCESS_DENIED","Tilltr&auml;de nekat.");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION1","Nej");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION2","Ja");

//new 0.8.6
DEFINE("_ADMIN_GDVERSION_TWO","GD version &auml;r 2. Skapning av tumnaglar kan aktiveras.");
DEFINE("_ADMIN_GDVERSION_ONE","GD version &auml;r 1. Avaktivera skapning av tumnaglar.");

//new 0.8.7
DEFINE("_ADMIN_CHOOSE_CITY","V&auml;lj en ort");
DEFINE("_ADMIN_CHOOSE_A_VENUE","V&auml;lj en plats i");
DEFINE("_ADMIN_CHOOSE_A_CITY","V&auml;nligen v&auml;lj en ort ovan");


DEFINE("_ADMIN_EVENTS_ENDDATE","Evenemangsdatum (slut):");
// Not 100% sure on this translation.. Didn't really get what you ment..
DEFINE("_ADMIN_EVENTS_INFOBUTTON_ERROR_MSG", "Du har valt att l&auml;nka med  informationsknappen, men du har inte gett den en bredd. V&auml;nligen v&auml;lj att antingen inte l&auml;nka med infoknappen (p&aring; &quot;Basic Settingstabben&quot;) eller v&auml;lj en bredd f&ouml;r infoknappen (p&aring; Layouttabben)");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER","Visa filter:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER_DESC","Visa filterf&auml;ltet p&aring; f&ouml;rstasidan.");
?>
