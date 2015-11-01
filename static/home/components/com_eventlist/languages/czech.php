<?php
/**
* @version 0.8.9 $Id: czech.php 217 2007-06-18 14:49:07Z schlu $
* @package Eventlist
* @copyright (C) 2005 - 2007 Christoph Lukes
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Czech UTF-8 language by Miroslav Baka - digitalunderground.cz
*/

//Frontend
DEFINE("_EVENTS_DATE","Datum");
DEFINE("_EVENTS_CLUB","Dějiště");
DEFINE("_EVENTS_CITY","Město");
DEFINE("_EVENTS_DETAILS","Detaily");
DEFINE("_EVENTS_BACK","zpět");
DEFINE("_EVENTS_EVENT","Akce");
DEFINE("_EVENTS_WHEN","kdy:");
DEFINE("_EVENTS_WHERE","kde:");
DEFINE("_EVENTS_DESC","Popis:");
DEFINE("_EVENTS_LOCAT","Lokace");
DEFINE("_EVENTS_LOCDESC","Popis lokace:");
DEFINE("_EVENTS_DESCALERT","Bez popisu");
DEFINE("_EVENTS_COUNTRY_LO","Země:");
DEFINE("_ADMIN_EVENTS_DETA_REDI","Přístup odepřen");
DEFINE("_EVENTS_HOMEPAGE_LO","WEB:");
DEFINE("_EVENTS_HOMEPAGENO_LO","WEB není k dispozici");
DEFINE("_EVENTLIST_SHARCHIVE","Zobraz archiv");
DEFINE("_EVENTS_MAP","Zobraz na mapě");

//images
DEFINE("_EVENTS_IMAGEEMPT","Vyberte prosím obrázek k nahrání");
DEFINE("_EVENTS_IMAGESIZEBIG","Obrázek je příliš velký");
DEFINE("_EVENTS_IMAGECHARACT","Jméno může obsahovat pouze alfanumerické znaky bez mezer.");
DEFINE("_EVENTS_IMAGEEXIST","Obrázek již existuje. Zvolte jiný název prosím.");
DEFINE("_EVENTS_IMAGETYPE","Akceptujeme pouze soubory gif, png, jpg, bmp");	//changed in 0.8.3
DEFINE("_EVENTS_IMAGEFAIL","Nahrávaní nedopadlo dobře");
DEFINE("_ADMIN_EVENTS_CHOOIMAGE","Vyberte obrázek:");
DEFINE("_ADMIN_EVENTS_IMAGEUPL","Vyberte obrázek, který chcete nahrát:");
DEFINE("_EVENTS_IMAGEUPLSUCCESS","NAhrávání se povedlo");
DEFINE("_EVENTS_IMAGEUPLNOGD","GD-knihovna není k dispozici! Zakažte vytváření náhledů.");
DEFINE("_EVENTS_IMAGEUPLPNG","PNG podporováno");
DEFINE("_EVENTS_IMAGEUPLNOPNG","PNG nepodporováno");
DEFINE("_EVENTS_IMAGEUPLJPG","JPG podporováno");
DEFINE("_EVENTS_IMAGEUPLNOJPG","JPG nepodporováno");
DEFINE("_EVENTS_IMAGEUPLGIF","GIF podporováno");
DEFINE("_EVENTS_IMAGEUPLNOGIF","GIF nepodporováno");
DEFINE("_ADMIN_EVENTS_IMAGETARGET","Cílový adresář:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERS","GD verze:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERSWARN","Poznámka: Kalendář vyžaduje pro vytváření náhledů GD-knihovnu verzi 2, nebo novější. Pokud není knihovna k dispozici, vypněte možnost tvorby náhledů.");

//Backend

