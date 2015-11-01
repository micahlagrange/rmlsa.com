<?php
/**
* @version 0.8.7 $Id: english.php 214 2007-06-17 20:19:16Z schlu $
* @package Eventlist
* @copyright (C) 2005 - 2007 Christoph Lukes
* @contributors: Tom Aratyn (2007)
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*/

//Frontend
DEFINE("_EVENTS_DATE","Date");
DEFINE("_EVENTS_CLUB","Venue");
DEFINE("_EVENTS_CITY","City");
DEFINE("_EVENTS_DETAILS","Details");
DEFINE("_EVENTS_BACK","back");
DEFINE("_EVENTS_EVENT","Event");
DEFINE("_EVENTS_WHEN","when:");
DEFINE("_EVENTS_WHERE","Where:");
DEFINE("_EVENTS_DESC","Event description:");
DEFINE("_EVENTS_LOCAT","Location");
DEFINE("_EVENTS_LOCDESC","Location description:");
DEFINE("_EVENTS_DESCALERT","Sorry, no description available");
DEFINE("_EVENTS_COUNTRY_LO","Country:");
DEFINE("_ADMIN_EVENTS_DETA_REDI","Access is not allowed");
DEFINE("_EVENTS_HOMEPAGE_LO","Homepage:");
DEFINE("_EVENTS_HOMEPAGENO_LO","No Homepage available");
DEFINE("_EVENTLIST_SHARCHIVE","Show Archive");
DEFINE("_EVENTS_MAP","Show Location map");

//images
DEFINE("_EVENTS_IMAGEEMPT","Please select an image to upload");
DEFINE("_EVENTS_IMAGESIZEBIG","Filesize is wrong");
DEFINE("_EVENTS_IMAGECHARACT","Filename must only contain alphanumeric characters and no spaces.");
DEFINE("_EVENTS_IMAGEEXIST","Image already exists. Choose another name please.");
DEFINE("_EVENTS_IMAGETYPE","The file must be of type gif, png, jpg, bmp");	//changed in 0.8.3
DEFINE("_EVENTS_IMAGEFAIL","Upload failed");
DEFINE("_ADMIN_EVENTS_CHOOIMAGE","Choose image:");
DEFINE("_ADMIN_EVENTS_IMAGEUPL","Select image to upload:");
DEFINE("_EVENTS_IMAGEUPLSUCCESS","Upload successful");
DEFINE("_EVENTS_IMAGEUPLNOGD","GD-Library not available! Please disable thumbnail creation.");
DEFINE("_EVENTS_IMAGEUPLPNG","PNG Support available");
DEFINE("_EVENTS_IMAGEUPLNOPNG","PNG Support NOT available");
DEFINE("_EVENTS_IMAGEUPLJPG","JPG Support available");
DEFINE("_EVENTS_IMAGEUPLNOJPG","JPG Support NOT available");
DEFINE("_EVENTS_IMAGEUPLGIF","GIF Support available");
DEFINE("_EVENTS_IMAGEUPLNOGIF","GIF Support NOT available");
DEFINE("_ADMIN_EVENTS_IMAGETARGET","Target directory:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERS","GD Version:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERSWARN","Note: Eventlist requires GD-Library Version 2, or later, for Thumbnail creation. If you don't have GD support or still use version 1 disable thumbnail creation.");

//Backend

