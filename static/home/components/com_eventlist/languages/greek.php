<?php
/**
* @version 0.8.9 $Id: greek.php 217 2007-06-18 14:49:07Z schlu $
* @package Eventlist
* @copyright (C) 2005 - 2006 Christoph Lukes
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Translation: Nikos Maragos
* email :  maragosnikos@yahoo.gr 
*/

//Frontend
DEFINE("_EVENTS_DATE","Ημερομηνία");
DEFINE("_EVENTS_CLUB","Τοποθεσία");
DEFINE("_EVENTS_CITY","Πόλη");
DEFINE("_EVENTS_DETAILS","Λεπτομέρειες");
DEFINE("_EVENTS_BACK","επιστροφή");
DEFINE("_EVENTS_EVENT","Εκδήλωση");
DEFINE("_EVENTS_WHEN","Πότε:");
DEFINE("_EVENTS_WHERE","Που:");
DEFINE("_EVENTS_DESC","Περιγραφή εκδήλωσης:");
DEFINE("_EVENTS_LOCAT","Περιοχή");
DEFINE("_EVENTS_LOCDESC","Περιγραφή περιοχής:");
DEFINE("_EVENTS_DESCALERT","Συγνώμη, αλλά δεν υπάρχει περιγραφή");
DEFINE("_EVENTS_COUNTRY_LO","Χώρα:");
DEFINE("_ADMIN_EVENTS_DETA_REDI","Δεν επιτρέπετε η πρόσβαση");
DEFINE("_EVENTS_HOMEPAGE_LO","Ιστοσελίδα:");
DEFINE("_EVENTS_HOMEPAGENO_LO","Δεν διατίθεται Ιστοσελίδα");
DEFINE("_EVENTLIST_SHARCHIVE","Παρουσίαση Αρχείου");
DEFINE("_EVENTS_MAP","Παρουσίση Χάρτη περιοχής");

//images
DEFINE("_EVENTS_IMAGEEMPT","Παρακαλω επιλέξτε μία φωτογραφία για ανέβασμα");
DEFINE("_EVENTS_IMAGESIZEBIG","Το μέγεθος του αρχείου  είναι λανθασμένο");
DEFINE("_EVENTS_IMAGECHARACT","Το όνομα του αρχείου πρέπει να περιέχει νούμερα και αλφαβητικό χαρακτήρα και όχι κενά.");
DEFINE("_EVENTS_IMAGEEXIST","Η φωτογραφία υπάρχει. Παρακαλώ επιλέξτε άλλο όνομα.");
DEFINE("_EVENTS_IMAGETYPE","Το αρχείο πρέπει να είναι τύπου gif, png, jpg, bmp");	//changed in 0.8.3
DEFINE("_EVENTS_IMAGEFAIL","Το ανέβασμα απέτηχε");
DEFINE("_ADMIN_EVENTS_CHOOIMAGE","Επέλεξε φωτογραφία:");
DEFINE("_ADMIN_EVENTS_IMAGEUPL","Επιλέξτε φωτογραφία για ανέβασμα:");
DEFINE("_EVENTS_IMAGEUPLSUCCESS","Ανέβηκε επιτυχώς");
DEFINE("_EVENTS_IMAGEUPLNOGD","GD-Library Δεν διατίθεται! Παρακαλώ απενεργοποιήστε την δημιουργία μικρογραφίας.");
DEFINE("_EVENTS_IMAGEUPLPNG","PNG Support διατίθεται");
DEFINE("_EVENTS_IMAGEUPLNOPNG","PNG Support Δεν διατίθεται");
DEFINE("_EVENTS_IMAGEUPLJPG","JPG Support  διατίθεται");
DEFINE("_EVENTS_IMAGEUPLNOJPG","JPG Support Δεν διατίθεται");
DEFINE("_EVENTS_IMAGEUPLGIF","GIF Support διατίθεται");
DEFINE("_EVENTS_IMAGEUPLNOGIF","GIF Support Δεν διατίθεται");
DEFINE("_ADMIN_EVENTS_IMAGETARGET","Target directory:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERS","GD Version:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERSWARN","Παρατήρηση: Το Eventlist Χρειάζεται το GD-Library Version 2, ή νεότερο, για την δημιουργία μικρογραφίας. Αν δεν έχετε GD support ή χρησιμοποιείτε παλιά έκδοση απενεργοποιήστε την δημιουργία μικρογραφίας.");

//Backend

