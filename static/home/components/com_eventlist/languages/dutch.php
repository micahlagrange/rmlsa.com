<?php
/**
* @version 0.8.9 $Id: dutch.php 224 2007-06-20 21:07:09Z pwbr $
* @package Eventlist
* @copyright (C) 2005 - 2007 Christoph Lukes
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @Dutch translation done (17/05/2006) by Peter Brouwers if you have any comments or changes then mail me at translate@pwbr.com
* @Nederlandse vertaling (17/05/2006) gedaan door Peter Brouwers, als u op of aanmerkingen heeft  mail mij dan op translate@pwbr.com
*/

//Frontend
DEFINE("_EVENTS_DATE","Datum");
DEFINE("_EVENTS_CLUB","Locatie");
DEFINE("_EVENTS_CITY","Plaats");
DEFINE("_EVENTS_DETAILS","Details");
DEFINE("_EVENTS_BACK","terug");
DEFINE("_EVENTS_EVENT","Evenement");
DEFINE("_EVENTS_WHEN","Wanneer:");
DEFINE("_EVENTS_WHERE","Waar:");
DEFINE("_EVENTS_DESC","Beschrijving evenement:");
DEFINE("_EVENTS_LOCAT","Locatie");
DEFINE("_EVENTS_LOCDESC","Beschrijving locatie:");
DEFINE("_EVENTS_DESCALERT","Sorry, geen beschrijving aanwezig.");
DEFINE("_EVENTS_COUNTRY_LO","Land:");
DEFINE("_ADMIN_EVENTS_DETA_REDI","Toegang niet toegestaan");
DEFINE("_EVENTS_HOMEPAGE_LO","Website:");
DEFINE("_EVENTS_HOMEPAGENO_LO","Geen website beschikbaar");
DEFINE("_EVENTLIST_SHARCHIVE","Toon archief");
DEFINE("_EVENTS_MAP","Bekijk kaart");

//images
DEFINE("_EVENTS_IMAGEEMPT","Selecteer een afbeelding voor upload");
DEFINE("_EVENTS_IMAGESIZEBIG","Bestandsgrootte onjuist");
DEFINE("_EVENTS_IMAGECHARACT","Bestandsnaam mag alleen alfanumerieke karakters bevaten, en geen spaties bevatten.");
DEFINE("_EVENTS_IMAGEEXIST","Afbeelding bestaat reeds. Kies een andere naam.");
DEFINE("_EVENTS_IMAGETYPE","Het bestand moet van het type gif, png, jpg of bmp zijn.");
DEFINE("_EVENTS_IMAGEFAIL","Upload mislukt");
DEFINE("_ADMIN_EVENTS_CHOOIMAGE","Afbeelding:");
DEFINE("_ADMIN_EVENTS_IMAGEUPL","Kies afbeelding om te uploaden:");
DEFINE("_EVENTS_IMAGEUPLSUCCESS","Upload goed verlopen");
DEFINE("_EVENTS_IMAGEUPLNOGD","GD-Library niet beschikbaar! Zet thumbnail creatie uit.");
DEFINE("_EVENTS_IMAGEUPLPNG","PNG ondersteuning beschikbaar");
DEFINE("_EVENTS_IMAGEUPLNOPNG","PNG ondersteuning NIET beschikbaar");
DEFINE("_EVENTS_IMAGEUPLJPG","JPG ondersteuning beschikbaar");
DEFINE("_EVENTS_IMAGEUPLNOJPG","JPG ondersteuning NIET beschikbaar");
DEFINE("_EVENTS_IMAGEUPLGIF","GIF ondersteuning beschikbaar");
DEFINE("_EVENTS_IMAGEUPLNOGIF","GIF ondersteuning NIET beschikbaar");
DEFINE("_ADMIN_EVENTS_IMAGETARGET","Doel map:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERS","GD Versie:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERSWARN","<strong>Noot:</strong> Eventlist heeft minimaal GD-Library Versie 2, of later nodig voor het maken van thumbnails. Als u geen GD ondersteuning heeft, of versie 1 gebruikt, deactiveer dan de thumbnail creatie.");

//Backend