//add/edit event
DEFINE("_ADMIN_EVENTS_HEADER_EV","Akce");
DEFINE("_ADMIN_EVENTS_DATE","Datum konání:");
DEFINE("_ADMIN_EVENTS_DATE_NOTICE","formát yyyy-mm-dd !");
DEFINE("_ADMIN_EVENTS_TIME_NOTICE","formát: hh:mm!");
DEFINE("_ADMIN_EVENTS_CLUB_ID","Dějiště:");
DEFINE("_ADMIN_EVENTS_DEL"," Akce smazána/y");
DEFINE("_ADMIN_EVENTS_DELFORM","CHYBA: Nesprávný formát data");
DEFINE("_ADMIN_EVENTS_DELFORMT","CHYBA: Nesprávný formát času, případně jste zvolil/a zobrazení na stránce. Je nuntné toto pole vyplnit.");
DEFINE("_ADMIN_EVENTS_EMPTY","CHYBA: nejprve přidejte lokaci");
DEFINE("_ADMIN_EVENTS_SAVE","Akce uložena.");
DEFINE("_ADMIN_EVENTS_DESCR","Popis akce:");
DEFINE("_ADMIN_EVENTS_DESCR_OPT","volitelně");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO","Něco o akci");
DEFINE("_ADMIN_EVENTS_TIME","Start:");
DEFINE("_ADMIN_EVENTS_TITEL","Kapela - název akce:");
DEFINE("_ADMIN_EVENTS_NO_LOC","CHYBA: Vyberte dějiště nebo nejdříve vložte lokaci. Poté můžete vkládat akce.");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_ENDTIME","Stop:");
DEFINE("_ADMIN_EVENTS_ENDTIME_NOTICE","formát: hh:mm! (volitelně)");
DEFINE("_ADMIN_EVENTS_PUBLI","Publikováno?");
DEFINE("_ADMIN_EVENTS_CAT_ID","Kategorie:");
DEFINE("_ADMIN_EVENTS_SEL_CAT","Vyberte kategorii");
DEFINE("_ADMIN_EVENTS_SEL_LOC","Vyberte dějiště");
DEFINE("_ADMIN_EVENTS_CATEMPTY","CHYBA: Buď vyberte kategorii, nebo jí přidejte. Poté můžete vkládat akce.");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SUC_ARCH","Akce úspěšně archivována/y");
DEFINE("_ADMIN_EVENTS_SUC_PUBL","Akce úspěšně publikována/y");
DEFINE("_ADMIN_EVENTS_SUC_UNARCH","Akce vyjmuta/y z archivu");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL","Akce nezveřejněna/y");
DEFINE("_ADMIN_EVENTS_OTHER","Jiné");
DEFINE("_ADMIN_EVENTS_REGISTRA","Povolit registraci:");

//add/edit location
DEFINE("_ADMIN_EVENTS_HEADER_LO","KLUB / SÁL");
DEFINE("_ADMIN_EVENTS_CLUB_LO","Název klubu/ sálu:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LO","WEB:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_NOTICE_LO","Adresa musí obsahovat http://!");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_CITY_LO","Město:");
DEFINE("_ADMIN_EVENTS_DEL_LO", "CHYBA: toto místo obsahuje min. 1 akci");
DEFINE("_ADMIN_EVENTS_DELYES_LO", " Místo smazáno/a");
DEFINE("_ADMIN_EVENTS_SAVECLUB_LO","CHYBA: přidejte DĚJIŠTĚ");
DEFINE("_ADMIN_EVENTS_SAVEHOMEP_LO","CHYBA: přidejte WEB");
DEFINE("_ADMIN_EVENTS_SAVETOWN_LO","CHYBA: přidejte MĚSTO");
DEFINE("_ADMIN_EVENTS_SAVE_LO","Místo uloženo");
DEFINE("_ADMIN_EVENTS_DESCR_LO","Popis");
DEFINE("_ADMIN_EVENTS_DESCR_OPT_LO","volitelně");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO_LO","Něco o tomto místě");
DEFINE("_ADMIN_EVENTS_CLUBSTREET_LO","Ulice:");
DEFINE("_ADMIN_EVENTS_CLUBPLZ_LO","PSČ:");
DEFINE("_ADMIN_EVENTS_CLUBCOUNTRY_LO","Země (CZ,SK adr.):");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SAVEADRESS_LO","CHYBA: Máte povolenu jednu z těchto možností: zobrzit odkaz na map24, zobrazit adresu. Zakažte tyto možnosti, pokud nebudete vyplňovat adresu");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_OPTIONAL_LO","* jsou volitelná pole. Poznámka: Pole adresy je volitelné pouze pokud zakážete funkci map24 !");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_LO"," Místo bylo úspěšně zveřejněno");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_LO"," Místo bylo odpublikováno");
DEFINE("_ADMIN_EVENTS_ADRESSDET","Detaily adresy");
//list events
DEFINE("_ADMIN_EVENTS_DATE_LI_EV","Datum");
DEFINE("_ADMIN_EVENTS_CLUB_LI_EV","Dějiště");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_EV","WEB dějiště");
DEFINE("_ADMIN_EVENTS_CITY_LI_EV","Město");
DEFINE("_ADMIN_EVENTS_LIMITBOX_LI_EV","Zobrazit: ");
DEFINE("_ADMIN_EVENTS_TITEL_LI_EV","Kapela - název akce");
DEFINE("_ADMIN_EVENTS_TIME_LI_EV","Začátek akce");
DEFINE("_ADMIN_EVENTS_PUBLISH_LI_EV","Zveřejněno");
DEFINE("_ADMIN_EVENTS_USERDELI_LI_EV","Uživatelská akce?");
DEFINE("_ADMIN_EVENTS_CAT_LI_EV","Kategorie");
DEFINE("_ADMIN_EVENTS_SEARCH_LI_EV","Hledat:");