//add/edit event
DEFINE("_ADMIN_EVENTS_HEADER_EV","Λίστα γεγονότων – εκδηλώσεων");
DEFINE("_ADMIN_EVENTS_DATE","Ημερομηνία εκδήλωσης:");
DEFINE("_ADMIN_EVENTS_DATE_NOTICE","Φορμάτ εεεε-μμ-ηη !");
DEFINE("_ADMIN_EVENTS_TIME_NOTICE","Φορμάτ: ωω:λλ!");
DEFINE("_ADMIN_EVENTS_CLUB_ID","Περιοχή:");
DEFINE("_ADMIN_EVENTS_DEL"," Γεγονός(τα) έχει διαγραφεί");
DEFINE("_ADMIN_EVENTS_DELFORM","ERROR: Η Ημερομηνία έχει λάθος φορμάτ");
DEFINE("_ADMIN_EVENTS_DELFORMT","ERROR: Η Ώρα έχει λάθος φορμάτ ή έχετε ενεργοποιήσει να εμφανίζετε ώρα στην αρχική σελίδα.Αν συμβαίνει αυτό θα πρέπει να συμπληρώσετε το πεδίο");
DEFINE("_ADMIN_EVENTS_EMPTY","ERROR: πρώτα προσθέστε μία τοποθεσία");
DEFINE("_ADMIN_EVENTS_SAVE","Η εκδήλωση έχει αποθηκευθεί.");
DEFINE("_ADMIN_EVENTS_DESCR","Περιφραφή εκδήλωσης:");
DEFINE("_ADMIN_EVENTS_DESCR_OPT","Προαιρετικό");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO","Η περιγραφή της εκδήλωσης");
DEFINE("_ADMIN_EVENTS_TIME","Ώρα:");
DEFINE("_ADMIN_EVENTS_TITEL","Τίτλος Γεγονότος:");
DEFINE("_ADMIN_EVENTS_NO_LOC","ERROR: Select venue or add a Location here first. Afterwards you may add events");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_ENDTIME","Ώρα λήξης:");
DEFINE("_ADMIN_EVENTS_ENDTIME_NOTICE","Φορματ: ωω:λλ! (προαιρετικό)");
DEFINE("_ADMIN_EVENTS_PUBLI","Published?");
DEFINE("_ADMIN_EVENTS_CAT_ID","Κατηγορία:");
DEFINE("_ADMIN_EVENTS_SEL_CAT","Επιλέξτε Κατηγορία");
DEFINE("_ADMIN_EVENTS_SEL_LOC","Επέλεξε περιοχή");
DEFINE("_ADMIN_EVENTS_CATEMPTY","ERROR: Επιλέξτε κατηγορία ή προσθέστε μία νέα κατηγορία εδώ. Μετά από αυτό μπορείτε να προσθέσετε μία εκδήλωση.");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SUC_ARCH"," Εκδήλωση(εις) έχουν αρχειοθετηθεί επιτυχώς");
DEFINE("_ADMIN_EVENTS_SUC_PUBL"," Εκδήλωση(εις) έχουν δημοσιευθεί επιτυχώς");
DEFINE("_ADMIN_EVENTS_SUC_UNARCH"," Εκδήλωση(εις) έχει απενεργοποιηθεί η αρχειοθετηση επιτυχώς");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL"," Εκδήλωση(εις) έχει απενεργοποιηθεί η δημοσιευση επιτυχώς");
DEFINE("_ADMIN_EVENTS_OTHER","Other");
DEFINE("_ADMIN_EVENTS_REGISTRA","Επιτρέπετε η εγγραφή:");

