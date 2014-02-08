<?php
/**
* @version 
* @package MosCom - COAddOns for Mambo & Joomla - Reacties on Articles based on COMBO by Phil Taylor
* @copyright (C) 2008 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/


defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
//admin.comments.html.php
define('_COM_A_KEEPUPTODATE','Als je op de hoogte wilt blijven van deze en andere goeie componenten van Chanh Ong schrijf je dan in voor de mailing list door op deze knoppen te klikken');
define('_COM_A_SUBSCRIBE','Abonneren');
define('_COM_A_UNSUBSCRIBE','Abonnement opzeggen');
define('_COM_A_BACKUP','Backup');
define('_COM_A_BACKUP_DESC','Backup de #__content_comments tabel');
define('_COM_A_RESTORE','Terugzetten');
define('_COM_A_RESTORE_DESC','De #__content_comments tabel terugzetten');
define('_COM_A_CONFIG','Configuratie');
define('_COM_A_CONFIG_DESC','Verander de configuratie');
define('_COM_A_INSTRUCTIONS','Instructies');
define('_COM_A_INSTRUCTIONS_DESC','Post Installatie Configuratie');
define('_COM_A_ABOUT','Over');
define('_COM_A_ABOUT_DESC','Over dit component');
define('_COM_A_LINK','Link');
define('_COM_A_LINK_DESC','Naar de auteurs website');
define('_COM_A_CHECK','Controleer voor updates');
define('_COM_A_VERSION','Gebruikte versie is ');
define('_COM_A_DONATE','Aub, neem in overweging om de onderstaande knop aan te klikken en mij £10 Britse ponden te sturen. Het zal mij zeker motiveren dit script te verbeteren..');
define('_COM_A_REVIEW','Beoordeel Reagerenden (Nieuwste eerst)');
define('_COM_A_DISPLAY','Toon #');
define('_COM_A_NAME_SUB','Naam');
define('_COM_A_EMAIL_SUB','E-mail');
define('_COM_A_HOMEPAGE','Homepage');
define('_COM_A_COMMENT','Reactie');
define('_COM_A_ARTICLE','Artikel');
define('_COM_A_PUBLISHED','Gepubliceerd');
define('_COM_A_MOS_BY','Een MOS4.5 Custom Component van');
define('_COM_A_CURRENT_SETTINGS','Huidige Stand');
define('_COM_A_EXPLANATION','Verklaring');
define('_COM_A_ADMIN_EMAIL','Admin E-mail');
define('_COM_A_ADMIN_EMAIL_DESC','Als e-mail aanstaat zal er een mailtje gestuurd worden wanneer er een nieuw reactie is toegevoegd');
define('_COM_A_ADMIN_ALERTS','Admin E-mail Notificatie');
define('_COM_A_ADMIN_EMAIL_ENABLE','Zet e-mails naar de Admin aan/uit');
define('_COM_A_VISITOR_EMAIL','Bezoeker Email Notificatie');
define('_COM_A_VISITOR_EMAIL_DESC','Zet e-mails naar de bezoeker die reactie heeft achtergelaten aan/uit');
define('_COM_A_REVIEW_SUBM','Beoordeel Inzendingen');
define('_COM_A_REVIEW_DESC','Als je dit op &quot;Ja&quot; zet, worden de commentaren aan de database toegevoegd en zullen op je wachten om beoordeeld en gepubliceerd te worden alvorens ze te zien zullen zijn. Je krijgt <strong>alleen</strong> een e-mail als er een waarde staat in &quot;Admin e-mail&quot; en je &quot;Admin Email Notificatie&quot; op &quot;Ja&quot; hebt gezet');
define('_COM_A_REGISTERED_ONLY','Alleen geregistreerde gebruikers');
define('_COM_A_REG_ONLY_DESC','Zet op &quot;Ja&quot; om alleen ingelogde gebruikers reactie te tonen en te laten maken. Zet op &quot;Nee&quot; om iedere bezoeker de commentaren te laten zien');
define('_COM_A_NOTIFY_VERSION','Bericht bij een nieuwe versie');
define('_COM_A_NOT_VER_DESC','Als dit op &quot;Ja&quot; staat, zie je op het hoofdscherm wanneer er een update van dit component beschikbaar is. (<em>MERK OP: de enige data die naar update server gezonden wordt is je versie nummer</em>)');
define('_COM_A_HAVE_DONATED','Heb je al gedoneerd?');
define('_COM_A_DONATE2','Aub, neem in overweging om &pound;10,00 via paypal te doneren. Dit zal mij inspireren dit script verder te verbeteren! :-)');
define('_COM_A_IMPORTANT_NOTE','BELANGRIJK');
define('_COM_A_TEMPLATE','Om Joomla/Mambo in staat te stellen om te controleren of het een artikel laat zien waarop reactie geleverd kan worden moet je een kleine verandering in je template aanbrengen.<br><a href="index2.php?option=templates&task=edit">Bewerk jouw template bestand</a> en zoek de volgende regel op');
define('_COM_A_CHANGE_TO','En verander het in het volgende');
define('_COM_A_HAVE_FUN','Dat is alles! ~ (Ik beantwoord geen e-mail meer in trant van &quot;<em>Ik heb jouw component geinstalleerd maar ik zie het formulier niet</em>&quot; :-)</p> <p>          Veel Plezier!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_COM_A_FORCE_PREVIEW','Forceer nakijken');
define('_COM_A_FORCE_PREVIEW_TEXT','Zet dit op &quot;Ja&quot; om te forceren dat je bezoekers hun reactie nakijken voordat het definitief ingezonden wordt');
define('_COM_A_HIDE','Verberg reactie');
define('_COM_A_HIDE_DESC','Toon &quot;Aantal reacties (x) - Voeg je reactie op dit artikel toe&quot; in plaats van standaard alle commentaren en het formulier');
define('_COM_A_DATE','Datum');
define('_COM_A_HIDE_URL','Verberg URL');
define('_COM_A_HIDE_URL_DESC','Verberg URL - Gebruik om standaard de URL op het reactiescherm te verbergen');
define('_COM_A_EMAIL_REQ','E-mail Vereist');
define('_COM_A_EMAIL_REQ_DESC','Gebruik dit om al of niet e-mail vereist te laten zijn op het reactiescherm');
define('_COM_A_EXCL_SEC','Exclude Sectie');
define('_COM_A_EXCL_SEC_DESC','Gebruik om standaard een sectie te laten excluden voor het tonen van hetreactiescherm, bv.: 0,1');
define('_COM_A_PER_PAGE','Reacties per pagina');
define('_COM_A_PER_PAGE_DESC','Gebruik voor het aantal te tonen reacties, bv.: 3');
define('_COM_A_NEW_1ST','Nieuwe reacties eerst');
define('_COM_A_NEW_1ST_DESC','Toon nieuwe reacties eerst');
define('_COM_A_FORM_ABOVE','Reactiescherm boven');
define('_COM_A_FORM_ABOVE_DESC','Toon reactiescherm boven de andere reacties');
define('_COM_A_USE_DIVCSS','Gebruik DIV CSS');
define('_COM_A_USE_DIVCSS_DESC','Toon reactiescherm op basis van DIV CSS van uw template');
define('_COM_A_EXCL_CONT','Exclude artikel');
define('_COM_A_EXCL_CONT_DESC','Gebruik om bij bepaalde artikelen geen ereactiescherm te tonen, bv.: 0,1');
define('_COM_A_IP','IP');
define('_COM_A_USE_USERNAME','Use username');
define('_COM_A_USE_USERNAME_DESC','Show username instead of name');
define('_COM_A_CLOSE_CONT','Close Contents');
define('_COM_A_CLOSE_CONT_DESC','Use to close contents via article id not to show comments form, eg: 0,1');
define('_COM_A_USE_SECTOKEN','Use security token');
define('_COM_A_USE_SECTOKEN_DESC','Check for security token when submit comment (invisible Captcha)');

//comments.php
define('_COM_A_NO',"Nee");
define('_COM_A_YES',"Ja");
define('_COM_C_COM_NUMBER',"Aantal reacties");
define('_COM_C_NO_COM',"Er is nog geen reactie op dit stuk <br /> Voeg er eentje toe met het formulier hieronder...");
define('_COM_C_POST',"Gemaakt door");
define('_COM_C_HOMEPAGE',"Homepage");
define('_COM_C_DATE_ON',"op");
define('_COM_C_DATE_AT',"om");
define('_COM_C_ADD_COM',"Voeg je reactie op dit artikel toe...");
define('_COM_C_ADD_COM2'," ...");
define('_COM_C_NAME',"Naam");
define('_COM_C_EMAIL',"E-mail");
define('_COM_C_EMAIL_NOT',"Je e-mail wordt niet op de site getoond - alleen aan onze beheerder");
define('_COM_C_HOMEPAGE_IN',"Homepage");
define('_COM_C_COM',"Reactie");
define('_COM_C_FULLY',"Vul het formulier volledig in!");
define('_COM_C_NEW_COM',"Nieuwe reactie op");
define('_COM_C_HAVE_NEW',"Je hebt een nieuwe reactie op artikel:");
define('_COM_C_LOGIN',"Login en publiceer of verwijder deze reactie");
define('_COM_C_QUICKLINK',"Hier is een quick link om in te loggen");
define('_COM_C_THANKS',"Bedankt voor je reactie op");
define('_COM_C_THANKS2',"Bedankt voor je reactie op het volgende artikel");
define('_COM_C_ADMIN_REV',"Een beheerder zal spoedig je reactie beoordelen");
define('_COM_C_ENTERED',"Je voerde in");
define('_COM_C_VISIT',"Bezoek onze site gauw nog eens op");
define('_COM_C_THANKS3',"Bedankt voor je reactie - Hij is toegevoegd aan deze pagina");
define('_COM_C_THANKS4',"Bedankt voor je reactie - Hij zal worden beoordeeld door een beheerder alvorens het wordt gepubliceerd!");
define('_COM_C_SUBMIT',"Versturen");
define('_COM_C_RESET',"Reset");
define('_COM_C_NOT_AUTH',"Je bent niet geauthoriseerd om reacties achter te laten - Eerst aanmelden a.u.b.");
define('_COM_C_PREV_PAGE',"Vorige Page");
define('_COM_C_NEXT_PAGE',"Volgende Page");
define('_COM_C_COMMENT',"Reacties"); 
define('_COM_C_PAGE',"Pagina");
define('_COM_C_OF',"van");
define('_COM_C_CANCEL',"Annuleer");
define('_COM_C_FORM_INTRO',"Hier uw reactie inbrengen.");
define('_COM_C_PREVIEW_HEAD',"Controleer uw reactie a.u.b...");
define('_COM_C_PREVIEW_INTRO',"Is alles correct? <p />A.u.b. alle wijzigingen aanbrengen alvorens te versturen. Attentie: Annuleren wist uw reactie!");
define('_COM_C_REQ'," <small><i>(verplicht)</i></small>");
define('_COM_C_OPT'," <small><i>(optioneel)</i></small>");
define('_COM_C_HOMEURL',"hier");
define('_COM_C_CHECKLINK',"CHECK LINK");
define('_COM_C_QUICKPOST',"Quick Post");
?>