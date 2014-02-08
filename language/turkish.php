<?php
/**
* @version 
* @package MosCom - COAddOns for Mambo & Jommla - Comments on Articles based on COMBO by Phil Taylor
* @copyright (C) 2007 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/
//  @Translated by Murat Esgin webadmin[at]lavinya[dot]net  http://www.lavinya.net

defined( '_VALID_MOS' ) or die( 'Bu Dizine direkt eriþim yasaktýr.' );
//admin.comments.html.php
define('_COM_A_KEEPUPTODATE','Bu butona týklayarak mail listemize üye olacaksýnýz. Yeni eklenen güncellenen dosyalarda bildiri alabilirsiniz.');
define('_COM_A_SUBSCRIBE','Abone Ol');
define('_COM_A_UNSUBSCRIBE','Abonelikten Çýk');
define('_COM_A_BACKUP','Yedekle');
define('_COM_A_BACKUP_DESC','#__content_comments tablosunu yedekle');
define('_COM_A_RESTORE','Onar');
define('_COM_A_RESTORE_DESC','#__content_comments tablosunu onar');
define('_COM_A_CONFIG','Ayarlar');
define('_COM_A_CONFIG_DESC','Ayarlarý deðiþtir.');
define('_COM_A_INSTRUCTIONS','Yönergeler');
define('_COM_A_INSTRUCTIONS_DESC','Kurulum kullaným ayarlarý');
define('_COM_A_ABOUT','Hakkýnda');
define('_COM_A_ABOUT_DESC','Bileþen Hakkýnda');
define('_COM_A_LINK','Link');
define('_COM_A_LINK_DESC','Yapýmcýnýn websitesi');
define('_COM_A_CHECK','Güncellemeleri kontrol et');
define('_COM_A_VERSION','Sürümünüz ');
define('_COM_A_DONATE','Bu scriptin geliþimine katkýda bulunmak için lütfen bizi destekleyin. Aþaðýdaki butona týklayarak devam edebilirsiniz.');
define('_COM_A_REVIEW','Yorum incelemeleri (En yeniden)');
define('_COM_A_DISPLAY','Göster #');
define('_COM_A_NAME_SUB','Ad');
define('_COM_A_EMAIL_SUB','Eposta');
define('_COM_A_HOMEPAGE','Anasayfa');
define('_COM_A_COMMENT','Yorumlar');
define('_COM_A_ARTICLE','Makale');
define('_COM_A_PUBLISHED','Yayýnda');
define('_COM_A_MOS_BY','A MOS4.5 Custom Component by');
define('_COM_A_CURRENT_SETTINGS','Geçerli ayarlar');
define('_COM_A_EXPLANATION','Açýklamalarý');
define('_COM_A_ADMIN_EMAIL','Admin Epostasý');
define('_COM_A_ADMIN_EMAIL_DESC','Eðer yönetici bildirici seçeneði aktif ise belirttiðiniz adrese yeni yorum girildiðinde eposta yollanacaktýr.');
define('_COM_A_ADMIN_ALERTS','Yönetici Eposta bildiricisi');
define('_COM_A_ADMIN_EMAIL_ENABLE','Yöneticiye eposta Aç/Kapa');
define('_COM_A_VISITOR_EMAIL','Ziyaretçi eposta bildiricisi');
define('_COM_A_VISITOR_EMAIL_DESC','Ziyaretçilere yorum eklendiðinde eposta atýlýr. Aç/Kapa');
define('_COM_A_REVIEW_SUBM','Yorum incelemesi');
define('_COM_A_REVIEW_DESC','Eðer evet seçilirse yorumlar ilk önce admin onayýndan geçecek. Bu durumda email bildiricilerini açmanýz iyi olur.');
define('_COM_A_REGISTERED_ONLY','Sadece kayýtlý kullanýcýlar');
define('_COM_A_REG_ONLY_DESC','Eðer bu seçeneði aktiflerseniz sadece kayýtlý kullanýcýlar yorum býrakabilir fakat herkes bu yorumlarý okuyabilir, hayýrý seçerseniz herkes yorum býrakabilecektir.');
define('_COM_A_NOTIFY_VERSION','Yeni sürümde bildir');
define('_COM_A_NOT_VER_DESC','Eðer aktiflerseniz yeni güncellemelerin olduðunu ana ekranda göreceksiniz. (<em>NOT: Versiyon numaranýz yollanacaktýr</em>)');
define('_COM_A_HAVE_DONATED','Have you Donated?');
define('_COM_A_DONATE2','Please consider make a donation throught paypal. This will inspire me to improve this script more! :-)');
define('_COM_A_IMPORTANT_NOTE','ÖNEMLÝ NOT');
define('_COM_A_TEMPLATE','In order for mambo to check and see if its showing an article that can be commented on, you must make a small change to your template.<br><a href="index2.php?option=templates&task=edit">Tema Düzenle</a> and look for the entry');
define('_COM_A_CHANGE_TO','Bunu takip edenle deðiþtir');
define('_COM_A_HAVE_FUN','Hepsi bu! ~ (Comment will only show on the article id = something otherwise it will not show)<p>Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_COM_A_FORCE_PREVIEW','Önizleme');
define('_COM_A_FORCE_PREVIEW_TEXT','Eðer aktifleþtirilirse kullanýcý yorum eklemeden önce önizleyecek');
define('_COM_A_HIDE','Yorumlarý gizle');
define('_COM_A_HIDE_DESC','Göster (Yorumlar (x) - Yorumlar ekle) instead of the comments and form by default');
define('_COM_A_DATE','Tarih');
define('_COM_A_HIDE_URL','URL Gizle');
define('_COM_A_HIDE_URL_DESC','URL Gizle - Yorumlara eklenen linkleri gizleyin ');
define('_COM_A_EMAIL_REQ','Eposta gerekli');
define('_COM_A_EMAIL_REQ_DESC','Yorumlara mail adresi girmek zorunlu olsun mu');
define('_COM_A_EXCL_SEC','Bölüm Dýþý');
define('_COM_A_EXCL_SEC_DESC','Bu bölümlerde yorum eklenmesin.. (lütfen bölüm id ini giriniz..)');
define('_COM_A_PER_PAGE','Sayfa baþýna yorumlar');
define('_COM_A_PER_PAGE_DESC','Sayfada gözükecek mesaj sayýsý. örneðin: 3');
define('_COM_A_NEW_1ST','Yeni yorumlar ilk sýrada');
define('_COM_A_NEW_1ST_DESC','Yeni yorumlar listelenmesi');
define('_COM_A_FORM_ABOVE','Yorum forumu yukarýda');
define('_COM_A_FORM_ABOVE_DESC','Yorumlarýn üstüne yorum ekleme formu eklensin mi');
define('_COM_A_USE_DIVCSS','DIV CSS Kullan');
define('_COM_A_USE_DIVCSS_DESC','Formda DIV CSS kullanýlsýn mý (?)');
define('_COM_A_EXCL_CONT','Ýçerik Dýþý');
define('_COM_A_EXCL_CONT_DESC','Yoruma kapatmak için içerik id nosunu giriniz');
define('_COM_A_IP','IP');
define('_COM_A_USE_USERNAME','Use username');
define('_COM_A_USE_USERNAME_DESC','Show username instead of name');
define('_COM_A_CLOSE_CONT','Close Contents');
define('_COM_A_CLOSE_CONT_DESC','Use to close contents via article id not to show comments form, eg: 0,1');
define('_COM_A_USE_SECTOKEN','Use security token');
define('_COM_A_USE_SECTOKEN_DESC','Check for security token when submit comment (invisible Captcha)');

//comments.php
define('_COM_A_NO',"Hayýr");
define('_COM_A_YES',"Evet");
define('_COM_C_COM_NUMBER',"Yorumlarý Göster");
define('_COM_C_NO_COM',"Henüz yorum eklenmedi - Ýlk yorumu siz yapabilirsiniz...");
define('_COM_C_POST',"Gönderen");
define('_COM_C_HOMEPAGE',"Anasayfa");
define('_COM_C_DATE_ON',"on");
define('_COM_C_DATE_AT',"at");
define('_COM_C_ADD_COM',"Konuya yorum ekle: ");
define('_COM_C_ADD_COM2'," ...");
define('_COM_C_NAME',"Ýsim");
define('_COM_C_EMAIL',"E-Posta");
define('_COM_C_EMAIL_NOT',"Eposta adresiniz kullanýcýlar tarafýndan Görülmeyecektir. Sadece site yöneticileri görebilir");
define('_COM_C_HOMEPAGE_IN',"Anasayfa");
define('_COM_C_COM',"Yorum");
define('_COM_C_FULLY',"Lütfen formu tam doldurun!");
define('_COM_C_NEW_COM',"Yeni yorum");
define('_COM_C_HAVE_NEW',"Bu makalede yeni bir yorum var:");
define('_COM_C_LOGIN',"Yorum yayýnlamak veya silmek için lütfen giriþ yapýn");
define('_COM_C_QUICKLINK',"Buradan giriþ yapabilirsiniz");
define('_COM_C_THANKS',"Yorumlarýnýz için teþekkürler.");
define('_COM_C_THANKS2',"Bu makaleye yorum eklediðiniz için teþekkür ederiz.");
define('_COM_C_ADMIN_REV',"Yorumunuz yöneticiler tarafýndan incelenecektir.");
define('_COM_C_ENTERED',"Eklendiniz");
define('_COM_C_VISIT',"Lütfen sitemizi yeniden ziyaret ediniz");
define('_COM_C_THANKS3',"Yorumunuz için teþekkürler - Ýlgili konuya yorum ekleme iþleminiz gerçekleþmiþtir");
define('_COM_C_THANKS4',"Yorumunuz için teþekkürler - Yayýnlanmadan önce bir yönetici yorumunuzu inceleyecek!");
define('_COM_C_SUBMIT',"Yolla");
define('_COM_C_RESET',"Temizle");
define('_COM_C_NOT_AUTH',"Yorum eklemek için üye olmalýsýnýz. Üye iseniz lütfen giriþ yapýn");
define('_COM_C_PREV_PAGE',"Önceki sayfa");
define('_COM_C_NEXT_PAGE',"Sonraki sayfa");
define('_COM_C_PAGE',"Sayfa");
define('_COM_C_COMMENT',"yorumlar");
define('_COM_C_OF',"de");
define('_COM_C_CANCEL',"Ýptal");
define('_COM_C_FORM_INTRO',"Aþaðýya yorumunuzu girebilirsiniz.");
define('_COM_C_PREVIEW_HEAD',"Lütfen formu kontrol edin...");
define('_COM_C_PREVIEW_INTRO',"Aþaðýdaki bilgiler doðru mu? <p />Lütfen yollamadan gerekli düzenlemeleri yapýn.  Dikkat: Ýptal ederseniz yorumunuz silinecektir!");
define('_COM_C_REQ'," <small><i>(gerekli)</i></small>");
define('_COM_C_OPT'," <small><i>(isteðe baðlý)</i></small>");
define('_COM_C_HOMEURL',"here");
define('_COM_C_CHECKLINK',"CHECK LINK");
define('_COM_C_QUICKPOST',"Quick Post");
?>