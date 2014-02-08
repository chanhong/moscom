<?php
/**
* @version 
* @package MosCom - COAddOns for Mambo & Jommla - Comments on Articles based on COMBO by Phil Taylor
* @copyright (C) 2007 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/


defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
//admin.comments.html.php
define('_COM_A_KEEPUPTODATE','If you want to keep up to date with this and other great components from Chanh Ong please subscribe to the mailing list by clicking these buttons');
define('_COM_A_SUBSCRIBE','Subscribe');
define('_COM_A_UNSUBSCRIBE','Unsubscribe');
define('_COM_A_BACKUP','Backup');
define('_COM_A_BACKUP_DESC','Backup the mos_content_comments table');
define('_COM_A_RESTORE','Restore');
define('_COM_A_RESTORE_DESC','Restore the mos_content_comments table');
define('_COM_A_CONFIG','Configuration');
define('_COM_A_CONFIG_DESC','Change the configuration');
define('_COM_A_INSTRUCTIONS','Instructions');
define('_COM_A_INSTRUCTIONS_DESC','Post Install Configuration');
define('_COM_A_ABOUT','About');
define('_COM_A_ABOUT_DESC','About this component');
define('_COM_A_LINK','Link');
define('_COM_A_LINK_DESC','To authors website');
define('_COM_A_CHECK','Check for updates');
define('_COM_A_VERSION','Your version is ');
define('_COM_A_DONATE','Please consider hitting the donate button below to donate. This will inspire me to improve this script more');
define('_COM_A_REVIEW','Review Comments (Newest First)');
define('_COM_A_DISPLAY','Display #');
define('_COM_A_NAME_SUB','Imiê');
define('_COM_A_EMAIL_SUB','Email');
define('_COM_A_HOMEPAGE','Strona domowa');
define('_COM_A_COMMENT','Komentarz');
define('_COM_A_ARTICLE','Article');
define('_COM_A_PUBLISHED','Published');
define('_COM_A_MOS_BY','A MOS4.5 Custom Component by');
define('_COM_A_CURRENT_SETTINGS','Current Setting');
define('_COM_A_EXPLANATION','Explanation');
define('_COM_A_ADMIN_EMAIL','Admin Email');
define('_COM_A_ADMIN_EMAIL_DESC','If email is switched on, an email will be sent to this address when a new comment is entered');
define('_COM_A_ADMIN_ALERTS','Admin Email Alerts');
define('_COM_A_ADMIN_EMAIL_ENABLE','Enable/Disable emails to Admin');
define('_COM_A_VISITOR_EMAIL','Visitor Email Alerts');
define('_COM_A_VISITOR_EMAIL_DESC','Enable/Disable emails to the person who submitted the comment');
define('_COM_A_REVIEW_SUBM','Review Submissions');
define('_COM_A_REVIEW_DESC','If you set this to yes then comments will be added to the database and will wait for you to review and publish them before showing. You will recieve an email <strong>only</strong> if there is a value in &quot;Admin email&quot; and you have &quot;Email Alerts&quot; set to &quot;yes&quot;');
define('_COM_A_REGISTERED_ONLY','Registered Users Only');
define('_COM_A_REG_ONLY_DESC','Set &quot;Yes&quot; to allow only registered users to leave comments but anyone can see comments, Set &quot;No&quot; to allow any visitor to comment');
define('_COM_A_NOTIFY_VERSION','Notify if new version available');
define('_COM_A_NOT_VER_DESC','If set to &quot;Yes&quot; you will be shown a dialog on the main screen when an update is available to this component (<em>NOTE: The only data sent to the update server is your version number</em>)');
define('_COM_A_HAVE_DONATED','Have you Donated?');
define('_COM_A_DONATE2','Please consider make a donation throught paypal. This will inspire me to improve this script more! :-)');
define('_COM_A_IMPORTANT_NOTE','IMPORTANT NOTES');
define('_COM_A_TEMPLATE','In order for mambo to check and see if its showing an article that can be commented on, you must make a small change to your template.<br><a href="index2.php?option=templates&task=edit">Edit your template file</a> and look for the entry');
define('_COM_A_CHANGE_TO','Change this to the following');
define('_COM_A_HAVE_FUN','Thats it! ~ (Comment will only show on the article id = something otherwise it will not show)<p>Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_COM_A_FORCE_PREVIEW','Force a preview');
define('_COM_A_FORCE_PREVIEW_TEXT','Set this to yes to force your visitors to preview their comments before final submission');
define('_COM_A_HIDE','Hide  Comments');
define('_COM_A_HIDE_DESC','Show (Comments (x) - Add Comments) instead of the comments and form by default');
define('_COM_A_DATE','Date');
define('_COM_A_HIDE_URL','Hide URL');
define('_COM_A_HIDE_URL_DESC','Hide URL - Use to hide URL on the comments form by default');
define('_COM_A_EMAIL_REQ','Email Required');
define('_COM_A_EMAIL_REQ_DESC','Use to set either email is required or not on the comments form by default');
define('_COM_A_EXCL_SEC','Exclude Section');
define('_COM_A_EXCL_SEC_DESC','Use to exclude section not to show comments form by default, eg: 0,1');
define('_COM_A_PER_PAGE','Comments per page');
define('_COM_A_PER_PAGE_DESC','Use to show number of comments per page, eg: 3');
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
define('_COM_A_NO',"Nie");
define('_COM_A_YES',"Tak");
define('_COM_C_COM_NUMBER',"Liczba komentarzy");
define('_COM_C_NO_COM',"Jeszcze nie ma komentarzy - dodaj swój u¿ywaj±c poni¿szego formularza...");
define('_COM_C_POST',"Napisa³");
define('_COM_C_HOMEPAGE',"Strona domowa");
define('_COM_C_DATE_ON',"dzieñ");
define('_COM_C_DATE_AT',"o");
define('_COM_C_ADD_COM',"Dodaj swój komentarz do tego artyku³u...");
define('_COM_C_ADD_COM2'," ...");
define('_COM_C_NAME',"Imiê");
define('_COM_C_EMAIL',"E-Mail");
define('_COM_C_EMAIL_NOT',"Twój e-mail nie bêdzie wy¶wietlany na stronie - to informacja dla administratora");
define('_COM_C_HOMEPAGE_IN',"Strona domowa");
define('_COM_C_COM',"Komentarz");
define('_COM_C_FULLY',"Proszê wype³niæ ca³y formularz!");
define('_COM_C_NEW_COM',"Nowy komenatrz");
define('_COM_C_HAVE_NEW',"Masz nowy komentarz w nastêpuj±cym artykule:");
define('_COM_C_LOGIN',"Proszê siê zalogowaæ i opublikowaæ b±d¼ usun±æ ten artyku³");
define('_COM_C_QUICKLINK',"To jest szybki link do logowania");
define('_COM_C_THANKS',"Dziêkujemy za twój komentarz");
define('_COM_C_THANKS2',"Dziêkujemy za twój komentarz w tym artykule");
define('_COM_C_ADMIN_REV',"Niebawem administrator przejrzy twój komentarz");
define('_COM_C_ENTERED',"Wszed³e¶");
define('_COM_C_VISIT',"Proszê odwied¼ wkrótce stronê");
define('_COM_C_THANKS3',"Twój komentarz zosta³ dodany");
define('_COM_C_THANKS4',"Twój komentarz zostanie sprawdzony przez administratora przed opublikowaniem");
define('_COM_C_SUBMIT',"Dodaj");
define('_COM_C_RESET',"Czy¶æ");
define('_COM_C_NOT_AUTH',"Musisz siê zalogowaæ.");
define('_COM_C_PREV_PAGE',"Poprzednia strona");
define('_COM_C_NEXT_PAGE',"Nastêpna strona");
define('_COM_C_PAGE',"Strona");
define('_COM_C_COMMENT',"Komentarze");
define('_COM_C_OF',"z");
define('_COM_C_CANCEL',"Anuluj");
define('_COM_C_FORM_INTRO',"Wpisz swój komentarz poni¿ej.");
define('_COM_C_PREVIEW_HEAD',"<b>Podgl±d twojego komentarza</b>");
define('_COM_C_PREVIEW_INTRO',"Je¶li wszysytko jest ok to dodaj wpis<p />Uwaga: anulowanie spowoduje wykasowanie twojego komentarza.");
define('_COM_C_REQ'," <small><i>(wymagane)</i></small>");
define('_COM_C_OPT'," <small><i>(opcjonalne)</i></small>");
define('_COM_C_HOMEURL',"tutaj");
define('_COM_C_CHECKLINK',"CHECK LINK");
define('_COM_C_QUICKPOST',"Quick Post");
?>