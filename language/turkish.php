<?php
/**
* @version 
* @package MosCom - COAddOns for Mambo & Jommla - Comments on Articles based on COMBO by Phil Taylor
* @copyright (C) 2007 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/
//  @Translated by Murat Esgin webadmin[at]lavinya[dot]net  http://www.lavinya.net

defined( '_VALID_MOS' ) or die( 'Bu Dizine direkt eri�im yasakt�r.' );
//admin.comments.html.php
define('_COM_A_KEEPUPTODATE','Bu butona t�klayarak mail listemize �ye olacaks�n�z. Yeni eklenen g�ncellenen dosyalarda bildiri alabilirsiniz.');
define('_COM_A_SUBSCRIBE','Abone Ol');
define('_COM_A_UNSUBSCRIBE','Abonelikten ��k');
define('_COM_A_BACKUP','Yedekle');
define('_COM_A_BACKUP_DESC','#__content_comments tablosunu yedekle');
define('_COM_A_RESTORE','Onar');
define('_COM_A_RESTORE_DESC','#__content_comments tablosunu onar');
define('_COM_A_CONFIG','Ayarlar');
define('_COM_A_CONFIG_DESC','Ayarlar� de�i�tir.');
define('_COM_A_INSTRUCTIONS','Y�nergeler');
define('_COM_A_INSTRUCTIONS_DESC','Kurulum kullan�m ayarlar�');
define('_COM_A_ABOUT','Hakk�nda');
define('_COM_A_ABOUT_DESC','Bile�en Hakk�nda');
define('_COM_A_LINK','Link');
define('_COM_A_LINK_DESC','Yap�mc�n�n websitesi');
define('_COM_A_CHECK','G�ncellemeleri kontrol et');
define('_COM_A_VERSION','S�r�m�n�z ');
define('_COM_A_DONATE','Bu scriptin geli�imine katk�da bulunmak i�in l�tfen bizi destekleyin. A�a��daki butona t�klayarak devam edebilirsiniz.');
define('_COM_A_REVIEW','Yorum incelemeleri (En yeniden)');
define('_COM_A_DISPLAY','G�ster #');
define('_COM_A_NAME_SUB','Ad');
define('_COM_A_EMAIL_SUB','Eposta');
define('_COM_A_HOMEPAGE','Anasayfa');
define('_COM_A_COMMENT','Yorumlar');
define('_COM_A_ARTICLE','Makale');
define('_COM_A_PUBLISHED','Yay�nda');
define('_COM_A_MOS_BY','A MOS4.5 Custom Component by');
define('_COM_A_CURRENT_SETTINGS','Ge�erli ayarlar');
define('_COM_A_EXPLANATION','A��klamalar�');
define('_COM_A_ADMIN_EMAIL','Admin Epostas�');
define('_COM_A_ADMIN_EMAIL_DESC','E�er y�netici bildirici se�ene�i aktif ise belirtti�iniz adrese yeni yorum girildi�inde eposta yollanacakt�r.');
define('_COM_A_ADMIN_ALERTS','Y�netici Eposta bildiricisi');
define('_COM_A_ADMIN_EMAIL_ENABLE','Y�neticiye eposta A�/Kapa');
define('_COM_A_VISITOR_EMAIL','Ziyaret�i eposta bildiricisi');
define('_COM_A_VISITOR_EMAIL_DESC','Ziyaret�ilere yorum eklendi�inde eposta at�l�r. A�/Kapa');
define('_COM_A_REVIEW_SUBM','Yorum incelemesi');
define('_COM_A_REVIEW_DESC','E�er evet se�ilirse yorumlar ilk �nce admin onay�ndan ge�ecek. Bu durumda email bildiricilerini a�man�z iyi olur.');
define('_COM_A_REGISTERED_ONLY','Sadece kay�tl� kullan�c�lar');
define('_COM_A_REG_ONLY_DESC','E�er bu se�ene�i aktiflerseniz sadece kay�tl� kullan�c�lar yorum b�rakabilir fakat herkes bu yorumlar� okuyabilir, hay�r� se�erseniz herkes yorum b�rakabilecektir.');
define('_COM_A_NOTIFY_VERSION','Yeni s�r�mde bildir');
define('_COM_A_NOT_VER_DESC','E�er aktiflerseniz yeni g�ncellemelerin oldu�unu ana ekranda g�receksiniz. (<em>NOT: Versiyon numaran�z yollanacakt�r</em>)');
define('_COM_A_HAVE_DONATED','Have you Donated?');
define('_COM_A_DONATE2','Please consider make a donation throught paypal. This will inspire me to improve this script more! :-)');
define('_COM_A_IMPORTANT_NOTE','�NEML� NOT');
define('_COM_A_TEMPLATE','In order for mambo to check and see if its showing an article that can be commented on, you must make a small change to your template.<br><a href="index2.php?option=templates&task=edit">Tema D�zenle</a> and look for the entry');
define('_COM_A_CHANGE_TO','Bunu takip edenle de�i�tir');
define('_COM_A_HAVE_FUN','Hepsi bu! ~ (Comment will only show on the article id = something otherwise it will not show)<p>Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_COM_A_FORCE_PREVIEW','�nizleme');
define('_COM_A_FORCE_PREVIEW_TEXT','E�er aktifle�tirilirse kullan�c� yorum eklemeden �nce �nizleyecek');
define('_COM_A_HIDE','Yorumlar� gizle');
define('_COM_A_HIDE_DESC','G�ster (Yorumlar (x) - Yorumlar ekle) instead of the comments and form by default');
define('_COM_A_DATE','Tarih');
define('_COM_A_HIDE_URL','URL Gizle');
define('_COM_A_HIDE_URL_DESC','URL Gizle - Yorumlara eklenen linkleri gizleyin ');
define('_COM_A_EMAIL_REQ','Eposta gerekli');
define('_COM_A_EMAIL_REQ_DESC','Yorumlara mail adresi girmek zorunlu olsun mu');
define('_COM_A_EXCL_SEC','B�l�m D���');
define('_COM_A_EXCL_SEC_DESC','Bu b�l�mlerde yorum eklenmesin.. (l�tfen b�l�m id ini giriniz..)');
define('_COM_A_PER_PAGE','Sayfa ba��na yorumlar');
define('_COM_A_PER_PAGE_DESC','Sayfada g�z�kecek mesaj say�s�. �rne�in: 3');
define('_COM_A_NEW_1ST','Yeni yorumlar ilk s�rada');
define('_COM_A_NEW_1ST_DESC','Yeni yorumlar listelenmesi');
define('_COM_A_FORM_ABOVE','Yorum forumu yukar�da');
define('_COM_A_FORM_ABOVE_DESC','Yorumlar�n �st�ne yorum ekleme formu eklensin mi');
define('_COM_A_USE_DIVCSS','DIV CSS Kullan');
define('_COM_A_USE_DIVCSS_DESC','Formda DIV CSS kullan�ls�n m� (?)');
define('_COM_A_EXCL_CONT','��erik D���');
define('_COM_A_EXCL_CONT_DESC','Yoruma kapatmak i�in i�erik id nosunu giriniz');
define('_COM_A_IP','IP');
define('_COM_A_USE_USERNAME','Use username');
define('_COM_A_USE_USERNAME_DESC','Show username instead of name');
define('_COM_A_CLOSE_CONT','Close Contents');
define('_COM_A_CLOSE_CONT_DESC','Use to close contents via article id not to show comments form, eg: 0,1');
define('_COM_A_USE_SECTOKEN','Use security token');
define('_COM_A_USE_SECTOKEN_DESC','Check for security token when submit comment (invisible Captcha)');

//comments.php
define('_COM_A_NO',"Hay�r");
define('_COM_A_YES',"Evet");
define('_COM_C_COM_NUMBER',"Yorumlar� G�ster");
define('_COM_C_NO_COM',"Hen�z yorum eklenmedi - �lk yorumu siz yapabilirsiniz...");
define('_COM_C_POST',"G�nderen");
define('_COM_C_HOMEPAGE',"Anasayfa");
define('_COM_C_DATE_ON',"on");
define('_COM_C_DATE_AT',"at");
define('_COM_C_ADD_COM',"Konuya yorum ekle: ");
define('_COM_C_ADD_COM2'," ...");
define('_COM_C_NAME',"�sim");
define('_COM_C_EMAIL',"E-Posta");
define('_COM_C_EMAIL_NOT',"Eposta adresiniz kullan�c�lar taraf�ndan G�r�lmeyecektir. Sadece site y�neticileri g�rebilir");
define('_COM_C_HOMEPAGE_IN',"Anasayfa");
define('_COM_C_COM',"Yorum");
define('_COM_C_FULLY',"L�tfen formu tam doldurun!");
define('_COM_C_NEW_COM',"Yeni yorum");
define('_COM_C_HAVE_NEW',"Bu makalede yeni bir yorum var:");
define('_COM_C_LOGIN',"Yorum yay�nlamak veya silmek i�in l�tfen giri� yap�n");
define('_COM_C_QUICKLINK',"Buradan giri� yapabilirsiniz");
define('_COM_C_THANKS',"Yorumlar�n�z i�in te�ekk�rler.");
define('_COM_C_THANKS2',"Bu makaleye yorum ekledi�iniz i�in te�ekk�r ederiz.");
define('_COM_C_ADMIN_REV',"Yorumunuz y�neticiler taraf�ndan incelenecektir.");
define('_COM_C_ENTERED',"Eklendiniz");
define('_COM_C_VISIT',"L�tfen sitemizi yeniden ziyaret ediniz");
define('_COM_C_THANKS3',"Yorumunuz i�in te�ekk�rler - �lgili konuya yorum ekleme i�leminiz ger�ekle�mi�tir");
define('_COM_C_THANKS4',"Yorumunuz i�in te�ekk�rler - Yay�nlanmadan �nce bir y�netici yorumunuzu inceleyecek!");
define('_COM_C_SUBMIT',"Yolla");
define('_COM_C_RESET',"Temizle");
define('_COM_C_NOT_AUTH',"Yorum eklemek i�in �ye olmal�s�n�z. �ye iseniz l�tfen giri� yap�n");
define('_COM_C_PREV_PAGE',"�nceki sayfa");
define('_COM_C_NEXT_PAGE',"Sonraki sayfa");
define('_COM_C_PAGE',"Sayfa");
define('_COM_C_COMMENT',"yorumlar");
define('_COM_C_OF',"de");
define('_COM_C_CANCEL',"�ptal");
define('_COM_C_FORM_INTRO',"A�a��ya yorumunuzu girebilirsiniz.");
define('_COM_C_PREVIEW_HEAD',"L�tfen formu kontrol edin...");
define('_COM_C_PREVIEW_INTRO',"A�a��daki bilgiler do�ru mu? <p />L�tfen yollamadan gerekli d�zenlemeleri yap�n.  Dikkat: �ptal ederseniz yorumunuz silinecektir!");
define('_COM_C_REQ'," <small><i>(gerekli)</i></small>");
define('_COM_C_OPT'," <small><i>(iste�e ba�l�)</i></small>");
define('_COM_C_HOMEURL',"here");
define('_COM_C_CHECKLINK',"CHECK LINK");
define('_COM_C_QUICKPOST',"Quick Post");
?>