//add/edit event
DEFINE("_ADMIN_EVENTS_HEADER_EV","Eventlist Event");
DEFINE("_ADMIN_EVENTS_DATE","Eventdate:");
DEFINE("_ADMIN_EVENTS_DATE_NOTICE","Format yyyy-mm-dd !");
DEFINE("_ADMIN_EVENTS_TIME_NOTICE","Format: hh:mm!");
DEFINE("_ADMIN_EVENTS_CLUB_ID","Venue:");
DEFINE("_ADMIN_EVENTS_DEL"," Event(s) deleted");
DEFINE("_ADMIN_EVENTS_DELFORM","ERROR: Date has wrong format");
DEFINE("_ADMIN_EVENTS_DELFORMT","ERROR: Time has wrong format or you have enabled display time on the frontend. If so, then you have to fill out this field");
DEFINE("_ADMIN_EVENTS_EMPTY","ERROR: first add a location");
DEFINE("_ADMIN_EVENTS_SAVE","Event saved.");
DEFINE("_ADMIN_EVENTS_DESCR","Event description:");
DEFINE("_ADMIN_EVENTS_DESCR_OPT","optional");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO","The Eventdescription");
DEFINE("_ADMIN_EVENTS_TIME","Time:");
DEFINE("_ADMIN_EVENTS_TITEL","Event title:");
DEFINE("_ADMIN_EVENTS_NO_LOC","ERROR: Select venue or add a Location here first. Afterwards you may add events");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_ENDTIME","Endtime:");
DEFINE("_ADMIN_EVENTS_ENDTIME_NOTICE","Format: hh:mm! (optional)");
DEFINE("_ADMIN_EVENTS_PUBLI","Published?");
DEFINE("_ADMIN_EVENTS_CAT_ID","Category:");
DEFINE("_ADMIN_EVENTS_SEL_CAT","Select category");
DEFINE("_ADMIN_EVENTS_SEL_LOC","Select venue");
DEFINE("_ADMIN_EVENTS_CATEMPTY","ERROR: Select category or add a Category here first. Afterwards you may add events");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SUC_ARCH"," Event(s) successfully Archived");
DEFINE("_ADMIN_EVENTS_SUC_PUBL"," Event(s) successfully Published");
DEFINE("_ADMIN_EVENTS_SUC_UNARCH"," Event(s) successfully Unarchived");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL"," Event(s) successfully Unpublished");
DEFINE("_ADMIN_EVENTS_OTHER","Other");
DEFINE("_ADMIN_EVENTS_REGISTRA","Enable registration:");

//add/edit location
DEFINE("_ADMIN_EVENTS_HEADER_LO","Eventlist Location");
DEFINE("_ADMIN_EVENTS_CLUB_LO","Venue:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LO","Venue homepage:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_NOTICE_LO","URL must be in the format http://www.google.com!");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_CITY_LO","City:");
DEFINE("_ADMIN_EVENTS_DEL_LO", "ERROR: min. one Event is at this Location");
DEFINE("_ADMIN_EVENTS_DELYES_LO", " Location(s) deleted");
DEFINE("_ADMIN_EVENTS_SAVECLUB_LO","ERROR: add Venue");
DEFINE("_ADMIN_EVENTS_SAVEHOMEP_LO","ERROR: add homepage");
DEFINE("_ADMIN_EVENTS_SAVETOWN_LO","ERROR: add city");
DEFINE("_ADMIN_EVENTS_SAVE_LO","Location saved");
DEFINE("_ADMIN_EVENTS_DESCR_LO","Location description");
DEFINE("_ADMIN_EVENTS_DESCR_OPT_LO","optional");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO_LO","The Locationdescription");
DEFINE("_ADMIN_EVENTS_CLUBSTREET_LO","Street:");
DEFINE("_ADMIN_EVENTS_CLUBPLZ_LO","ZIP:");
DEFINE("_ADMIN_EVENTS_CLUBCOUNTRY_LO","Country (US,DE,AT,CH, etc.):");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SAVEADRESS_LO","ERROR: You enabled one of these options: show link to map24, show address. Disable these if you don't want to fill the address fields out");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_OPTIONAL_LO","* are optional fields. Note: The address fields are only optional if you have disabled the map24 feature!");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_LO"," Location(s) successfully Published");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_LO"," Location(s) successfully Unpublished");
DEFINE("_ADMIN_EVENTS_ADRESSDET","Address details");
//list events
DEFINE("_ADMIN_EVENTS_DATE_LI_EV","Date");
DEFINE("_ADMIN_EVENTS_CLUB_LI_EV","Venue");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_EV","Venuehomepage");
DEFINE("_ADMIN_EVENTS_CITY_LI_EV","City");
DEFINE("_ADMIN_EVENTS_LIMITBOX_LI_EV","Display: ");
DEFINE("_ADMIN_EVENTS_TITEL_LI_EV","Event title");
DEFINE("_ADMIN_EVENTS_TIME_LI_EV","Event time");
DEFINE("_ADMIN_EVENTS_PUBLISH_LI_EV","Published");
DEFINE("_ADMIN_EVENTS_USERDELI_LI_EV","User Event?");
DEFINE("_ADMIN_EVENTS_CAT_LI_EV","Category");
DEFINE("_ADMIN_EVENTS_SEARCH_LI_EV","Search:");