//add/edit location
DEFINE("_ADMIN_EVENTS_HEADER_LO","Περιοχή όπου θα συμβεί η εκδήλωση");
DEFINE("_ADMIN_EVENTS_CLUB_LO","Περιοχή:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LO","Περιοχή Ιστοσελίδας:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_NOTICE_LO","Το URL πρέπει να είναι τις μορφής http://www.google.com!");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_CITY_LO","Πόλη:");
DEFINE("_ADMIN_EVENTS_DEL_LO", "ERROR: min. one Event is at this Location");
DEFINE("_ADMIN_EVENTS_DELYES_LO", " Περιοχή(ες) έχει διαγραφεί");
DEFINE("_ADMIN_EVENTS_SAVECLUB_LO","ERROR: προσθέστε Περιοχή");
DEFINE("_ADMIN_EVENTS_SAVEHOMEP_LO","ERROR: προσθέστε homepage");
DEFINE("_ADMIN_EVENTS_SAVETOWN_LO","ERROR: προσθέστε Πόλη");
DEFINE("_ADMIN_EVENTS_SAVE_LO","Η Περιοχή αποθηκεύθηκε");
DEFINE("_ADMIN_EVENTS_DESCR_LO","Περιγραφή τοποθεσίας");
DEFINE("_ADMIN_EVENTS_DESCR_OPT_LO","προεραιτικό");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO_LO","Η Περιγραφή τοποθεσίας");
DEFINE("_ADMIN_EVENTS_CLUBSTREET_LO","Οδός:");
DEFINE("_ADMIN_EVENTS_CLUBPLZ_LO","Τ.Κ.:");
DEFINE("_ADMIN_EVENTS_CLUBCOUNTRY_LO","Χώρα (US,DE,AT,CH,GR,etc.):");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SAVEADRESS_LO","ERROR: Έχεις ενεργοποιήσει μία από αυτές τις επιλογές: προβολή link στο map24, εμφάνιση διεύθυνσης. Απενεργοποίησε αυτά αν δεν θες να συμπληρώνουν τα πεδία διεύθυνσης από έξω.");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_OPTIONAL_LO","* δεν είναι υποχρεωτικά πεδία.  Σημείωση : Τα πεδία διεύθυνσης δεν είναι υποχρεωτικά αν έχεις απενεργοποιήσεις  τις ιδιότητες map24!");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_LO"," Η Τοποθεσία(ες) έχουν δημοσιευθεί επιτυχώς");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_LO"," Η Τοποθεσία(ες) έχει απενεργοποιηθεί η δημοσιευση επιτυχώς");
DEFINE("_ADMIN_EVENTS_ADRESSDET","Λεπτομέρειες Διεύθυνσης");
//list events
DEFINE("_ADMIN_EVENTS_DATE_LI_EV","Ημερομηνία");
DEFINE("_ADMIN_EVENTS_CLUB_LI_EV","Περιοχή");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_EV","Venuehomepage");
DEFINE("_ADMIN_EVENTS_CITY_LI_EV","Πόλη");
DEFINE("_ADMIN_EVENTS_LIMITBOX_LI_EV","Παρουσίαση: ");
DEFINE("_ADMIN_EVENTS_TITEL_LI_EV","Τίτλος Γεγονότος");
DEFINE("_ADMIN_EVENTS_TIME_LI_EV","Ώρα εκδήλωσης");
DEFINE("_ADMIN_EVENTS_PUBLISH_LI_EV","Δημοσιεύτηκε");
DEFINE("_ADMIN_EVENTS_USERDELI_LI_EV","Εκδήλωση χρήστη?");
DEFINE("_ADMIN_EVENTS_CAT_LI_EV","Κατηγορία");
DEFINE("_ADMIN_EVENTS_SEARCH_LI_EV","Αναζήτηση:");

//list locations
DEFINE("_ADMIN_EVENTS_CLUB_LI_LO","Περιοχή");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_LO","Venue homepage");
DEFINE("_ADMIN_EVENTS_CITY_LI_LO","Πόλη");
DEFINE("_ADMIN_EVENTS_ORDER_LI_LO","Αναδιάταξη");

//Frontend deliver events
DEFINE("_ADMIN_EVENTS_DELIVNAME","Το όνομά σου:");
DEFINE("_ADMIN_EVENTS_DELIVNAME_DESC","Παρακαλώ πρόσθεσε το όνομά σου εδώ");
DEFINE("_ADMIN_EVENTS_DELIVMAIL","Το emali σου:");
DEFINE("_ADMIN_EVENTS_DELIVMAIL_DESC","Παρακαλώ πρόσθεσε το email σου εδώ");
DEFINE("_EVENTS_DELIVER","Deliver event");
DEFINE("_EVENTS_VALIDATE","ERROR: Παρακαλώ συμπληρώστε όλα τα πεδία");
DEFINE("_ADMIN_EVENTS_DELIV_REDI","Η υποβολή Εκδηλώσεων δεν επιτρέπετε");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILBOD_1"," Έχετε μία υποβολή από έναν χρήστη ");
DEFINE("_EVENTS_DELIVMAILBOD_2"," Το email του χρήστη: ");
DEFINE("_EVENTS_DELIVMAILBOD_3"," Του χρήστη το - IP: ");
DEFINE("_EVENTS_DELIVMAILBOD_4"," Ώρα υποβολής: ");
DEFINE("_EVENTS_DELIVMAILBOD_5"," Τίτλος εκδήλωσης: ");
DEFINE("_EVENTS_DELIVMAILBOD_6"," Ημερομηνία εκδήλωσης: ");
DEFINE("_EVENTS_DELIVMAILBOD_7"," Ώρα εκδήλωσης: ");
DEFINE("_EVENTS_DELIVMAILBOD_8"," Περιοχή: ");
DEFINE("_EVENTS_DELIVMAILBOD_9"," Περιγραφή εκδήλωσης: ");
DEFINE("_EVENTS_DELIVMAILBOD_10"," : Νέα εκδήλωση ");
DEFINE("_EVENTLIST_DELIVER","Καταχώρησε μία νέα εκδήλωση");
DEFINE("_EVENTLIST_BACK","back");
DEFINE("_ADMIN_EVENTS_DELMAILFORM","ERROR: Email έχει λάθος φορματ!");
DEFINE("_ADMIN_EVENTS_DELTITLLEN","ERROR: Τίτλος είναι πολύ μεγάλος!");
DEFINE("_ADMIN_EVENTS_DELNAMLEN","ERROR: Όνομα είναι πολύ μεγάλο!");
DEFINE("_EVENTS_DELTEXTARHTML","HTML δεν επιτρέπετε!");
DEFINE("_EVENTS_RESTZ","χαρακτήρες διατίθενται");
DEFINE("_EVENTS_RESTZAKT","ανανέωση");
DEFINE("_EVENTS_DEL_DATE_EMPT","Παρακαλώ προσθέστε Ημερομηνία!");
DEFINE("_EVENTS_DEL_TIME_EMPT","Παρακαλώ προσθέστε Ώρα!");
DEFINE("_EVENTS_DEL_TITEL_EMPT","Παρακαλώ προσθέστε έναν Τίτλο!");
DEFINE("_EVENTS_DEL_CATEG_EMPT","Παρακαλώ προσθέστε μία Κατηγορία!");
DEFINE("_EVENTS_DEL_LOCAT_EMPT","Παρακαλώ προσθέστε μία Περιοχή!");
DEFINE("_EVENTS_DEL_TIME_FORM","ERROR: Η ώρα έχει λάθος φορμάτ");

