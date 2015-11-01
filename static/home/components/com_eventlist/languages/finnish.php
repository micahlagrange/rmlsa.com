<?php
/**
* @version 0.8.9 $Id: finnish.php 219 2007-06-18 20:49:22Z schlu $
* @package Eventlist
* @copyright (C) 2005 - 2007 Christoph Lukes
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @author: Sami Haaranen
* @dated: 18.6.2007
* @homepage: http://www.joomlaportal.fi
*/

//Frontend
DEFINE("_EVENTS_DATE","P�iv�");
DEFINE("_EVENTS_CLUB","Tapahtumapaikka");
DEFINE("_EVENTS_CITY","Kaupunki");
DEFINE("_EVENTS_DETAILS","Tiedot");
DEFINE("_EVENTS_BACK","takaisin");
DEFINE("_EVENTS_EVENT","Tapahtuma");
DEFINE("_EVENTS_WHEN","Ajankohta:");
DEFINE("_EVENTS_WHERE","Miss�:");
DEFINE("_EVENTS_DESC","Tapahtuman kuvaus:");
DEFINE("_EVENTS_LOCAT","Sijainti");
DEFINE("_EVENTS_LOCDESC","Sijainnin kuvaus:");
DEFINE("_EVENTS_DESCALERT","Kuvausta ei ole saatavilla");
DEFINE("_EVENTS_COUNTRY_LO","Maa:");
DEFINE("_ADMIN_EVENTS_DETA_REDI","P��sy estetty");
DEFINE("_EVENTS_HOMEPAGE_LO","Kotisivu:");
DEFINE("_EVENTS_HOMEPAGENO_LO","Kotisivua ei saatavilla");
DEFINE("_EVENTLIST_SHARCHIVE","N�yt� arkisto");
DEFINE("_EVENTS_MAP","N�yt� sijainti kartalla");

//images
DEFINE("_EVENTS_IMAGEEMPT","Valitse kuva ladattavaksi");
DEFINE("_EVENTS_IMAGESIZEBIG","Tiedostokoko on v��r�");
DEFINE("_EVENTS_IMAGECHARACT","Tiedostonimen tulee sis�lt�� vain aakkosnumeerisia merkkej� ilman v�lily�ntej�.");
DEFINE("_EVENTS_IMAGEEXIST","Kuva on jo olemassa. Valitse toinen nimi kuvalle.");
DEFINE("_EVENTS_IMAGETYPE","Tiedoston on oltava gif, png, jpg, bmp");	//changed in 0.8.3
DEFINE("_EVENTS_IMAGEFAIL","Lataus ep�onnistui");
DEFINE("_ADMIN_EVENTS_CHOOIMAGE","Valitse kuva:");
DEFINE("_ADMIN_EVENTS_IMAGEUPL","Valitse kuva ladattavaksi:");
DEFINE("_EVENTS_IMAGEUPLSUCCESS","Lataus onnistui");
DEFINE("_EVENTS_IMAGEUPLNOGD","GD-kirjasto ei ole saatavilla. Poista thumbnailin luonti.");
DEFINE("_EVENTS_IMAGEUPLPNG","PNG tuki on saatavilla");
DEFINE("_EVENTS_IMAGEUPLNOPNG","PNG tuki ei ole saatavilla");
DEFINE("_EVENTS_IMAGEUPLJPG","JPG tuki on saatavilla");
DEFINE("_EVENTS_IMAGEUPLNOJPG","JPG tuki ei ole saatavilla");
DEFINE("_EVENTS_IMAGEUPLGIF","GIF tuki on saatavilla");
DEFINE("_EVENTS_IMAGEUPLNOGIF","GIF tuki ei ole saatavilla");
DEFINE("_ADMIN_EVENTS_IMAGETARGET","Kohde hakemisto:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERS","GD Versio:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERSWARN","Huomaa: Tapahtumalista vaatii GD-kirjaston Version 2, tai uudemman, thumbnailien luomiseen. Jos sinulla ei ole GD tukea tai jos k�yt�t versiota 1, niin ota thumbnailien luonti pois k�yt�st�.");

//Backend

