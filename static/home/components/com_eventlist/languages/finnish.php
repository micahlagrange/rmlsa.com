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
DEFINE("_EVENTS_DATE","Päivä");
DEFINE("_EVENTS_CLUB","Tapahtumapaikka");
DEFINE("_EVENTS_CITY","Kaupunki");
DEFINE("_EVENTS_DETAILS","Tiedot");
DEFINE("_EVENTS_BACK","takaisin");
DEFINE("_EVENTS_EVENT","Tapahtuma");
DEFINE("_EVENTS_WHEN","Ajankohta:");
DEFINE("_EVENTS_WHERE","Missä:");
DEFINE("_EVENTS_DESC","Tapahtuman kuvaus:");
DEFINE("_EVENTS_LOCAT","Sijainti");
DEFINE("_EVENTS_LOCDESC","Sijainnin kuvaus:");
DEFINE("_EVENTS_DESCALERT","Kuvausta ei ole saatavilla");
DEFINE("_EVENTS_COUNTRY_LO","Maa:");
DEFINE("_ADMIN_EVENTS_DETA_REDI","Pääsy estetty");
DEFINE("_EVENTS_HOMEPAGE_LO","Kotisivu:");
DEFINE("_EVENTS_HOMEPAGENO_LO","Kotisivua ei saatavilla");
DEFINE("_EVENTLIST_SHARCHIVE","Näytä arkisto");
DEFINE("_EVENTS_MAP","Näytä sijainti kartalla");

//images
DEFINE("_EVENTS_IMAGEEMPT","Valitse kuva ladattavaksi");
DEFINE("_EVENTS_IMAGESIZEBIG","Tiedostokoko on väärä");
DEFINE("_EVENTS_IMAGECHARACT","Tiedostonimen tulee sisältää vain aakkosnumeerisia merkkejä ilman välilyöntejä.");
DEFINE("_EVENTS_IMAGEEXIST","Kuva on jo olemassa. Valitse toinen nimi kuvalle.");
DEFINE("_EVENTS_IMAGETYPE","Tiedoston on oltava gif, png, jpg, bmp");	//changed in 0.8.3
DEFINE("_EVENTS_IMAGEFAIL","Lataus epäonnistui");
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
DEFINE("_ADMIN_EVENTS_IMAGEGDVERSWARN","Huomaa: Tapahtumalista vaatii GD-kirjaston Version 2, tai uudemman, thumbnailien luomiseen. Jos sinulla ei ole GD tukea tai jos käytät versiota 1, niin ota thumbnailien luonti pois käytöstä.");

//Backend

//add/edit event
DEFINE("_ADMIN_EVENTS_HEADER_EV","Tapahtumalistan tapahtuma");
DEFINE("_ADMIN_EVENTS_DATE","Tapahtumapäivä:");
DEFINE("_ADMIN_EVENTS_DATE_NOTICE","Muoto yyyy-mm-dd");
DEFINE("_ADMIN_EVENTS_TIME_NOTICE","Muoto: hh:mm");
DEFINE("_ADMIN_EVENTS_CLUB_ID","Tapahtumapaikka:");
DEFINE("_ADMIN_EVENTS_DEL"," Tapahtuma(t) poistettu");
DEFINE("_ADMIN_EVENTS_DELFORM","VIRHE: Päivä on väärässä muodossa");
DEFINE("_ADMIN_EVENTS_DELFORMT","VIRHE: Aika on väärässä muodossa tai sinun tulee sallia ajan näyttö julkisivu puolella. Jos näin olet tehnyt, niin sinun tulee täyttää nämä kentät");
DEFINE("_ADMIN_EVENTS_EMPTY","VIRHE: lisää ensin sijainti");
DEFINE("_ADMIN_EVENTS_SAVE","Tapahtuma tallennettu.");
DEFINE("_ADMIN_EVENTS_DESCR","Tapahtuma kuvaus:");
DEFINE("_ADMIN_EVENTS_DESCR_OPT","valinnainen");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO","Tapahtumakuvaus");
DEFINE("_ADMIN_EVENTS_TIME","Aika:");
DEFINE("_ADMIN_EVENTS_TITEL","Tapahtuman otsikko:");
DEFINE("_ADMIN_EVENTS_NO_LOC","VIRHE: Valitse tapahtumapaikka tai lisää sijainti. Jälkikäteen voit lisätä tapahtumat");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_ENDTIME","Päättymisaika:");
DEFINE("_ADMIN_EVENTS_ENDTIME_NOTICE","Muoto: hh:mm (valinnainen)");
DEFINE("_ADMIN_EVENTS_PUBLI","Julkaistu");
DEFINE("_ADMIN_EVENTS_CAT_ID","Kategoria:");
DEFINE("_ADMIN_EVENTS_SEL_CAT","Valitse kategoria");
DEFINE("_ADMIN_EVENTS_SEL_LOC","Valitse tapahtumapaikka");
DEFINE("_ADMIN_EVENTS_CATEMPTY","VIRHE: Valitse kategoria tai lisää kategoria. Jälkikäteen voit lisätä tapahtumat");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SUC_ARCH"," Tapahtuma(t) onnistuneesti arkistoitu");
DEFINE("_ADMIN_EVENTS_SUC_PUBL"," Tapahtuma(t) onnistuneesti julkaistu");
DEFINE("_ADMIN_EVENTS_SUC_UNARCH"," Tapahtuma(t) onnistuneesti ei arkistoitu");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL"," Tapahtuma(t) onnistuneesti ei julkaistuksi");
DEFINE("_ADMIN_EVENTS_OTHER","Muut");
DEFINE("_ADMIN_EVENTS_REGISTRA","Salli rekisteröinti:");