//add/edit event
DEFINE("_ADMIN_EVENTS_HEADER_EV","Eventlist Evenement");
DEFINE("_ADMIN_EVENTS_DATE","Aanvangsdatum:");
DEFINE("_ADMIN_EVENTS_DATE_NOTICE","Formaat jjjj-mm-dd");
DEFINE("_ADMIN_EVENTS_TIME_NOTICE","Formaat: uu:mm");
DEFINE("_ADMIN_EVENTS_CLUB_ID","Locatie:");
DEFINE("_ADMIN_EVENTS_DEL"," Evenement(en) verwijderd");
DEFINE("_ADMIN_EVENTS_DELFORM","FOUT: Datum heeft het verkeerde formaat");
DEFINE("_ADMIN_EVENTS_DELFORMT","FOUT: Tijd heeft het verkeerde formaat of u heeft tonen tijd op frontend aangezet. Is dit het geval dan moet dit veld ingevuld worden");
DEFINE("_ADMIN_EVENTS_EMPTY","FOUT: Eerst een locatie toevoegen");
DEFINE("_ADMIN_EVENTS_SAVE","Evenement opgeslagen.");
DEFINE("_ADMIN_EVENTS_DESCR","Beschrijving:");
DEFINE("_ADMIN_EVENTS_DESCR_OPT","Optioneel");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO","De beschrijving van het evenement");
DEFINE("_ADMIN_EVENTS_TIME","Aanvangstijd:");
DEFINE("_ADMIN_EVENTS_TITEL","Titel evenement:");
DEFINE("_ADMIN_EVENTS_NO_LOC","FOUT: Selecteer locatie of voeg hier eerst een locatie toe. Pas daarna kunt u een evenement toevoegen.");
DEFINE("_ADMIN_EVENTS_ENDTIME","Eindtijd:");
DEFINE("_ADMIN_EVENTS_ENDTIME_NOTICE","Formaat: uu:mm (optioneel)");
DEFINE("_ADMIN_EVENTS_PUBLI","Gepubliceerd?");
DEFINE("_ADMIN_EVENTS_CAT_ID","Categorie:");
DEFINE("_ADMIN_EVENTS_SEL_CAT","Selecteer categorie");
DEFINE("_ADMIN_EVENTS_SEL_LOC","Selecteer locatie");
DEFINE("_ADMIN_EVENTS_CATEMPTY","FOUT: Selecteer een categorie, of voeg eerst een categorie toe. Pas daarna kunt u een evenement toevoegen");
DEFINE("_ADMIN_EVENTS_SUC_ARCH"," Evenement(en) met succes gearchiveerd");
DEFINE("_ADMIN_EVENTS_SUC_PUBL"," Evenement(en) met succes gepubliceerd");
DEFINE("_ADMIN_EVENTS_SUC_UNARCH"," Evenement(en) met succes uit het archief gehaald");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL"," Evenement(en) met succes uit publicatie genomen");
DEFINE("_ADMIN_EVENTS_OTHER","Overige instellingen");
DEFINE("_ADMIN_EVENTS_REGISTRA","Activeer inschrijvingen:");

//add/edit location
DEFINE("_ADMIN_EVENTS_HEADER_LO","Eventlist locatie");
DEFINE("_ADMIN_EVENTS_CLUB_LO","Locatie:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LO","Website:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_NOTICE_LO","URL moet het volgende formaat hebben http://www.joomla.org");
DEFINE("_ADMIN_EVENTS_CITY_LO","Plaats:");
DEFINE("_ADMIN_EVENTS_DEL_LO", "FOUT: Minimaal &eacute;&eacute;n evenement is op deze locatie");
DEFINE("_ADMIN_EVENTS_DELYES_LO", " Locatie(s) verwijderd");
DEFINE("_ADMIN_EVENTS_SAVECLUB_LO","De locatie moet nog ingevuld worden.");
DEFINE("_ADMIN_EVENTS_SAVEHOMEP_LO","De homepage moet nog ingevuld worden");
DEFINE("_ADMIN_EVENTS_SAVETOWN_LO","De plaats moet nog ingevuld worden.");
DEFINE("_ADMIN_EVENTS_SAVE_LO","Locatie opgeslagen");
DEFINE("_ADMIN_EVENTS_DESCR_LO","Beschrijving:");
DEFINE("_ADMIN_EVENTS_DESCR_OPT_LO","Optioneel");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO_LO","De beschrijving van de locatie");
DEFINE("_ADMIN_EVENTS_CLUBSTREET_LO","Straat:");
DEFINE("_ADMIN_EVENTS_CLUBPLZ_LO","Postcode:");
DEFINE("_ADMIN_EVENTS_CLUBCOUNTRY_LO","Land (DE,AT,CH,NL, etc.):");
DEFINE("_ADMIN_EVENTS_SAVEADRESS_LO","FOUT: Een van deze opties staat nog aan: toon link naar map24, toon adres. Zet deze opties uit als u geen adressen wilt invoeren.");
DEFINE("_ADMIN_EVENTS_OPTIONAL_LO","Velden aangeduid met een * zijn optioneel. <br /><strong>Noot:</strong> De adres velden zijn alleen optioneel als u de map24 optie heeft uitgeschakeld!");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_LO"," Locatie(s) succesvol gepubliceerd");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_LO"," Locatie(s) succesvol uit publicatie genomen");
DEFINE("_ADMIN_EVENTS_ADRESSDET","Adres details");