//add/edit event
DEFINE("_ADMIN_EVENTS_HEADER_EV","Tapahtumalistan tapahtuma");
DEFINE("_ADMIN_EVENTS_DATE","Tapahtumap�iv�:");
DEFINE("_ADMIN_EVENTS_DATE_NOTICE","Muoto yyyy-mm-dd");
DEFINE("_ADMIN_EVENTS_TIME_NOTICE","Muoto: hh:mm");
DEFINE("_ADMIN_EVENTS_CLUB_ID","Tapahtumapaikka:");
DEFINE("_ADMIN_EVENTS_DEL"," Tapahtuma(t) poistettu");
DEFINE("_ADMIN_EVENTS_DELFORM","VIRHE: P�iv� on v��r�ss� muodossa");
DEFINE("_ADMIN_EVENTS_DELFORMT","VIRHE: Aika on v��r�ss� muodossa tai sinun tulee sallia ajan n�ytt� julkisivu puolella. Jos n�in olet tehnyt, niin sinun tulee t�ytt�� n�m� kent�t");
DEFINE("_ADMIN_EVENTS_EMPTY","VIRHE: lis�� ensin sijainti");
DEFINE("_ADMIN_EVENTS_SAVE","Tapahtuma tallennettu.");
DEFINE("_ADMIN_EVENTS_DESCR","Tapahtuma kuvaus:");
DEFINE("_ADMIN_EVENTS_DESCR_OPT","valinnainen");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO","Tapahtumakuvaus");
DEFINE("_ADMIN_EVENTS_TIME","Aika:");
DEFINE("_ADMIN_EVENTS_TITEL","Tapahtuman otsikko:");
DEFINE("_ADMIN_EVENTS_NO_LOC","VIRHE: Valitse tapahtumapaikka tai lis�� sijainti. J�lkik�teen voit lis�t� tapahtumat");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_ENDTIME","P��ttymisaika:");
DEFINE("_ADMIN_EVENTS_ENDTIME_NOTICE","Muoto: hh:mm (valinnainen)");
DEFINE("_ADMIN_EVENTS_PUBLI","Julkaistu");
DEFINE("_ADMIN_EVENTS_CAT_ID","Kategoria:");
DEFINE("_ADMIN_EVENTS_SEL_CAT","Valitse kategoria");
DEFINE("_ADMIN_EVENTS_SEL_LOC","Valitse tapahtumapaikka");
DEFINE("_ADMIN_EVENTS_CATEMPTY","VIRHE: Valitse kategoria tai lis�� kategoria. J�lkik�teen voit lis�t� tapahtumat");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SUC_ARCH"," Tapahtuma(t) onnistuneesti arkistoitu");
DEFINE("_ADMIN_EVENTS_SUC_PUBL"," Tapahtuma(t) onnistuneesti julkaistu");
DEFINE("_ADMIN_EVENTS_SUC_UNARCH"," Tapahtuma(t) onnistuneesti ei arkistoitu");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL"," Tapahtuma(t) onnistuneesti ei julkaistuksi");
DEFINE("_ADMIN_EVENTS_OTHER","Muut");
DEFINE("_ADMIN_EVENTS_REGISTRA","Salli rekister�inti:");