//Frontend deliver location
DEFINE("_EVENTLIST_DELIVER_LOC","Καταχώρησε νέα Περιοχή");
DEFINE("_EVENTS_DELIVMAILLOCBOD_1"," Έχετε μία νέα καταχώρηση από έναν χρήστη ");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILLOCBOD_2"," Το email του χρήστη: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_3"," Του χρήστη το - IP: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_4"," Ώρα καταχώρησης: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_5"," Περιοχή: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_6"," URL Περιοχής: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_7"," Οδός: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_8"," Τ.Κ.: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_9"," Πόλη: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_10"," Κωδικός Περιοχής: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_11"," Περιγραφή: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_12"," : Νέα περιοχή ");
DEFINE("_EVENTS_DELIVER_LOC","Deliver location");
DEFINE("_EVENTS_DELURLLOCFORM","Το URL είναι πολύ μεγάλο");
DEFINE("_EVENTS_DELSTREETLOCFORM","Η Οδός είναι πολύ μεγάλη");
DEFINE("_EVENTS_DELPLZLOCFORM","Ο Ταχυδρομικό Κώδικα είναι πολύ μεγάλος");
DEFINE("_EVENTS_DELCITYLOCFORM","Η Πόλη είναι πολύ μεγάλη");
DEFINE("_EVENTS_DELCOUNTRYLOCFORM","Ο Κώδικας της Χώρας είναι πολύ μεγάλος");
DEFINE("_EVENTS_DELURLLOCFORM2","ERROR: URL έχει λάθος φορμάτ!");
DEFINE("_EVENTS_DEL_LOC_STREET_EMPT","ERROR: γράψτε την Οδό!");
DEFINE("_EVENTS_DEL_LOC_PLZ_EMPT","ERROR: γράψτε Ταχυδρομικό Κώδικα!");
DEFINE("_EVENTS_DEL_LOC_COUNTRY_EMPT","ERROR: γράψτε Κώδικα της Χώρας!");

