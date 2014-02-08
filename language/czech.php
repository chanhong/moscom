<?php
/**
* @version 
* @package MosCom - COAddOns for Mambo & Jommla - Comments on Articles based on COMBO by Phil Taylor
* @copyright (C) 2008 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/
// Czech translation: emil, mambodrom.cz, 09.12.2007

defined( '_VALID_MOS' ) or die( 'Direct access to this location is not allowed.' );
//admin.comments.html.php
define('_COM_A_KEEPUPTODATE','Pokud chcete udržovat tuto a další komponenty od Chanh Ong aktuální, přihlaste se na rozesílací seznam stisknutím tohoto tlačítka.');
define('_COM_A_SUBSCRIBE','Přihlásit');
define('_COM_A_UNSUBSCRIBE','Odhlásit');
define('_COM_A_BACKUP','Zálohovat');
define('_COM_A_BACKUP_DESC','Zálohovat #__content_comments table');
define('_COM_A_RESTORE','Obnovit');
define('_COM_A_RESTORE_DESC','Obnovit #__content_comments table');
define('_COM_A_CONFIG','Nastavení');
define('_COM_A_CONFIG_DESC','Změnit nastavení');
define('_COM_A_INSTRUCTIONS','Instrukce');
define('_COM_A_INSTRUCTIONS_DESC','Nastavení po instalaci');
define('_COM_A_ABOUT','O programu');
define('_COM_A_ABOUT_DESC','O této komponentě');
define('_COM_A_LINK','Odkaz');
define('_COM_A_LINK_DESC','na webové sídlo autora');
define('_COM_A_CHECK','Zkontrolovat aktualizace');
define('_COM_A_VERSION','Vaše verze je ');
define('_COM_A_DONATE','Zvažte prosím finanční příspěvek kliknutím na ikonu níže. Bude mě to inspirovat k dalšímu vylepšení tohoto skriptu.');
define('_COM_A_REVIEW','Přehled komentářů (nové jako první)');
define('_COM_A_DISPLAY','Zobrazit #');
define('_COM_A_NAME_SUB','Jméno');
define('_COM_A_EMAIL_SUB','E-mail');
define('_COM_A_HOMEPAGE','WWW');
define('_COM_A_COMMENT','Komentář');
define('_COM_A_ARTICLE','Článek');
define('_COM_A_PUBLISHED','Publikováno');
define('_COM_A_MOS_BY','MOS4.5 uživatelská komponenta od');
define('_COM_A_CURRENT_SETTINGS','Stávající nastavení');
define('_COM_A_EXPLANATION','Vysvětlující popis');
define('_COM_A_ADMIN_EMAIL','E-mail administrátora');
define('_COM_A_ADMIN_EMAIL_DESC','Pokud je vyplněna e-mailová adresa, bude na ni zasláno oznámení o novém komentáři.');
define('_COM_A_ADMIN_ALERTS','Upozornit administrátora mailem');
define('_COM_A_ADMIN_EMAIL_ENABLE','Povolit/zakázat upozorňovací e-mail  administrátorovi');
define('_COM_A_VISITOR_EMAIL','Upozornit návštěvníka mailem');
define('_COM_A_VISITOR_EMAIL_DESC','Povolit/zakázat upozorňovací e-mail  autorovi komentáře');
define('_COM_A_REVIEW_SUBM','Schvalovat komentáře');
define('_COM_A_REVIEW_DESC','Pokud nastavíte na &quot;Ano&quot;, budou komentáře vloženy do databáze a budou čekat na schválení. Upozorňovací e-mail obdržíte <strong>pouze</strong>, když je vyplněno pole &quot;E-mail administrátora&quot; a volba &quot;Upozorňovat administrátora mailem&quot; je nastavena na &quot;Ano.&quot;');
define('_COM_A_REGISTERED_ONLY','Pouze registrovaní uživatelé');
define('_COM_A_REG_ONLY_DESC','Nastavte &quot;Ano&quot;, pokud chcete povolit zápis komentářů pouze registrovaným uživatelům a čtení všem. Nastavte &quot;Ne&quot;, pokud chcete povolit zápis komentářů komukoliv.');
define('_COM_A_NOTIFY_VERSION','Upozornit na novou verzi');
define('_COM_A_NOT_VER_DESC','Pokud je nastaveno &quot;Ano&quot;, bude v případě dostupnosti aktualizované verze zobrazen na hlavní obrazovce informační dialog.  (<em>POZNÁMKA: Jediná data, která jsou odesílána na aktualizační server, je číslo Vaší verze.</em>)');
define('_COM_A_HAVE_DONATED','Přispěli jste darem?');
define('_COM_A_DONATE2','Zvažte prosím příspěvek pomocí PayPal. Bude mě to inspirovat k dalšímu vylepšení tohoto skriptu! :-)');
define('_COM_A_IMPORTANT_NOTE','DŮLEŽITÁ POZNÁMKA');
define('_COM_A_TEMPLATE','Aby Mambo mohlo zobrazovat komentáře ke článkům, musíte provést malou změnu ve Vaší šabloně.<br>Upravte Váš <a href="index2.php?option=templates&task=edit">soubor šablony</a> index.php a vyhledejte zápis.');
define('_COM_A_CHANGE_TO','Změňte na následující');
define('_COM_A_HAVE_FUN','A je to! ~ (Komentáře budou zobrazeny pouze u článků, jejichž id = cokoliv, jinak nebudou zobrazeny)<p>Mnoho štěstí!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_COM_A_FORCE_PREVIEW','Zobrazit náhled');
define('_COM_A_FORCE_PREVIEW_TEXT','Nastavte na &quot;Ano&quot; pro zobrazení náhledu komentáře návštěvníkovi před jeho závěrečným odesláním.');
define('_COM_A_HIDE','Skrýt komentáře');
define('_COM_A_HIDE_DESC','Zobrazit (Komentáře (x) - Přidat komentář) místo komentářů a formuláře');
define('_COM_A_DATE','Datum');
define('_COM_A_HIDE_URL','Skrýt URL');
define('_COM_A_HIDE_URL_DESC','Skrýt URL: Skrýt URL ve formuláři komentářů');
define('_COM_A_EMAIL_REQ','Vyžadovat e-mail');
define('_COM_A_EMAIL_REQ_DESC','Nastavte, zda je e-mail ve formuláři komentáře povinný údaj.');
define('_COM_A_EXCL_SEC','Vyloučit sekce');
define('_COM_A_EXCL_SEC_DESC','Použijte pro vyloučení sekcí, ve kterých nebudou zobrazeny komentáře, např. 0,1');
define('_COM_A_PER_PAGE','Komentářů na stránku');
define('_COM_A_PER_PAGE_DESC','Použijte pro nastavení počtu zobrazených komentářů na stránce, např. 5');
define('_COM_A_NEW_1ST','Nové komentáře jako první');
define('_COM_A_NEW_1ST_DESC','Zobrazit nový komentář jako první');
define('_COM_A_FORM_ABOVE','Formulář komentáře nahoře');
define('_COM_A_FORM_ABOVE_DESC','Zobrazit formulář komentáře nad seznamem komentářů');
define('_COM_A_USE_DIVCSS','Použít DIV CSS');
define('_COM_A_USE_DIVCSS_DESC','Zobrazit DIV ve formuláři komentáře pomocí DIV CSS ze šablony namísto tabulky');
define('_COM_A_EXCL_CONT','Vyloučit články');
define('_COM_A_EXCL_CONT_DESC','Použijte pro vyloučení článků pomocí id, ke kterým nebudou zobrazeny komentáře, např. 0,1');
define('_COM_A_IP','IP');
define('_COM_A_USE_USERNAME','Use username');
define('_COM_A_USE_USERNAME_DESC','Show username instead of name');
define('_COM_A_CLOSE_CONT','Close Contents');
define('_COM_A_CLOSE_CONT_DESC','Use to close contents via article id not to show comments form, eg: 0,1');
define('_COM_A_USE_SECTOKEN','Use security token');
define('_COM_A_USE_SECTOKEN_DESC','Check for security token when submit comment (invisible Captcha)');

//comments.php
define('_COM_A_NO',"Ne");
define('_COM_A_YES',"Ano");
define('_COM_C_COM_NUMBER',"Komentáře");
define('_COM_C_NO_COM',"Dosud bez komentáře. Použijte formulář dole.");
define('_COM_C_POST',"Zaslal");
define('_COM_C_HOMEPAGE',"");
define('_COM_C_DATE_ON',"");
define('_COM_C_DATE_AT',"");
define('_COM_C_ADD_COM',"Přidat komentář ");
define('_COM_C_ADD_COM2'," ");
define('_COM_C_NAME',"Jméno:");
define('_COM_C_EMAIL',"E-mail:");
define('_COM_C_EMAIL_NOT',"Váš e-mail nebude na webovém sídle zobrazen; pouze administrátorovi.");
define('_COM_C_HOMEPAGE_IN',"Vaše www:");
define('_COM_C_COM',"Komentář:");
define('_COM_C_FULLY',"Vyplňte prosím formulář úplně!");
define('_COM_C_NEW_COM',"Komentář k");
define('_COM_C_HAVE_NEW',"Nový komentář k následujícímu článku:");
define('_COM_C_LOGIN',"Přihlaste se prosím a publikujte nebo vymažte tento komentář.");
define('_COM_C_QUICKLINK',"Odkaz pro přihlášení");
define('_COM_C_THANKS',"Děkujeme za komentář na");
define('_COM_C_THANKS2',"Děkujeme za komentář k následujícímu článku");
define('_COM_C_ADMIN_REV',"Administrátor co nejdříve posoudí Váš komentář.");
define('_COM_C_ENTERED'," který jste zaslali");
define('_COM_C_VISIT',"Navštivte nás znovu na");
define('_COM_C_THANKS3',"Děkujeme Vám za komentář. Byl přidán na tuto stránku");
define('_COM_C_THANKS4',"Děkujeme Vám za komentář. Před publikováním bude schválen administrátorem!");
define('_COM_C_SUBMIT',"Odeslat");
define('_COM_C_RESET',"Vynulovat");
define('_COM_C_NOT_AUTH',"Nemáte oprávnění k zadávání komentářů. Nejdříve se prosím přihlaste.");
define('_COM_C_PREV_PAGE',"Předchozí strana");
define('_COM_C_NEXT_PAGE',"Další strana");
define('_COM_C_PAGE',"Strana");
define('_COM_C_COMMENT',"Komentáře");
define('_COM_C_OF',"z");
define('_COM_C_CANCEL',"Zrušit");
define('_COM_C_FORM_INTRO',"Zadejte níže komentář:");
define('_COM_C_PREVIEW_HEAD',"Prosím zkontrolujte Váš komentář");
define('_COM_C_PREVIEW_INTRO',"Jsou níže uvedené údaje v pořádku? <p />Všechny nezbytné změny proveďte před odesláním.  Upozornění: Volba Zrušit vymaže Váš komentář!");
define('_COM_C_REQ'," <small><i>(povinné)</i></small>");
define('_COM_C_OPT'," <small><i>(nepovinné)</i></small>");
define('_COM_C_HOMEURL',"www");
define('_COM_C_CHECKLINK',"CHECK LINK");
define('_COM_C_QUICKPOST',"Quick Post");
?>