//list locations
DEFINE("_ADMIN_EVENTS_CLUB_LI_LO","Dějiště");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_LO","WEB dejiště");
DEFINE("_ADMIN_EVENTS_CITY_LI_LO","Město");
DEFINE("_ADMIN_EVENTS_ORDER_LI_LO","Pořadí");

//Frontend deliver events
DEFINE("_ADMIN_EVENTS_DELIVNAME","Vaše jméno:");
DEFINE("_ADMIN_EVENTS_DELIVNAME_DESC","Vložte prosím Vaše jméno:");
DEFINE("_ADMIN_EVENTS_DELIVMAIL","Váš email:");
DEFINE("_ADMIN_EVENTS_DELIVMAIL_DESC","Vložte prosím Vaši emailovou adresu");
DEFINE("_EVENTS_DELIVER","Deliver event");
DEFINE("_EVENTS_VALIDATE","CHYBA: Vyplňte prosím všechna pole");
DEFINE("_ADMIN_EVENTS_DELIV_REDI","Předkládání akcí není povoleno");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILBOD_1"," Nová akce od uživatele ");
DEFINE("_EVENTS_DELIVMAILBOD_2"," Mail uživatele: ");
DEFINE("_EVENTS_DELIVMAILBOD_3"," Uživatelova - IP: ");
DEFINE("_EVENTS_DELIVMAILBOD_4"," Čas vložení: ");
DEFINE("_EVENTS_DELIVMAILBOD_5"," Kapela - název akce: ");
DEFINE("_EVENTS_DELIVMAILBOD_6"," Datum konání: ");
DEFINE("_EVENTS_DELIVMAILBOD_7"," Začátek akce: ");
DEFINE("_EVENTS_DELIVMAILBOD_8"," Dějiště: ");
DEFINE("_EVENTS_DELIVMAILBOD_9"," Popis akce: ");
DEFINE("_EVENTS_DELIVMAILBOD_10"," : Nová akce ");
DEFINE("_EVENTLIST_DELIVER","Vložit novou akci");
DEFINE("_EVENTLIST_BACK","zpět");
DEFINE("_ADMIN_EVENTS_DELMAILFORM","CHYBA: Nesprávný formát emailu!");
DEFINE("_ADMIN_EVENTS_DELTITLLEN","CHYBA: Název je příliš dlouhý!");
DEFINE("_ADMIN_EVENTS_DELNAMLEN","CHYBA: Jméno je přílíš dlouhé!");
DEFINE("_EVENTS_DELTEXTARHTML","HTML není povoleno!");
DEFINE("_EVENTS_RESTZ","dostupný");
DEFINE("_EVENTS_RESTZAKT","obnovit");
DEFINE("_EVENTS_DEL_DATE_EMPT","Vložte datum prosím!");
DEFINE("_EVENTS_DEL_TIME_EMPT","Vložte čas prosím!");
DEFINE("_EVENTS_DEL_TITEL_EMPT","Vložte název prosím!");
DEFINE("_EVENTS_DEL_CATEG_EMPT","Vyberte kategorii!");
DEFINE("_EVENTS_DEL_LOCAT_EMPT","Vyberte místo!");
DEFINE("_EVENTS_DEL_TIME_FORM","CHYBA: Nesprávný formát času");