//add/edit location
DEFINE("_ADMIN_EVENTS_HEADER_LO","Tapahtumalistan sijainti");
DEFINE("_ADMIN_EVENTS_CLUB_LO","Tapahtumapaikka:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LO","Tapahtumapaikan kotisivu:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_NOTICE_LO","URL täytyy olla muodossa http://www.google.com");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_CITY_LO","Kaupunki:");
DEFINE("_ADMIN_EVENTS_DEL_LO", "VIRHE: vähintään yksi tapahtuma tahän sijaintiin");
DEFINE("_ADMIN_EVENTS_DELYES_LO", " Sijainti(t) poistettu");
DEFINE("_ADMIN_EVENTS_SAVECLUB_LO","VIRHE: lisää tapahtumapaikka");
DEFINE("_ADMIN_EVENTS_SAVEHOMEP_LO","VIRHE: lisää kotisivu");
DEFINE("_ADMIN_EVENTS_SAVETOWN_LO","VIRHE: lisää kaupunki");
DEFINE("_ADMIN_EVENTS_SAVE_LO","Sijainti tallennettu");
DEFINE("_ADMIN_EVENTS_DESCR_LO","Sijainnin kuvaus");
DEFINE("_ADMIN_EVENTS_DESCR_OPT_LO","valinnainen");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO_LO","Sijainti kuvaus");
DEFINE("_ADMIN_EVENTS_CLUBSTREET_LO","Katuosoite:");
DEFINE("_ADMIN_EVENTS_CLUBPLZ_LO","Postinumero:");
DEFINE("_ADMIN_EVENTS_CLUBCOUNTRY_LO","Maa (US,DE,AT,FI jne.):");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SAVEADRESS_LO","VIRHE: Olet sallinut yhdän näistä asetuksista: näytä linkki map24:een, näytä osoite. Älä salli näitä jos et halua täyttää osoitekenttiä");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_OPTIONAL_LO","* -merkityt ovat valinnaisia kenttiä. Huomaa: Osoitekentät ovat vain valinnaisia, jos et halua näyttää map24 omainaisuutta.");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_LO"," Sijainti(t) onnistuneesti julkaistu");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_LO"," Sijainti(t) onnistuneesti ei julkaistuksi");
DEFINE("_ADMIN_EVENTS_ADRESSDET","Osoite tiedot");
//list events
DEFINE("_ADMIN_EVENTS_DATE_LI_EV","Päivä");
DEFINE("_ADMIN_EVENTS_CLUB_LI_EV","Tapahtumapaikka");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_EV","Tapahtumanpaikan kotisivut");
DEFINE("_ADMIN_EVENTS_CITY_LI_EV","Kaupunki");
DEFINE("_ADMIN_EVENTS_LIMITBOX_LI_EV","Näytä: ");
DEFINE("_ADMIN_EVENTS_TITEL_LI_EV","Tapahtuman otsikko:");
DEFINE("_ADMIN_EVENTS_TIME_LI_EV","Tapahtuma-aika");
DEFINE("_ADMIN_EVENTS_PUBLISH_LI_EV","Julkaistu");
DEFINE("_ADMIN_EVENTS_USERDELI_LI_EV","Käyttäjän tapahtuma?");
DEFINE("_ADMIN_EVENTS_CAT_LI_EV","Kategoria");
DEFINE("_ADMIN_EVENTS_SEARCH_LI_EV","Etsi:");

