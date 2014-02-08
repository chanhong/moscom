<?php
/**
* @version 
* @package MosCom - COAddOns for Mambo & Jommla - Comments on Articles based on COMBO by Phil Taylor
* @copyright (C) 2008 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/


defined( '_VALID_MOS' ) or die( 'Direct access to this location is not allowed.' );
//admin.comments.html.php
define('_COM_A_KEEPUPTODATE','If you want to keep up to date with this and other great components from Chanh Ong, please subscribe to the mailing list by clicking this button.');
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
define('_COM_A_LINK_DESC','To author&acute;s website');
define('_COM_A_CHECK','Check for updates');
define('_COM_A_VERSION','Your version is ');
define('_COM_A_DONATE','Please consider clicking the donate button below to donate. This will inspire me to improve this script more.');
define('_COM_A_REVIEW','Review Comments (Newest first)');
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
define('_COM_A_ADMIN_EMAIL_DESC','If email is turned on, an email will be sent to this address when a new comment is entered.');
define('_COM_A_ADMIN_ALERTS','Admin Email Alerts');
define('_COM_A_ADMIN_EMAIL_ENABLE','Enable/Disable emails to Admin');
define('_COM_A_VISITOR_EMAIL','Visitor Email Alerts');
define('_COM_A_VISITOR_EMAIL_DESC','Enable/Disable emails to the person who submitted the comment');
define('_COM_A_REVIEW_SUBM','Review submissions');
define('_COM_A_REVIEW_DESC','If you set this to &acute;Yes&acute; then comments will be added to the database and will wait for you to review and publish them before appearing. You will receive an email <strong>only</strong> if there is a value in &quot;Admin email&quot; and you have &quot;Email Alerts&quot; set to &quot;Yes.&quot;');
define('_COM_A_REGISTERED_ONLY','Registered users only');
define('_COM_A_REG_ONLY_DESC','Set &quot;Yes&quot; to allow only registered users to leave comments but anyone can see comments, Set &quot;No&quot; to allow any visitor to comment');
define('_COM_A_NOTIFY_VERSION','Notify if new version available');
define('_COM_A_NOT_VER_DESC','If set to &quot;Yes&quot; you will be shown a dialog on the main screen when an update to this component is available.  (<em>NOTE: The only data sent to the update server is your version number.</em>)');
define('_COM_A_HAVE_DONATED','Have you Donated?');
define('_COM_A_DONATE2','Please consider make a donation through PayPal. This will inspire me to improve this script more! :-)');
define('_COM_A_IMPORTANT_NOTE','IMPORTANT NOTES');
define('_COM_A_TEMPLATE','In order for Mambo to check and see if its showing an article that can be commented on, you must make a small change to your template.<br><a href="index2.php?option=templates&task=edit">Edit your template file</a> and look for the entry.');
define('_COM_A_CHANGE_TO','Change this to the following:');
define('_COM_A_HAVE_FUN','Thats it! ~ (Comment will only show on the article id = something otherwise it will not show)<p>Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_COM_A_FORCE_PREVIEW','Force a preview');
define('_COM_A_FORCE_PREVIEW_TEXT','Set this to &acute;Yes&acute; to force your visitors to preview their comments before final submission.');
define('_COM_A_HIDE','Hide comments');
define('_COM_A_HIDE_DESC','Show (Comments (x) - Add comments) instead of the comments and form by default');
define('_COM_A_DATE','Date');
define('_COM_A_HIDE_URL','Hide URL');
define('_COM_A_HIDE_URL_DESC','Hide URL: Use to hide URL on the comments form by default');
define('_COM_A_EMAIL_REQ','Email required');
define('_COM_A_EMAIL_REQ_DESC','Use to set whether or not email is required on the comments form by default.');
define('_COM_A_EXCL_SEC','Exclude section');
define('_COM_A_EXCL_SEC_DESC','Use to exclude section not to show comments form by default, e.g. 0,1');
define('_COM_A_PER_PAGE','Comments per page');
define('_COM_A_PER_PAGE_DESC','Use to show number of comments per page, e.g. 3');
define('_COM_A_NEW_1ST','New comments first');
define('_COM_A_NEW_1ST_DESC','List new comment entries first');
define('_COM_A_FORM_ABOVE','Comment form above');
define('_COM_A_FORM_ABOVE_DESC','Show comment form above comment entries');
define('_COM_A_USE_DIVCSS','Use DIV CSS');
define('_COM_A_USE_DIVCSS_DESC','Show comment form using DIV w/ CSS from template instead of table');
define('_COM_A_EXCL_CONT','Exclude contents');
define('_COM_A_EXCL_CONT_DESC','Use to exclude contents via article id not to show comments form, e.g. 0,1');
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
define('_COM_C_COM_NUMBER',"Show");
define('_COM_C_NO_COM',"There are no comments yet. Feel free to add one using the form below.");
define('_COM_C_POST',"Posted by");
define('_COM_C_HOMEPAGE',"whose homepage is");
define('_COM_C_DATE_ON',"on");
define('_COM_C_DATE_AT',"at");
define('_COM_C_ADD_COM',"Add comments: ");
define('_COM_C_ADD_COM2'," ");
define('_COM_C_NAME',"Name:");
define('_COM_C_EMAIL',"E-mail:");
define('_COM_C_EMAIL_NOT',"Your email will not be displayed on the site; only to our administrator.");
define('_COM_C_HOMEPAGE_IN',"Home page:");
define('_COM_C_COM',"Comment:");
define('_COM_C_FULLY',"Please fully complete the form!");
define('_COM_C_NEW_COM',"New comment on");
define('_COM_C_HAVE_NEW',"You have a new comment on the following article:");
define('_COM_C_LOGIN',"Please login and publish or delete this comment.");
define('_COM_C_QUICKLINK',"Here is the quick link to login:");
define('_COM_C_THANKS',"Thanks for your comments on");
define('_COM_C_THANKS2',"Thanks for your comment on the following article:");
define('_COM_C_ADMIN_REV',"An administrator will review your comments shortly.");
define('_COM_C_ENTERED',"You entered");
define('_COM_C_VISIT',"Please visit our site again soon at");
define('_COM_C_THANKS3',"Thanks for your comments. They have been added to this page");
define('_COM_C_THANKS4',"Thanks for your comments. They will be reviewed by an administrator prior to being published!");
define('_COM_C_SUBMIT',"Submit");
define('_COM_C_RESET',"Reset");
define('_COM_C_NOT_AUTH',"You are not authorized to leave comments. Please login first.");
define('_COM_C_PREV_PAGE',"Prev Page");
define('_COM_C_NEXT_PAGE',"Next Page");
define('_COM_C_PAGE',"Page");
define('_COM_C_COMMENT',"Comments");
define('_COM_C_OF',"of");
define('_COM_C_CANCEL',"Cancel");
define('_COM_C_FORM_INTRO',"Enter your comment below:");
define('_COM_C_PREVIEW_HEAD',"Please check your entry.");
define('_COM_C_PREVIEW_INTRO',"Is the below correct? <p />Please make any necessary changes before submitting.  Warning: Canceling will erase your comment!");
define('_COM_C_REQ'," <small><i>(required)</i></small>");
define('_COM_C_OPT'," <small><i>(optional)</i></small>");
define('_COM_C_HOMEURL',"here");
define('_COM_C_CHECKLINK',"CHECK LINK");
define('_COM_C_QUICKPOST',"Quick Post");
?>