<?php
/**
* @version 
* @package MosCom - COAddOns for Mambo & Jommla - Comments on Articles based on COMBO by Phil Taylor
* @copyright (C) 2008 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/
/* Croatian translation by Mato Špekuljak mato.spekuljak@post.t-com.hr */

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
//admin.comments.html.php
define('_COM_A_KEEPUPTODATE','Ako želite imati uvijek najnoviju inaèicu ove vrlo korisne komponente èiji je autor Chanh Ong upišite se, klikom na odgovarajuæi gumb, u mailing-listu za korisnike.');
define('_COM_A_SUBSCRIBE','Pretplata');
define('_COM_A_UNSUBSCRIBE','Poništenje pretplate');
define('_COM_A_BACKUP','Arhiviranje (backup)');
define('_COM_A_BACKUP_DESC','Arhiviranje (backup) tablice komentara');
define('_COM_A_RESTORE','Povrat iz arhive');
define('_COM_A_RESTORE_DESC','Povrat komentara iz arhive');
define('_COM_A_CONFIG','Podešavanje');
define('_COM_A_CONFIG_DESC','Podešavanje opcija');
define('_COM_A_INSTRUCTIONS','Nakon instaliranja');
define('_COM_A_INSTRUCTIONS_DESC','Što uèiniti nakon instaliranja komponente?');
define('_COM_A_ABOUT','Opis');
define('_COM_A_ABOUT_DESC','Opis komponente');
define('_COM_A_LINK','Link');
define('_COM_A_LINK_DESC','Link na web-stranice autora komponente');
define('_COM_A_CHECK','Provjera ima li nadogradnji');
define('_COM_A_VERSION','Instalirana je inaèica');
define('_COM_A_DONATE','Gumb za slanje donacije. Donacijama se autora ohrabruje da nastavi raditi na komponenti.');
define('_COM_A_REVIEW','Pregled komentara (od najnovijih prema najstarijima)');
define('_COM_A_DISPLAY','Prikaži #');
define('_COM_A_NAME_SUB','Ime');
define('_COM_A_EMAIL_SUB','E-mail adresa');
define('_COM_A_HOMEPAGE','Web-adresa');
define('_COM_A_COMMENT','Komentar');
define('_COM_A_ARTICLE','Sadržaj koji je komentiran');
define('_COM_A_PUBLISHED','Objavljeno');
define('_COM_A_MOS_BY','A MOS4.5 Custom Component by');
define('_COM_A_CURRENT_SETTINGS','Tekuæa podešavanja');
define('_COM_A_EXPLANATION','Pojašnjenje');
define('_COM_A_ADMIN_EMAIL','E-mail adresa administratora');
define('_COM_A_ADMIN_EMAIL_DESC','Rubrika E-mail administratora mora biti popunjena ako se želi omoguæiti da novi komentari nakon unošenja mogu biti proslijeðeni na administratorovu E-mail adresu.');
define('_COM_A_ADMIN_ALERTS','Slanje komentara administratoru');
define('_COM_A_ADMIN_EMAIL_ENABLE','Slanje komentara administratoru putem E-maila: Ne ili Da?');
define('_COM_A_VISITOR_EMAIL','Slanje komentara autorima');
define('_COM_A_VISITOR_EMAIL_DESC','Slanje komentara autorima putem E-maila: Ne ili Da?');
define('_COM_A_REVIEW_SUBM','Odobravanje komentara');
define('_COM_A_REVIEW_DESC','Podesite li ovu opciju na Da, svaki æe komentar nakon unošenja biti najprije privremeno arihiviran u bazi podataka kako bi ga administrator mogao pogledati i odluèiti o njegovom objavljivanju. Administrator dobiva o tome obavijest E-mailom <strong>samo</strong> ako je popunjena rubrika &quot;E-mail adresa administratora&quot i ako je odabrano Da za &quot;Slanje komentara administratoru&quot;.');
define('_COM_A_REGISTERED_ONLY','Samo za registrirane korisnike');
define('_COM_A_REG_ONLY_DESC','Ukljuèite li opciju &quot;Ne&quot; komentare æe moæi unositi svi èitatelji sadržaja, a ukljuèite li opciju &quot;Da&quot; komentare æe moæi unositi samo registrirani korisnici, s tim da svi mogu komentare vidjeti.');
define('_COM_A_NOTIFY_VERSION','Informacija o aktualnoj inaèici');
define('_COM_A_NOT_VER_DESC','Ukljuèivanje opcije &quot;Da&quot; uvjet je da administrator može, pri ulasku u Pregled komentara / View Comments iz odgovarajuæeg Mambo ili Joomla izbornika komponente, u gornjem okviru s razlièitim podacima vidjeti i podatak o tome koja je inaèica komponente aktualna (<em>Napomena: Jedini podatak koji pri tome odlazi na server s kojega je moguæa nadogradnja komponente je podatak o oznaci instalirane inaèice</em>), takoðer vidljiv i dotiènom izborniku.');
define('_COM_A_HAVE_DONATED','Jeste li veæ što donirali?');
define('_COM_A_DONATE2','Donacije za autora komponente preporuèa se slati sustavom Paypal. Svaka je donacija poticaj autoru da nastavi raditi na komponenti! :-)');
define('_COM_A_IMPORTANT_NOTE','Važna napomena:');
define('_COM_A_TEMPLATE','Da bi MosCom besprijekorno funkcionirao nakon što komponentu instalirate napravite malu promjenu u HTML zapisu predloška koji koristite.<br><a href="index2.php?option=templates&task=edit">Edit your template file</a> and look for the entry');
define('_COM_A_CHANGE_TO','Ovaj kratak zapis zamijenite dužim zapisom ispod njega');
define('_COM_A_HAVE_FUN','To je to! ~ (Comment will only show on the article id = something otherwise it will not show)<p>Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_COM_A_FORCE_PREVIEW','Moguæa prethodna provjera');
define('_COM_A_FORCE_PREVIEW_TEXT','Podesite ovu opciju na Da želite li da autori prije definitivnog unosa komentara mogu vidjeti što su upisali.');
define('_COM_A_HIDE','Neprikazivanje cjeline s komentarima i obrascem');
define('_COM_A_HIDE_DESC','Podesite ovu opciju na Da želite li da se na stranici vide samo linkovi (Komentari (x) - Unos komentara) umjesto cjeline s otvorenim komentarima i obrascem');
define('_COM_A_DATE','Datum');
define('_COM_A_HIDE_URL','Neobjavljivanje URL');
define('_COM_A_HIDE_URL_DESC','Ovom opcijom odluèujete da li æe u komentarima biti skriveni - Da - ili æe biti vidljivi - Ne - URL-ovi.');
define('_COM_A_EMAIL_REQ','Obavezna E-mail adresa autora');
define('_COM_A_EMAIL_REQ_DESC','Opcija kojom odluèujete neæe li - Ne - ili hoæe - Da - autori komentara morati upisivati svoje E-mail adrese.');
define('_COM_A_EXCL_SEC','Iskljuèene sekcije');
define('_COM_A_EXCL_SEC_DESC','Opcija koja onemoguæava komentiranje sadržaja nekih sekcija. Da bi se onemoguæilo komentiranje sadržaja nekih sekcija potrebno je unijeti brojèane oznake dotiènih sekcija, npr. 0,1,2');
define('_COM_A_PER_PAGE','Komentara na stranici');
define('_COM_A_PER_PAGE_DESC','Opcija kojom se odreðuje koliko æe komentara biti prikazivano u jednoj cjelini, npr. 3');
define('_COM_A_NEW_1ST','New Comments First');
define('_COM_A_NEW_1ST_DESC','List new comment entries first');
define('_COM_A_FORM_ABOVE','Comment Form Above');
define('_COM_A_FORM_ABOVE_DESC','Show comment form above comment entries');
define('_COM_A_USE_DIVCSS','Use DIV CSS');
define('_COM_A_USE_DIVCSS_DESC','Show comment form using DIV CSS from template');
define('_COM_A_EXCL_CONT','Exclude Contents');
define('_COM_A_EXCL_CONT_DESC','Use to exclude contents via article id not to show comments form, eg: 0,1');
define('_COM_A_IP','IP');
define('_COM_A_USE_USERNAME','Use username');
define('_COM_A_USE_USERNAME_DESC','Show username instead of name');
define('_COM_A_CLOSE_CONT','Close Contents');
define('_COM_A_CLOSE_CONT_DESC','Use to close contents via article id not to show comments form, eg: 0,1');
define('_COM_A_USE_SECTOKEN','Use security token');
define('_COM_A_USE_SECTOKEN_DESC','Check for security token when submit comment (invisible Captcha)');