//list events
DEFINE("_ADMIN_EVENTS_DATE_LI_EV","Datum");
DEFINE("_ADMIN_EVENTS_CLUB_LI_EV","Locatie");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_EV","Website");
DEFINE("_ADMIN_EVENTS_CITY_LI_EV","Plaats");
DEFINE("_ADMIN_EVENTS_LIMITBOX_LI_EV","Toon: ");
DEFINE("_ADMIN_EVENTS_TITEL_LI_EV","Titel");
DEFINE("_ADMIN_EVENTS_TIME_LI_EV","Tijd");
DEFINE("_ADMIN_EVENTS_PUBLISH_LI_EV","Gepubliceerd");
DEFINE("_ADMIN_EVENTS_USERDELI_LI_EV","Gemaakt door gebruiker");
DEFINE("_ADMIN_EVENTS_CAT_LI_EV","Categorie");
DEFINE("_ADMIN_EVENTS_SEARCH_LI_EV","Zoek:");

//list locations
DEFINE("_ADMIN_EVENTS_CLUB_LI_LO","Locatie");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_LO","Website");
DEFINE("_ADMIN_EVENTS_CITY_LI_LO","Plaats");
DEFINE("_ADMIN_EVENTS_ORDER_LI_LO","Sorteer");

//Frontend deliver events
DEFINE("_ADMIN_EVENTS_DELIVNAME","Uw naam:");
DEFINE("_ADMIN_EVENTS_DELIVNAME_DESC","Voeg hier uw naam toe");
DEFINE("_ADMIN_EVENTS_DELIVMAIL","Uw e-mail adres:");
DEFINE("_ADMIN_EVENTS_DELIVMAIL_DESC","Voeg hier uw e-mail adres toe");
DEFINE("_EVENTS_DELIVER","Toevoegen evenement");
DEFINE("_EVENTS_VALIDATE","FOUT: Alle velden dienen ingevuld te worden");
DEFINE("_ADMIN_EVENTS_DELIV_REDI","Het invoeren van evenementen is niet toegestaan");
DEFINE("_EVENTS_DELIVMAILBOD_1"," U heeft een inzending van gebruiker ");
DEFINE("_EVENTS_DELIVMAILBOD_2"," Gebruiker e-mail adres: ");
DEFINE("_EVENTS_DELIVMAILBOD_3"," Gebruiker - IP: ");
DEFINE("_EVENTS_DELIVMAILBOD_4"," Tijdstip aanmelding: ");
DEFINE("_EVENTS_DELIVMAILBOD_5"," Titel van het evenement: ");
DEFINE("_EVENTS_DELIVMAILBOD_6"," Datum van het evenement: ");
DEFINE("_EVENTS_DELIVMAILBOD_7"," Tijdstip van het evenement: ");
DEFINE("_EVENTS_DELIVMAILBOD_8"," Locatie: ");
DEFINE("_EVENTS_DELIVMAILBOD_9"," Beschrijving van het evenement: ");
DEFINE("_EVENTS_DELIVMAILBOD_10"," : Nieuw evenement ");
DEFINE("_EVENTLIST_DELIVER","Voeg een nieuw evenement toe");
DEFINE("_EVENTLIST_BACK","terug");
DEFINE("_ADMIN_EVENTS_DELMAILFORM","FOUT: Het e-mail adres heeft het verkeerde formaat!");
DEFINE("_ADMIN_EVENTS_DELTITLLEN","FOUT: De titel is te lang!");
DEFINE("_ADMIN_EVENTS_DELNAMLEN","FOUT: De naam is te lang!");
DEFINE("_EVENTS_DELTEXTARHTML","HTML is niet toegestaan!");
DEFINE("_EVENTS_RESTZ","beschikbaar");
DEFINE("_EVENTS_RESTZAKT","vernieuwen");
DEFINE("_EVENTS_DEL_DATE_EMPT","De datum moet nog ingevuld worden.");
DEFINE("_EVENTS_DEL_TIME_EMPT","De aanvangstijd moet nog ingevuld worden.");
DEFINE("_EVENTS_DEL_TITEL_EMPT","De titel moet nog ingevuld worden.");
DEFINE("_EVENTS_DEL_CATEG_EMPT","De categorie moet nog geselecteerd worden.");
DEFINE("_EVENTS_DEL_LOCAT_EMPT","De locatie moet nog geselecteerd worden.");
DEFINE("_EVENTS_DEL_TIME_FORM","FOUT: De tijd heeft het verkeerde formaat");