//add/edit location
DEFINE("_ADMIN_EVENTS_HEADER_LO","Tapahtumalistan sijainti");
DEFINE("_ADMIN_EVENTS_CLUB_LO","Tapahtumapaikka:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LO","Tapahtumapaikan kotisivu:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_NOTICE_LO","URL t�ytyy olla muodossa http://www.google.com");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_CITY_LO","Kaupunki:");
DEFINE("_ADMIN_EVENTS_DEL_LO", "VIRHE: v�hint��n yksi tapahtuma tah�n sijaintiin");
DEFINE("_ADMIN_EVENTS_DELYES_LO", " Sijainti(t) poistettu");
DEFINE("_ADMIN_EVENTS_SAVECLUB_LO","VIRHE: lis�� tapahtumapaikka");
DEFINE("_ADMIN_EVENTS_SAVEHOMEP_LO","VIRHE: lis�� kotisivu");
DEFINE("_ADMIN_EVENTS_SAVETOWN_LO","VIRHE: lis�� kaupunki");
DEFINE("_ADMIN_EVENTS_SAVE_LO","Sijainti tallennettu");
DEFINE("_ADMIN_EVENTS_DESCR_LO","Sijainnin kuvaus");
DEFINE("_ADMIN_EVENTS_DESCR_OPT_LO","valinnainen");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO_LO","Sijainti kuvaus");
DEFINE("_ADMIN_EVENTS_CLUBSTREET_LO","Katuosoite:");
DEFINE("_ADMIN_EVENTS_CLUBPLZ_LO","Postinumero:");
DEFINE("_ADMIN_EVENTS_CLUBCOUNTRY_LO","Maa (US,DE,AT,FI jne.):");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SAVEADRESS_LO","VIRHE: Olet sallinut yhd�n n�ist� asetuksista: n�yt� linkki map24:een, n�yt� osoite. �l� salli n�it� jos et halua t�ytt�� osoitekentti�");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_OPTIONAL_LO","* -merkityt ovat valinnaisia kentti�. Huomaa: Osoitekent�t ovat vain valinnaisia, jos et halua n�ytt�� map24 omainaisuutta.");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_LO"," Sijainti(t) onnistuneesti julkaistu");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_LO"," Sijainti(t) onnistuneesti ei julkaistuksi");
DEFINE("_ADMIN_EVENTS_ADRESSDET","Osoite tiedot");
//list events
DEFINE("_ADMIN_EVENTS_DATE_LI_EV","P�iv�");
DEFINE("_ADMIN_EVENTS_CLUB_LI_EV","Tapahtumapaikka");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_EV","Tapahtumanpaikan kotisivut");
DEFINE("_ADMIN_EVENTS_CITY_LI_EV","Kaupunki");
DEFINE("_ADMIN_EVENTS_LIMITBOX_LI_EV","N�yt�: ");
DEFINE("_ADMIN_EVENTS_TITEL_LI_EV","Tapahtuman otsikko:");
DEFINE("_ADMIN_EVENTS_TIME_LI_EV","Tapahtuma-aika");
DEFINE("_ADMIN_EVENTS_PUBLISH_LI_EV","Julkaistu");
DEFINE("_ADMIN_EVENTS_USERDELI_LI_EV","K�ytt�j�n tapahtuma?");
DEFINE("_ADMIN_EVENTS_CAT_LI_EV","Kategoria");
DEFINE("_ADMIN_EVENTS_SEARCH_LI_EV","Etsi:");

//list locations
DEFINE("_ADMIN_EVENTS_CLUB_LI_LO","Tapahtumapaikka");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_LO","Tapahtumapaikan kotisivu");
DEFINE("_ADMIN_EVENTS_CITY_LI_LO","Kaupunki");
DEFINE("_ADMIN_EVENTS_ORDER_LI_LO","J�rjestys");

//Frontend deliver events
DEFINE("_ADMIN_EVENTS_DELIVNAME","Nimesi:");
DEFINE("_ADMIN_EVENTS_DELIVNAME_DESC","Kirjoita nimesi t�h�n");
DEFINE("_ADMIN_EVENTS_DELIVMAIL","S�hk�postiosoitteesi:");
DEFINE("_ADMIN_EVENTS_DELIVMAIL_DESC","Kirjoita s�hk�postiosoitteesi t�h�n");
DEFINE("_EVENTS_DELIVER","L�het� tapahtuma");
DEFINE("_EVENTS_VALIDATE","ERROR: T�yt� kaikki kent�t");
DEFINE("_ADMIN_EVENTS_DELIV_REDI","Ehdotus tapahtuman l�hett�misest� ei ole sallittu");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILBOD_1"," Sinulle on l�hetetty ehdotus tarkistettavaksi k�ytt�j�lt� ");
DEFINE("_EVENTS_DELIVMAILBOD_2"," K�ytt�j�n s�hk�postiosoite: ");
DEFINE("_EVENTS_DELIVMAILBOD_3"," K�ytt�j�n - IP: ");
DEFINE("_EVENTS_DELIVMAILBOD_4"," L�hetys aika: ");
DEFINE("_EVENTS_DELIVMAILBOD_5"," Tapahtuman otsikko: ");
DEFINE("_EVENTS_DELIVMAILBOD_6"," Tapahtuma p�iv�: ");
DEFINE("_EVENTS_DELIVMAILBOD_7"," Tapahtuma-aika: ");
DEFINE("_EVENTS_DELIVMAILBOD_8"," Tapahtumapaikka: ");
DEFINE("_EVENTS_DELIVMAILBOD_9"," Tapahtuma kuvaus: ");
DEFINE("_EVENTS_DELIVMAILBOD_10"," : Uusi tapahtuma ");
DEFINE("_EVENTLIST_DELIVER","Lis�� uusi tapahtuma");
DEFINE("_EVENTLIST_BACK","takaisin");
DEFINE("_ADMIN_EVENTS_DELMAILFORM","VIRHE: S�hk�postiosoite on v��r�ss� muodossa.");
DEFINE("_ADMIN_EVENTS_DELTITLLEN","VIRHE: Otsikko on liian pitk�.");
DEFINE("_ADMIN_EVENTS_DELNAMLEN","VIRHE: Nimi on liian pitk�.");
DEFINE("_EVENTS_DELTEXTARHTML","HTML ei ole sallittu.");
DEFINE("_EVENTS_RESTZ","saatavilla");
DEFINE("_EVENTS_RESTZAKT","p�ivit�");
DEFINE("_EVENTS_DEL_DATE_EMPT","Lis�� p�iv�.");
DEFINE("_EVENTS_DEL_TIME_EMPT","Lis�� aika.");
DEFINE("_EVENTS_DEL_TITEL_EMPT","Lis�� otsikko");
DEFINE("_EVENTS_DEL_CATEG_EMPT","Valitse kategoria.");
DEFINE("_EVENTS_DEL_LOCAT_EMPT","Valitse tapahtumapaikka.");
DEFINE("_EVENTS_DEL_TIME_FORM","VIRHE: Aika on v��r�ss� muodossa.");