//settings
DEFINE("_ADMIN_EVENTS_SETT_HEADER","Eventlist Ρυθμίσεις");
DEFINE("_ADMIN_EVENTS_SETT_SAVE","Οι Ρυθμίσεις αποθηκεύθηκαν επιτυχώς");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD","Διαχείριση παλίων Εκδηλώσεων:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD1","Μην κάνεις τίποτα");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD2","Διαφραφή παλίων Εκδηλώσεων");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD3","Αποθήκευση παλιών Εκδηλώσεων");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD_DESC","Διαφραφή ή Αποθήκευση παλιών Εκδηλώσεων αυτόματα.");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR","Αριθμός ημερών:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR_DESC","Αριθμός ημερών παρελθόντος που δεν έχουν διαγραφείς και δεν έχουν αρχειοθετηθεί. 
δεν είναι υποχρεωτικά πεδία.  Αυτό δεν έχει επίδραση αν η επιλογή από πάνω είναι απενεργοποιημένη.");
DEFINE("_ADMIN_EVENTS_SETT_EVNR","Αριθμός Εκδηλώσεων στην σελίδα παρουσίασης:");
DEFINE("_ADMIN_EVENTS_SETT_EVNR_DESC","Αριθμός Εκδηλώσεων που θα εμφανίζονται στην σελίδα παρουσίασης.");
DEFINE("_ADMIN_EVENTS_SETT_MAPID","Το ID σας του Map24:");
DEFINE("_ADMIN_EVENTS_SETT_MAPID_DESC","Χρειάζεται να εγγραφείτε στο Map24 για να λάβετε ένα ID.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME","Προβολή ώρας:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME_DESC","Εμφάνιση ώρας στην σελίδα παρουσίασης.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL","Προβολή τίτλου:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL_DESC","Εμφάνιση τίτλου εκδηλώσεως στην σελίδα παρουσίασης.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC","Προβολή περιοχής/τοποθεσίας:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC_DESC","Εμφάνιση περιοχής/τοποθεσίας στην σελίδα παρουσίασης.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY","Προβολή πόλης:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY_DESC","Εμφάνιση πόλης στην σελίδα παρουσίασης.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP","Προβολή Link στον Χάρτη :");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP_DESC","Εμφάνιση Link στον Χάρτη στην σελίδα περιγραφής. Σημείωση: Χρειάζεται να βάλεις το ID σας του Map24 αν επιλέξετε αυτή την υπηρεσία.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER","Προβολή επικεφαλίδας:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER_DESC","Εμφάνιση επικεφαλίδας στην σελίδα παρουσίασης.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO","Προβολή κειμένου εισαγωγής:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO_DESC","Εμφάνιση κειμένου εισαγωγής στην σελίδα παρουσίασης.");
DEFINE("_ADMIN_EVENTS_SETT_INTROT","Κείμενο Εισαγωγής για την Λίστα Εκδηλώσεων:");
DEFINE("_ADMIN_EVENTS_SETT_INTROT_DESC","Αυτό το κείμενο θα εμφανίζετε Λίστα Εκδηλώσεων στην σελίδα παρουσίασης.");
DEFINE("_ADMIN_EVENTS_SETT_TABLW","Μήκος Table(πίνακα) επι τις % :");
DEFINE("_ADMIN_EVENTS_SETT_TABLW_DESC","Μήκος Table(πίνακα) στην σελίδα παρουσίασης.");
DEFINE("_ADMIN_EVENTS_SETT_DATEC","Μήκος πίνακα ημερομηνίας επι τις %:");
DEFINE("_ADMIN_EVENTS_SETT_DATEC_DESC","Μήκος πίνακα ημερομηνίας.");
DEFINE("_ADMIN_EVENTS_SETT_CNAME","Το όνομα που θέλετε να έχει:");
DEFINE("_ADMIN_EVENTS_SETT_CNAME_DESC","Άλλαξε εδώ με ότι θέλεις.");
DEFINE("_ADMIN_EVENTS_SETT_TITELW","Μήκος κολόνας τίτλου επι τις %:");
DEFINE("_ADMIN_EVENTS_SETT_TITELW_DESC","Μήκος κολόνας τίτλου (άστο κενό αν το έχεις απενεργοποιήσει)");
DEFINE("_ADMIN_EVENTS_SETT_INFOB","Μήκος κολόνας πληροφοριών επι τις %:");
DEFINE("_ADMIN_EVENTS_SETT_INFOB_DESC","Μήκος πίνακα πληροφοριών");
DEFINE("_ADMIN_EVENTS_SETT_LOCA","Μήκος κολόνας τοποθεσίας επι τις %:");
DEFINE("_ADMIN_EVENTS_SETT_LOCA_DESC","Μήκος κολόνας τοποθεσίας (άστο κενό αν το έχεις απενεργοποιήσει)");
DEFINE("_ADMIN_EVENTS_SETT_CITYW","Μήκος κολόνας πόλης επι τις %:");
DEFINE("_ADMIN_EVENTS_SETT_CITYW_DESC","Μήκος κολόνας πόλης (άστο κενό αν το έχεις απενεργοποιήσει)");
DEFINE("_ADMIN_EVENTS_SETT_UNWR","Το αρχείο Config δεν είναι εγγράψιμο!");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE","Φορμάτ ημερομηνίας:");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE_DESC","Date format using the same format as PHP strftime, for example: %d.%m.%Y. More information: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME","Φορμάτ ώρας:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME_DESC","Time format using the same format as PHP strftime, for example:%H.%M. More information: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME","Όνομα:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME_DESC","Συμπληρώστε με  &quot;ω&quot; ή &quot;ώρα&quot; για παράδειγμα. Αυτό θα παρουσιάζετε στην σελίδα παρουσίασης . Άστο κενό αν δεν το χρειάζεσαι."); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS","Προβολή link στη σελίδα λεπτομεριών:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS_DESC","Προβολή link στη σελίδα λεπτομερειών και στο που? (Link on title only works if showtitle is yes, icons only if you have set the width at the layout settings)");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIMEDET_DESC","Προβολή ώρας στην σελίδα λεπτομερειών.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC","Προβολή περιγραφής εκδήλωσης:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC_DESC","Παρουσίαση περιγραφής εκδήλωσης στην σελίδα παρουσίασης.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL","Προβολή Τίτλου Εκδήλωσης:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL_DESC","Παρουσίαση Τίτλου Εκδήλωσης στην σελίδα παρουσίασης.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS","Display address of location:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS_DESC","Display address of location on the detailspage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC","Display locationdescription:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC_DESC","Display locationdescription on the detailspage.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB","Προβολή link στην τοποθεσία:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB_DESC","Παρουσίαση link τοποθεσίας στην σελίδα παρουσίασης.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB","Show link to location:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB_DESC","Display link to location on the detailspage.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL","Νέες Εκδηλώσεις από τους χρήστες:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL_DESC","Επιτρέπετε οι χτήστες να καταχωρούν νέες εκδηλώσεις από την σελίδα παρουσίασης.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL","Mail μετά από κάθε καταχώρηση χρηστών:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL_DESC","Πληροφορεί τον admin για κάθε νέα καταχώρηση εκδηλώσεων από τους χρήστες?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1","Αποδέκτης eMail:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1_DESC","Ο Αποδέκτης του eMail που θα λαβένει την πληροφορία .");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2","CC: Mail recipient:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2_DESC","The mail address of the second person who should receive the infomail (προαιρετικο).");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT","Max. length of the event- and locationdescription.");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT_DESC","Max. length of the event- and locationdescription. If the length of the description is too long, the description will be truncated and the note [truncated] will be added.");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET1","Details off");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET2","Link στον τίτλο");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET3","Link στο εικονίδιο");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET4","και στα δύο");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB","Αυτόματη δημοσίευση?");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB_DESC","Δημοσίευση εκδηλώσεων Αυτόματη?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC","Νέα τοποθεσία από τους χρήστες:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC_DESC","Allow users to submit new locations from the frontpage and set the userrank.");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUBLOCS_DESC","Δημοσίευση Τοποθεσιών  Αυτόματη?");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF1","Off");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF2","Μόνο νέες εκδηλώσεις");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF3","Μόνο νέες τοποθεσίες");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF4","και τα δύο");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT","Παρουσίαση Κατηγορίας:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT_DESC","Προβολή κατηγορίας στην σελίδα παρουσίασης.");
DEFINE("_ADMIN_EVENTS_SETT_CATW","Μήκος κολόνας κατηγορίας επι τις %:");
DEFINE("_ADMIN_EVENTS_SETT_CATW_DESC","Μήκος κολόνας κατηγορίας (άστο κενό αν το έχεις απενεργοποιήσει)");
DEFINE("_ADMIN_EVENTS_SETT_VIEW","Επέλεξε προκαθορισμένο layout στην σελίδα παρουσίασης :");
DEFINE("_ADMIN_EVENTS_SETT_VIEW1","Απλή προβολή Λίστας");
DEFINE("_ADMIN_EVENTS_SETT_VIEW2","Απλή Κατηγορία Λίστας");
DEFINE("_ADMIN_EVENTS_SETT_VIEW3","Λεπτομερής Κατηγορία Λίστας");
DEFINE("_ADMIN_EVENTS_SETT_VIEW4","Placeholder2");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_VIEW_DESC","Επέλεξε το προκαθορισμένο layout εδώ. 'Απλή προβολή Λίστας' είναι το παλιό layout.");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC_DESC","Allow child groups access as well? If No access is restricted to the selected group only. Note: Administrators always have access.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC","Recurse:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE","Μάξ. μέγ. αρχείου:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE_DESC","Μάξ. μέγ. αρχείου σε kb");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT","Μαξιμουμ ύψος της μικρής φωτογραφίας:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT_DESC","Μαξιμουμ ύψος της μικρής φωτογραφίας και της φωτογραφίας στην κατηγορία");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH","Μαξιμουμ μήκος της μικρής φωτογραφίας:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH_DESC","Μαξιμουμ μήκος της μικρής φωτογραφίας και της φωτογραφίας στην κατηγορία");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB","Κράτα αναλογίες:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB_DESC","Keep proportions or resize?");
DEFINE("_ADMIN_EVENTS_SETT_GDSTATUS","Κατάσταση: ");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE","Επιτρέποντε οι μικρογραφίες:");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE_DESC","Disable this, if status shows that GD Library is unavailable or only have version 1.");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB","Ανέβασμα φωτογραφιών:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB1","απενεργοποιημένο");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB2","προεραιτικό");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB3","Απαιτείτε");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB_DESC","Is Image uploading disabled or optional or a must for users");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD","Chmod για τις φωτογραφίες:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD_DESC","Γράψε εδώ τα permissions που θέλεις να δώσεις για τις φωτογραφίες. Π.χ. 0740");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD1","Διαχείριση Εκδηλώσεων");
DEFINE("_ADMIN_EVENTS_SETT_HEAD2","Προβολή - Ρυθμίσεις");
DEFINE("_ADMIN_EVENTS_SETT_HEAD3","Εισαγωγή");
DEFINE("_ADMIN_EVENTS_SETT_HEAD4","AC - Εκδηλώσεις");
DEFINE("_ADMIN_EVENTS_SETT_HEAD5","AC - Τοποθεσίες");
DEFINE("_ADMIN_EVENTS_SETT_HEAD6","Τοποθεσίες");
DEFINE("_ADMIN_EVENTS_SETT_HEAD7","Περιγραφή - Μήκος");
DEFINE("_ADMIN_EVENTS_SETT_HEAD8","Διαχείριση email");
DEFINE("_ADMIN_EVENTS_SETT_HEAD9","Διαχείριση Φωτογραφιών");
DEFINE("_ADMIN_EVENTS_SETT_HEAD10","Σελίδα Παρουσίασης");
DEFINE("_ADMIN_EVENTS_SETT_HEAD11","Εκδηλώσεις");
DEFINE("_ADMIN_EVENTS_SETT_HEAD12","Γενικές Ρυθμήσεις Layout");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD13","Μήκος Πίνακα");
DEFINE("_ADMIN_EVENTS_SETT_HEAD14","Κολόνα ημερομηνίας");
DEFINE("_ADMIN_EVENTS_SETT_HEAD15","Κολόνα Τίτλου");
DEFINE("_ADMIN_EVENTS_SETT_HEAD16","Κολόνα Πληροφοριών");
DEFINE("_ADMIN_EVENTS_SETT_HEAD17","Κολόνα Περιοχής");
DEFINE("_ADMIN_EVENTS_SETT_HEAD18","Κολόνα Πόλης");
DEFINE("_ADMIN_EVENTS_SETT_HEAD19","Κολόνα Κατηγορίας");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG1","Συνδέσεις");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL","Επέλεξε Community Solution:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL1","Μην χρησιμοποιηθεί κανένα");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL2","CB / CBE"); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL_DESC","Επέλεξε το Community Solution που χρησιμοποιείς. Community Builder από Joomlapolis ή το Community Builder Enhanced από www.kolloczek.com");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEADREG2","Επιλογές Community Solution");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION","Επέλεξε ρύθμιση ενοποίησης:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION1","Να μην γίνει ενοποίηση");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION2","Link στο προφίλ");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION3","Link στο προφίλ και προβολή εικόνας");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION_DESC","Choose the type of Integration. Event List supports displaying of the Avatar and generation of links to the Profile from the user who has registered to an Event");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG3","Προσοχή");
DEFINE("_ADMIN_EVENTS_SETT_COMM_NOTES","Event List supports AKReservation if you need more detailed registrations. Simply place the mambot trigger in the Eventdescription field from Event List. Link: ");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION1","Δεν υπάρχει υπηρεσία προβολής χάρτη");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION2","Χάρτης 24");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION3","Χάρτης Google");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC","Απόκρυψη πληροφοριών ΤοποθεσίαςHide Location data");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC_DESC","Hide Location details complete. The other settings for the location details will have no effect.");
DEFINE("_ADMIN_EVENTS_SETT_WARNING","!! Check your module settings! Only activate this if it is disabled in the module. Do not use it twice !!");  //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_INFOBUT_WARNING","!! Delete the width, if you link to the detailspage with the title or if you do not use it !!");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK","Show link to category view:");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK_DESC","Display link to category view on the frontpage.");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG4","Frontend:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE","Επιτέπετε η εγγραφή:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE_DESC","Allow users to choose if they want to allow registration to the Events they submit or set default");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE","Επιτέπετε η διαγραφή:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE_DESC","Allow users to choose if they want to allow unregistration to the Events they submit or set default");
DEFINE("_ADMIN_EVENTS_SETT_GD_VERSION_TWO","Η GD έκδοση είναι 2. Η δημιουργία μικρογραφίας μπορεί να ενεργοποιηθεί");
DEFINE("_ADMIN_EVENTS_SETT_GD_VERSION_ONE","Η GD έκδοση είναι 1. Απενεργοποιήστε την δημιουργία μικρογραφίας.");