//list locations
DEFINE("_ADMIN_EVENTS_CLUB_LI_LO","Tapahtumapaikka");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_LO","Tapahtumapaikan kotisivu");
DEFINE("_ADMIN_EVENTS_CITY_LI_LO","Kaupunki");
DEFINE("_ADMIN_EVENTS_ORDER_LI_LO","Järjestys");

//Frontend deliver events
DEFINE("_ADMIN_EVENTS_DELIVNAME","Nimesi:");
DEFINE("_ADMIN_EVENTS_DELIVNAME_DESC","Kirjoita nimesi tähän");
DEFINE("_ADMIN_EVENTS_DELIVMAIL","Sähköpostiosoitteesi:");
DEFINE("_ADMIN_EVENTS_DELIVMAIL_DESC","Kirjoita sähköpostiosoitteesi tähän");
DEFINE("_EVENTS_DELIVER","Lähetä tapahtuma");
DEFINE("_EVENTS_VALIDATE","ERROR: Täytä kaikki kentät");
DEFINE("_ADMIN_EVENTS_DELIV_REDI","Ehdotus tapahtuman lähettämisestä ei ole sallittu");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILBOD_1"," Sinulle on lähetetty ehdotus tarkistettavaksi käyttäjältä ");
DEFINE("_EVENTS_DELIVMAILBOD_2"," Käyttäjän sähköpostiosoite: ");
DEFINE("_EVENTS_DELIVMAILBOD_3"," Käyttäjän - IP: ");
DEFINE("_EVENTS_DELIVMAILBOD_4"," Lähetys aika: ");
DEFINE("_EVENTS_DELIVMAILBOD_5"," Tapahtuman otsikko: ");
DEFINE("_EVENTS_DELIVMAILBOD_6"," Tapahtuma päivä: ");
DEFINE("_EVENTS_DELIVMAILBOD_7"," Tapahtuma-aika: ");
DEFINE("_EVENTS_DELIVMAILBOD_8"," Tapahtumapaikka: ");
DEFINE("_EVENTS_DELIVMAILBOD_9"," Tapahtuma kuvaus: ");
DEFINE("_EVENTS_DELIVMAILBOD_10"," : Uusi tapahtuma ");
DEFINE("_EVENTLIST_DELIVER","Lisää uusi tapahtuma");
DEFINE("_EVENTLIST_BACK","takaisin");
DEFINE("_ADMIN_EVENTS_DELMAILFORM","VIRHE: Sähköpostiosoite on väärässä muodossa.");
DEFINE("_ADMIN_EVENTS_DELTITLLEN","VIRHE: Otsikko on liian pitkä.");
DEFINE("_ADMIN_EVENTS_DELNAMLEN","VIRHE: Nimi on liian pitkä.");
DEFINE("_EVENTS_DELTEXTARHTML","HTML ei ole sallittu.");
DEFINE("_EVENTS_RESTZ","saatavilla");
DEFINE("_EVENTS_RESTZAKT","päivitä");
DEFINE("_EVENTS_DEL_DATE_EMPT","Lisää päivä.");
DEFINE("_EVENTS_DEL_TIME_EMPT","Lisää aika.");
DEFINE("_EVENTS_DEL_TITEL_EMPT","Lisää otsikko");
DEFINE("_EVENTS_DEL_CATEG_EMPT","Valitse kategoria.");
DEFINE("_EVENTS_DEL_LOCAT_EMPT","Valitse tapahtumapaikka.");
DEFINE("_EVENTS_DEL_TIME_FORM","VIRHE: Aika on väärässä muodossa.");