//Frontend deliver location
DEFINE("_EVENTLIST_DELIVER_LOC","Lis�� uusi sijainti");
DEFINE("_EVENTS_DELIVMAILLOCBOD_1"," Sinulle on l�hetetty ehdotus tarkistettavaksi k�ytt�j�lt� ");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILLOCBOD_2"," K�ytt�j�n s�hk�postiosoite: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_3"," K�ytt�j�n - IP: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_4"," L�hetys aika: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_5"," Tapahtumapaikka: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_6"," Kohteen URL: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_7"," Katuosoite: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_8"," Postinumero: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_9"," Kaupunki: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_10"," Maatunnus: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_11"," Kuvaus: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_12"," : Uusi sijainti ");
DEFINE("_EVENTS_DELIVER_LOC","L�hetys sijainti");
DEFINE("_EVENTS_DELURLLOCFORM","URL on liian pitk�");
DEFINE("_EVENTS_DELSTREETLOCFORM","Katuosoite on liian pitk�");
DEFINE("_EVENTS_DELPLZLOCFORM","Postinumero on liian pitk�");
DEFINE("_EVENTS_DELCITYLOCFORM","Kaupunki on liian pitk�");
DEFINE("_EVENTS_DELCOUNTRYLOCFORM","Maatunnus on liian pitk�");
DEFINE("_EVENTS_DELURLLOCFORM2","VIRHE: URL on v��r�ss� muodossa.");
DEFINE("_EVENTS_DEL_LOC_STREET_EMPT","VIRHE: Kirjoita katuosoite.");
DEFINE("_EVENTS_DEL_LOC_PLZ_EMPT","VIRHE: Kirjoita postinumero.");
DEFINE("_EVENTS_DEL_LOC_COUNTRY_EMPT","VIRHE: Kirjoita maatunnus.");