//Frontend deliver location
DEFINE("_EVENTLIST_DELIVER_LOC","Voeg een nieuwe locatie toe");
DEFINE("_EVENTS_DELIVMAILLOCBOD_1"," U heeft een inzending van gebruiker ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_2"," Gebruiker e-mail adres: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_3"," Gebruiker - IP: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_4"," Tijd inzending: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_5"," Locatie: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_6"," Locatie URL: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_7"," Straat: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_8"," Postcode: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_9"," Plaats: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_10"," Landcode: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_11"," Beschrijving: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_12"," : Nieuwe locatie ");
DEFINE("_EVENTS_DELIVER_LOC","Toevoegen locatie");
DEFINE("_EVENTS_DELURLLOCFORM","FOUT: URL is te lang");
DEFINE("_EVENTS_DELSTREETLOCFORM","FOUT: Straat is te lang");
DEFINE("_EVENTS_DELPLZLOCFORM","FOUT: Postcode is te lang");
DEFINE("_EVENTS_DELCITYLOCFORM","FOUT: Plaats is te lang");
DEFINE("_EVENTS_DELCOUNTRYLOCFORM","FOUT: Landcode is te lang");
DEFINE("_EVENTS_DELURLLOCFORM2","FOUT: URL heeft verkeerde formaat");
DEFINE("_EVENTS_DEL_LOC_STREET_EMPT","De straat moet nog ingevuld worden.");
DEFINE("_EVENTS_DEL_LOC_PLZ_EMPT","De postcode moet nog ingevuld worden.");
DEFINE("_EVENTS_DEL_LOC_COUNTRY_EMPT","De landcode moet nog ingevuld worden.");