//Frontend deliver location
DEFINE("_EVENTLIST_DELIVER_LOC","Vložit nové místo");
DEFINE("_EVENTS_DELIVMAILLOCBOD_1"," Nové místo od uživatele ");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILLOCBOD_2"," Email uživatelel: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_3"," Uživatelova - IP: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_4"," Čas vložení: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_5"," Dějiště: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_6"," WEB dějiště: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_7"," Ulice: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_8"," PCČ: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_9"," Město: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_10"," Kód země: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_11"," Popis: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_12"," : Nové místo ");
DEFINE("_EVENTS_DELIVER_LOC","Vložit místo");
DEFINE("_EVENTS_DELURLLOCFORM","WEB adresa je příliš dlouhá");
DEFINE("_EVENTS_DELSTREETLOCFORM","Ulice je příliš dlouhá");
DEFINE("_EVENTS_DELPLZLOCFORM","PSČ code je příliš dlouhé");
DEFINE("_EVENTS_DELCITYLOCFORM","Město je příliš dlouhé");
DEFINE("_EVENTS_DELCOUNTRYLOCFORM","Kód země je příliš dlouhý");
DEFINE("_EVENTS_DELURLLOCFORM2","CHYBA: WEB adresa má nesprávný formát!");
DEFINE("_EVENTS_DEL_LOC_STREET_EMPT","CHYBA: Vyplňte prosím ulici!");
DEFINE("_EVENTS_DEL_LOC_PLZ_EMPT","CHYBA: Vyplňte prosím PSČ!");
DEFINE("_EVENTS_DEL_LOC_COUNTRY_EMPT","CHYBA: Vyplňte prosím kód země!");