//settings
DEFINE("_ADMIN_EVENTS_SETT_HEADER","Tapahtumakalenterin asetukset");
DEFINE("_ADMIN_EVENTS_SETT_SAVE","Asetukset tallennettu");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD","Hallitse vanhoja tapahtumia:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD1","�l� tee mit��n");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD2","Poista vanhat tapahtumat");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD3","Arkistoi vanhat tapahtumat");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD_DESC","Poista tai arkistoi vanhat tapahtumat automaattisesti.");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR","P�ivi�:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR_DESC","P�ivi� joiden j�lkeen ei poisteta eik� arkistoida. T�ll� ei ole vaikutusta jos valinta yll� on �l� tee mit��n.");
DEFINE("_ADMIN_EVENTS_SETT_EVNR","Tapahtumien m��r� julkisivulla:");
DEFINE("_ADMIN_EVENTS_SETT_EVNR_DESC","Tapahtumien m��r� joka n�ytet��n julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_MAPID","Sinun Map24 ID:");
DEFINE("_ADMIN_EVENTS_SETT_MAPID_DESC","Sinun tulee rekister�ity� Map24:een ja hankkia ID.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME","N�yt� aika:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME_DESC","N�yt� aika julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL","N�yt� otsikko:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL_DESC","N�yt� tapahtuman otsikko julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC","N�yt� tapahtumapaikka/sijainti:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC_DESC","N�yt� tapahtumapaikka/sijainti julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY","N�yt� kaupunki:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY_DESC","N�yt� tapahtumapaikka/sijainti julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP","N�yt� linkki karttaan:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP_DESC","N�yt� linkki karttaan ominaisuus sivulla. Huomaa: Sinun tulee kirjoittaa Map24 ID jos valitset t�m�n palvelun.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER","N�yt� yl�tunniste:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER_DESC","N�yt� yl�tunniste julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO","N�yt� introteksti:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO_DESC","N�yt� introteksti julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_INTROT","Introteksti tapahtumalistalle:");
DEFINE("_ADMIN_EVENTS_SETT_INTROT_DESC","T�m� teksti n�ytet��n yll�olevassa listauksessa julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_TABLW","Taulukon leveus % :");
DEFINE("_ADMIN_EVENTS_SETT_TABLW_DESC","Listauksen leveys julksivulla.");
DEFINE("_ADMIN_EVENTS_SETT_DATEC","P�iv� sarakkeen leveys %:");
DEFINE("_ADMIN_EVENTS_SETT_DATEC_DESC","P�iv� sarakkeen leveys.");
DEFINE("_ADMIN_EVENTS_SETT_CNAME","Haluttu nimi:");
DEFINE("_ADMIN_EVENTS_SETT_CNAME_DESC","Vaihda t�m� miksi haluat.");
DEFINE("_ADMIN_EVENTS_SETT_TITELW","Otsikon sarakkeen leveys %:");
DEFINE("_ADMIN_EVENTS_SETT_TITELW_DESC","Otsikon sarakkeen leveys (j�t� tyhj�ksi jos et halua k�ytt�� sit�)");
DEFINE("_ADMIN_EVENTS_SETT_INFOB","Tietoja -painikkeen sarakkeen leveys %:");
DEFINE("_ADMIN_EVENTS_SETT_INFOB_DESC","Tietoja -painikkeen sarakkeen leveys");
DEFINE("_ADMIN_EVENTS_SETT_LOCA","Sijainti sarakkeen leveys %:");
DEFINE("_ADMIN_EVENTS_SETT_LOCA_DESC","Sijainti sarakkeen leveys (j�t� tyhj�ksi jos et halua k�ytt�� sit�)");
DEFINE("_ADMIN_EVENTS_SETT_CITYW","Kaupunki sarakkeen leveys %:");
DEFINE("_ADMIN_EVENTS_SETT_CITYW_DESC","Kaupunki sarakkeen leveys (j�t� tyhj�ksi jos et halua k�ytt�� sit�)");
DEFINE("_ADMIN_EVENTS_SETT_UNWR","Konfiguriointi tiedosto ei ole kirjoitettavissa.");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE","P�iv�n muoto:");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE_DESC","P�iv�n muoto k�ytt�� samaa muotoa kuin PHP strfaika, esimerkiksi: %d.%m.%Y. Lis�� tietoa: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME","Ajan muoto:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME_DESC","Ajan muoto k�ytt�� samaa muotoa kuin PHP strfaika, esimerkiksi: %H.%M. Lis�� tietoa: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME","Nimi:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME_DESC","Kirjoita &quot;h&quot; tai &quot;klo&quot; esimerkiksi. T�m� n�ytet��n ennen aikaa julkisivu puolella. J�t� tyhj�ksi jos et tarvitse sit�."); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS","N�yt� linkki tiedot sivulle:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS_DESC","N�yt� linkki tiedot sivulle ja miss�? (Linkitys otsikkoon toimii vain jos n�yt� otsikko on kyll�, ikonit vain jos olet asettanut leveyden ulkoasun asetuksiin)");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIMEDET_DESC","N�yt� aika tiedot sivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC","N�yt� tapahtumakuvaus:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC_DESC","N�yt� tapahtumakuvaus tiedot sivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL","N�yt� tapahtuman otsikko:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL_DESC","N�yt� tapahtuman otsikko tiedot sivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS","N�yt� sijainnin osoite:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS_DESC","N�yt� sijainnin osoite tiedot sivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC","N�yt� sijainnin kuvaus:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC_DESC","N�yt� sijainnin kuvaus tiedot sivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB","N�yt� linkki sijaintin�kym��n:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB_DESC","N�yt� linkki sijaintin�kym��n julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB","N�yt� linkki sijaintiin:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB_DESC","N�yt� linkki sijaintiin tiedot sivulla.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL","Uudet tapahtumat k�ytt�jilt�:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL_DESC","Salli k�ytt�jien lis�t� uusia tapahtumia julkisivulta ja aseta k�ytt�j�luokitus.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL","S�hk�posti uusista ehdotuksista:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL_DESC","L�het� yll�pit�j�lle s�hk�posti uudesta tapahtuma ehdotuksesta joita k�ytt�j�t ovat l�hett�neet?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1","S�hk�postin vastaanottaja:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1_DESC","S�hk�postiosoite henkil�lt� kuka on tiedoksiannon vastaanottaja.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2","CC: S�hk�postin vastaanottaja:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2_DESC","S�hk�postiosoite henkil�lt� jolle tiedoksianto l�hetet��n (valinnainen).");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT","Maximi pituus tapahtuma- ja sijaintikuvaukselle.");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT_DESC","Maximi pituus tapahtuma- ja sijaintikuvaukselle. Jos kuvauksen pituus on liian pitk�, kuvaus lyhennet��n ja ilmoitus [lyhennetty] lis�t��n.");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET1","Tiedot pois k�yt�st�");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET2","Linkki otsikkoon");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET3","Linkki ikoniin");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET4","Molemmat");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB","Automaattinen julkaisu");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB_DESC","Julkaise tapahtumat automaattisesti?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC","Uudet sijainnit k�ytt�jilt�:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC_DESC","Salli k�ytt�jien lis�t� uusi sijainti julkisivulta ja asetta k�ytt�j�luokitus.");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUBLOCS_DESC","Julkaise sijainti automaattisesti?");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF1","Pois k�yt�st�");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF2","Vain uusi tapahtuma");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF3","Vain uusi sijainti");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF4","Molemmat");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT","N�yt� kategoria:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT_DESC","N�yt� kategoria julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_CATW","Kategorian leveys %:");
DEFINE("_ADMIN_EVENTS_SETT_CATW_DESC","Kategorian sarakkeen leveys (j�t� tyhj�ksi jos et halua k�ytt�� sit�)");
DEFINE("_ADMIN_EVENTS_SETT_VIEW","Valitse oletus sivupohja julkisivulle:");
DEFINE("_ADMIN_EVENTS_SETT_VIEW1","Lista n�kym�");
DEFINE("_ADMIN_EVENTS_SETT_VIEW2","Kategoria lista");
DEFINE("_ADMIN_EVENTS_SETT_VIEW3","Yksityiskohtainen kategoria lista");
DEFINE("_ADMIN_EVENTS_SETT_VIEW4","Placeholder2");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_VIEW_DESC","Valitse oletus n�kym� julkisivulle t��ll�. 'Lista n�kym�' on vanha n�kym�.");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC_DESC","Salli alakategoriat? Jos ei oikeutta, voi valita vain ryhm�n. Huomaa: Yll�pit�jill� on aina oikeus.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC","Rekursio:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE","Suurin sallittu kuvan tiedostokoko:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE_DESC","Suurin sallittu kuvan tiedostokoko kb");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT","Suurin sallittu thumbnail kuvan korkeus:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT_DESC","Suurin sallittu thumbnail ja kategoria kuvan korkeus");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH","Suurin sallittu thumbnail kuvan leveys:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH_DESC","Suurin sallittu thumbnail ja kategoria kuvan leveys");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB","Pid� suhde:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB_DESC","Pid� suhde tai muuta kokoa?");
DEFINE("_ADMIN_EVENTS_SETT_GDSTATUS","Tila: ");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE","Salli Thumbnailit:");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE_DESC","Poista t�m�, jos tila n�ytt�� ett� GD kirjasto ei ole k�ytett�viss� tai on vain versio 1.");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB","Kuvan lataukset:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB1","Ei sallittu");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB2","Valinnainen");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB3","Pakollinen");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB_DESC","Onko kuvan lataus pois k�yt�st�, valinnainen vai pakollinen k�ytt�jille");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD","Chmod kuville:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD_DESC","Kirjoita t�h�n oikeudet jotka haluat antaa kuville. Esimerkiksi 0740");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD1","Tapahtumien hallinta");
DEFINE("_ADMIN_EVENTS_SETT_HEAD2","N�ytt� asetukset");
DEFINE("_ADMIN_EVENTS_SETT_HEAD3","Intro");
DEFINE("_ADMIN_EVENTS_SETT_HEAD4","Oikeudet - Tapahtumat");
DEFINE("_ADMIN_EVENTS_SETT_HEAD5","Oikeudet - Tapahtumapaikat");
DEFINE("_ADMIN_EVENTS_SETT_HEAD6","Tapahtumapaikat");
DEFINE("_ADMIN_EVENTS_SETT_HEAD7","Kuvaus - Pituus");
DEFINE("_ADMIN_EVENTS_SETT_HEAD8","S�hk�postin hallinta");
DEFINE("_ADMIN_EVENTS_SETT_HEAD9","Kuvien hallinta");
DEFINE("_ADMIN_EVENTS_SETT_HEAD10","Julkisivu");
DEFINE("_ADMIN_EVENTS_SETT_HEAD11","Tapahtumat");
DEFINE("_ADMIN_EVENTS_SETT_HEAD12","Perus ulkoasu asetukset");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD13","Taulukon kanssa");
DEFINE("_ADMIN_EVENTS_SETT_HEAD14","P�iv� sarake");
DEFINE("_ADMIN_EVENTS_SETT_HEAD15","Otsikko sarake");
DEFINE("_ADMIN_EVENTS_SETT_HEAD16","Tieto sarake");
DEFINE("_ADMIN_EVENTS_SETT_HEAD17","Sijainti sarake");
DEFINE("_ADMIN_EVENTS_SETT_HEAD18","Kaupunki sarake");
DEFINE("_ADMIN_EVENTS_SETT_HEAD19","Kategoria sarake");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG1","Integraatio");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL","Valitse yhteydenpito tapa:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL1","�l� k�yt� mit��n");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL2","CB / CBE"); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL_DESC","Valitse yhteydenpitotapa k�ytett�v�ksi. Community Builder Joomlapolis:sta tai parannettu Community Builder from www.kolloczek.com");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEADREG2","Yhteydenpito tavan asetukset");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION","Valitse integraatio asetukset:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION1","Ei integraatiota");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION2","Linkki profiiliin");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION3","Linkki profiiliin ja n�yt� avatar");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION_DESC","Valitse integraation tyyppi. Tapahtuma lista tukee n�ytt�misen avatarille ja generoinnin profiili linkkiin k�ytt�j�lle joka rekister�ityi tapahtumaan");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG3","Huomio");
DEFINE("_ADMIN_EVENTS_SETT_COMM_NOTES","Tapahtumalista tuki AKReservation jos haluat lis�� ominaisuuksia rekister�itymiseen. Helppo paikka the mambot trigger tapahtuma kuvaus kent�lle tapahtuma listasta. Linkki: ");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION1","Ei kartta palvelua");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION2","Map 24");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION3","Google Map");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC","Piilota sijainti tiedot");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC_DESC","Piilota sijainti tiedot kokonaan. Muilla sijainti asetuksilla ei ole merkityst�.");
DEFINE("_ADMIN_EVENTS_SETT_WARNING","Tarkista moduli asetukset. Aktivoi t�m� vain jos sen on poistettu k�yt�st� modulista. �l� k�yt� molemmissa.");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_INFOBUT_WARNING","Poista leveys, jos linkki tiedot sivulla on otsikon kanssa tai et k�yt� sit�.");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK","N�yt� linkki kategoria n�kym��n:");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK_DESC","N�yt� linkki kategoria n�kym�ss� julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG4","Julkisivu:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE","Salli rekister�inti:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE_DESC","Salli k�ytt�jien valita, jos he haluavat sallia rekister�innin tapahtumaan jonka he lis��v�t tai aseta oletukseksi");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE","Salli ei rekister�ityneille:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE_DESC","Salli k�ytt�jille valita jos he haluavat salli ei rekister�ityneiden k�ytt�jien liitty� tapahtumaan tai aseta oletukseksi");
DEFINE("_ADMIN_EVENTS_SETT_GD_VERSION_TWO","GD versio on 2. Thumbnailien luonti on mahdollista.");
DEFINE("_ADMIN_EVENTS_SETT_GD_VERSION_ONE","GD versio on 1. Ota thumbnailien luonti pois k�yt�st�.");

