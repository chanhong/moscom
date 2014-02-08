<?php
/**
* @version
* @package MosCom - COAddOns for Mambo & Jommla - Comments on Articles based on COMBO by Phil Taylor
* @copyright (C) 2007 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/
/* Swedish translation by Hans@Rudolf.nu (You are free to use the file if you leave this information) */
/* Swedish translation updated by stefan.lewitas@telia.com */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
//admin.comments.html.php
define('_COM_A_KEEPUPTODATE','Om du vill hålla dig uppdaterad om denna och andra komponenter från Chanh Ong, lägg till dig till mail listan genom att klicka på dessa knappar');
define('_COM_A_SUBSCRIBE','Prenumerera');
define('_COM_A_UNSUBSCRIBE','Ta bort prenumeration');
define('_COM_A_BACKUP','Säkerhetskopiering');
define('_COM_A_BACKUP_DESC','Ta en säkerhetskopia på #__content_comments table');
define('_COM_A_RESTORE','Återställning');
define('_COM_A_RESTORE_DESC','Återställ #__content_comments table');
define('_COM_A_CONFIG','Inställningar');
define('_COM_A_CONFIG_DESC','Ändra inställningar');
define('_COM_A_INSTRUCTIONS','Instruktioner');
define('_COM_A_INSTRUCTIONS_DESC','Skicka installationsinställningar');
define('_COM_A_ABOUT','Om');
define('_COM_A_ABOUT_DESC','Om denna komponent');
define('_COM_A_LINK','Länk');
define('_COM_A_LINK_DESC','Till författarens webbsida');
define('_COM_A_CHECK','Sök efter uppdateringar');
define('_COM_A_VERSION','Din version är ');
define('_COM_A_DONATE','Var vänlig att klicka på doneringsknappen nedan. Det kommer att inspirera mig till att förbättra detta script');
define('_COM_A_REVIEW','Kommentarer (senaste först)');
define('_COM_A_DISPLAY','Visa #');
define('_COM_A_NAME_SUB','Namn');
define('_COM_A_EMAIL_SUB','E-postadress');
define('_COM_A_HOMEPAGE','Hemsida');
define('_COM_A_COMMENT','Kommentar');
define('_COM_A_ARTICLE','Artikel');
define('_COM_A_PUBLISHED','Publicerad');
define('_COM_A_MOS_BY','En MOS4.5-komponent av');
define('_COM_A_CURRENT_SETTINGS','Nuvarande inställningar');
define('_COM_A_EXPLANATION','Förklaring');
define('_COM_A_ADMIN_EMAIL','Admin-mail');
define('_COM_A_ADMIN_EMAIL_DESC','Om e-postfunktionen är på, kommer ett meddelande skickas till denna address när det skrivs en ny kommentar');
define('_COM_A_ADMIN_ALERTS','Admin-mail vid nya kommentarer');
define('_COM_A_ADMIN_EMAIL_ENABLE','Admin-mail vid nya kommentarer, På/Av');
define('_COM_A_VISITOR_EMAIL','E-post till besökare vid kommentar');
define('_COM_A_VISITOR_EMAIL_DESC','E-post till personen som lade till en kommentar, På/Av');
define('_COM_A_REVIEW_SUBM','Publiceringskontroll');
define('_COM_A_REVIEW_DESC','Om du ställe in denna på ja kommer kommentarer att läggas till i databasen, men publiceras inte förrän de godkänts av en administrator. E-post skickas <strong>endast</strong> om en e-postadress angetts i &quot;Admin-mail&quot; och &quot;Admin-mail vid nya kommentarer, På/Av&quot; funktionen inställd på &quot;ja&quot;');
define('_COM_A_REGISTERED_ONLY','Endast registrerade användare');
define('_COM_A_REG_ONLY_DESC','Ställ in på &quot;Ja&quot; för att enbart tillåta kommentarer från registrerade användare (alla kan läsa kommentarerna). Ställ in på &quot;Nej&quot; för att tillåta kommentarer från alla');
define('_COM_A_NOTIFY_VERSION','Ge mig information när en ny version finns tillgänglig');
define('_COM_A_NOT_VER_DESC','Om du ställer in på &quot;Ja&quot; kommer det att visas information i huvudmenyn när det finns en ny version tillgänglig för denna komponent (<em>NOTERA: Den enda datan som skickas till servern är ditt versionsnummer</em>)');
define('_COM_A_HAVE_DONATED','Har du donerat?');
define('_COM_A_DONATE2','Var vänlig att donera via paypal. Det kommer att inspirera mig till att förbättra detta script :-)');
define('_COM_A_IMPORTANT_NOTE','VIKTIG INFORMATION');
define('_COM_A_TEMPLATE','För att mambo ska kontrollera och visa en artikel som går att kommentera, är det viktigt att du gör en liten ändring i din Templates Index.php fil.<br><a href="index2.php?option=templates&task=edit">Ändra din template fil</a> och titta efter följande text');
define('_COM_A_CHANGE_TO','Ändra detta till följande');
define('_COM_A_HAVE_FUN','Det var allt! ~ (Kommentarer kommer endast att visas under artikeln om du gör detta = om det inte fungerar kommer inget att visas)<p>Ha kul med din nya Komponent!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_COM_A_FORCE_PREVIEW','Tvinga förhandsvisning');
define('_COM_A_FORCE_PREVIEW_TEXT','Ställ in denna funktion på ja om du vill tvinga dina besökare att först läsa igenom sin kommentar innan den publiceras');
define('_COM_A_HIDE','Dölj kommentarer');
define('_COM_A_HIDE_DESC','Visa (Kommentarer (x) - Lägg till kommentarer) istället för kommentarer och form som default');
define('_COM_A_DATE','Datum');
define('_COM_A_HIDE_URL','Dölj URL');
define('_COM_A_HIDE_URL_DESC','Dölj URL - Använd för att dölja URL´s i kommentarer som standard');
define('_COM_A_EMAIL_REQ','E-postadress krävs');
define('_COM_A_EMAIL_REQ_DESC','Använd för att ställa in om det skall krävas email adress eller inte som standard');
define('_COM_A_EXCL_SEC','Exkludera sektion');
define('_COM_A_EXCL_SEC_DESC','Använd för att exkludera sektioner där du inte vill visa kommentarer som default, ex: 0,1');
define('_COM_A_PER_PAGE','Kommentarer per sida');
define('_COM_A_PER_PAGE_DESC','Använd för att visa x antal kommentarer per sida, ex.: 3');
define('_COM_A_NEW_1ST','Visa nya kommentarer först');
define('_COM_A_NEW_1ST_DESC','Visar senaste kommentarerna först i listan');
define('_COM_A_FORM_ABOVE','Kommentarformulär ovanför');
define('_COM_A_FORM_ABOVE_DESC','Visar kommentarformulär ovanför befintliga kommentarer');
define('_COM_A_USE_DIVCSS','Använd CSS');
define('_COM_A_USE_DIVCSS_DESC','Visa kommentarer i stil med CSS från sidmall');
define('_COM_A_EXCL_CONT','Exkludera innehåll');
define('_COM_A_EXCL_CONT_DESC','Används för att exkludera innehåll via artikel-ID för att inte visa kommentarformulär, ex.: 0,1');
define('_COM_A_IP','IP');
define('_COM_A_USE_USERNAME','Use username');
define('_COM_A_USE_USERNAME_DESC','Show username instead of name');
define('_COM_A_CLOSE_CONT','Close Contents');
define('_COM_A_CLOSE_CONT_DESC','Use to close contents via article id not to show comments form, eg: 0,1');
define('_COM_A_USE_SECTOKEN','Use security token');
define('_COM_A_USE_SECTOKEN_DESC','Check for security token when submit comment (invisible Captcha)');