//Frontend deliver location
DEFINE("_EVENTLIST_DELIVER_LOC","Lisää uusi sijainti");
DEFINE("_EVENTS_DELIVMAILLOCBOD_1"," Sinulle on lähetetty ehdotus tarkistettavaksi käyttäjältä ");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILLOCBOD_2"," Käyttäjän sähköpostiosoite: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_3"," Käyttäjän - IP: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_4"," Lähetys aika: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_5"," Tapahtumapaikka: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_6"," Kohteen URL: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_7"," Katuosoite: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_8"," Postinumero: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_9"," Kaupunki: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_10"," Maatunnus: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_11"," Kuvaus: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_12"," : Uusi sijainti ");
DEFINE("_EVENTS_DELIVER_LOC","Lähetys sijainti");
DEFINE("_EVENTS_DELURLLOCFORM","URL on liian pitkä");
DEFINE("_EVENTS_DELSTREETLOCFORM","Katuosoite on liian pitkä");
DEFINE("_EVENTS_DELPLZLOCFORM","Postinumero on liian pitkä");
DEFINE("_EVENTS_DELCITYLOCFORM","Kaupunki on liian pitkä");
DEFINE("_EVENTS_DELCOUNTRYLOCFORM","Maatunnus on liian pitkä");
DEFINE("_EVENTS_DELURLLOCFORM2","VIRHE: URL on väärässä muodossa.");
DEFINE("_EVENTS_DEL_LOC_STREET_EMPT","VIRHE: Kirjoita katuosoite.");
DEFINE("_EVENTS_DEL_LOC_PLZ_EMPT","VIRHE: Kirjoita postinumero.");
DEFINE("_EVENTS_DEL_LOC_COUNTRY_EMPT","VIRHE: Kirjoita maatunnus.");

