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
define('_COM_A_KEEPUPTODATE','��� ���� �������� �� ����� ��������� ���� ���  ����');
define('_COM_A_SUBSCRIBE','������');
define('_COM_A_UNSUBSCRIBE','������');
define('_COM_A_BACKUP','���� ��������');
define('_COM_A_BACKUP_DESC','��� ���� �������� �� #__content_comments');
define('_COM_A_RESTORE','�������');
define('_COM_A_RESTORE_DESC','������� ������ ���������� �� #__content_comments');
define('_COM_A_CONFIG','���������');
define('_COM_A_CONFIG_DESC','��� ���������');
define('_COM_A_INSTRUCTIONS','���������');
define('_COM_A_INSTRUCTIONS_DESC','����� ����� ��������');
define('_COM_A_ABOUT','�� ��������');
define('_COM_A_ABOUT_DESC','�� ��� ��������');
define('_COM_A_LINK','����');
define('_COM_A_LINK_DESC','����� ��������');
define('_COM_A_CHECK','������ �� ���� �������');
define('_COM_A_VERSION','������ �� ');
define('_COM_A_DONATE','���� ����� ��� ����� ������ �� ��� ����� �� ���� �������� ����� ����');
define('_COM_A_REVIEW','��� ��������� ( ������ ���� )');
define('_COM_A_DISPLAY','��� #');
define('_COM_A_NAME_SUB','�����');
define('_COM_A_EMAIL_SUB','������');
define('_COM_A_HOMEPAGE','������');
define('_COM_A_COMMENT','�������');
define('_COM_A_ARTICLE','�������');
define('_COM_A_PUBLISHED','�����');
define('_COM_A_MOS_BY','������ ��������� ������');
define('_COM_A_CURRENT_SETTINGS','������� �������');
define('_COM_A_EXPLANATION','�����');
define('_COM_A_ADMIN_EMAIL','���� ������');
define('_COM_A_ADMIN_EMAIL_DESC','���� ������ ���� ��� ���� ��������� ��� ������');
define('_COM_A_ADMIN_ALERTS','����� �����');
define('_COM_A_ADMIN_EMAIL_ENABLE','�� ���� ����� ����� ��� �� �����');
define('_COM_A_VISITOR_EMAIL','���� ������');
define('_COM_A_VISITOR_EMAIL_DESC','�� ���� ����� ���� ��� ���� �� ��� ��� ������ �����');
define('_COM_A_REVIEW_SUBM','���� ��� �����');
define('_COM_A_REVIEW_DESC','��� ����� ��� ���� ���� �� ������� ���� �� ����� �������� ��� ���� ��� ��� ������ �� ������ .����� ����� ���� ����� ����� ������ ����� ���� ������� ��� �������� ���� ����� �����');
define('_COM_A_REGISTERED_ONLY','��� �������');
define('_COM_A_REG_ONLY_DESC','���� ��� ������ ��������� ������� ��� .. �� ��� ���� ��� ��������� ������ ���� �� ������ ������� ��� ��� ��� ����� ����� �� ������');
define('_COM_A_NOTIFY_VERSION','����� ��� ���� ���� �����');
define('_COM_A_NOT_VER_DESC','���� ��� ��� ���� �� ���� ��������� ��� ���� ���� ����� �� ��������');
define('_COM_A_HAVE_DONATED','�� ��� ������� �');
define('_COM_A_DONATE2','��� ����� ��� ��� ���� ���� ������ ��� ��������� .. ��� ����� �� ������ ���� ������ ���� ���������');
define('_COM_A_IMPORTANT_NOTE','������� ����');
define('_COM_A_TEMPLATE','��� ���� ����� ��� �� ������ ���� ������ ��������� �� �����<br><a href="index2.php?option=templates&task=edit">����� ��� �������</a>');
define('_COM_A_CHANGE_TO','������ ����� ������');
define('_COM_A_HAVE_FUN','Thats it! ~ (I will not be answering emails along the line of &quot;<em>I&quot;ve installed your component but the form doesn&quot;t show.....</em>&quot; :-)</p> <p>          Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_COM_A_FORCE_PREVIEW','������ �� �����');
define('_COM_A_FORCE_PREVIEW_TEXT','���� ��� ��� ���� ��� ����� �� ������� ��� ������� ����� �������');
define('_COM_A_HIDE','����� ������');
define('_COM_A_HIDE_DESC','��� ����� ������ ������� � ����� ��������� ���� �� ��� ������ ��� �������');
define('_COM_A_DATE','�������');
define('_COM_A_HIDE_URL','����� ������');
define('_COM_A_HIDE_URL_DESC','�� ��� ����� ��� ����� ���� ���� �������');
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
define('_COM_A_NO',"��");
define('_COM_A_YES',"���");
define('_COM_C_COM_NUMBER',"��� ���������");
define('_COM_C_NO_COM',"�� ���� �� ����� ��� ���� .. ����� ����� ������ ��� �����");
define('_COM_C_POST',"������");
define('_COM_C_HOMEPAGE',"���� ����");
define('_COM_C_DATE_ON',"��");
define('_COM_C_DATE_AT',"��");
define('_COM_C_ADD_COM',"��� ������ ������� �� �����");
define('_COM_C_ADD_COM2'," ...");
define('_COM_C_NAME',"�����");
define('_COM_C_EMAIL',"������");
define('_COM_C_EMAIL_NOT',"���� ����� ����� �� ����� �� ������");
define('_COM_C_HOMEPAGE_IN',"������");
define('_COM_C_COM',"�������");
define('_COM_C_FULLY',"���� ��� ������ !");
define('_COM_C_NEW_COM',"����� ���� ��");
define('_COM_C_HAVE_NEW',"���� ����� ��� ������� ������� :");
define('_COM_C_LOGIN',"���� ������ ����� ������ ���� ������� �� �����");
define('_COM_C_QUICKLINK',"��� ���� ���� ����� ���� ������");
define('_COM_C_THANKS',"���� �������");
define('_COM_C_THANKS2',"���� ������� ��� ����� �� ������� �������");
define('_COM_C_ADMIN_REV',"����� ������ ����� ������� ��� ����");
define('_COM_C_ENTERED',"��� �����");
define('_COM_C_VISIT',"���� ����� ������ �����");
define('_COM_C_THANKS3',"���� ������� �������");
define('_COM_C_THANKS4',"���� �� ��� ������� ... ���� ������ ������� ��� ���� �� ��� ������");
define('_COM_C_SUBMIT',"���");
define('_COM_C_RESET',"���");
define('_COM_C_NOT_AUTH',"�� ����� ����� ����� ���� ����� ����");
define('_COM_C_PREV_PAGE',"Prev Page");
define('_COM_C_NEXT_PAGE',"Next Page");
define('_COM_C_PAGE',"Page");
define('_COM_C_COMMENT',"User Comments");
define('_COM_C_OF',"of");
define('_COM_C_CANCEL',"Cancel");
define('_COM_C_FORM_INTRO',"Enter your comment below.");
define('_COM_C_PREVIEW_HEAD',"Please check your entry...");
define('_COM_C_PREVIEW_INTRO',"Is the below correct? <p />Please make any necessary changes before submitting.  Warning: Cancelling will erase your comment!");
define('_COM_C_REQ',"<small><i> (�����)</i></small>");
define('_COM_C_OPT',"<small><i>(optional)</i></small>");
define('_COM_C_HOMEURL',"here");
define('_COM_C_CHECKLINK',"CHECK LINK");
define('_COM_C_QUICKPOST',"Quick Post");
?>