//Categories
DEFINE("_ADMIN_CATEGORIES_NAME","Όνομα");
DEFINE("_ADMIN_CATEGORIES_PUBLISH","Δημοσιοποίηση?");
DEFINE("_ADMIN_CATEGORIES_ORDER","Αναδιάταξη");
DEFINE("_ADMIN_CATEGORIES_PUBLI","Εκδίδω:");
DEFINE("_ADMIN_CATEGORIES_DESCR_OPT_LO","(προεραιτικό)");
DEFINE("_ADMIN_CATEGORIES_DESCR_INTRO_LO","Η Περιγραφή Κατηγορίας");
DEFINE("_ADMIN_CATEGORIES_DESCR_LO","Περιγραφή Κατηγορίας:");
DEFINE("_ADMIN_EVENTS_DEL_CAT","Σφάλμα: min. one Event is asigned to this category");
DEFINE("_ADMIN_CATEGORIES_DEL"," Η Κατηγορία(ες) έχει διαγραφεί");
DEFINE("_ADMIN_CATEGORIES_NAME_EMPTY","Σφάλμα: Παρακαλώ συμπληρώστε ένα όνομα κατηγορίας!");
DEFINE("_ADMIN_CATEGORIES_IMAGE","Φωτογραφία Κατηγορίας:");
DEFINE("_ADMIN_CATEGORIES_IMAGEPREV","Προεπισκόπηση:");
DEFINE("_ADMIN_CATEGORIES_SAVE","Η Κατηγορία έχει αποθηκευθεί");
DEFINE("_EVENTLIST_CATVIEW1","Προβολή Εκδηλώσεων");
DEFINE("_EVENTLIST_CATVIEWCOUNTEV","Εκδηλώσεις:");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_CAT"," Η Κατηγορία(ες) έχουν επιτυχώς Δημοσιοποιηθεί");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_CAT"," Η Κατηγορία(ες) έχουν επιτυχώς Απο-Δημοσιοποιηθεί");
DEFINE("_ADMIN_CATEGORIES_HEAD","Κατηγορίες Εκδηλώσεων");