//list locations
DEFINE("_ADMIN_EVENTS_CLUB_LI_LO","Venue");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_LO","Venue homepage");
DEFINE("_ADMIN_EVENTS_CITY_LI_LO","City");
DEFINE("_ADMIN_EVENTS_ORDER_LI_LO","Reorder");

//Frontend deliver events
DEFINE("_ADMIN_EVENTS_DELIVNAME","Your name:");
DEFINE("_ADMIN_EVENTS_DELIVNAME_DESC","Please add your name here");
DEFINE("_ADMIN_EVENTS_DELIVMAIL","Your email address:");
DEFINE("_ADMIN_EVENTS_DELIVMAIL_DESC","Please add your email address here");
DEFINE("_EVENTS_DELIVER","Deliver event");
DEFINE("_EVENTS_VALIDATE","ERROR: Please fill out all fields");
DEFINE("_ADMIN_EVENTS_DELIV_REDI","The submission of Events is not allowed");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILBOD_1"," You got a submission from user ");
DEFINE("_EVENTS_DELIVMAILBOD_2"," Usermailadress: ");
DEFINE("_EVENTS_DELIVMAILBOD_3"," User - IP: ");
DEFINE("_EVENTS_DELIVMAILBOD_4"," Submission time: ");
DEFINE("_EVENTS_DELIVMAILBOD_5"," Eventtitle: ");
DEFINE("_EVENTS_DELIVMAILBOD_6"," Eventdate: ");
DEFINE("_EVENTS_DELIVMAILBOD_7"," Eventtime: ");
DEFINE("_EVENTS_DELIVMAILBOD_8"," Venue: ");
DEFINE("_EVENTS_DELIVMAILBOD_9"," Eventdescription: ");
DEFINE("_EVENTS_DELIVMAILBOD_10"," : New event ");
DEFINE("_EVENTLIST_DELIVER","Submit new event");
DEFINE("_EVENTLIST_BACK","back");
DEFINE("_ADMIN_EVENTS_DELMAILFORM","ERROR: Email has wrong format!");
DEFINE("_ADMIN_EVENTS_DELTITLLEN","ERROR: Title is too long!");
DEFINE("_ADMIN_EVENTS_DELNAMLEN","ERROR: Name is too long!");
DEFINE("_EVENTS_DELTEXTARHTML","HTML is not allowed!");
DEFINE("_EVENTS_RESTZ","available");
DEFINE("_EVENTS_RESTZAKT","refresh");
DEFINE("_EVENTS_DEL_DATE_EMPT","Please add a date!");
DEFINE("_EVENTS_DEL_TIME_EMPT","Please add a time!");
DEFINE("_EVENTS_DEL_TITEL_EMPT","Please add a title!");
DEFINE("_EVENTS_DEL_CATEG_EMPT","Please choose a category!");
DEFINE("_EVENTS_DEL_LOCAT_EMPT","Please choose a venue!");
DEFINE("_EVENTS_DEL_TIME_FORM","ERROR: Time has wrong format");

