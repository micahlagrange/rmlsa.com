<?php
/**
* @version 0.8.9 $Id: norwegian.php 220 2007-06-19 10:42:57Z schlu $
* @package Eventlist
* @copyright (C) 2005 - 2006 Christoph Lukes
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @Norwegian translation done (2007-03-07) by Daniel Ervik, if you have any comments or changes then mail me at
*					daervik@gmail.com
* @Norsk oversetting gjort (2007-03-07) av Daniel Ervik, kommentarer eller endringer kan du sende til 
*					daervik@gmail.com
*/
//Frontend
DEFINE("_EVENTS_DATE","Dato");
DEFINE("_EVENTS_CLUB","Plass");
DEFINE("_EVENTS_CITY","By");
DEFINE("_EVENTS_DETAILS","Detaljer");
DEFINE("_EVENTS_BACK","tilbake");
DEFINE("_EVENTS_EVENT","Event");
DEFINE("_EVENTS_WHEN","N&aring;r:");
DEFINE("_EVENTS_WHERE","Hvor:");
DEFINE("_EVENTS_DESC","Eventbeskrivelse:");
DEFINE("_EVENTS_LOCAT","Plass");
DEFINE("_EVENTS_LOCDESC","Plassbeskrivelse:");
DEFINE("_EVENTS_DESCALERT","Beklager, beskrivelse mangler");
DEFINE("_EVENTS_COUNTRY_LO","Land:");
DEFINE("_ADMIN_EVENTS_DETA_REDI","Du har ikke tilgang");
DEFINE("_EVENTS_HOMEPAGE_LO","Hjemmeside:"); // Ja, webplats (alt. website), orden hemsida och websida betyder en sida (hemsida == första-/startsidan)
DEFINE("_EVENTS_HOMEPAGENO_LO","Ingen Hjemmeside tilgjengelig!");
DEFINE("_EVENTLIST_SHARCHIVE","Vis arkivet");
DEFINE("_EVENTS_MAP","Vis kart");
//images
DEFINE("_EVENTS_IMAGEEMPT","Venligst velg et bilde &aring; laste opp");
DEFINE("_EVENTS_IMAGESIZEBIG","Filen er for stor");	// Bilden <> Filen ?
DEFINE("_EVENTS_IMAGECHARACT","Filnavn m&aring; bare inneholde bokstaver og tall (a-z A-Z 0-9) og ingen &aring;penrom.");
DEFINE("_EVENTS_IMAGEEXIST","Bildet finnes allerede. Venligst velg et annet navn.");
DEFINE("_EVENTS_IMAGETYPE","Filtypen m&aring; være en av f&oslash;lgende: gif, png, jpg eller bmp.");
DEFINE("_EVENTS_IMAGEFAIL","Opplastningen misslyktes");
DEFINE("_ADMIN_EVENTS_CHOOIMAGE","Velg bilde:");
DEFINE("_ADMIN_EVENTS_IMAGEUPL","Velg bilde &aring; laste opp:");
DEFINE("_EVENTS_IMAGEUPLSUCCESS","Bildet ble latet opp uten problemer!");
DEFINE("_EVENTS_IMAGEUPLNOGD","Fant ikke GD-Library! Venligst deaktiver miniatyrbilder.");
DEFINE("_EVENTS_IMAGEUPLPNG","PNG-st&oslash;tte tilgjengelig");
DEFINE("_EVENTS_IMAGEUPLNOPNG","PNG-st&oslash;tte IKKE tilgjengelig");
DEFINE("_EVENTS_IMAGEUPLJPG","JPG-st&oslash;tte tilgjengelig");
DEFINE("_EVENTS_IMAGEUPLNOJPG","JPG-st&oslash;tte IKKE tilgjengelig");
DEFINE("_EVENTS_IMAGEUPLGIF","GIF-st&oslash;tte tilgjengelig");
DEFINE("_EVENTS_IMAGEUPLNOGIF","GIF-st&oslash;tte IKKE tilgjengelig");
DEFINE("_ADMIN_EVENTS_IMAGETARGET","M&aring;lkatalog:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERS","GD Versjon:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERSWARN","Noter: Eventlist krever minst GD-Library Versjon 2 for &aring; kunne skape miniatyrbilder. Om du ikke har GD, eller bare versjon 1, venligst deaktiver miniatyrbilder.");
//Backend
//add/edit event
DEFINE("_ADMIN_EVENTS_HEADER_EV","EventListe - Event");
DEFINE("_ADMIN_EVENTS_DATE","Dato:");
DEFINE("_ADMIN_EVENTS_DATE_NOTICE","Format yyyy-mm-dd");
DEFINE("_ADMIN_EVENTS_TIME_NOTICE","Format: tt:mm");
DEFINE("_ADMIN_EVENTS_CLUB_ID","Plass:");
DEFINE("_ADMIN_EVENTS_DEL"," Event(s) slettet");
DEFINE("_ADMIN_EVENTS_DELFORM","FEIL: Dato har feil format");
DEFINE("_ADMIN_EVENTS_DELFORMT","FEIL: Tid har feil format, eller s&aring; har du aktivert visning av tid i frontenden. Hvis dette er tilfellet m&aring; du fylle ut tid.");
DEFINE("_ADMIN_EVENTS_EMPTY","FEIL: Legg til en plass først.");
DEFINE("_ADMIN_EVENTS_SAVE","Event lagret.");
DEFINE("_ADMIN_EVENTS_DESCR","Eventbeskrivelse:");
DEFINE("_ADMIN_EVENTS_DESCR_OPT","frivillig");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO","Eventbeskrivelse");
DEFINE("_ADMIN_EVENTS_TIME","Tid:");
DEFINE("_ADMIN_EVENTS_TITEL","Tittel:");
DEFINE("_ADMIN_EVENTS_NO_LOC","FEIL: Velg en plass eller legg til en plass f&oslash;rst. Du kan legge til events etter det");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_ENDTIME","Sluttid:");
DEFINE("_ADMIN_EVENTS_ENDTIME_NOTICE","Format: tt:mm! (frivillig)");
DEFINE("_ADMIN_EVENTS_PUBLI","Publisert?");
DEFINE("_ADMIN_EVENTS_CAT_ID","Kategori:");
DEFINE("_ADMIN_EVENTS_SEL_CAT","Velg en kategori");
DEFINE("_ADMIN_EVENTS_SEL_LOC","Velg en plass");
DEFINE("_ADMIN_EVENTS_CATEMPTY","FEIL: Velg en kategori eller legg til en kategori f&oslash;rst. Du kan legge til events etter det");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SUC_ARCH"," Event(s) har blitt Arkivert");
DEFINE("_ADMIN_EVENTS_SUC_PUBL"," Event(s) har blitt Publisert");
DEFINE("_ADMIN_EVENTS_SUC_UNARCH"," Event(s) har blitt fjernet fra arkivet");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL"," Event(s) er ikke lengre publisert");
DEFINE("_ADMIN_EVENTS_OTHER","Annet");
DEFINE("_ADMIN_EVENTS_REGISTRA","Åpen for p&aring;melding:");
//add/edit location
DEFINE("_ADMIN_EVENTS_HEADER_LO","Eventlist - Plass");
DEFINE("_ADMIN_EVENTS_CLUB_LO","Plass:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LO","Plassens Hjemmeside:");		//	website ist. för webplats (upprepning)
DEFINE("_ADMIN_EVENTS_CLUBHOME_NOTICE_LO","URL m&aring; v&aelig;re formatert som http://www.domene.com!");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_CITY_LO","By:");
DEFINE("_ADMIN_EVENTS_DEL_LO", "FEIL: det finnes minst et event på denne plassen.");
DEFINE("_ADMIN_EVENTS_DELYES_LO", " Plass(er) slettet");
DEFINE("_ADMIN_EVENTS_SAVECLUB_LO","FEIL: legg til plass");
DEFINE("_ADMIN_EVENTS_SAVEHOMEP_LO","FEIL: legg til hjemmeside");
DEFINE("_ADMIN_EVENTS_SAVETOWN_LO","FEIL: legg til by");
DEFINE("_ADMIN_EVENTS_SAVE_LO","Plass lagret");
DEFINE("_ADMIN_EVENTS_DESCR_LO","Plassbeskrivelse");
DEFINE("_ADMIN_EVENTS_DESCR_OPT_LO","valgfri");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO_LO","Plassbeskrivelsen");
DEFINE("_ADMIN_EVENTS_CLUBSTREET_LO","Gate:");
DEFINE("_ADMIN_EVENTS_CLUBPLZ_LO","Postkode:");
DEFINE("_ADMIN_EVENTS_CLUBCOUNTRY_LO","Land (NO,SE,DE,AT,CH, osv.):");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SAVEADRESS_LO","FEIL: Du har valgt noen av f&oslash;lgende: Vis map24, Vis adresse. Deaktiver disse om du ikke vil angi en adresse");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_OPTIONAL_LO","* er valgfrie felt. Noter: Adressefeltet er bare valgfritt om du har avaktivert map24!");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_LO"," Plass(er) har blitt Publisert");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_LO"," Plats(er) er ikke lengre Publisert");
DEFINE("_ADMIN_EVENTS_ADRESSDET","Adresseinformasjon");
//list events
DEFINE("_ADMIN_EVENTS_DATE_LI_EV","Dato");
DEFINE("_ADMIN_EVENTS_CLUB_LI_EV","Plass");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_EV","Plassens hjemmeside");
DEFINE("_ADMIN_EVENTS_CITY_LI_EV","By");
DEFINE("_ADMIN_EVENTS_LIMITBOX_LI_EV","Vis: ");
DEFINE("_ADMIN_EVENTS_TITEL_LI_EV","Tittel");
DEFINE("_ADMIN_EVENTS_TIME_LI_EV","Tidspunkt Event");
DEFINE("_ADMIN_EVENTS_PUBLISH_LI_EV","Publisert");
DEFINE("_ADMIN_EVENTS_USERDELI_LI_EV","Bruker Event?");
DEFINE("_ADMIN_EVENTS_CAT_LI_EV","Kategori");
DEFINE("_ADMIN_EVENTS_SEARCH_LI_EV","S&oslash;k:");
//list locations
DEFINE("_ADMIN_EVENTS_CLUB_LI_LO","Plass");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_LO","Plassens hjemmeside");
DEFINE("_ADMIN_EVENTS_CITY_LI_LO","By");
DEFINE("_ADMIN_EVENTS_ORDER_LI_LO","Bytt om"); // Sortera ?
//Frontend deliver events
DEFINE("_ADMIN_EVENTS_DELIVNAME","Ditt navn:");
DEFINE("_ADMIN_EVENTS_DELIVNAME_DESC","Venligst oppgi ditt navn her");
DEFINE("_ADMIN_EVENTS_DELIVMAIL","Din E-post adresse:");
DEFINE("_ADMIN_EVENTS_DELIVMAIL_DESC","Venligst oppgi din E-post adresse her");
DEFINE("_EVENTS_DELIVER","Del ut event"); // Deliver...
DEFINE("_EVENTS_VALIDATE","FEIL: Venligst fyll ut alle felt");
DEFINE("_ADMIN_EVENTS_DELIV_REDI","Du har ikke tillatelse til &aring; Publisere/Legge til Events");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILBOD_1"," Du har mottatt et innsendt event fra en bruker ");
DEFINE("_EVENTS_DELIVMAILBOD_2"," Brukerens mailadresse: ");
DEFINE("_EVENTS_DELIVMAILBOD_3"," Brukerens IP: ");
DEFINE("_EVENTS_DELIVMAILBOD_4"," Innsendt kl.: ");
DEFINE("_EVENTS_DELIVMAILBOD_5"," Eventtittel: ");
DEFINE("_EVENTS_DELIVMAILBOD_6"," Dato: ");
DEFINE("_EVENTS_DELIVMAILBOD_7"," Eventstart: ");
DEFINE("_EVENTS_DELIVMAILBOD_8"," Plass: ");
DEFINE("_EVENTS_DELIVMAILBOD_9"," Beskrivelse: ");
DEFINE("_EVENTS_DELIVMAILBOD_10"," : Nytt Event ");
DEFINE("_EVENTLIST_DELIVER","Send inn nytt Event");
DEFINE("_EVENTLIST_BACK","tilbake");
DEFINE("_ADMIN_EVENTS_DELMAILFORM","FEIL: Email-adressen er av feil format!");
DEFINE("_ADMIN_EVENTS_DELTITLLEN","FEIL: Tittelen er for lang!");
DEFINE("_ADMIN_EVENTS_DELNAMLEN","FEIL: Navnet er for langt!");
DEFINE("_EVENTS_DELTEXTARHTML","HTML er ikke tillatt!");
DEFINE("_EVENTS_RESTZ","tilgjengelig");
DEFINE("_EVENTS_RESTZAKT","uppdater");
DEFINE("_EVENTS_DEL_DATE_EMPT","Venligst skriv inn en dato!");
DEFINE("_EVENTS_DEL_TIME_EMPT","Venligst skriv inn en tid!");
DEFINE("_EVENTS_DEL_TITEL_EMPT","Venligst skriv inn en tittel!");
DEFINE("_EVENTS_DEL_CATEG_EMPT","Venligst velg en kategori!");
DEFINE("_EVENTS_DEL_LOCAT_EMPT","Venligst velg en plass!");
DEFINE("_EVENTS_DEL_TIME_FORM","FEIL: Feil format på tiden");
//Frontend deliver location
DEFINE("_EVENTLIST_DELIVER_LOC","Legg til ny plass");
DEFINE("_EVENTS_DELIVMAILLOCBOD_1"," Du har f&aring;tt tilsendt en ny plass av en bruker ");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILLOCBOD_2"," Brukerens mailadresse: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_3"," Brukerens - IP: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_4"," Tidspunkt insendt: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_5"," Plass: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_6"," Plass URL: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_7"," Gate: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_8"," Postnummer: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_9"," By: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_10"," Landskode: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_11"," Beskrivelse: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_12"," : Ny plass ");
DEFINE("_EVENTS_DELIVER_LOC","Leverer plass");
DEFINE("_EVENTS_DELURLLOCFORM","URLen er for lang");
DEFINE("_EVENTS_DELSTREETLOCFORM","Gatenavnet er for langt");
DEFINE("_EVENTS_DELPLZLOCFORM","Postnummeret er for langt");
DEFINE("_EVENTS_DELCITYLOCFORM","Bynavnet er for langt");
DEFINE("_EVENTS_DELCOUNTRYLOCFORM","Landskoden er for lang");
DEFINE("_EVENTS_DELURLLOCFORM2","FEIL: Feil format på webadressen!");
DEFINE("_EVENTS_DEL_LOC_STREET_EMPT","FEIL: Venligst fyll inn en gata!");
DEFINE("_EVENTS_DEL_LOC_PLZ_EMPT","FEIL: Venligst fyll inn en postkode!");
DEFINE("_EVENTS_DEL_LOC_COUNTRY_EMPT","FEIL: Venligst fyll inn en landskode!");
//settings
DEFINE("_ADMIN_EVENTS_SETT_HEADER","Eventlist - Innstillinger");
DEFINE("_ADMIN_EVENTS_SETT_SAVE","Innstillingene er lagret");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD","H&aring;nter gamle events:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD1","Gj&ouml;r ingenting");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD2","Slett gamlee events");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD3","Arkiver gamle events");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD_DESC","Slett eller Arkiver gamle events automatisk.");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR","Antall dager:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR_DESC","Antall dager tilbake i tid som ikke skal slettes eller arkiveres. Det her har ingen effekt om valget over er deaktivert.");
DEFINE("_ADMIN_EVENTS_SETT_EVNR","Antall events p&aring; framsiden:");
DEFINE("_ADMIN_EVENTS_SETT_EVNR_DESC","Antall events som skal vises p&aring; framsiden.");
DEFINE("_ADMIN_EVENTS_SETT_MAPID","Ditt Map24 ID:");
DEFINE("_ADMIN_EVENTS_SETT_MAPID_DESC","Du m&aring; registrere deg hos Map24 f&aring;r &aring; f&aring; en ID.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME","Vis tid:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME_DESC","Vis tiden p&aring; framsiden.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL","Vis tittel:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL_DESC","Vis eventtittel p&aring; framsiden.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC","Vis plass:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC_DESC","Vis plass p&aring; framsiden.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY","Vis by:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY_DESC","Vis by p&aring; framsiden.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP","Vis Link til kart:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP_DESC","Vis Link til kart p&aring; Detaljesiden. Noter: Du m&aring; fylle inn ditt Map24 ID hvis du vil bruke denne funksjonen.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER","Vis header:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER_DESC","Vis header p&aring; framsiden.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO","Vis innledningen:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO_DESC","Vis innledningen p&aring; framsiden.");
DEFINE("_ADMIN_EVENTS_SETT_INTROT","Innledning f&aring;r Eventlist:");
DEFINE("_ADMIN_EVENTS_SETT_INTROT_DESC","Den her teksten vises ovenf&aring;r listingen p&aring; framsiden.");
DEFINE("_ADMIN_EVENTS_SETT_TABLW","Tabbellbredde i % :");
DEFINE("_ADMIN_EVENTS_SETT_TABLW_DESC","Listens bredde p&aring framsiden.");
DEFINE("_ADMIN_EVENTS_SETT_DATEC","Datokolonnens bredde i %:");
DEFINE("_ADMIN_EVENTS_SETT_DATEC_DESC","Datokolonnens bredde.");
DEFINE("_ADMIN_EVENTS_SETT_CNAME","Valgfritt navn:");
DEFINE("_ADMIN_EVENTS_SETT_CNAME_DESC","Endre dette til hva du vil.");
DEFINE("_ADMIN_EVENTS_SETT_TITELW","Tittelkolomens bredd i %:");
DEFINE("_ADMIN_EVENTS_SETT_TITELW_DESC","Titelkolumens bredde (la st&aring; tom om du har deaktiverat den)");
DEFINE("_ADMIN_EVENTS_SETT_INFOB","Infoknappskolunnens bredde i %:");
DEFINE("_ADMIN_EVENTS_SETT_INFOB_DESC","Bredden av infoknappskolonnen");
DEFINE("_ADMIN_EVENTS_SETT_LOCA","Plasskolonnens bredde i %:");
DEFINE("_ADMIN_EVENTS_SETT_LOCA_DESC","Plasskolonnens bredde (la st&aring; tom hvis du har deaktivert den)");
DEFINE("_ADMIN_EVENTS_SETT_CITYW","Bykolonnens bredde i %:");
DEFINE("_ADMIN_EVENTS_SETT_CITYW_DESC","Bykolonnens bredde (la st&aring; tom hvis du har deaktivert den)");
DEFINE("_ADMIN_EVENTS_SETT_UNWR","Konfigureringsfilen er ikke skrivbar!");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE","Datoformat:");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE_DESC","Datoformat bruker samme format som PHP-funksjonen strftime, f.eks.: %d.%m.%Y. Mer informasjon: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME","Tidsformat:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME_DESC","Tidsformat bruker samme format som PHP-funksjonen strftime, f.eks.:%H.%M. Mer informasjon: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME","Navn:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME_DESC","Fyll f.eks. inn &quot;kl.&quot; eller &quot;klokken&quot;. Dette vises framfor tiden i frontenden. La den st&aring; tom om du ikke beh&oslash;ver den."); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS","Vis Link til detaljesiden:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS_DESC","Vis Link til detaljesiden og hvor? (Tittel som link fungerer bare om &quot;Vis tittel&quote; er ja, Ikoner fungerer bare om du har satt bredden p&aring; ikonkolonnen i Utseendeinstillinger)");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIMEDET_DESC","Vis tid p&aring; detaljesiden.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC","Vis eventbeskrivelse:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC_DESC","Vis eventbeskrivelse p&aring; detaljesiden");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL","Vis eventtittel:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL_DESC","Vis eventtittel p&aring; detaljesiden.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS","Vis plassens adresse:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS_DESC","Vis plassens adresse p&aring; detaljesiden.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC","Vis plassbeskrivelse:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC_DESC","Vis plassbeskrivelse p&aring; detaljesiden.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB","Vis link til plassyn:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB_DESC","Vis link til plassyn p&aring; framsiden.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB","Vis link til plass:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB_DESC","Vis link til plass p&aring; detaljesiden.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL","Nye events fra brukere:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL_DESC","Tillat brukere &aring; sende inn events fa framsiden og sett brukerrankningen.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL","Send mail ved nye innsendinger:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL_DESC","Informer admin via email om nye innsendte events fra brukere?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1","Mailmottakere:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1_DESC","E-mail adressen til den personen som skal f&aring; informasjonsmailen.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2","CC: Mailmottaker:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2_DESC","E-mail adressen til den andre personen som skal f&aring; informasjonsmailen (valgfri).");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT","Maks. lengde p&aring; event- og plassbeskrivelsene.");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT_DESC","Maks. lengde p&aring; event- og plassbeskrivelser. Om beskrivelsen er for lang blir beskrivelsen kortet ned og noteringen [forkortet] &aring; legges til.");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET1","Detaljer av");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET2","Knytt link til Tittel");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET3","Knytt link til Ikon");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET4","Begge");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB","Autopubliser?");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB_DESC","Publiser event automatisk?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC","Nye plasser fra brukere:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC_DESC","Tillat brukere &aring; sende inn plasser fra forsiden og sette brukerrankningen.");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUBLOCS_DESC","Publiser plasser automatisk?");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF1","Av");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF2","Bare nytt event");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF3","Bare ny plass");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF4","Begge");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT","Vis kategori:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT_DESC","Vis kategori p&aring; framsiden.");
DEFINE("_ADMIN_EVENTS_SETT_CATW","Kategorikolonnens bredde i %:");
DEFINE("_ADMIN_EVENTS_SETT_CATW_DESC","Kategorikolonnens bredde (ikke fyll inn hvis du har deaktivert dette)");
DEFINE("_ADMIN_EVENTS_SETT_VIEW","Velg standard frontend-layout:");
DEFINE("_ADMIN_EVENTS_SETT_VIEW1","Enkelt Listeoversyn");
DEFINE("_ADMIN_EVENTS_SETT_VIEW2","Enkel Kategoriliste");
DEFINE("_ADMIN_EVENTS_SETT_VIEW3","Detaljert Kategoriliste");
DEFINE("_ADMIN_EVENTS_SETT_VIEW4","Plassholder2");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_VIEW_DESC","Velg standard frontend-layout her. 'Enkelt listeoversyn' er den gamle layouten.");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC_DESC","Tillat undergrupper ogs&aring;? HVis nei blir tilgangen begrenset til bare valgt gruppe. Notera: Administratorer har alltid tillgang.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC","Rekursivt:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE","Maks. bildefilsstørrelse:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE_DESC","Maksimal bildefilsstørrelse i KB");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT","Maks. h&oslash;yde p&aring; miniatyrbilder:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT_DESC","Maksimal h&oslash;yde p&aring; miniatyrbilder og kategoribilder");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH","Maks. bredde p&aring; miniatyrbilder:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH_DESC","Maksimal bredde p&aring; miniatyrbilder og kategoribilder");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB","Behold proporsjoner:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB_DESC","Behold proporsjoner eller skaler?");
DEFINE("_ADMIN_EVENTS_SETT_GDSTATUS","Status: ");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE","Aktiver miniatyrbilder:");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE_DESC","Avaktiver dette om status viser at GD-Library ikkee finnes eller at versjonen bare er versjon 1.");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB","Bildeopplastning:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB1","deaktivert");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB2","Valgfri");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB3","Obligatorisk");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB_DESC","Skal opplastning v&aelig;re deaktiverat, valgfri eller et krav for brukere");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD","Chmod for bilder:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD_DESC","Fyll in de rettigheter du vil gi bildene. f.eks. 0740");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD1","Eventsh&aring;ndtering");
DEFINE("_ADMIN_EVENTS_SETT_HEAD2","Visning - Instillinger");
DEFINE("_ADMIN_EVENTS_SETT_HEAD3","Intro");
DEFINE("_ADMIN_EVENTS_SETT_HEAD4","AC - Event");
DEFINE("_ADMIN_EVENTS_SETT_HEAD5","AC - Plasser");
DEFINE("_ADMIN_EVENTS_SETT_HEAD6","Plasser");
DEFINE("_ADMIN_EVENTS_SETT_HEAD7","Beskrivelse - Lengde");
DEFINE("_ADMIN_EVENTS_SETT_HEAD8","Mailh&aring;ndtering");
DEFINE("_ADMIN_EVENTS_SETT_HEAD9","Bildh&aring;ndtering");
DEFINE("_ADMIN_EVENTS_SETT_HEAD10","Frontend");
DEFINE("_ADMIN_EVENTS_SETT_HEAD11","Event");
DEFINE("_ADMIN_EVENTS_SETT_HEAD12","Generelle Layoutinstillinger");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD13","Bredde p&aring; tabellen");
DEFINE("_ADMIN_EVENTS_SETT_HEAD14","Datokolonne");
DEFINE("_ADMIN_EVENTS_SETT_HEAD15","Tittelkolonne");
DEFINE("_ADMIN_EVENTS_SETT_HEAD16","Infokolonne");
DEFINE("_ADMIN_EVENTS_SETT_HEAD17","Plasskolonne");
DEFINE("_ADMIN_EVENTS_SETT_HEAD18","Byskolonne");
DEFINE("_ADMIN_EVENTS_SETT_HEAD19","Kategorikolonne");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG1","Integrasjon");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL","Velg Community-løsning:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL1","Ikke bruk noen");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL2","CB / CBE"); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL_DESC","Velg &quot;Community-løsningen&quot; du bruker. &quot;Community Builder&quot; fra Joomlapolis eller &quot;Community Builder Enhanced&quot; fra www.kolloczek.com");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEADREG2","Community Solution Options");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION","Velg integrasjonsinstillinger:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION1","Ingen integrasjon");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION2","Link til profil");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION3","Link til profil og vis Avatar");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION_DESC","Velg hvilken type Integrasjon. EventList st&oslash;tter visning av Avataren og skapning av linker til Profilene fra registrerte brukere på et event");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG3","Se hit!");
DEFINE("_ADMIN_EVENTS_SETT_COMM_NOTES","EventList st&oslash;tter &quote;AKReservation&quote; om du beh&oslash;ver mer detaljerte registreringer. Plaser helt enkelt mambottriggern i Eventbeskrivelsen fra EventList. Link: "); 
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION1","Ingen karttjenste");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION2","Map 24");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION3","Google Map");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC","Skul plassdata");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC_DESC","Skjul plassdetaljer helt. De &oslash;vrige instillingene kommer ikke til &aring; ha noen effekt.");
DEFINE("_ADMIN_EVENTS_SETT_WARNING","!! Skjekk dine modulinstillinger! Aktiver bare dette om det er deaktiverat i modulen. Bruk det ikke to ganger !!");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_INFOBUT_WARNING","!! Slett bredden om tittelen linker til detaljesiden eller om du ikke bruker den !!");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK","Vis link til kategorioversikt:");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK_DESC","Vis link til kategorioversikt p&aring forsiden.");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG4","Frontend:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE","Tillat registrering:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE_DESC","Tillat brukere &aring; velge om de vil tillate registrering til Events de legger til, eller annvende standard");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE","Tillat avregistrering:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE_DESC","Tillat brukere &aring; velge om de vil tillate avregistrering til Events de legger til, eller annvende standard");
DEFINE("_ADMIN_EVENTS_SETT_GD_VERSION_TWO","GD versjon er 2. skaping av miniatyrbilder kan aktiveres.");
DEFINE("_ADMIN_EVENTS_SETT_GD_VERSION_ONE","GD versjon er 1. Deaktiver skaping av miniatyrbilder.");
//Categories
DEFINE("_ADMIN_CATEGORIES_NAME","Navn");
DEFINE("_ADMIN_CATEGORIES_PUBLISH","Publiser?");
DEFINE("_ADMIN_CATEGORIES_ORDER","Flytt om");
DEFINE("_ADMIN_CATEGORIES_PUBLI","Publiser:");
DEFINE("_ADMIN_CATEGORIES_DESCR_OPT_LO","(valgfri)");
DEFINE("_ADMIN_CATEGORIES_DESCR_INTRO_LO","Kategoribeskrivelse");
DEFINE("_ADMIN_CATEGORIES_DESCR_LO","Kategoribeskrivelse:");
DEFINE("_ADMIN_EVENTS_DEL_CAT","FEL: minst et event er koblet til denne kategorien");
DEFINE("_ADMIN_CATEGORIES_DEL"," Kategori(er) slettet");
DEFINE("_ADMIN_CATEGORIES_NAME_EMPTY","FEIL: Venligst fyll inn et kategorinavn!");
DEFINE("_ADMIN_CATEGORIES_IMAGE","Kategoribilde:");
DEFINE("_ADMIN_CATEGORIES_IMAGEPREV","Forh&aring;ndsvisning:");
DEFINE("_ADMIN_CATEGORIES_SAVE","Kategori lagret");
DEFINE("_EVENTLIST_CATVIEW1","Vis Event");
DEFINE("_EVENTLIST_CATVIEWCOUNTEV","Event:");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_CAT"," Kategori(er) publisert(e)");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_CAT"," Kategori(er) Skult");
DEFINE("_ADMIN_CATEGORIES_HEAD","EventList - Kategorier");
//Registration
DEFINE("_ADMIN_EVENTS_REGCOUNT","Reg. Brukere");
DEFINE("_ADMIN_EVENTS_USERNAME","Brukernavn");
DEFINE("_ADMIN_EVENTS_USERIP","IP");
DEFINE("_ADMIN_EVENTS_UREGDATE","Reg. Dato");
DEFINE("_ADMIN_EVENTS_USERID","BrukerID");
DEFINE("_ADMIN_EVENTS_USERDELETE","Slett");
DEFINE("_ADMIN_REGISTER_DEL"," Registrert(e) Bruker(e) slettet");
DEFINE("_ADMIN_EVENTS_UNREGISTRA","Tillat brukere &aring; avregistrere seg?");
DEFINE("_EVENTS_REGISTRA_HEAD","Registrerte brukere:");
DEFINE("_EVENTS_REGISTRA_ALLRE","Du er allerede registrert på dette Event.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_LOGIN","Du m&aring; logge inn for &aring; registrere deg på denne eventen.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_TOLATE","Det er allerede forsent &aring; registrere seg på denne eventen.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_REG","Jeg skal melder meg på dette event:");
DEFINE("_EVENTS_REGISTRA_BUTTON","Registrer");
DEFINE("_EVENTS_REGISTRA_SUCCESS","Du har n&aring; registrert deg for denne eventen.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_UNREG","Avregistrer deg fra dette Event:");
DEFINE("_EVENTS_REGISTRA_BUTTON_UNREG","Avregistrer");
DEFINE("_EVENTS_REGISTER_DEL","Du er ikke lengre registrert p&aring; denne eventen");	//changed in 0.8.3
//new 0.8
DEFINE("_ADMIN_CATEGORIES_ACCESS","Tillgang");
DEFINE("_ADMIN_EVENTS_ACCESS_DENIED","Tillgang nektet.");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION1","Nei");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION2","Ja");
//new 0.8.6
DEFINE("_ADMIN_GDVERSION_TWO","GD version er 2. Skaping av miniatyrbilder kan aktiveres.");
DEFINE("_ADMIN_GDVERSION_ONE","GD version er 1. Deaktiver skaping av miniatyrbilder.");

//new 0.8.7
DEFINE("_ADMIN_CHOOSE_CITY","Velg en by");
DEFINE("_ADMIN_CHOOSE_A_VENUE","Velg en plass i");
DEFINE("_ADMIN_CHOOSE_A_CITY","Venligst velg en by over");
//new 0.8.9
DEFINE("_ADMIN_EVENTS_ENDDATE","Eventdato (slutt):");
DEFINE("_ADMIN_EVENTS_INFOBUTTON_ERROR_MSG", "Du har valgt å linke til info-knappen, men har ikke satt en bredde for den. Venligst velg å ikke linke til info-knappen (under  Generelle instillinger tab'en) eller sett en bredde for den (under layout tab'en)");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER","Vis filter:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER_DESC","Vis filteret på forsiden.");
?>