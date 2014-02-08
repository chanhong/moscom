<?php
/**
* @version 
* @package MosCom - COAddOns for Mambo & Jommla - Comments on Articles based on COMBO by Phil Taylor
* @copyright (C) 2008 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/


defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
//admin.comments.html.php
define('_COM_A_KEEPUPTODATE','If you want to keep up to date with this and other great components from Chanh Ong please subscribe to the mailing list by clicking these buttons');
define('_COM_A_SUBSCRIBE','Subscribe');
define('_COM_A_UNSUBSCRIBE','Unsubscribe');
define('_COM_A_BACKUP','Backup');
define('_COM_A_BACKUP_DESC','Backup the #__content_comments table');
define('_COM_A_RESTORE','Restore');
define('_COM_A_RESTORE_DESC','Restore the #__content_comments table');
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
define('_COM_A_NAME_SUB','Name');
define('_COM_A_EMAIL_SUB','Email');
define('_COM_A_HOMEPAGE','Homepage');
define('_COM_A_COMMENT','Comment');
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
define('_COM_A_HAVE_FUN','Thats it! ~ (I will not be answering emails along the line of &quot;<em>I&quot;ve installed your component but the form doesn&quot;t show.....</em>&quot; :-)</p> <p>          Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
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
define('_COM_A_NO',"No");
define('_COM_A_YES',"Yes");
define('_COM_C_COM_NUMBER',"Nombre de commentaires");
define('_COM_C_NO_COM',"Il n'existe pas encore de commentaire. N'hésitez pas à en ajouter un (en utilisant le formulaire ci-dessous)....");
define('_COM_C_POST',"Envoyé par");
define('_COM_C_HOMEPAGE',"dont la page web est la suivante");
define('_COM_C_DATE_ON',"le");
define('_COM_C_DATE_AT',"à");
define('_COM_C_ADD_COM',"Ajoutez vos commentaires à cet article...");
define('_COM_C_ADD_COM2'," ...");
define('_COM_C_NAME',"Nom");
define('_COM_C_EMAIL',"Adresse e-mail");
define('_COM_C_EMAIL_NOT',"Votre adresse e-mail n'apparaîtra pas sur le site et ne sera visible que pour l'administrateur.");
define('_COM_C_HOMEPAGE_IN',"Page d'accueil");
define('_COM_C_COM',"Commentaire");
define('_COM_C_FULLY',"Veuillez compléter entièrement le formulaire!");
define('_COM_C_NEW_COM',"Nouveau commentaire sur");
define('_COM_C_HAVE_NEW',"Un nouveau commentaire existe sur l'article suivant:");
define('_COM_C_LOGIN',"Veuillez vous connecter et publier ou éliminer ce commentaire");
define('_COM_C_QUICKLINK',"Voici un lien rapide vers la zone de connection");
define('_COM_C_THANKS',"Merci de votre commentaire au sujet de");
define('_COM_C_THANKS2',"Merci de votre commentaire au sujet de l'article suivant");
define('_COM_C_ADMIN_REV',"Un administrateur va prendre en compte votre commentaire rapidement");
define('_COM_C_ENTERED',"Vous venez d'entrer dans");
define('_COM_C_VISIT',"Visitez de nouveau notre site très bientôt à");
define('_COM_C_THANKS3',"Merci de vos commentaires. Ils ont été ajoutés à cette page.");
define('_COM_C_THANKS4',"Merci de vos commentaires. Ils seront revus par un chercheur avant d'être publiés.");
define('_COM_C_SUBMIT',"Soumettre");
define('_COM_C_RESET',"Remise à jour");
define('_COM_C_NOT_AUTH',"Vous n'êtes apparemment pas autorisés à transmettre un commentaire. Veuillez vous connecter.");
define('_COM_C_PREV_PAGE',"Prev Page");
define('_COM_C_NEXT_PAGE',"Next Page");
define('_COM_C_PAGE',"Page");
define('_COM_C_COMMENT',"commentaires");
define('_COM_C_OF',"de");
define('_COM_C_CANCEL',"Annulation");
define('_COM_C_FORM_INTRO',"Enter your comment below.");
define('_COM_C_PREVIEW_HEAD',"Please check your entry...");
define('_COM_C_PREVIEW_INTRO',"Is the below correct? <p />Please make any necessary changes before submitting.  Warning: Cancelling will erase your comment!");
define('_COM_C_REQ'," <small><i>(information nécessaire)</i></small>");
define('_COM_C_OPT'," <small><i>(optional)</i></small>");
define('_COM_C_HOMEURL',"here");
define('_COM_C_CHECKLINK',"CHECK LINK");
define('_COM_C_QUICKPOST',"Quick Post");
?>