//Registration
DEFINE("_ADMIN_EVENTS_REGCOUNT","Εγγεγρ. Χρήστες");
DEFINE("_ADMIN_EVENTS_USERNAME","Όνομα χρήστη");
DEFINE("_ADMIN_EVENTS_USERIP","IP");
DEFINE("_ADMIN_EVENTS_UREGDATE","Reg. Date");
DEFINE("_ADMIN_EVENTS_USERID","Του χρήστη το ID");
DEFINE("_ADMIN_EVENTS_USERDELETE","Διαγραφή");
DEFINE("_ADMIN_REGISTER_DEL"," Εγγεγραμμένος χτήστης(ες) διεγράφει");
DEFINE("_ADMIN_EVENTS_UNREGISTRA","Επιτέπετε οι χρήστες να διαγράφονται?");
DEFINE("_EVENTS_REGISTRA_HEAD","Εγγεγραμένοι χρήστες:");
DEFINE("_EVENTS_REGISTRA_ALLRE","Είσαι εγγεγραμμένος σε αυτή την εκδήλωση.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_LOGIN","Πρέπει να κάνετε login για να εγγραφείτε σε αυτή την εκδήλωση.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_TOLATE","Είναι αργά για να εγγραφείτε σε αυτή την εκδήλωση.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_REG","Θα παραβρίσκομαι σε αυτή την εκδήλωση:");
DEFINE("_EVENTS_REGISTRA_BUTTON","Εγγραφή");
DEFINE("_EVENTS_REGISTRA_SUCCESS","Έχεις εγγραφεί επιτυχώς σε αυτή την εκδήλωση.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_UNREG","Διαγράψου από αυτή την εκδήλωση:");
DEFINE("_EVENTS_REGISTRA_BUTTON_UNREG","Διαγραφή");
DEFINE("_EVENTS_REGISTER_DEL","Δεν ήσαστε πλέον εγγεγραμμένος σε αυτή την εκδήλωση");	//changed in 0.8.3