//comments.php
define('_COM_A_NO',"Ne");
define('_COM_A_YES',"Da");
define('_COM_C_COM_NUMBER',"Broj komentara");
define('_COM_C_NO_COM',"Na ovaj sadržaj još nema komentara - možete unijeti svoj komentar koristeæi donji obrazac...");
define('_COM_C_POST',"Komentar je napisao/napisala");
define('_COM_C_HOMEPAGE',"Osobne web-stranice");
define('_COM_C_DATE_ON',"Datum");
define('_COM_C_DATE_AT',"Vrijeme");
define('_COM_C_ADD_COM',"Dodajte svoj komentar na sadržaj:");
define('_COM_C_ADD_COM2'," ...");
define('_COM_C_NAME',"Ime");
define('_COM_C_EMAIL',"E-mail adresa");
define('_COM_C_EMAIL_NOT',"Vaša E-mail adresa neæe biti vidljiva na stranici, ona je samo podatak za administratora");
define('_COM_C_HOMEPAGE_IN',"Osobne web-stranice");
define('_COM_C_COM',"Komentar:");
define('_COM_C_FULLY',"Molimo Vas da popunite sve rubrike!");
define('_COM_C_NEW_COM',"Novi komentar");
define('_COM_C_HAVE_NEW',"Imate novi komentar na sadržaj:");
define('_COM_C_LOGIN',"Molimo Vas da se prijavite i objavite komentar ili da ga poništite");
define('_COM_C_QUICKLINK',"Brzi link za prijavljivanje");
define('_COM_C_THANKS',"Hvala za komentar");
define('_COM_C_THANKS2',"Hvala za komentar na sadržaj:");
define('_COM_C_ADMIN_REV',"Komentar æe biti objavljen èim ga administrator odobri. Komentar neæe biti objavljen ukoliko je neprihvatljivog sadržaja");
define('_COM_C_ENTERED',"Uspješno uneseno");
define('_COM_C_VISIT',"Pozivamo Vas da posjetite stranicu");
define('_COM_C_THANKS3',"Hvala za komentar - bit æe objavljen!");
define('_COM_C_THANKS4',"Hvala za komentar - bit æe objavljen ako ga administrator odobri!");
define('_COM_C_SUBMIT',"Unos");
define('_COM_C_RESET',"Brisanje");
define('_COM_C_NOT_AUTH',"Ne možete unijeti komentar prije nego se prijavite na stranicu.");
define('_COM_C_PREV_PAGE',"Prethodna stranica");
define('_COM_C_NEXT_PAGE',"Sljedeæa stranica");
define('_COM_C_PAGE',"stranica");
define('_COM_C_COMMENT',"komentara");
define('_COM_C_OF',"iskljuèeno");
define('_COM_C_CANCEL',"poništeno");
define('_COM_C_FORM_INTRO',"Enter your comment below.");
define('_COM_C_PREVIEW_HEAD',"Please check your entry...");
define('_COM_C_PREVIEW_INTRO',"Is the below correct? <p />Please make any necessary changes before submitting.  Warning: Cancelling will erase your comment!");
define('_COM_C_REQ'," <small><i>(obavezno)</i></small>");
define('_COM_C_OPT'," <small><i>(po želji)</i></small>");
define('_COM_C_HOMEURL',"here");
define('_COM_C_CHECKLINK',"CHECK LINK");
define('_COM_C_QUICKPOST',"Quick Post");
?>