//Frontend deliver location
DEFINE("_EVENTLIST_DELIVER_LOC","Submit new location");
DEFINE("_EVENTS_DELIVMAILLOCBOD_1"," You got a submission from user ");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILLOCBOD_2"," Usermailadress: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_3"," User - IP: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_4"," Submission time: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_5"," Venue: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_6"," Venue URL: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_7"," Street: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_8"," ZIP: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_9"," City: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_10"," Country Code: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_11"," Description: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_12"," : New location ");
DEFINE("_EVENTS_DELIVER_LOC","Deliver location");
DEFINE("_EVENTS_DELURLLOCFORM","URL is too long");
DEFINE("_EVENTS_DELSTREETLOCFORM","Street is too long");
DEFINE("_EVENTS_DELPLZLOCFORM","ZIP code is too long");
DEFINE("_EVENTS_DELCITYLOCFORM","City is too long");
DEFINE("_EVENTS_DELCOUNTRYLOCFORM","Country code is too long");
DEFINE("_EVENTS_DELURLLOCFORM2","ERROR: URL has wrong format!");
DEFINE("_EVENTS_DEL_LOC_STREET_EMPT","ERROR: Please fill out street!");
DEFINE("_EVENTS_DEL_LOC_PLZ_EMPT","ERROR: Please fill out ZIP code!");
DEFINE("_EVENTS_DEL_LOC_COUNTRY_EMPT","ERROR: Please fill out country code!");

