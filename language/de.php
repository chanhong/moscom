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
define('_COM_A_KEEPUPTODATE','Falls Sie mit dieser und weiteren großartigen Komponenten von Chanh Ong auf dem Laufenden bleiben wollen, sollten Sie die Mailing-Liste abonieren, indem Sie den &quot;Abonieren&quot; Button verwenden');
define('_COM_A_SUBSCRIBE','Abonieren');
define('_COM_A_UNSUBSCRIBE','Abbestellen');
define('_COM_A_BACKUP','Sicherung');
define('_COM_A_BACKUP_DESC','Sicherung der #__content_comments Tabelle');
define('_COM_A_RESTORE','Wiederherstellen');
define('_COM_A_RESTORE_DESC','Wiederherstellung der #__content_comments Tabelle');
define('_COM_A_CONFIG','Konfiguration');
define('_COM_A_CONFIG_DESC','&Auml;ndern der Konfiguartion');
define('_COM_A_INSTRUCTIONS','Anleitung');
define('_COM_A_INSTRUCTIONS_DESC','Konfiguration nach Installation');
define('_COM_A_ABOUT','&Uuml;ber');
define('_COM_A_ABOUT_DESC','&Uuml;ber diese Komponente');
define('_COM_A_LINK','Link');
define('_COM_A_LINK_DESC','Zur Webseite des Autors');
define('_COM_A_CHECK','&Uuml;berpr&uuml;fung auf Updates');
define('_COM_A_VERSION','Ihre Veersion ist ');
define('_COM_A_DONATE','Bitte verwenden Sie den linken donate (= Spenden) button. Es wird mich inspirieren, mein script zu verbessern');
define('_COM_A_REVIEW','Kommentare ansehen (Die neusten zuerst)');
define('_COM_A_DISPLAY','Zeige Nummer');
define('_COM_A_NAME_SUB','Name');
define('_COM_A_EMAIL_SUB','E-mail');
define('_COM_A_HOMEPAGE','Homepage');
define('_COM_A_COMMENT','Kommentar');
define('_COM_A_ARTICLE','Artikle');
define('_COM_A_PUBLISHED','Ver&ouml;ffentlicht');
define('_COM_A_MOS_BY','Eine &ouml;ffentliche MOS4.5 Komponente von');
define('_COM_A_CURRENT_SETTINGS','Derzeitige Einstellungen');
define('_COM_A_EXPLANATION','Erkl&auml;rungn');
define('_COM_A_ADMIN_EMAIL','Admin E-mail');
define('_COM_A_ADMIN_EMAIL_DESC','Wenn e-mail eingeschaltet ist, wird an diese Adresse eine e-mail gesendet, sobald neue Kommentare eingegeben werden');
define('_COM_A_ADMIN_ALERTS','Admin E-mail Benachrichtigungen');
define('_COM_A_ADMIN_EMAIL_ENABLE','Admin E-mail ein/ausschalten');
define('_COM_A_VISITOR_EMAIL','Besucher E-mail Benachrichtigungen');
define('_COM_A_VISITOR_EMAIL_DESC','Ein/ausschalten von Benachrichtigungen an den Autor des Kommentars');
define('_COM_A_REVIEW_SUBM','Eintr&auml;ge genehmigen');
define('_COM_A_REVIEW_DESC','In der Einstellung JA werden die Kommentare in der Datenbank vorgehanlten aber vor der Begutachtung und Genehmigung nicht ver&ouml;ffentlicht. Sie bekommen <strong>nur dann</strong> eine e-mail Benachrichtigung, wenn oben eine e-mail Adresse im Feld &quot;Admin e-mail&quot; eingegeben ist <strong>und</strong> &quot;Admin e-mail Benachrichtigungen&quot; auf &quot;ja&quot; steht.');
define('_COM_A_REGISTERED_ONLY','Nur registrierte Benutzer');
define('_COM_A_REG_ONLY_DESC','Bei &quot;Ja&quot; d&uuml;rfen nur registrierte Benutzer Kommentare hinterlassen, die aber alle sehen k&ouml;nnen. Bei &quot;Nein&quot; d&uuml;rfen alle Benutzer Kommentare hinterlassen.');
define('_COM_A_NOTIFY_VERSION','Benachrichtigungen &uuml;ber neue Versionen');
define('_COM_A_NOT_VER_DESC','Bei &quot;Ja&quot; werden sie auf der Hauptseite &uuml;ber neue Versionen dieser Komponente informiert (<em>Es wird lediglich ihre Versionsnummer zum Update Server gesendet)</em>');
define('_COM_A_HAVE_DONATED','Haben Sie gespendet?');
define('_COM_A_DONATE2','Bitte &uuml;berlegen sie das Projekt mit einer Paypal Spende zu unterst&uuml;tzen. Es wird mich inspririeren dieses script weiter zu verbessern! :-)');
define('_COM_A_IMPORTANT_NOTE','WICHTIGER HINWEIS');
define('_COM_A_TEMPLATE','Damit mambo feststellen kann, ob ein kommentierbarer Artikel angezeigt wird, m&uuml;ssen sie Ihre Vorlage (template) etwas ver&auml;ndern.<br><a href="index2.php?option=templates&task=edit">Bearbeiten sie ihre Vorlagen Datei</a> und suchen sie nach dem Eintrag');
define('_COM_A_CHANGE_TO','&Auml;ndern Sie dies wie folgt:');
define('_COM_A_HAVE_FUN','Das wars! ~ (E-mails mit der Frage &quot;<em>Ich habe ihre componente installiert aber das Formular zeigt keine ... </em>&quot; werde ich nicht beantworten :-)   -Anmerk. des &Uuml;bersetzers: Der Autor spricht kein Deutsch- </p> <p>          Viel Spa&szlig;!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_COM_A_FORCE_PREVIEW','Vorschau erzwingen');
define('_COM_A_FORCE_PREVIEW_TEXT','Hiermit erzwingen Sie, da&szlig; sich Ihre Benutzer die Kommentare vor dem endg&uuml;ltigen Versand nochmals ansehen');
define('_COM_A_HIDE','Kommentare verstecken');
define('_COM_A_HIDE_DESC','Zeige standardm&auml;&szlig;ig (Kommentare (x) - Kommentare hinzuf&uuml;gen) anstat der Kommentare selbstt');
define('_COM_A_DATE','Datum');
define('_COM_A_HIDE_URL','Verstecke URL');
define('_COM_A_HIDE_URL_DESC','Hiermit verstecken Sie das standardm&auml;&szlig;ig eingeblendete URL Eingabefenster');
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
define('_COM_A_NO',"Nein");
define('_COM_A_YES',"Ja");
define('_COM_C_COM_NUMBER',"Anzahl der Kommentare");
define('_COM_C_NO_COM',"Es gibt derzeit keine Kommantare - Bitte nutzen sie das unten stehende Formular f&uuml;r ihre Kommentare....");
define('_COM_C_POST',"Gesendet von");
define('_COM_C_HOMEPAGE',"Autor Homepage");
define('_COM_C_DATE_ON',"am");
define('_COM_C_DATE_AT',"um");
define('_COM_C_ADD_COM',"F&uuml;gen sie diesem Artikel Ihren Kommentar hinzu...");
define('_COM_C_ADD_COM2'," ...");
define('_COM_C_NAME',"Name");
define('_COM_C_EMAIL',"E-Mail");
define('_COM_C_EMAIL_NOT',"Ihre e-mail Adresse wird ausschlie&szlig;lich unseren Administratoren bekannt gemacht");
define('_COM_C_HOMEPAGE_IN',"Homepage");
define('_COM_C_COM',"Kommentar");
define('_COM_C_FULLY',"Bitte f&uuml;llen Sie das Formular vollst&auml;ndig aus!");
define('_COM_C_NEW_COM',"Neuer Kommentar zu");
define('_COM_C_HAVE_NEW',"Sie haben einen neuen Kommentar zu folgendem Artikel:");
define('_COM_C_LOGIN',"Bitte melden sie sich an und ver&ouml;ffentlichen oder l&ouml;schen sie den Kommentar");
define('_COM_C_QUICKLINK',"Hier ein Direktlink zum anmelden");
define('_COM_C_THANKS',"Danke f&uuml;r ihren Kommentar von");
define('_COM_C_THANKS2',"Danke f&uuml;r Ihren Kommentar des folgenden Artikels");
define('_COM_C_ADMIN_REV',"Ein Administrator wird Ihren Kommantar in K&uuml;rze &uuml;berpr&uuml;fen");
define('_COM_C_ENTERED',"Sie gaben ein");
define('_COM_C_VISIT',"Bitte besuchen Sie unsere Seite bald wieder unter");
define('_COM_C_THANKS3',"Danke f&uuml;r Ihre Kommentare - Sie wurden dieser Seite hinzugef&uuml;gt");
define('_COM_C_THANKS4',"Danke f&uumlr Ihre Kommentare - Vor der Ver&ouml;ffentlichung m&uuml;ssen sie von einem Administrator freigegeben werden!");
define('_COM_C_SUBMIT',"Absenden");
define('_COM_C_RESET',"Zur&uuml;cksetzen");
define('_COM_C_NOT_AUTH',"Sie haben keine Berechtigung Kommentare zu hinterlassen - Bitte melden Sie sich an.");
define('_COM_C_PREV_PAGE',"Prev Page");
define('_COM_C_NEXT_PAGE',"Next Page");
define('_COM_C_PAGE',"Page");
define('_COM_C_COMMENT',"User Comments");
define('_COM_C_OF',"of");
define('_COM_C_CANCEL',"Cancel");
define('_COM_C_FORM_INTRO',"Enter your comment below.");
define('_COM_C_PREVIEW_HEAD',"Please check your entry...");
define('_COM_C_PREVIEW_INTRO',"Is the below correct? <p />Please make any necessary changes before submitting.  Warning: Cancelling will erase your comment!");
define('_COM_C_REQ'," <small><i>(erforderlich)</i></small>");
define('_COM_C_OPT'," <small><i>(optional)</i></small>");
define('_COM_C_HOMEURL',"here");
define('_COM_C_CHECKLINK',"CHECK LINK");
define('_COM_C_QUICKPOST',"Quick Post");
?>