//settings
DEFINE("_ADMIN_EVENTS_SETT_HEADER","Nastavení kalendáře");
DEFINE("_ADMIN_EVENTS_SETT_SAVE","Nastavení uloženo");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD","Co se starými akcemi:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD1","Nic");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD2","Smazat");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD3","Archivovat");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD_DESC","Smazat nebo archivovat automaticky");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR","Počet dní:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR_DESC","Kolik dní nazpátek nebudou akce mazány ani archivovány. Toto nefunguje pokud je možnost výše vypnutá.");
DEFINE("_ADMIN_EVENTS_SETT_EVNR","Počet akcí na hlavní straně:");
DEFINE("_ADMIN_EVENTS_SETT_EVNR_DESC","Počet akcí, které se zobrazí na hlavní stránce.");
DEFINE("_ADMIN_EVENTS_SETT_MAPID","Vaše Map24 ID:");
DEFINE("_ADMIN_EVENTS_SETT_MAPID_DESC","Musíte se zaregistrovat na Map24 abyste získali ID.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME","Zobrazit čas:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME_DESC","Zobrazí čas na hlavní stránce.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL","Zobrazí název:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL_DESC","Zobrazí název na hlavní stránce.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC","Zobrazit místo dění:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC_DESC","Zobrazí místo dění na hlavní stránce.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY","Zobrazit město:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY_DESC","Zobrazí město na hlavní stránce.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP","Zobrazí odkaz na mapu:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP_DESC","Zobrazí odkaz na mapu na stránce detailů. Musíte vložit Map24 ID, pokud vyberete tuto možnost.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER","Zobrazit hlavičku:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER_DESC","Zobrazí hlavičku na hlavní stránce.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO","Zobrazit úvodní text:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO_DESC","Display the introtext on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_INTROT","Úvodní text seznamu akcí:");
DEFINE("_ADMIN_EVENTS_SETT_INTROT_DESC","This text is displayed above the listing on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_TABLW","Šířka tabulky % :");
DEFINE("_ADMIN_EVENTS_SETT_TABLW_DESC","Width of the listing on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_DATEC","Šířka sloupce datumu v %:");
DEFINE("_ADMIN_EVENTS_SETT_DATEC_DESC","Width of the date column.");
DEFINE("_ADMIN_EVENTS_SETT_CNAME","Název dle libosti:");
DEFINE("_ADMIN_EVENTS_SETT_CNAME_DESC","Change this to whatever you like.");
DEFINE("_ADMIN_EVENTS_SETT_TITELW","Šířka sloupce názvu v %:");
DEFINE("_ADMIN_EVENTS_SETT_TITELW_DESC","Width of the title column (leave blank if you have disabled it)");
DEFINE("_ADMIN_EVENTS_SETT_INFOB","Šířka sloupce info tlačítka v %:");
DEFINE("_ADMIN_EVENTS_SETT_INFOB_DESC","Width of the infobutton column");
DEFINE("_ADMIN_EVENTS_SETT_LOCA","Šířka sloupce místa dění v %:");
DEFINE("_ADMIN_EVENTS_SETT_LOCA_DESC","Width of the location column (leave blank if you have disabled it)");
DEFINE("_ADMIN_EVENTS_SETT_CITYW","Šířka sloupce město v %:");
DEFINE("_ADMIN_EVENTS_SETT_CITYW_DESC","Width of the city column (leave blank if you have disabled it)");
DEFINE("_ADMIN_EVENTS_SETT_UNWR","Nelze zapsat do konfig. souboru!");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE","Formát data:");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE_DESC","Date format using the same format as PHP strftime, for example: %d.%m.%Y. More information: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME","Formát času:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME_DESC","Time format using the same format as PHP strftime, for example:%H.%M. More information: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME","Jméno:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME_DESC","Fill in &quot;h&quot; or &quot;Hour&quot; for example. This will be displayed before the time on the frontend. Leave blank if you don't need it."); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS","Zobrazit odkaz na stránku s detaily:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS_DESC","Show link to detail page and where? (Link on title only works if showtitle is yes, icons only if you have set the width at the layout settings)");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIMEDET_DESC","Zobrazit čas na stránce detailů.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC","Zobrazit popis akce:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC_DESC","Zobrazit popis na stránce detailů.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL","Zobrazit nadpis:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL_DESC","Zobrazit nadpis na stránce detailů.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS","Zobrazit adresu lokace:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS_DESC","Display address of location on the detailspage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC","Zobrazit popis místa:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC_DESC","Display locationdescription on the detailspage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB","Zobrazit odkaz na místo dění:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB_DESC","Display link to locationview on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB","Zobrazit odkaz na místo:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB_DESC","Display link to location on the detailspage.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL","Nové akce od uživatelů:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL_DESC","Allow users to submit new Events from the frontpage and set the userrank.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL","Mail když uživatel přidá položku:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL_DESC","Inform admin via email about new submissions from users?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1","Příjemce emailu:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1_DESC","The mail address of the person who should receive the infomail.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2","CC: Příjemce kopie:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2_DESC","The mail address of the second person who should receive the infomail (optional).");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT","Maximální délka informací v popise akce a místa.");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT_DESC","Max. length of the event- and locationdescription. If the length of the description is too long, the description will be truncated and the note [truncated] will be added.");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET1","Detaily");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET2","Odkaz na názvu");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET3","Odkaz na ikoně");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET4","Oba");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB","Auto-zveřejnění?");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB_DESC","Publish Events automatically?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC","Nová místa od uživatelů:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC_DESC","Allow users to submit new locations from the frontpage and set the userrank.");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUBLOCS_DESC","Zveřejnit nová místa automaticky?");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF1","Vypnuto");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF2","Pouze místa");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF3","Pouze lokace");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF4","Oboje");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT","Zobrazit kategorie:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT_DESC","Display category on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_CATW","Šířka sloupce kategorie v %:");
DEFINE("_ADMIN_EVENTS_SETT_CATW_DESC","Width of the category column (leave blank if you have disabled it)");
DEFINE("_ADMIN_EVENTS_SETT_VIEW","Vyberte zobrazení první stránky:");
DEFINE("_ADMIN_EVENTS_SETT_VIEW1","Jednoduchý seznam");
DEFINE("_ADMIN_EVENTS_SETT_VIEW2","Jednoduchý seznam kategorií");
DEFINE("_ADMIN_EVENTS_SETT_VIEW3","Detailní seznam kategorií");
DEFINE("_ADMIN_EVENTS_SETT_VIEW4","Placeholder2");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_VIEW_DESC","Choose the default frontend layout here. 'Simple List View' is the old layout.");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC_DESC","Allow child groups access as well? If No access is restricted to the selected group only. Note: Administrators always have access.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC","Přístup do podkategorií:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE","Max. velikost souboru obrázku:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE_DESC","Max. imagefilesize in kb");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT","Max. výška náhledu:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT_DESC","Max. height of thumbnailimage and category picture");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH","Max. šířka náhledu:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH_DESC","Max. width of thumbnailimage and category picture");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB","Zachovat proporce:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB_DESC","Keep proportions or resize?");
DEFINE("_ADMIN_EVENTS_SETT_GDSTATUS","Stav: ");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE","Povolit náhledy:");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE_DESC","Disable this, if status shows that GD Library is unavailable or only have version 1.");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB","Nahrávání souborů:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB1","Zákaz");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB2","Volitelně");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB3","Vyžadováno");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB_DESC","Is Image uploading disabled or optional or a must for users");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD","Chmod pro obrázky:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD_DESC","Enter here the permissions you wish to give to the images. Example 0740");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD1","Co s akcemi");
DEFINE("_ADMIN_EVENTS_SETT_HEAD2","nastavení zobrazení");
DEFINE("_ADMIN_EVENTS_SETT_HEAD3","Úvod");
DEFINE("_ADMIN_EVENTS_SETT_HEAD4","AC - akce");
DEFINE("_ADMIN_EVENTS_SETT_HEAD5","AC - dějiště");
DEFINE("_ADMIN_EVENTS_SETT_HEAD6","Dějiště");
DEFINE("_ADMIN_EVENTS_SETT_HEAD7","Délka popisu");
DEFINE("_ADMIN_EVENTS_SETT_HEAD8","Nastavení mailování");
DEFINE("_ADMIN_EVENTS_SETT_HEAD9","Nastavení obrázků");
DEFINE("_ADMIN_EVENTS_SETT_HEAD10","Hl. strana");
DEFINE("_ADMIN_EVENTS_SETT_HEAD11","Akce");
DEFINE("_ADMIN_EVENTS_SETT_HEAD12","Nastavení zobrazení");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD13","Šířka tabulky");
DEFINE("_ADMIN_EVENTS_SETT_HEAD14","Sloupec datum");
DEFINE("_ADMIN_EVENTS_SETT_HEAD15","Sloupec čas");
DEFINE("_ADMIN_EVENTS_SETT_HEAD16","Sloupec info");
DEFINE("_ADMIN_EVENTS_SETT_HEAD17","Sloupec místo dění");
DEFINE("_ADMIN_EVENTS_SETT_HEAD18","Sloupec město");
DEFINE("_ADMIN_EVENTS_SETT_HEAD19","Sloupec kategorie");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG1","Integrovat");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL","Vyberte 'Community' řešení:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL1","Nikdo nepoužívat");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL2","CB / CBE"); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL_DESC","Choose the Community Solution you use. Community Builder from Joomlapolis or the Community Builder Enhanced from www.kolloczek.com");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEADREG2","Volby Community řešení");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION","Vyberte možnosti integrace:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION1","Neintegrovat");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION2","Odkaz do profilu");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION3","Odkaz do profilu a zobrazit avatar");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION_DESC","Choose the type of Integration. Event List supports displaying of the Avatar and generation of links to the Profile from the user who has registered to an Event");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG3","Upozornění");
DEFINE("_ADMIN_EVENTS_SETT_COMM_NOTES","Event List supports AKReservation if you need more detailed registrations. Simply place the mambot trigger in the Eventdescription field from Event List. Link: ");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION1","Bez mapy");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION2","Map 24");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION3","Google Map");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC","Schovat detaily místa dění");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC_DESC","Hide Location details complete. The other settings for the location details will have no effect.");
DEFINE("_ADMIN_EVENTS_SETT_WARNING","!! Check your module settings! Only activate this if it is disabled in the module. Do not use it twice !!");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_INFOBUT_WARNING","!! Delete the width, if you link to the detailspage with the title or if you do not use it !!");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK","Zobrazit odkaz na kategorie:");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK_DESC","Display link to category view on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG4","Hlavní stránka:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE","Povolit registraci:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE_DESC","Allow users to choose if they want to allow registration to the Events they submit or set default");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE","Povolit odregistraci:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE_DESC","Allow users to choose if they want to allow unregistration to the Events they submit or set default");
DEFINE("_ADMIN_EVENTS_SETT_GD_VERSION_TWO","GD verze 2. tvorba náhledů může být aktivována.");
DEFINE("_ADMIN_EVENTS_SETT_GD_VERSION_ONE","GD verze 1. Zakažte tvorbu náhledů.");