//new 0.8
DEFINE("_ADMIN_CATEGORIES_ACCESS","Πρόσβαση");
DEFINE("_ADMIN_EVENTS_ACCESS_DENIED","Η Πρόσβαση απαγορεύετε.");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION1","Όχι");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION2","Ναι");

//new 0.8.6
DEFINE("_ADMIN_GDVERSION_TWO","Η GD έκδοση είναι 2. Η δημιουργία μικρογραφίας μπορεί να ενεργοποιηθεί.");
DEFINE("_ADMIN_GDVERSION_ONE","Η GD έκδοση είναι 1. Απενεργοποιήστε την δημιουργία μικρογραφίας.");

//new 0.8.7 
DEFINE("_ADMIN_CHOOSE_CITY","Επέλεξε μία πόλη"); 
DEFINE("_ADMIN_CHOOSE_A_VENUE","Επέλεξε μία περιοχή από "); 
DEFINE("_ADMIN_CHOOSE_A_CITY","Επέλεξε μία πόλη από πάνω ");

//new 0.8.9
DEFINE("_ADMIN_EVENTS_ENDDATE","Ημερομηνία γεγονότος (λήξη):");
DEFINE("_ADMIN_EVENTS_INFOBUTTON_ERROR_MSG", "Έχετε επιλέξει να υπάρχει link στο κουμπί πληροφοριών(info button)  αλλά δεν έχετε επιλέξει ένα μήκος για αυτό. Παρακαλώ επιλέξτε ή να μην υπάρχει link στο info button (στις Βασικές Ρυθμίσεις) ή διορίστε ένα μήκος για το info button (στην καρτέλα  Layout)");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER","Προβολή φίλτρου:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER_DESC","Να εμφανιστεί το Πεδίο Φίλτρου μπροστά.");
?>