//comments.php
define('_COM_A_NO',"Nej");
define('_COM_A_YES',"Ja");
define('_COM_C_COM_NUMBER',"Antal kommentarer");
define('_COM_C_NO_COM',"Det finns inga kommentarer ännu - lägg gärna till en kommentar nedan...");
define('_COM_C_POST',"Kommenterad av");
define('_COM_C_HOMEPAGE',"Vars hemsida är");
define('_COM_C_DATE_ON',"på");
define('_COM_C_DATE_AT',"den");
define('_COM_C_ADD_COM',"Kommentera denna artikel...");
define('_COM_C_ADD_COM2'," ...");
define('_COM_C_NAME',"Namn");
define('_COM_C_EMAIL',"E-postadress");
define('_COM_C_EMAIL_NOT',"Din e-postadress kommer inte att visas - endast för vår administrator");
define('_COM_C_HOMEPAGE_IN',"Hemsida");
define('_COM_C_COM',"Kommentar");
define('_COM_C_FULLY',"Var vänlig att fyll i all information!");
define('_COM_C_NEW_COM',"Ny kommentar på");
define('_COM_C_HAVE_NEW',"Du har en ny kommentar på följande artikel:");
define('_COM_C_LOGIN',"Var vänlig och logga in och publicera eller ta bort denna kommentar");
define('_COM_C_QUICKLINK',"Här är en snabblänk till inloggning");
define('_COM_C_THANKS',"Tack för din kommentar på");
define('_COM_C_THANKS2',"Tack för din kommentar på följande artikel");
define('_COM_C_ADMIN_REV',"En administrator kommer snarast att läsa igenom och godkänna din kommentar");
define('_COM_C_ENTERED',"Du lade in");
define('_COM_C_VISIT',"Kom gärna tillbaka till");
define('_COM_C_THANKS3',"Tack för din kommentarer - den har lagts till på denna sida");
define('_COM_C_THANKS4',"Tack för dina kommentarer - den kommer att läsas igenom av en admininstrator innan publicering!");
define('_COM_C_SUBMIT',"Lägg till");
define('_COM_C_RESET',"Ta bort");
define('_COM_C_NOT_AUTH',"Du kan inte göra kommentarer - logga in först.");
define('_COM_C_PREV_PAGE',"Föregående sida");
define('_COM_C_NEXT_PAGE',"Nästa sida");
define('_COM_C_PAGE',"Sida");
define('_COM_C_COMMENT',"kommentarer");
define('_COM_C_OF',"av");
define('_COM_C_CANCEL',"Avbryt");
define('_COM_C_FORM_INTRO',"Ange din kommentar nedan.");
define('_COM_C_PREVIEW_HEAD',"Vänligen kontrollera din kommentar...");
define('_COM_C_PREVIEW_INTRO',"Är nedanstående kommentar korrekt? <p />Vänligen kontrollera din kommentar innan du skickar den.  OBS: Om du avbryter tas din kommentar bort!");
define('_COM_C_REQ'," <small><i>(krävs)</i></small>");
define('_COM_C_OPT'," <small><i>(frivilligt)</i></small>");
define('_COM_C_HOMEURL',"här");
define('_COM_C_CHECKLINK',"CHECK LINK");
define('_COM_C_QUICKPOST',"Quick Post");
?>