//Categories
DEFINE("_ADMIN_CATEGORIES_NAME","Jméno");
DEFINE("_ADMIN_CATEGORIES_PUBLISH","Zveřejnít?");
DEFINE("_ADMIN_CATEGORIES_ORDER","Pořadí");
DEFINE("_ADMIN_CATEGORIES_PUBLI","Zveřejnit:");
DEFINE("_ADMIN_CATEGORIES_DESCR_OPT_LO","(volitelně)");
DEFINE("_ADMIN_CATEGORIES_DESCR_INTRO_LO","Popis kategorie");
DEFINE("_ADMIN_CATEGORIES_DESCR_LO","Popis kategorie:");
DEFINE("_ADMIN_EVENTS_DEL_CAT","CHYBA: kategorie obsahuje minimálně 1 akci");
DEFINE("_ADMIN_CATEGORIES_DEL"," Kategorie smazána/y");
DEFINE("_ADMIN_CATEGORIES_NAME_EMPTY","CHYBA: Vložte prosím název kategorie!");
DEFINE("_ADMIN_CATEGORIES_IMAGE","Obrázek kategorie:");
DEFINE("_ADMIN_CATEGORIES_IMAGEPREV","Náhled:");
DEFINE("_ADMIN_CATEGORIES_SAVE","Kategorie uložena");
DEFINE("_EVENTLIST_CATVIEW1","Zobrazit akce");
DEFINE("_EVENTLIST_CATVIEWCOUNTEV","Akce:");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_CAT"," Kategorie úspešně zveřejněna/y");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_CAT"," Kategorie stažena/y");
DEFINE("_ADMIN_CATEGORIES_HEAD","Kategorie kalendáře akcí");