//settings
DEFINE("_ADMIN_EVENTS_SETT_HEADER","Tapahtumakalenterin asetukset");
DEFINE("_ADMIN_EVENTS_SETT_SAVE","Asetukset tallennettu");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD","Hallitse vanhoja tapahtumia:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD1","Älä tee mitään");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD2","Poista vanhat tapahtumat");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD3","Arkistoi vanhat tapahtumat");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD_DESC","Poista tai arkistoi vanhat tapahtumat automaattisesti.");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR","Päiviä:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR_DESC","Päiviä joiden jälkeen ei poisteta eikä arkistoida. Tällä ei ole vaikutusta jos valinta yllä on Älä tee mitään.");
DEFINE("_ADMIN_EVENTS_SETT_EVNR","Tapahtumien määrä julkisivulla:");
DEFINE("_ADMIN_EVENTS_SETT_EVNR_DESC","Tapahtumien määrä joka näytetään julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_MAPID","Sinun Map24 ID:");
DEFINE("_ADMIN_EVENTS_SETT_MAPID_DESC","Sinun tulee rekisteröityä Map24:een ja hankkia ID.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME","Näytä aika:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME_DESC","Näytä aika julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL","Näytä otsikko:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL_DESC","Näytä tapahtuman otsikko julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC","Näytä tapahtumapaikka/sijainti:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC_DESC","Näytä tapahtumapaikka/sijainti julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY","Näytä kaupunki:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY_DESC","Näytä tapahtumapaikka/sijainti julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP","Näytä linkki karttaan:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP_DESC","Näytä linkki karttaan ominaisuus sivulla. Huomaa: Sinun tulee kirjoittaa Map24 ID jos valitset tämän palvelun.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER","Näytä ylätunniste:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER_DESC","Näytä ylätunniste julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO","Näytä introteksti:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO_DESC","Näytä introteksti julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_INTROT","Introteksti tapahtumalistalle:");
DEFINE("_ADMIN_EVENTS_SETT_INTROT_DESC","Tämä teksti näytetään ylläolevassa listauksessa julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_TABLW","Taulukon leveus % :");
DEFINE("_ADMIN_EVENTS_SETT_TABLW_DESC","Listauksen leveys julksivulla.");
DEFINE("_ADMIN_EVENTS_SETT_DATEC","Päivä sarakkeen leveys %:");
DEFINE("_ADMIN_EVENTS_SETT_DATEC_DESC","Päivä sarakkeen leveys.");
DEFINE("_ADMIN_EVENTS_SETT_CNAME","Haluttu nimi:");
DEFINE("_ADMIN_EVENTS_SETT_CNAME_DESC","Vaihda tämä miksi haluat.");
DEFINE("_ADMIN_EVENTS_SETT_TITELW","Otsikon sarakkeen leveys %:");
DEFINE("_ADMIN_EVENTS_SETT_TITELW_DESC","Otsikon sarakkeen leveys (jätä tyhjäksi jos et halua käyttää sitä)");
DEFINE("_ADMIN_EVENTS_SETT_INFOB","Tietoja -painikkeen sarakkeen leveys %:");
DEFINE("_ADMIN_EVENTS_SETT_INFOB_DESC","Tietoja -painikkeen sarakkeen leveys");
DEFINE("_ADMIN_EVENTS_SETT_LOCA","Sijainti sarakkeen leveys %:");
DEFINE("_ADMIN_EVENTS_SETT_LOCA_DESC","Sijainti sarakkeen leveys (jätä tyhjäksi jos et halua käyttää sitä)");
DEFINE("_ADMIN_EVENTS_SETT_CITYW","Kaupunki sarakkeen leveys %:");
DEFINE("_ADMIN_EVENTS_SETT_CITYW_DESC","Kaupunki sarakkeen leveys (jätä tyhjäksi jos et halua käyttää sitä)");
DEFINE("_ADMIN_EVENTS_SETT_UNWR","Konfiguriointi tiedosto ei ole kirjoitettavissa.");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE","Päivän muoto:");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE_DESC","Päivän muoto käyttää samaa muotoa kuin PHP strfaika, esimerkiksi: %d.%m.%Y. Lisää tietoa: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME","Ajan muoto:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME_DESC","Ajan muoto käyttää samaa muotoa kuin PHP strfaika, esimerkiksi: %H.%M. Lisää tietoa: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME","Nimi:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME_DESC","Kirjoita &quot;h&quot; tai &quot;klo&quot; esimerkiksi. Tämä näytetään ennen aikaa julkisivu puolella. Jätä tyhjäksi jos et tarvitse sitä."); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS","Näytä linkki tiedot sivulle:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS_DESC","Näytä linkki tiedot sivulle ja missä? (Linkitys otsikkoon toimii vain jos näytä otsikko on kyllä, ikonit vain jos olet asettanut leveyden ulkoasun asetuksiin)");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIMEDET_DESC","Näytä aika tiedot sivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC","Näytä tapahtumakuvaus:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC_DESC","Näytä tapahtumakuvaus tiedot sivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL","Näytä tapahtuman otsikko:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL_DESC","Näytä tapahtuman otsikko tiedot sivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS","Näytä sijainnin osoite:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS_DESC","Näytä sijainnin osoite tiedot sivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC","Näytä sijainnin kuvaus:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC_DESC","Näytä sijainnin kuvaus tiedot sivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB","Näytä linkki sijaintinäkymään:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB_DESC","Näytä linkki sijaintinäkymään julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB","Näytä linkki sijaintiin:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB_DESC","Näytä linkki sijaintiin tiedot sivulla.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL","Uudet tapahtumat käyttäjiltä:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL_DESC","Salli käyttäjien lisätä uusia tapahtumia julkisivulta ja aseta käyttäjäluokitus.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL","Sähköposti uusista ehdotuksista:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL_DESC","Lähetä ylläpitäjälle sähköposti uudesta tapahtuma ehdotuksesta joita käyttäjät ovat lähettäneet?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1","Sähköpostin vastaanottaja:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1_DESC","Sähköpostiosoite henkilöltä kuka on tiedoksiannon vastaanottaja.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2","CC: Sähköpostin vastaanottaja:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2_DESC","Sähköpostiosoite henkilöltä jolle tiedoksianto lähetetään (valinnainen).");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT","Maximi pituus tapahtuma- ja sijaintikuvaukselle.");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT_DESC","Maximi pituus tapahtuma- ja sijaintikuvaukselle. Jos kuvauksen pituus on liian pitkä, kuvaus lyhennetään ja ilmoitus [lyhennetty] lisätään.");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET1","Tiedot pois käytöstä");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET2","Linkki otsikkoon");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET3","Linkki ikoniin");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET4","Molemmat");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB","Automaattinen julkaisu");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB_DESC","Julkaise tapahtumat automaattisesti?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC","Uudet sijainnit käyttäjiltä:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC_DESC","Salli käyttäjien lisätä uusi sijainti julkisivulta ja asetta käyttäjäluokitus.");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUBLOCS_DESC","Julkaise sijainti automaattisesti?");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF1","Pois käytöstä");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF2","Vain uusi tapahtuma");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF3","Vain uusi sijainti");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF4","Molemmat");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT","Näytä kategoria:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT_DESC","Näytä kategoria julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_CATW","Kategorian leveys %:");
DEFINE("_ADMIN_EVENTS_SETT_CATW_DESC","Kategorian sarakkeen leveys (jätä tyhjäksi jos et halua käyttää sitä)");
DEFINE("_ADMIN_EVENTS_SETT_VIEW","Valitse oletus sivupohja julkisivulle:");
DEFINE("_ADMIN_EVENTS_SETT_VIEW1","Lista näkymä");
DEFINE("_ADMIN_EVENTS_SETT_VIEW2","Kategoria lista");
DEFINE("_ADMIN_EVENTS_SETT_VIEW3","Yksityiskohtainen kategoria lista");
DEFINE("_ADMIN_EVENTS_SETT_VIEW4","Placeholder2");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_VIEW_DESC","Valitse oletus näkymä julkisivulle täällä. 'Lista näkymä' on vanha näkymä.");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC_DESC","Salli alakategoriat? Jos ei oikeutta, voi valita vain ryhmän. Huomaa: Ylläpitäjillä on aina oikeus.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC","Rekursio:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE","Suurin sallittu kuvan tiedostokoko:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE_DESC","Suurin sallittu kuvan tiedostokoko kb");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT","Suurin sallittu thumbnail kuvan korkeus:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT_DESC","Suurin sallittu thumbnail ja kategoria kuvan korkeus");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH","Suurin sallittu thumbnail kuvan leveys:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH_DESC","Suurin sallittu thumbnail ja kategoria kuvan leveys");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB","Pidä suhde:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB_DESC","Pidä suhde tai muuta kokoa?");
DEFINE("_ADMIN_EVENTS_SETT_GDSTATUS","Tila: ");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE","Salli Thumbnailit:");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE_DESC","Poista tämä, jos tila näyttää että GD kirjasto ei ole käytettävissä tai on vain versio 1.");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB","Kuvan lataukset:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB1","Ei sallittu");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB2","Valinnainen");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB3","Pakollinen");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB_DESC","Onko kuvan lataus pois käytöstä, valinnainen vai pakollinen käyttäjille");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD","Chmod kuville:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD_DESC","Kirjoita tähän oikeudet jotka haluat antaa kuville. Esimerkiksi 0740");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD1","Tapahtumien hallinta");
DEFINE("_ADMIN_EVENTS_SETT_HEAD2","Näyttö asetukset");
DEFINE("_ADMIN_EVENTS_SETT_HEAD3","Intro");
DEFINE("_ADMIN_EVENTS_SETT_HEAD4","Oikeudet - Tapahtumat");
DEFINE("_ADMIN_EVENTS_SETT_HEAD5","Oikeudet - Tapahtumapaikat");
DEFINE("_ADMIN_EVENTS_SETT_HEAD6","Tapahtumapaikat");
DEFINE("_ADMIN_EVENTS_SETT_HEAD7","Kuvaus - Pituus");
DEFINE("_ADMIN_EVENTS_SETT_HEAD8","Sähköpostin hallinta");
DEFINE("_ADMIN_EVENTS_SETT_HEAD9","Kuvien hallinta");
DEFINE("_ADMIN_EVENTS_SETT_HEAD10","Julkisivu");
DEFINE("_ADMIN_EVENTS_SETT_HEAD11","Tapahtumat");
DEFINE("_ADMIN_EVENTS_SETT_HEAD12","Perus ulkoasu asetukset");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD13","Taulukon kanssa");
DEFINE("_ADMIN_EVENTS_SETT_HEAD14","Päivä sarake");
DEFINE("_ADMIN_EVENTS_SETT_HEAD15","Otsikko sarake");
DEFINE("_ADMIN_EVENTS_SETT_HEAD16","Tieto sarake");
DEFINE("_ADMIN_EVENTS_SETT_HEAD17","Sijainti sarake");
DEFINE("_ADMIN_EVENTS_SETT_HEAD18","Kaupunki sarake");
DEFINE("_ADMIN_EVENTS_SETT_HEAD19","Kategoria sarake");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG1","Integraatio");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL","Valitse yhteydenpito tapa:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL1","Älä käytä mitään");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL2","CB / CBE"); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL_DESC","Valitse yhteydenpitotapa käytettäväksi. Community Builder Joomlapolis:sta tai parannettu Community Builder from www.kolloczek.com");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEADREG2","Yhteydenpito tavan asetukset");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION","Valitse integraatio asetukset:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION1","Ei integraatiota");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION2","Linkki profiiliin");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION3","Linkki profiiliin ja näytä avatar");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION_DESC","Valitse integraation tyyppi. Tapahtuma lista tukee näyttämisen avatarille ja generoinnin profiili linkkiin käyttäjälle joka rekisteröityi tapahtumaan");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG3","Huomio");
DEFINE("_ADMIN_EVENTS_SETT_COMM_NOTES","Tapahtumalista tuki AKReservation jos haluat lisää ominaisuuksia rekisteröitymiseen. Helppo paikka the mambot trigger tapahtuma kuvaus kentälle tapahtuma listasta. Linkki: ");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION1","Ei kartta palvelua");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION2","Map 24");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION3","Google Map");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC","Piilota sijainti tiedot");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC_DESC","Piilota sijainti tiedot kokonaan. Muilla sijainti asetuksilla ei ole merkitystä.");
DEFINE("_ADMIN_EVENTS_SETT_WARNING","Tarkista moduli asetukset. Aktivoi tämä vain jos sen on poistettu käytöstä modulista. Älä käytä molemmissa.");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_INFOBUT_WARNING","Poista leveys, jos linkki tiedot sivulla on otsikon kanssa tai et käytä sitä.");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK","Näytä linkki kategoria näkymään:");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK_DESC","Näytä linkki kategoria näkymässä julkisivulla.");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG4","Julkisivu:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE","Salli rekisteröinti:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE_DESC","Salli käyttäjien valita, jos he haluavat sallia rekisteröinnin tapahtumaan jonka he lisäävät tai aseta oletukseksi");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE","Salli ei rekisteröityneille:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE_DESC","Salli käyttäjille valita jos he haluavat salli ei rekisteröityneiden käyttäjien liittyä tapahtumaan tai aseta oletukseksi");
DEFINE("_ADMIN_EVENTS_SETT_GD_VERSION_TWO","GD versio on 2. Thumbnailien luonti on mahdollista.");
DEFINE("_ADMIN_EVENTS_SETT_GD_VERSION_ONE","GD versio on 1. Ota thumbnailien luonti pois käytöstä.");