//settings
DEFINE("_ADMIN_EVENTS_SETT_HEADER","Eventlist instellingen");
DEFINE("_ADMIN_EVENTS_SETT_SAVE","Instellingen met succes opgeslagen");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD","Verwerken oude evenementen:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD1","Uitgeschakeld");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD2","Verwijder oude evenementen");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD3","Archiveer oude evenementen");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD_DESC","Verwijder of archiveer oude evenementen automatisch.");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR","Aantal dagen:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR_DESC","Aantal dagen in het verleden welke niet verwijderd of gearchiveerd zullen worden. Deze instelling heeft geen effect als de bovenstaande optie is uitgeschakeld.");
DEFINE("_ADMIN_EVENTS_SETT_EVNR","Aantal evenementen op de voorpagina:");
DEFINE("_ADMIN_EVENTS_SETT_EVNR_DESC","Het aantal evenementen wat getoond moet worden op de voorpagina.");
DEFINE("_ADMIN_EVENTS_SETT_MAPID","Uw Map24 ID:");
DEFINE("_ADMIN_EVENTS_SETT_MAPID_DESC","U moet registreren bij map24 om een ID te krijgen.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME","Toon tijd:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME_DESC","Toon de tijd op de voorpagina.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL","Toon titel:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL_DESC","Toon de titel van een evenement op de voorpagina.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC","Toon locatie:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC_DESC","Toon locatie op de voorpagina.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY","Toon plaats:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY_DESC","Toon de plaats op de voorpagina.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP","Toon link naar kaart:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP_DESC","Toon een link naar de kaart op de details pagina. <br /> <strong>Noot:</strong> U moet uw Map24 ID invullen als u Map24 selecteerd.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER","Toon kopregel:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER_DESC","Toon kopregel op de voorpagina.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO","Toon introductie text:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO_DESC","Toon de introductie text op de voorpagina.");
DEFINE("_ADMIN_EVENTS_SETT_INTROT","Introductie text:");
DEFINE("_ADMIN_EVENTS_SETT_INTROT_DESC","Deze text wordt getoond boven de evenementenlijst, op de voorpagina.");
DEFINE("_ADMIN_EVENTS_SETT_TABLW","Tabelbreedte in % :");
DEFINE("_ADMIN_EVENTS_SETT_TABLW_DESC","Breedte van de lijst op de voorpagina.");
DEFINE("_ADMIN_EVENTS_SETT_DATEC","Breedte van datum kolom in %:");
DEFINE("_ADMIN_EVENTS_SETT_DATEC_DESC","Breedte van de datum kolom.");
DEFINE("_ADMIN_EVENTS_SETT_CNAME","Standaard naam:");
DEFINE("_ADMIN_EVENTS_SETT_CNAME_DESC","Wijzig dit naar wat u wilt.");
DEFINE("_ADMIN_EVENTS_SETT_TITELW","Breedte van de kolom titel in %:");
DEFINE("_ADMIN_EVENTS_SETT_TITELW_DESC","Breedte van de kolom titel (Laat dit leeg indien u dit niet wilt activeren)");
DEFINE("_ADMIN_EVENTS_SETT_INFOB","Breedte van de thumbnail kolom in %:");
DEFINE("_ADMIN_EVENTS_SETT_INFOB_DESC","Breedte van de thumbnail kolom");
DEFINE("_ADMIN_EVENTS_SETT_LOCA","Breedte van de locatie kolom in %:");
DEFINE("_ADMIN_EVENTS_SETT_LOCA_DESC","Breedte van de locatie kolom (Laat leeg indien u dit niet wilt activeren)");
DEFINE("_ADMIN_EVENTS_SETT_CITYW","Breedte van de plaats kolom in %:");
DEFINE("_ADMIN_EVENTS_SETT_CITYW_DESC","Breedte van de plaats kolom (Laat leeg indien u dit niet wilt activeren)");
DEFINE("_ADMIN_EVENTS_SETT_UNWR","Configuratie bestand niet beschrijfbaar");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE","Datum formaat:");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE_DESC","Datum formaat, gebruik hetzelfde formaat als PHP strftime, bijvoorbeeld: %d.%m.%Y. Meer informatie: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME","Tijd formaat:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME_DESC","Tijd formaat, gebruik hetzelfde formaat als PHP strftime, bijvoorbeeld:%H.%M. Meer informatie: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME","Tijd aanduiding:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME_DESC","Vul hier in &quot;u&quot; of &quot;Uur&quot; bijvoorbeeld. Dit wordt dan getoond direct na de tijd. Laat leeg als u het niet wilt gebruiken.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS","Toon link naar detail pagina:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS_DESC","Toon link naar detail pagina en waar? (Link naar titel werkt alleen als toon titel op ja staat, thumbnails werkt alleen als de breedte van de kolom is ingevuld op het layout tabblad.)");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIMEDET_DESC","Toon tijd op detail pagina.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC","Toon evenement beschrijving:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC_DESC","Toon evenement beschrijving op de detail pagina.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL","Toon evenement titel:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL_DESC","Toon evenement titel op de detail pagina.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS","Toon adres van de locatie:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS_DESC","Toon adres van de locatie op de detail pagina.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC","Toon locatie beschrijving:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC_DESC","Toon locatie beschrijving op de detail pagina.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB","Toon link naar locatie weergave:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB_DESC","Toon link naar de locatie weergave op de voorpagina.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB","Toon link naar locatie:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB_DESC","Toon link naar locatie op detail pagina.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL","Nieuwe evenementen van gebruikers:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL_DESC","Sta toe dat gebruikers nieuwe evenementen aanmaken vanaf de voorpagina.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL","E-mail bij nieuw toegevoegd evenement:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL_DESC","Stel de beheerder op de hoogte van nieuwe evenementen die door gebruikers zijn aangemaakt.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1","E-mail ontvanger:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1_DESC","Het e-mail adres van degene die de informatie moet ontvangen.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2","CC: e-mail ontvanger:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2_DESC","Het e-mail adres van een tweede persoon die de informatie moet ontvangen (optioneel).");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT","Maximale lengte beschrijving evenement en locatie:");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT_DESC","Max. lengte van de beschrijving van het evenement, en de beschrijving van de locatie. Als de lengte van de beschrijving te lang is, dan wordt de beschrijving afgekapt, en de opmerking [stripped] wordt toegevoegd.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET1","Details uit");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET2","Link naar titel");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET3","Link naar thumbnail");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET4","Beide");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB","Automatisch publiceren?");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB_DESC","Publiceer evenementen automatisch");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC","Nieuwe locaties van gebruikers:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC_DESC","Sta toe dat gebruikers nieuwe locaties aanmaken vanaf de voorpagina");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUBLOCS_DESC","Publiceer locaties automatisch?");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF1","Uit");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF2","Alleen bij nieuw evenement");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF3","Alleen bij nieuwe locatie");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF4","Beide");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT","Toon categorie:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT_DESC","Toon categorie op de voorpagina.");
DEFINE("_ADMIN_EVENTS_SETT_CATW","Breedte van de categorie kolom in %:");
DEFINE("_ADMIN_EVENTS_SETT_CATW_DESC","Breedte van de categorie kolom (Laat leeg indien u dit niet wilt activeren)");
DEFINE("_ADMIN_EVENTS_SETT_VIEW","Selecteer standaard layout voorpagina:");
DEFINE("_ADMIN_EVENTS_SETT_VIEW1","Eenvoudige lijst weergave");
DEFINE("_ADMIN_EVENTS_SETT_VIEW2","Eenvoudige categorie weergave");
DEFINE("_ADMIN_EVENTS_SETT_VIEW3","Gedetaileerde categorie weergave");
DEFINE("_ADMIN_EVENTS_SETT_VIEW4","Toekomstig gebruik");
DEFINE("_ADMIN_EVENTS_SETT_VIEW_DESC","Kies hier de standaard voorpagina layout. 'Eenvoudige lijst weergave' is de oude layout.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC_DESC","Ook toegang tot de onderliggende groepen? Als er geen toegang verleend is tot de onderliggende groepen, is er uitsluitend toegang tot de geselecteerde groep. <br /><strong>Noot:</strong> Beheerders hebben altijd toegang.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC","Onderliggende groepen:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE","Maximale bestandsgrote afbeelding:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE_DESC","Maximale bestandsgrote van een afbeelding in kb");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT","Maximale hoogte van een thumbnail:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT_DESC","Maximale hoogte van een thumbnail afbeelding en categorie afbeelding in pixels");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH","Maximale breedte van een thumbnail afbeelding:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH_DESC","Maximale breedte van een thumbnail afbeelding en categorie afbeelding in pixels");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB","Hoogte-breedteverhoudingen vergrendelen:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB_DESC","Hoogte-breedteverhoudingen vergrendelen of grootte aanpassen"); 
DEFINE("_ADMIN_EVENTS_SETT_GDSTATUS","Status: ");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE","Maak thumbnails:");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE_DESC","Zet dit op nee, als de status laat zien dat de GD Library niet beschikbaar is, of dat u versie 1 heeft van de GD library.");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB","Upload afbeeldingen:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB1","Uitgeschakeld");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB2","Optioneel");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB3","Verplicht");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB_DESC","Is het uploaden van afbeeldingen uitgeschakeld, verplicht of optineel voor gebruikers.");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD","CHMOD voor afbeeldingen:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD_DESC","Geef hier de rechten op die u aan de afbeeldingen toe wilt kennen. Bijvoorbeeld 0740");
DEFINE("_ADMIN_EVENTS_SETT_HEAD1","Archief instellingen");
DEFINE("_ADMIN_EVENTS_SETT_HEAD2","Voorpagina instellingen");
DEFINE("_ADMIN_EVENTS_SETT_HEAD3","Introductie");
DEFINE("_ADMIN_EVENTS_SETT_HEAD4","Toegang evenementen");
DEFINE("_ADMIN_EVENTS_SETT_HEAD5","Toegang locaties");
DEFINE("_ADMIN_EVENTS_SETT_HEAD6","Locaties");
DEFINE("_ADMIN_EVENTS_SETT_HEAD7","Lengte beschrijvingen");
DEFINE("_ADMIN_EVENTS_SETT_HEAD8","E-mail instellingen");
DEFINE("_ADMIN_EVENTS_SETT_HEAD9","Instellingen afbeeldingen");
DEFINE("_ADMIN_EVENTS_SETT_HEAD10","Voorpagina");
DEFINE("_ADMIN_EVENTS_SETT_HEAD11","Evenementen");
DEFINE("_ADMIN_EVENTS_SETT_HEAD12","Algemene Layout instellingen");
DEFINE("_ADMIN_EVENTS_SETT_HEAD13","Breedte van de tabel");
DEFINE("_ADMIN_EVENTS_SETT_HEAD14","Kolom datum");
DEFINE("_ADMIN_EVENTS_SETT_HEAD15","Kolom titel");
DEFINE("_ADMIN_EVENTS_SETT_HEAD16","Kolom thumbnail");
DEFINE("_ADMIN_EVENTS_SETT_HEAD17","Kolom locatie");
DEFINE("_ADMIN_EVENTS_SETT_HEAD18","Kolom plaats");
DEFINE("_ADMIN_EVENTS_SETT_HEAD19","Kolom categorie");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG1","Intergratie");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL","Kies community oplossing:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL1","Uitgeschakeld");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL2","CB / CBE");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL_DESC","Kies de community oplossing die u gebruikt. Communitybuilder van Joomlapolis.com / Communitybuilder van kolloczek.com");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG2","Community oplossing opties");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION","Kies integratie opties:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION1","Geen integratie");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION2","Link naar profiel");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION3","Link naar profiel en toon avatar");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION_DESC","Kies het type integratie. Event List ondersteund het tonen van de avatar en het maken van links naar het profiel van de gebruiker die het evenement heeft gemaakt");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG3","LETOP");
DEFINE("_ADMIN_EVENTS_SETT_COMM_NOTES","Event List ondersteunt AKReservation. Als u een gedetaileerde inschrijving nodig heeft, Plaats dan de mambot trigger in het evenement beschrijving veld. Link: ");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION1","Geen kaart diensten");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION2","Map 24");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION3","Google Map");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC","Verberg locatie gegevens");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC_DESC","Verberg alle locatie details. Alle andere instellingen voor de locatie details hebben verder geen effect meer.");
DEFINE("_ADMIN_EVENTS_SETT_WARNING","!! Controleer uw module instellingen! Activeer dit alleen als dit is uitgeschakeld in de module. Zet deze optie niet twee keer aan !!");
DEFINE("_ADMIN_EVENTS_SETT_INFOBUT_WARNING","!! Verwijder de breedte, als u linkt naar de details pagina met de titel, of als u dit niet gebruikt !!");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK","Toon link naar categorie weergave:");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK_DESC","Toon link naar categorie weergave op de voorpagina.");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG4","Voorpagina:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE","Inschrijven toestaan:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE_DESC","Toestaan dat gebruikers kiezen of ze inschrijvingen toestaan bij het evenement, wat zij ingezonden hebben.");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE","Uitschrijven toestaan:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE_DESC","Toestaan dat gebruikers kiezen of ze uitschrijvingen toestaan bij het evenement dat zij ingezonden hebben.");
												
