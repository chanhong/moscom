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
define('_COM_A_KEEPUPTODATE','Se vuoi conoscere tutte le novità riguardanti questo e gli altri componenti sviluppati dall\' autore di MosCom, Chanh Ong, iscriviti alla mailing list usando questo pulsante');
define('_COM_A_SUBSCRIBE','Iscriviti alla mailing list');
define('_COM_A_UNSUBSCRIBE','Cancellati dalla mailing list');
define('_COM_A_BACKUP','Backup');
define('_COM_A_BACKUP_DESC','Fa il backup della tabella mos_content_comments');
define('_COM_A_RESTORE','Ripristina');
define('_COM_A_RESTORE_DESC','Ripristina la tabella mos_content_comments');
define('_COM_A_CONFIG','Configurazione');
define('_COM_A_CONFIG_DESC','Va al menù di configurazione');
define('_COM_A_INSTRUCTIONS','Istruzioni');
define('_COM_A_INSTRUCTIONS_DESC','Configurazione Post Installazione');
define('_COM_A_ABOUT','Informazioni');
define('_COM_A_ABOUT_DESC','Informazioni aggiuntive su questo componente');
define('_COM_A_LINK','Link');
define('_COM_A_LINK_DESC','Collegamento al sito dello sviluppatore di MosCom');
define('_COM_A_CHECK','Controlla se sono disponibili nuove versioni');
define('_COM_A_VERSION','La tua versione è ');
define('_COM_A_DONATE','Contribuite allo sviluppo di questo componente facendo una donazione tramite il pulsante qui sotto. Questo mi darà la possibilità di migliorare ulteriormente lo script');
define('_COM_A_REVIEW','Controlla commenti (A partire dai più recenti )');
define('_COM_A_DISPLAY','Visualizzati per pagina #');
define('_COM_A_NAME_SUB','Nome');
define('_COM_A_EMAIL_SUB','Email');
define('_COM_A_HOMEPAGE','Homepage');
define('_COM_A_COMMENT','Commento');
define('_COM_A_ARTICLE','Articolo');
define('_COM_A_PUBLISHED','Pubblicato');
define('_COM_A_MOS_BY','Un componente MOS4.5 custom sviluppato da ');
define('_COM_A_CURRENT_SETTINGS','Impostazioni correnti');
define('_COM_A_EXPLANATION','Spiegazione');
define('_COM_A_ADMIN_EMAIL','Indirizzo Email dell\' amministratore');
define('_COM_A_ADMIN_EMAIL_DESC','Se gli avvisi all\'admin sono attivati, una Email viene mandata a questo indirizzo quando un nuovo commento viene inserito');
define('_COM_A_ADMIN_ALERTS','Email di avviso all\' amministratore');
define('_COM_A_ADMIN_EMAIL_ENABLE','Abilita/Disabilita l\' invio di Emails all\' amministratore');
define('_COM_A_VISITOR_EMAIL','Email di avviso ai visitatori');
define('_COM_A_VISITOR_EMAIL_DESC','Abilita/Disilita la spedizione di una Email di conferma alla persona che ha inserito il commento');
define('_COM_A_REVIEW_SUBM','Esamina commenti inseriti');
define('_COM_A_REVIEW_DESC','Se impostato a Si i commenti saranno inseriti nel database ma rimarranno invisibili in attesa di essere controllati e pubblicati da un amministratore. Una Email di avvertimento verrà spedita all\' indirizzo <strong>solo</strong> se è stato fornito un valore per il campo &quot;Indirizzo Email dell\' admin&quot; e &quot;Email di avviso&quot; è impostato a  &quot;Si&quot;');
define('_COM_A_REGISTERED_ONLY','Solo utenti registrati');
define('_COM_A_REG_ONLY_DESC','Impostato a &quot;Si&quot;permette ai soli utenti registrati di lasciare commenti che rimangono comunque visibili da chiunque, Impostato a &quot;No&quot; permette anche ad utenti non registrati di aggiungere commenti');
define('_COM_A_NOTIFY_VERSION','Informami se ci sono nuove versioni disponibili');
define('_COM_A_NOT_VER_DESC','Se impostato a &quot;Si&quot; verrà mostrata una finestra di dialogo nello schermo principale se è disponibile un update per questo componente (<em>NOTE: L\'unico dato mandato al server di update è il numero di versione</em>)');
define('_COM_A_HAVE_DONATED','Hai fatto una donazione?');
define('_COM_A_DONATE2','Per favore, considera la possibilità di fare una donazione via paypal. Questo mi ispirerà a migliorare ulteriormente lo script! :-)');
define('_COM_A_IMPORTANT_NOTE','NOTE IMPORTANTI ');
define('_COM_A_TEMPLATE','Perchè Mambo/Joomla possa controllare se un articolo può essere commentato devi fare una piccola modifica al tuo template.<br><a href="index2.php?option=templates&task=edit">Apri il file di template</a> e cerca la riga');
define('_COM_A_CHANGE_TO','E modificala perchè diventi:');
define('_COM_A_HAVE_FUN','e abbiamo finito! ~ (Il Commento apparirà solo se  id articolo = qualcosa, altrimenti non verrà mostrato)<p>Divertitevi!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_COM_A_FORCE_PREVIEW','Forza anteprima');
define('_COM_A_FORCE_PREVIEW_TEXT','Se impostato a si forza i tuoi visitatori ad effettuare una anteprima dei loro commenti prima della loro sottomissione finale');
define('_COM_A_HIDE','Nascondi  Commenti');
define('_COM_A_HIDE_DESC','Mostra (Commenti (x) - Aggiungi Commenti) invece di  commenti e form come default');
define('_COM_A_DATE','Data');
define('_COM_A_HIDE_URL','Nascondi URL');
define('_COM_A_HIDE_URL_DESC','Nascondi URL - Usato per nescondere la textbox URL presente nel form  di aggiunta commenti per default');
define('_COM_A_EMAIL_REQ','Indirizzo Email obbligatorio');
define('_COM_A_EMAIL_REQ_DESC','Usato per indicare se l\' indirizzo Email sia obbligatorio o meno nel form di inserimento dei commenti');
define('_COM_A_EXCL_SEC','Escludi Sezione');
define('_COM_A_EXCL_SEC_DESC','Esclude la visualizzazione del form di aggiunta commenti per una particolare sezione. Es. 0,1');
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
define('_COM_A_YES',"Si");
define('_COM_C_COM_NUMBER',"Numero di commenti");
define('_COM_C_NO_COM',"Non ci sono ancora commenti a questo articolo - Se vuoi aggiungerne uno puoi completare il form qui sotto...");
define('_COM_C_POST',"Inserito da");
define('_COM_C_HOMEPAGE',"la cui homepage è");
define('_COM_C_DATE_ON',"il");
define('_COM_C_DATE_AT',"alle");
define('_COM_C_ADD_COM',"Aggiungi i tuoi commenti a questo articolo...");
define('_COM_C_ADD_COM2'," ...");
define('_COM_C_NAME',"Nome");
define('_COM_C_EMAIL',"Indirizzo E-Mail");
define('_COM_C_EMAIL_NOT',"In tuo indirizzo E-mail non verrà visualizzato sul sito ma solo all' amministratore");
define('_COM_C_HOMEPAGE_IN',"Homepage");
define('_COM_C_COM',"Commento");
define('_COM_C_FULLY',"Per favore devi completare tutti i campi del form!");
define('_COM_C_NEW_COM',"Nuovo commento relativo a");
define('_COM_C_HAVE_NEW',"C' è un nuovo commento relativo al seguente articolo:");
define('_COM_C_LOGIN',"Per favore fai il login e pubblica o cancella questo commento");
define('_COM_C_QUICKLINK',"premi qui per fare il login");
define('_COM_C_THANKS',"Grazie per il tuo commento su");
define('_COM_C_THANKS2',"Grazie per il tuo commento sull' articolo seguente");
define('_COM_C_ADMIN_REV',"Un amministratore controllerà a breve i tuoi commenti");
define('_COM_C_ENTERED',"Sei entrato");
define('_COM_C_VISIT',"Torna a trovarci presto a");
define('_COM_C_THANKS3',"Grazie per aver lasciato i tuoi commenti - Sono stati aggiunti alla pagina");
define('_COM_C_THANKS4',"Grazie per aver lasciato i tuoi commenti - Verranno letti da un amministratore prima di essere pubblicati");
define('_COM_C_SUBMIT',"Invia");
define('_COM_C_RESET',"Cancella");
define('_COM_C_NOT_AUTH',"Non sei autorizzato a lasciare commenti- Per piacere esegui il login");
define('_COM_C_PREV_PAGE',"Pagina Precedente");
define('_COM_C_NEXT_PAGE',"Pagina Successiva");
define('_COM_C_PAGE',"Pagina");
define('_COM_C_COMMENT',"Commenti");
define('_COM_C_OF',"di");
define('_COM_C_CANCEL',"Annullamento");
define('_COM_C_FORM_INTRO',"Enter your comment below.");
define('_COM_C_PREVIEW_HEAD',"Please check your entry...");
define('_COM_C_PREVIEW_INTRO',"Is the below correct? <p />Please make any necessary changes before submitting.  Warning: Cancelling will erase your comment!");
define('_COM_C_REQ'," <small><i>(obbligatorio)</i></small>");
define('_COM_C_OPT'," <small><i>(facoltativo)</i></small>");
define('_COM_C_HOMEURL',"here");
define('_COM_C_CHECKLINK',"CHECK LINK");
define('_COM_C_QUICKPOST',"Quick Post");
?>