//Categories
DEFINE("_ADMIN_CATEGORIES_NAME","Nimi");
DEFINE("_ADMIN_CATEGORIES_PUBLISH","Julkaise");
DEFINE("_ADMIN_CATEGORIES_ORDER","Järjestys");
DEFINE("_ADMIN_CATEGORIES_PUBLI","Julkaise:");
DEFINE("_ADMIN_CATEGORIES_DESCR_OPT_LO","(valinnainen)");
DEFINE("_ADMIN_CATEGORIES_DESCR_INTRO_LO","Kategoria kuvaus");
DEFINE("_ADMIN_CATEGORIES_DESCR_LO","Kategorian kuvaus:");
DEFINE("_ADMIN_EVENTS_DEL_CAT","VIRHE: vähintään yhden tapahtuman tulee olla tässä kategoriassa");
DEFINE("_ADMIN_CATEGORIES_DEL"," Katekoria (t) poistettu");
DEFINE("_ADMIN_CATEGORIES_NAME_EMPTY","VIRHE: Kirjoita kategorian nimi.");
DEFINE("_ADMIN_CATEGORIES_IMAGE","Kategorian kuva:");
DEFINE("_ADMIN_CATEGORIES_IMAGEPREV","Esikatsele:");
DEFINE("_ADMIN_CATEGORIES_SAVE","Kategoria tallennettu");
DEFINE("_EVENTLIST_CATVIEW1","Näytä tapahtumat");
DEFINE("_EVENTLIST_CATVIEWCOUNTEV","Tapahtumat:");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_CAT"," Kategoria(t) onnistuneesti julkaistu");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_CAT"," Kategoria(t) onnistuneesti ei julkaistuksi");
DEFINE("_ADMIN_CATEGORIES_HEAD","Tapahtumalistan kategoriat");