//Categories
DEFINE("_ADMIN_CATEGORIES_NAME","Categorie");
DEFINE("_ADMIN_CATEGORIES_PUBLISH","Gepubliceerd");
DEFINE("_ADMIN_CATEGORIES_ORDER","Sorteren");
DEFINE("_ADMIN_CATEGORIES_PUBLI","Gepubliceerd?:");
DEFINE("_ADMIN_CATEGORIES_DESCR_OPT_LO","(optioneel)");
DEFINE("_ADMIN_CATEGORIES_DESCR_INTRO_LO","De categorie beschrijving");
DEFINE("_ADMIN_CATEGORIES_DESCR_LO","Beschrijving:");
DEFINE("_ADMIN_EVENTS_DEL_CAT","FOUT: Minimaal &eacute;&eacute;n evenement is toegewezen aan deze categorie");
DEFINE("_ADMIN_CATEGORIES_DEL"," Categorie(&euml;n) verwijderd");
DEFINE("_ADMIN_CATEGORIES_NAME_EMPTY","Fout: Vul een categorie naam in.");
DEFINE("_ADMIN_CATEGORIES_IMAGE","Afbeelding:");
DEFINE("_ADMIN_CATEGORIES_IMAGEPREV","Voorbeeld:");
DEFINE("_ADMIN_CATEGORIES_SAVE","Categorie(&euml;n) opgeslagen");
DEFINE("_EVENTLIST_CATVIEW1","Toon evenementen");
DEFINE("_EVENTLIST_CATVIEWCOUNTEV","Evenementen:");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_CAT"," Categorie succesvol gepubliceerd");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_CAT"," Categorie(&euml;n) succesvol uit publikatie genomen");
DEFINE("_ADMIN_CATEGORIES_HEAD","Eventlist categorie");