//Categories
DEFINE("_ADMIN_CATEGORIES_NAME","Nimi");
DEFINE("_ADMIN_CATEGORIES_PUBLISH","Julkaise");
DEFINE("_ADMIN_CATEGORIES_ORDER","J�rjestys");
DEFINE("_ADMIN_CATEGORIES_PUBLI","Julkaise:");
DEFINE("_ADMIN_CATEGORIES_DESCR_OPT_LO","(valinnainen)");
DEFINE("_ADMIN_CATEGORIES_DESCR_INTRO_LO","Kategoria kuvaus");
DEFINE("_ADMIN_CATEGORIES_DESCR_LO","Kategorian kuvaus:");
DEFINE("_ADMIN_EVENTS_DEL_CAT","VIRHE: v�hint��n yhden tapahtuman tulee olla t�ss� kategoriassa");
DEFINE("_ADMIN_CATEGORIES_DEL"," Katekoria (t) poistettu");
DEFINE("_ADMIN_CATEGORIES_NAME_EMPTY","VIRHE: Kirjoita kategorian nimi.");
DEFINE("_ADMIN_CATEGORIES_IMAGE","Kategorian kuva:");
DEFINE("_ADMIN_CATEGORIES_IMAGEPREV","Esikatsele:");
DEFINE("_ADMIN_CATEGORIES_SAVE","Kategoria tallennettu");
DEFINE("_EVENTLIST_CATVIEW1","N�yt� tapahtumat");
DEFINE("_EVENTLIST_CATVIEWCOUNTEV","Tapahtumat:");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_CAT"," Kategoria(t) onnistuneesti julkaistu");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_CAT"," Kategoria(t) onnistuneesti ei julkaistuksi");
DEFINE("_ADMIN_CATEGORIES_HEAD","Tapahtumalistan kategoriat");