//Registration
DEFINE("_ADMIN_EVENTS_REGCOUNT","Rekisteröitynyt käyttäjä");
DEFINE("_ADMIN_EVENTS_USERNAME","Käyttäjätunnus");
DEFINE("_ADMIN_EVENTS_USERIP","IP");
DEFINE("_ADMIN_EVENTS_UREGDATE","Rekisteröitymispäivä");
DEFINE("_ADMIN_EVENTS_USERID","Käyttäjä ID");
DEFINE("_ADMIN_EVENTS_USERDELETE","Poista");
DEFINE("_ADMIN_REGISTER_DEL"," Rekisteröitynyt käyttäjä(t) poistettu");
DEFINE("_ADMIN_EVENTS_UNREGISTRA","Salli käyttäjien poistaa rekisteröinti?");
DEFINE("_EVENTS_REGISTRA_HEAD","Rekisteröityneet käyttäjät:");
DEFINE("_EVENTS_REGISTRA_ALLRE","Olet jo rekisteröitynyt tähän tapahtumaan.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_LOGIN","Sinun tulee kirjautua rekisteröidyksesi tähän tapahtumaan.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_TOLATE","Ei ole liian myöhäistä rekisteröityä tähän tapahtumaan.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_REG","Menen tähän tapahtumaan:");
DEFINE("_EVENTS_REGISTRA_BUTTON","Rekisteröidy");
DEFINE("_EVENTS_REGISTRA_SUCCESS","Sinut on onnistuneesti rekisteröity tähän tapahtumaan.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_UNREG","Poista rekisteröinti tästä tapahtumasta:");
DEFINE("_EVENTS_REGISTRA_BUTTON_UNREG","Poista rekisteröinti");
DEFINE("_EVENTS_REGISTER_DEL","Et ole enään rekisteröityneenä tähän tapahtumaan");	//changed in 0.8.3