//Registration
DEFINE("_ADMIN_EVENTS_REGCOUNT","Ingeschreven gebruikers");
DEFINE("_ADMIN_EVENTS_USERNAME","Gebruikersnaam");
DEFINE("_ADMIN_EVENTS_USERIP","IP");
DEFINE("_ADMIN_EVENTS_UREGDATE","Inschrijfdatum");
DEFINE("_ADMIN_EVENTS_USERID","User ID");
DEFINE("_ADMIN_EVENTS_USERDELETE","Verwijderen");
DEFINE("_ADMIN_REGISTER_DEL"," Ingeschreven gebruiker(s) verwijderd");
DEFINE("_ADMIN_EVENTS_REGISTRA","Inschrijven toegestaan?");
DEFINE("_ADMIN_EVENTS_UNREGISTRA","Uitschrijven toegestaan?");
DEFINE("_EVENTS_REGISTRA_HEAD","Ingeschreven gebruikers:");
DEFINE("_EVENTS_REGISTRA_ALLRE","U bent al ingeschreven bij dit evenement.");
DEFINE("_EVENTS_REGISTRA_LOGIN","U moet inloggen om op dit evenement te kunnen inschrijven.");
DEFINE("_EVENTS_REGISTRA_TOLATE","Het is te laat om voor dit evenement in te schrijven.");
DEFINE("_EVENTS_REGISTRA_REG","Ik ga naar dit evenement:");
DEFINE("_EVENTS_REGISTRA_BUTTON","Inschrijven");
DEFINE("_EVENTS_REGISTRA_SUCCESS","U bent succesvol ingeschreven bij dit evenement.");
DEFINE("_EVENTS_REGISTRA_UNREG","Uitschrijven van dit evenement:");
DEFINE("_EVENTS_REGISTRA_BUTTON_UNREG","Uitschrijven");
DEFINE("_EVENTS_REGISTER_DEL","U bent niet langer ingeschreven voor dit evenement.");