//settings
DEFINE("_ADMIN_EVENTS_SETT_HEADER","Eventlist Settings");
DEFINE("_ADMIN_EVENTS_SETT_SAVE","Settings successfully Saved");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD","Handle old events:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD1","Do nothing");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD2","Delete old events");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD3","Archive old events");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD_DESC","Delete or Archive old events automatically.");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR","Number of days:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR_DESC","Number of days in the past which will not deleted or archived. This has no effect if the option above is disabled.");
DEFINE("_ADMIN_EVENTS_SETT_EVNR","Number of Events on the frontpage:");
DEFINE("_ADMIN_EVENTS_SETT_EVNR_DESC","Number of events to display on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_MAPID","Your Map24 ID:");
DEFINE("_ADMIN_EVENTS_SETT_MAPID_DESC","You need to register at Map24 to get an ID.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME","Show time:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME_DESC","Display time on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL","Show title:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL_DESC","Display title of event on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC","Show venue/location:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC_DESC","Display venue/location on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY","Show city:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY_DESC","Display city on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP","Show Link to Map:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP_DESC","Display Link to Map on the details page. Note: You need to enter your Map24 ID if you choose this service.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER","Show header:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER_DESC","Display header on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO","Show introtext:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO_DESC","Display the introtext on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_INTROT","Introtext for Eventlist:");
DEFINE("_ADMIN_EVENTS_SETT_INTROT_DESC","This text is displayed above the listing on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_TABLW","Table width in % :");
DEFINE("_ADMIN_EVENTS_SETT_TABLW_DESC","Width of the listing on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_DATEC","Width of date column in %:");
DEFINE("_ADMIN_EVENTS_SETT_DATEC_DESC","Width of the date column.");
DEFINE("_ADMIN_EVENTS_SETT_CNAME","Custom name:");
DEFINE("_ADMIN_EVENTS_SETT_CNAME_DESC","Change this to whatever you like.");
DEFINE("_ADMIN_EVENTS_SETT_TITELW","Width of title column in %:");
DEFINE("_ADMIN_EVENTS_SETT_TITELW_DESC","Width of the title column (leave blank if you have disabled it)");
DEFINE("_ADMIN_EVENTS_SETT_INFOB","Width of infobutton column in %:");
DEFINE("_ADMIN_EVENTS_SETT_INFOB_DESC","Width of the infobutton column");
DEFINE("_ADMIN_EVENTS_SETT_LOCA","Width of location column in %:");
DEFINE("_ADMIN_EVENTS_SETT_LOCA_DESC","Width of the location column (leave blank if you have disabled it)");
DEFINE("_ADMIN_EVENTS_SETT_CITYW","Width of city column in %:");
DEFINE("_ADMIN_EVENTS_SETT_CITYW_DESC","Width of the city column (leave blank if you have disabled it)");
DEFINE("_ADMIN_EVENTS_SETT_UNWR","Config file not writeable!");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE","Format date:");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE_DESC","Date format using the same format as PHP strftime, for example: %d.%m.%Y. More information: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME","Format time:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME_DESC","Time format using the same format as PHP strftime, for example:%H.%M. More information: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME","Name:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME_DESC","Fill in &quot;h&quot; or &quot;Hour&quot; for example. This will be displayed before the time on the frontend. Leave blank if you don't need it."); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS","Show Link to detail page:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS_DESC","Show link to detail page and where? (Link on title only works if showtitle is yes, icons only if you have set the width at the layout settings)");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIMEDET_DESC","Display time on the detailspage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC","Display eventdescription:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC_DESC","Display eventdescription on the detailspage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL","Display eventtitle:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL_DESC","Display eventtitle on the detailspage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS","Display address of location:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS_DESC","Display address of location on the detailspage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC","Display locationdescription:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC_DESC","Display locationdescription on the detailspage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB","Show link to locationview:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB_DESC","Display link to locationview on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB","Show link to location:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB_DESC","Display link to location on the detailspage.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL","New Events from users:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL_DESC","Allow users to submit new Events from the frontpage and set the userrank.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL","Mail at new user submission:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL_DESC","Inform admin via email about new submissions from users?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1","Mail recipient:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1_DESC","The mail address of the person who should receive the infomail.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2","CC: Mail recipient:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2_DESC","The mail address of the second person who should receive the infomail (optional).");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT","Max. length of the event- and locationdescription.");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT_DESC","Max. length of the event- and locationdescription. If the length of the description is too long, the description will be truncated and the note [truncated] will be added.");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET1","Details off");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET2","Link on title");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET3","Link on Icon");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET4","Both");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB","Autopublish?");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB_DESC","Publish Events automatically?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC","New locations from users:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC_DESC","Allow users to submit new locations from the frontpage and set the userrank.");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUBLOCS_DESC","Publish Locations automatically?");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF1","Off");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF2","Only new event");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF3","Only new location");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF4","Both");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT","Show category:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT_DESC","Display category on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_CATW","Width of category column in %:");
DEFINE("_ADMIN_EVENTS_SETT_CATW_DESC","Width of the category column (leave blank if you have disabled it)");
DEFINE("_ADMIN_EVENTS_SETT_VIEW","Choose default frontend layout:");
DEFINE("_ADMIN_EVENTS_SETT_VIEW1","Simple List View");
DEFINE("_ADMIN_EVENTS_SETT_VIEW2","Simple Category List");
DEFINE("_ADMIN_EVENTS_SETT_VIEW3","Detailed Category List");
DEFINE("_ADMIN_EVENTS_SETT_VIEW4","Placeholder2");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_VIEW_DESC","Choose the default frontend layout here. 'Simple List View' is the old layout.");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC_DESC","Allow child groups access as well? If No access is restricted to the selected group only. Note: Administrators always have access.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC","Recurse:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE","Max. imagefilesize:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE_DESC","Max. imagefilesize in kb");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT","Max. height of thumbnailimage:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT_DESC","Max. height of thumbnailimage and category picture");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH","Max. width of thumbnailimage:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH_DESC","Max. width of thumbnailimage and category picture");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB","Keep proportions:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB_DESC","Keep proportions or resize?");
DEFINE("_ADMIN_EVENTS_SETT_GDSTATUS","Status: ");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE","Enable Thumbnails:");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE_DESC","Disable this, if status shows that GD Library is unavailable or only have version 1.");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB","Image uploads:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB1","Disabled");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB2","Optional");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB3","Required");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB_DESC","Is Image uploading disabled or optional or a must for users");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD","Chmod for images:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD_DESC","Enter here the permissions you wish to give to the images. Example 0740");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD1","Event handling");
DEFINE("_ADMIN_EVENTS_SETT_HEAD2","Display - Settings");
DEFINE("_ADMIN_EVENTS_SETT_HEAD3","Intro");
DEFINE("_ADMIN_EVENTS_SETT_HEAD4","AC - Events");
DEFINE("_ADMIN_EVENTS_SETT_HEAD5","AC - Venues");
DEFINE("_ADMIN_EVENTS_SETT_HEAD6","Venues");
DEFINE("_ADMIN_EVENTS_SETT_HEAD7","Description - Length");
DEFINE("_ADMIN_EVENTS_SETT_HEAD8","Mail handling");
DEFINE("_ADMIN_EVENTS_SETT_HEAD9","Image handling");
DEFINE("_ADMIN_EVENTS_SETT_HEAD10","Frontend");
DEFINE("_ADMIN_EVENTS_SETT_HEAD11","Events");
DEFINE("_ADMIN_EVENTS_SETT_HEAD12","General Layout Settings");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD13","With of the table");
DEFINE("_ADMIN_EVENTS_SETT_HEAD14","Date column");
DEFINE("_ADMIN_EVENTS_SETT_HEAD15","Title column");
DEFINE("_ADMIN_EVENTS_SETT_HEAD16","Info column");
DEFINE("_ADMIN_EVENTS_SETT_HEAD17","Location column");
DEFINE("_ADMIN_EVENTS_SETT_HEAD18","City column");
DEFINE("_ADMIN_EVENTS_SETT_HEAD19","Category column");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG1","Integrate");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL","Choose Community Solution:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL1","Don't use anyone");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL2","CB / CBE"); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL_DESC","Choose the Community Solution you use. Community Builder from Joomlapolis or the Community Builder Enhanced from www.kolloczek.com");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEADREG2","Community Solution Options");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION","Choose integration options:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION1","No integration");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION2","Link to profile");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION3","Link to profile and show Avatar");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION_DESC","Choose the type of Integration. Event List supports displaying of the Avatar and generation of links to the Profile from the user who has registered to an Event");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG3","Attention");
DEFINE("_ADMIN_EVENTS_SETT_COMM_NOTES","Event List supports AKReservation if you need more detailed registrations. Simply place the mambot trigger in the Eventdescription field from Event List. Link: ");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION1","No Map service");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION2","Map 24");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION3","Google Map");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC","Hide Location data");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC_DESC","Hide Location details complete. The other settings for the location details will have no effect.");
DEFINE("_ADMIN_EVENTS_SETT_WARNING","!! Check your module settings! Only activate this if it is disabled in the module. Do not use it twice !!");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_INFOBUT_WARNING","!! Delete the width, if you link to the detailspage with the title or if you do not use it !!");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK","Show link to category view:");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK_DESC","Display link to category view on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG4","Frontend:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE","Allow registration:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE_DESC","Allow users to choose if they want to allow registration to the Events they submit or set default");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE","Allow to unregister:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE_DESC","Allow users to choose if they want to allow unregistration to the Events they submit or set default");
DEFINE("_ADMIN_EVENTS_SETT_GD_VERSION_TWO","GD version is 2. Thumbnail craetion can be activated.");
DEFINE("_ADMIN_EVENTS_SETT_GD_VERSION_ONE","GD version is 1. Disable the thumbnail creation.");

