?php
/**
* @version 
* @package MosCom - COAddOns for Mambo & Jommla - Comments on Articles based on COMBO by Phil Taylor
* @copyright (C) 2008 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/
// translated by Fuga http://dndon.net

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
//admin.comments.html.php
define('_COM_A_KEEPUPTODATE','ÅĞÇ ÃÑÏÊ ÇáÅÔÊÑÇß İí ŞÇÆãÉ ÇáÊÍÏíËÇÊ ÅÖÛØ Úáì  ÇáÒÑ');
define('_COM_A_SUBSCRIBE','ÅÔÊÑÇß');
define('_COM_A_UNSUBSCRIBE','ÅäÓÍÇÈ');
define('_COM_A_BACKUP','äÓÎÉ ÅÍÊíÇØíÉ');
define('_COM_A_BACKUP_DESC','Úãá äÓÎÉ ÇÍÊíÇØíÉ ãä #__content_comments');
define('_COM_A_RESTORE','ÅÓÊÚÇÏÉ');
define('_COM_A_RESTORE_DESC','ÅÓÊÚÇÏÉ ÇáäÓÎÉ ÇáÅÍÊíÇØíÉ ãä #__content_comments');
define('_COM_A_CONFIG','ÇáÊÚÏíáÇÊ');
define('_COM_A_CONFIG_DESC','ÍİÙ ÇáÊÚÏíáÇÊ');
define('_COM_A_INSTRUCTIONS','ÇáÊÚáíãÇÊ');
define('_COM_A_INSTRUCTIONS_DESC','ØÑíŞÉ ÊäÕíÈ ÇáÈÑäÇãÌ');
define('_COM_A_ABOUT','Úä ÇáÈÑäÇãÌ');
define('_COM_A_ABOUT_DESC','Úä åĞÇ ÇáÈÑäÇãÌ');
define('_COM_A_LINK','ÑÇÈØ');
define('_COM_A_LINK_DESC','áãäÊÌ ÇáÈÑäÇãÌ');
define('_COM_A_CHECK','ÇáÊÃßÏ ãä æÌæÏ ÊÍÏíËÇÊ');
define('_COM_A_VERSION','ÅÕÏÇÑß åæ ');
define('_COM_A_DONATE','íÑÌì ÇáÖÛØ Úáì ÃÚáÇä ÇáíÇåæ Ãæ Úáì ÇáÃŞá Şã ÈÏÚã ÇáÈÑäÇãÌ ÈÊÈÑÚ ÈÓíØ');
define('_COM_A_REVIEW','ÚÑÖ ÇáÊÚáíŞÇÊ ( ÇáÃÍÏË ÃæáÇ )');
define('_COM_A_DISPLAY','ÚÑÖ #');
define('_COM_A_NAME_SUB','ÇáÅÓã');
define('_COM_A_EMAIL_SUB','ÇáÈÑíÏ');
define('_COM_A_HOMEPAGE','ÇáãæŞÚ');
define('_COM_A_COMMENT','ÇáÊÚáíŞ');
define('_COM_A_ARTICLE','ÇáãŞÇáÉ');
define('_COM_A_PUBLISHED','ãäÔæÑ');
define('_COM_A_MOS_BY','ÈÑäÇãÌ ÇáÊÚáíŞÇÊ ÈæÇÓØÉ');
define('_COM_A_CURRENT_SETTINGS','ÇáÎÕÇÆÕ ÇáÍÇáíÉ');
define('_COM_A_EXPLANATION','ÇáÔÑÍ');
define('_COM_A_ADMIN_EMAIL','ÈÑíÏ ÇáãÏíÑ');
define('_COM_A_ADMIN_EMAIL_DESC','ÈÑíÏ ÇáãÏíÑ ÇáĞí ÊÕá Çáíå ÇáÊÚáíŞÇÊ Úáì ÇáÈÑíÏ');
define('_COM_A_ADMIN_ALERTS','ÅÈáÇÛ ÈÑíÏí');
define('_COM_A_ADMIN_EMAIL_ENABLE','åá ÊÑíÏ ÊÈáíÛ ÈÑíÏí ÚäÏ ßá ÊÚáíŞ');
define('_COM_A_VISITOR_EMAIL','ÈÑíÏ ááÒÇÆÑ');
define('_COM_A_VISITOR_EMAIL_DESC','åá ÊÑíÏ ÅÑÓÇá ÈÑíÏ áßá ÒÇÆÑ Ãæ ÚÖæ ŞÇã ÈÅÖÇİÉ ÊÚáíŞ');
define('_COM_A_REVIEW_SUBM','ÊİŞÏ ŞÈá ÇáäÔÑ');
define('_COM_A_REVIEW_DESC','ÅĞÇ ÅÎÊÑÊ äÚã İĞáß íÚäí Ãä ÇáÊÚáíŞ íÖÇİ İí ŞÇÚÏÉ ÇáÈíÇäÇÊ æáÇ íäÔÑ ÇáÇ ÈÚÏ ÊÕÑíÍß áå ÈÇáäÔÑ .íãßäß ÊÍÏíÏ ÎíÇÑ ÅÈáÇÛ ÈÑíÏí ááãÏíÑ ÃÚáÇå æĞáß áÅÎÈÇÑß Èßá ÇáÊÚÇáíŞ ÇáÊí ÊäÊÙÑ ÇáäÔÑ');
define('_COM_A_REGISTERED_ONLY','İŞØ ÇáÃÚÖÇÁ');
define('_COM_A_REG_ONLY_DESC','ÅÎÊÑ äÚã áÅÊÇÍÉ ÇáÊÚáíŞÇÊ ááÃÚÖÇÁ İŞØ .. áÇ ÊÎİ ÓíÊã ÚÑÖ ÇáÊÚáíŞÇÊ ááÚÇãÉ æáßä áÇ íãßäåã ÇáÊÚáíŞ ÇáÇ ÇĞÇ ßÇä áÏíåã ÚÖæíÉ İí ÇáãÌáÉ');
define('_COM_A_NOTIFY_VERSION','ÊÈáíÛ ÚäÏ æÌæÏ äÓÎÉ ÌÏíÏÉ');
define('_COM_A_NOT_VER_DESC','ÅÎÊÑ äÚã ÅĞÇ ÃÑÏÊ Ãä ÊÕáß ÇáÊÍÏíËÇÊ ÚäÏ æÌæÏ äÓÎÉ ÌÏíÏÉ ãä ÇáÈÑäÇãÌ');
define('_COM_A_HAVE_DONATED','åá ŞãÊ ÈÇáÊÈÑÚ ¿');
define('_COM_A_DONATE2','ÅĞÇ ÅÎÊÑÊ äÚã İáä íÙåÑ ãÑÈÚ ÇáÊÈÑÚ ÊÍÊ ÇáÊÚáíŞÇÊ .. ÇĞÇ ÅÎÊÑÊ áÇ İÓíÙåÑ ãÑÈÚ ÇáÊÈÑÚ ÃÓİá ÇáÊÚáíŞÇÊ');
define('_COM_A_IMPORTANT_NOTE','ãÚáæãÇÊ ãåãÉ');
define('_COM_A_TEMPLATE','íÌÈ Úáíß ÊÍÑíÑ ÃãÑ İí ÇáŞÇáÈ æĞáß áÊİÚíá ÇáÊÚáíŞÇÊ İí ãÌáÊß<br><a href="index2.php?option=templates&task=edit">ÅäÊŞá Çáì ÇáŞæÇáÈ</a>');
define('_COM_A_CHANGE_TO','ÅÓÊÈÏá ÇáßæÏ ÇáÊÇáí');
define('_COM_A_HAVE_FUN','Thats it! ~ (I will not be answering emails along the line of &quot;<em>I&quot;ve installed your component but the form doesn&quot;t show.....</em>&quot; :-)</p> <p>          Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_COM_A_FORCE_PREVIEW','ãÔÇåÏÉ Ãæ ÈÑæİÉ');
define('_COM_A_FORCE_PREVIEW_TEXT','ÅÎÊÑ äÚã ÇĞÇ ÃÑÏÊ ÚÑÖ ÈÑæİÉ ãä ÇáÊÚáíŞ ŞÈá ÇáÅÖÇİÉ áãÖíİ ÇáÊÚáíŞ');
define('_COM_A_HIDE','ÅÎİÇÁ ÇáÍŞæá');
define('_COM_A_HIDE_DESC','ÚÑÖ ÑæÇÈØ áÅÖÇİÉ ÇáÊÚáíŞ æ ãÔÇÏÉ ÇáÊÚáíŞÇÊ ÈÏáÇ ãä ÚÑÖ ÇáİæÑã ÊÍÊ ÇáãŞÇáÉ');
define('_COM_A_DATE','ÇáÊÇÑíÎ');
define('_COM_A_HIDE_URL','ÅÎİÇÁ ÇáÑÇÈØ');
define('_COM_A_HIDE_URL_DESC','åá ÊæÏ ÅÎİÇÁ ÍŞá ÚäæÇä ãæŞÚ ãÖíİ ÇáÊÚáíŞ');
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
define('_COM_A_NO',"áÇ");
define('_COM_A_YES',"äÚã");
define('_COM_C_COM_NUMBER',"ÚÏÏ ÇáÊÚáíŞÇÊ");
define('_COM_C_NO_COM',"áÇ íæÌÏ Ãí ÊÚáíŞ Çáì ÇáÂä .. íãßäß ÇáÈÏÃ ÈÅÖÇİÉ Ãæá ÊÚáíŞ");
define('_COM_C_POST',"ÈæÇÓØÉ");
define('_COM_C_HOMEPAGE',"ÕÍÇÈ ãæŞÚ");
define('_COM_C_DATE_ON',"İí");
define('_COM_C_DATE_AT',"İí");
define('_COM_C_ADD_COM',"ÃÖİ ÊÚáíŞß ááãŞÇáÉ Ãæ ÇáÏÑÓ");
define('_COM_C_ADD_COM2'," ...");
define('_COM_C_NAME',"ÇáÅÓã");
define('_COM_C_EMAIL',"ÇáÈÑíÏ");
define('_COM_C_EMAIL_NOT',"ÓÊÊã ÍãÇíÉ ÈÑíÏß ãä ÇáÚÑÖ İí ÇáãæŞÚ");
define('_COM_C_HOMEPAGE_IN',"ÇáãæŞÚ");
define('_COM_C_COM',"ÇáÊÚáíŞ");
define('_COM_C_FULLY',"íÑÌì ãáÃ ÇáÍŞæá !");
define('_COM_C_NEW_COM',"ÊÚáíŞ ÌÏíÏ İí");
define('_COM_C_HAVE_NEW',"áÏíß ÊÚáíŞ Úáì ÇáãŞÇáÉ ÇáÊÇáíÉ :");
define('_COM_C_LOGIN',"íÑÌì ÇáÏÎæá ááæÍÉ ÇáÊÍßã áäÔÑ ÇáãŞÇáÉ Ãæ ÍĞİåÇ");
define('_COM_C_QUICKLINK',"åĞÇ ÑÇÈØ ÓÑíÚ áÏÎæá áæÍÉ ÇáÊÍßã");
define('_COM_C_THANKS',"ÔßÑÇ áÊÚáíŞß");
define('_COM_C_THANKS2',"ÔßÑÇ áÊÚáíŞß Úáì ÇáÏÑÓ Ãæ ÇáãŞÇáÉ ÇáÊÇáíÉ");
define('_COM_C_ADMIN_REV',"ÓíŞæã ÇáãÏíÑ ÈÊİŞÏ ÇáÊÚáíŞ ŞÈá äÔÑå");
define('_COM_C_ENTERED',"ÃäÊ ÃÏÎáÊ");
define('_COM_C_VISIT',"íÑÌì ÒíÇÑÉ ÇáãæŞÚ ŞÑíÈÇ");
define('_COM_C_THANKS3',"ÔßÑÇ áÅÖÇİÊß ÇáÊÚáíŞ");
define('_COM_C_THANKS4',"ÔßÑÇ áß Úáì ÇáÊÚáíŞ ... ÓÊÊã ãÔÇåÏÉ ÇáÊÚáíŞ ŞÈá äÔÑå ãä ŞÈá ÇáãÏíÑ");
define('_COM_C_SUBMIT',"ÃÖİ");
define('_COM_C_RESET',"ãÓÍ");
define('_COM_C_NOT_AUTH',"áÇ íãßäß ÅÖÇİÉ ÊÚáíŞ íÑÌì ÊÓÌíá ÏÎæá");
define('_COM_C_PREV_PAGE',"Prev Page");
define('_COM_C_NEXT_PAGE',"Next Page");
define('_COM_C_PAGE',"Page");
define('_COM_C_COMMENT',"User Comments");
define('_COM_C_OF',"of");
define('_COM_C_CANCEL',"Cancel");
define('_COM_C_FORM_INTRO',"Enter your comment below.");
define('_COM_C_PREVIEW_HEAD',"Please check your entry...");
define('_COM_C_PREVIEW_INTRO',"Is the below correct? <p />Please make any necessary changes before submitting.  Warning: Cancelling will erase your comment!");
define('_COM_C_REQ',"<small><i> (ãØáæÈ)</i></small>");
define('_COM_C_OPT',"<small><i>(optional)</i></small>");
define('_COM_C_HOMEURL',"here");
define('_COM_C_CHECKLINK',"CHECK LINK");
define('_COM_C_QUICKPOST',"Quick Post");
?>