//new 0.8
DEFINE("_ADMIN_CATEGORIES_ACCESS","Toegang");
DEFINE("_ADMIN_EVENTS_ACCESS_DENIED","Toegang geweigerd.");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION1","Nee");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION2","Ja");

//new 0.8.6
DEFINE("_ADMIN_GDVERSION_TWO","GD versie is 2. Thumbnail maken inschakelen.");
DEFINE("_ADMIN_GDVERSION_ONE","GD versie is 1. Thumbnail maken uitschakelen.");

//new 0.8.7
DEFINE("_ADMIN_CHOOSE_CITY","Selecteer een plaats");
DEFINE("_ADMIN_CHOOSE_A_VENUE","Kies een locatie in");
DEFINE("_ADMIN_CHOOSE_A_CITY","Selecteer hierboven een plaats");

//new 0.8.9
DEFINE("_ADMIN_EVENTS_ENDDATE","Einddatum:");
DEFINE("_ADMIN_EVENTS_INFOBUTTON_ERROR_MSG", "U heeft gekozen om een link te maken naar de info knop, maar u heeft geen breedte voor de knop opgegeven. Verwijder de link naar de info knop (op het tabblad Basic Settings), of stel de breedte in voor de info knop (op het tabblad Layout)");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER","Toon zoek filter:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER_DESC","Toon het zoek filter op de voorpagina.");
?>