//Categories
DEFINE("_ADMIN_CATEGORIES_NAME","Name");
DEFINE("_ADMIN_CATEGORIES_PUBLISH","Publish?");
DEFINE("_ADMIN_CATEGORIES_ORDER","Reorder");
DEFINE("_ADMIN_CATEGORIES_PUBLI","Publish:");
DEFINE("_ADMIN_CATEGORIES_DESCR_OPT_LO","(optional)");
DEFINE("_ADMIN_CATEGORIES_DESCR_INTRO_LO","The Category description");
DEFINE("_ADMIN_CATEGORIES_DESCR_LO","Category description:");
DEFINE("_ADMIN_EVENTS_DEL_CAT","ERROR: min. one Event is asigned to this category");
DEFINE("_ADMIN_CATEGORIES_DEL"," Category(s) deleted");
DEFINE("_ADMIN_CATEGORIES_NAME_EMPTY","ERROR: Please fill in a category name!");
DEFINE("_ADMIN_CATEGORIES_IMAGE","Category image:");
DEFINE("_ADMIN_CATEGORIES_IMAGEPREV","Preview:");
DEFINE("_ADMIN_CATEGORIES_SAVE","Category saved");
DEFINE("_EVENTLIST_CATVIEW1","Show events");
DEFINE("_EVENTLIST_CATVIEWCOUNTEV","Events:");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_CAT"," Category(s) successfully Published");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_CAT"," Category(s) successfully Unpublished");
DEFINE("_ADMIN_CATEGORIES_HEAD","Eventlist Categories");