//Registration
DEFINE("_ADMIN_EVENTS_REGCOUNT","Přihláška na akci");
DEFINE("_ADMIN_EVENTS_USERNAME","Uživ. jméno");
DEFINE("_ADMIN_EVENTS_USERIP","IP");
DEFINE("_ADMIN_EVENTS_UREGDATE","Datum registrace");
DEFINE("_ADMIN_EVENTS_USERID","Uživ. ID");
DEFINE("_ADMIN_EVENTS_USERDELETE","Smazat");
DEFINE("_ADMIN_REGISTER_DEL"," Registrovaný uživatel byl smazán");
DEFINE("_ADMIN_EVENTS_UNREGISTRA","Povolit uživatelům odregistrovat se?");
DEFINE("_EVENTS_REGISTRA_HEAD","Registrovaní uživatelé:");
DEFINE("_EVENTS_REGISTRA_ALLRE","Již jste se přihlásil na tuto akci.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_LOGIN","Musíte se zalogovat, abyste se mohl/a přihlásit.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_TOLATE","Již jste to prošvihl/a.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_REG","Chci jít na tuto akci:");
DEFINE("_EVENTS_REGISTRA_BUTTON","Registrovat");
DEFINE("_EVENTS_REGISTRA_SUCCESS","Registrace proběhla úspěšně.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_UNREG","Odhlásit se z akce:");
DEFINE("_EVENTS_REGISTRA_BUTTON_UNREG","Odhlásit");
DEFINE("_EVENTS_REGISTER_DEL","Již nejste přihlášen na tuto akci");	//changed in 0.8.3

//new 0.8
DEFINE("_ADMIN_CATEGORIES_ACCESS","Přístup");
DEFINE("_ADMIN_EVENTS_ACCESS_DENIED","Přístup zamítnut.");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION1","Ne");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION2","Ano");

//new 0.8.6
DEFINE("_ADMIN_GDVERSION_TWO","GD version is 2. Thumbnail craetion can be activated.");
DEFINE("_ADMIN_GDVERSION_ONE","GD version is 1. Disable the thumbnail creation.");

//new 0.8.7
DEFINE("_ADMIN_CHOOSE_CITY","Vyberte město");
DEFINE("_ADMIN_CHOOSE_A_VENUE","Vyberte dějiště v ");
DEFINE("_ADMIN_CHOOSE_A_CITY","Zvolte prosím město - nahoře");

//new 0.8.9
DEFINE("_ADMIN_EVENTS_ENDDATE","Datum ukončení:");
DEFINE("_ADMIN_EVENTS_INFOBUTTON_ERROR_MSG", "Máte možnost zvolit odkaz info tlačíka, ale nemáte nastavenou šířku. Buď nevytvářejte odkaz info tlačítka (v základním nastavení), nebo nejdříve nastavte šířku info tlačítka (v nastavení struktury - Layout tab).");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER","Zobrazit filtr:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER_DESC","Zobrazit pole filtr na úvodní stránce.");
?>