//Registration
DEFINE("_ADMIN_EVENTS_REGCOUNT","Rekister�itynyt k�ytt�j�");
DEFINE("_ADMIN_EVENTS_USERNAME","K�ytt�j�tunnus");
DEFINE("_ADMIN_EVENTS_USERIP","IP");
DEFINE("_ADMIN_EVENTS_UREGDATE","Rekister�itymisp�iv�");
DEFINE("_ADMIN_EVENTS_USERID","K�ytt�j� ID");
DEFINE("_ADMIN_EVENTS_USERDELETE","Poista");
DEFINE("_ADMIN_REGISTER_DEL"," Rekister�itynyt k�ytt�j�(t) poistettu");
DEFINE("_ADMIN_EVENTS_UNREGISTRA","Salli k�ytt�jien poistaa rekister�inti?");
DEFINE("_EVENTS_REGISTRA_HEAD","Rekister�ityneet k�ytt�j�t:");
DEFINE("_EVENTS_REGISTRA_ALLRE","Olet jo rekister�itynyt t�h�n tapahtumaan.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_LOGIN","Sinun tulee kirjautua rekister�idyksesi t�h�n tapahtumaan.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_TOLATE","Ei ole liian my�h�ist� rekister�ity� t�h�n tapahtumaan.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_REG","Menen t�h�n tapahtumaan:");
DEFINE("_EVENTS_REGISTRA_BUTTON","Rekister�idy");
DEFINE("_EVENTS_REGISTRA_SUCCESS","Sinut on onnistuneesti rekister�ity t�h�n tapahtumaan.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_UNREG","Poista rekister�inti t�st� tapahtumasta:");
DEFINE("_EVENTS_REGISTRA_BUTTON_UNREG","Poista rekister�inti");
DEFINE("_EVENTS_REGISTER_DEL","Et ole en��n rekister�ityneen� t�h�n tapahtumaan");	//changed in 0.8.3