//Registration
DEFINE("_ADMIN_EVENTS_REGCOUNT","Reg. Users");
DEFINE("_ADMIN_EVENTS_USERNAME","Username");
DEFINE("_ADMIN_EVENTS_USERIP","IP");
DEFINE("_ADMIN_EVENTS_UREGDATE","Reg. Date");
DEFINE("_ADMIN_EVENTS_USERID","User ID");
DEFINE("_ADMIN_EVENTS_USERDELETE","Delete");
DEFINE("_ADMIN_REGISTER_DEL"," Registered User(s) deleted");
DEFINE("_ADMIN_EVENTS_UNREGISTRA","Allow users to unregister?");
DEFINE("_EVENTS_REGISTRA_HEAD","Registered Users:");
DEFINE("_EVENTS_REGISTRA_ALLRE","You are already registered for this Event.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_LOGIN","You must login to register for this Event.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_TOLATE","It's too late to register for this Event.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_REG","I will go to this Event:");
DEFINE("_EVENTS_REGISTRA_BUTTON","Register");
DEFINE("_EVENTS_REGISTRA_SUCCESS","You successfully registered for this event.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_UNREG","Unregister from this event:");
DEFINE("_EVENTS_REGISTRA_BUTTON_UNREG","Unregister");
DEFINE("_EVENTS_REGISTER_DEL","You are no longer registered for this event");	//changed in 0.8.3

//new 0.8
DEFINE("_ADMIN_CATEGORIES_ACCESS","Access");
DEFINE("_ADMIN_EVENTS_ACCESS_DENIED","Access denied.");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION1","No");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION2","Yes");

//new 0.8.6
DEFINE("_ADMIN_GDVERSION_TWO","GD version is 2. Thumbnail craetion can be activated.");
DEFINE("_ADMIN_GDVERSION_ONE","GD version is 1. Disable the thumbnail creation.");

//new 0.8.7
DEFINE("_ADMIN_CHOOSE_CITY","Choose a city");
DEFINE("_ADMIN_CHOOSE_A_VENUE","Choose a venue in");
DEFINE("_ADMIN_CHOOSE_A_CITY","Please choose a city above");

//new 0.8.9
DEFINE("_ADMIN_EVENTS_ENDDATE","Eventdate (end):");
DEFINE("_ADMIN_EVENTS_INFOBUTTON_ERROR_MSG", "You have chose to link to the info button but have not set a width for it. Please either choose to not link on the info button (on the Basic Settings tab) or set a width for the info button (on the Layout tab)");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER","Show filter:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER_DESC","Display the filter field on the Frontpage.");
?>