//new 0.8
DEFINE("_ADMIN_CATEGORIES_ACCESS","Oikeudet");
DEFINE("_ADMIN_EVENTS_ACCESS_DENIED","Pääsy estetty.");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION1","Ei");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION2","Kyllä");

//new 0.8.6
DEFINE("_ADMIN_GDVERSION_TWO","GD versio on 2. Thumbnailien luonti on mahdollista.");
DEFINE("_ADMIN_GDVERSION_ONE","GD versio on 1. Ota thumbnailien luonti pois käytöstä.");

//new 0.8.7
DEFINE("_ADMIN_CHOOSE_CITY","Valitse kaupunki");
DEFINE("_ADMIN_CHOOSE_A_VENUE","Valitse tapahtumapaikka");
DEFINE("_ADMIN_CHOOSE_A_CITY","Valitse kaupunki yläpuolelta");

//new 0.8.9
DEFINE("_ADMIN_EVENTS_ENDDATE","Tapahtumapäivä (päättyy):"); 
DEFINE("_ADMIN_EVENTS_INFOBUTTON_ERROR_MSG", "Olet valinnut linkin tieto -painikkeelle mutta et ole asettanut leveyttä sille. Valitse joko linkki tieto -painikkeelle (Basic Settings välilehdeltä) tai aseta tieto -painikkeelle leveys (Layout välilehdeltä)"); 
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER","Näytä filtteri:"); 
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER_DESC","Näytä filtteri kenttä julkisivulla.");
?>