//new 0.8
DEFINE("_ADMIN_CATEGORIES_ACCESS","Oikeudet");
DEFINE("_ADMIN_EVENTS_ACCESS_DENIED","P��sy estetty.");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION1","Ei");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION2","Kyll�");

//new 0.8.6
DEFINE("_ADMIN_GDVERSION_TWO","GD versio on 2. Thumbnailien luonti on mahdollista.");
DEFINE("_ADMIN_GDVERSION_ONE","GD versio on 1. Ota thumbnailien luonti pois k�yt�st�.");

//new 0.8.7
DEFINE("_ADMIN_CHOOSE_CITY","Valitse kaupunki");
DEFINE("_ADMIN_CHOOSE_A_VENUE","Valitse tapahtumapaikka");
DEFINE("_ADMIN_CHOOSE_A_CITY","Valitse kaupunki yl�puolelta");

//new 0.8.9
DEFINE("_ADMIN_EVENTS_ENDDATE","Tapahtumap�iv� (p��ttyy):"); 
DEFINE("_ADMIN_EVENTS_INFOBUTTON_ERROR_MSG", "Olet valinnut linkin tieto -painikkeelle mutta et ole asettanut leveytt� sille. Valitse joko linkki tieto -painikkeelle (Basic Settings v�lilehdelt�) tai aseta tieto -painikkeelle leveys (Layout v�lilehdelt�)"); 
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER","N�yt� filtteri:"); 
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER_DESC","N�yt� filtteri kentt� julkisivulla.");
?>