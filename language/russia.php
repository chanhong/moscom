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
define('_COM_A_KEEPUPTODATE','If you want to keep up to date with this and other great components from Chanh Ong please subscribe to the mailing list by clicking these buttons');
define('_COM_A_SUBSCRIBE','Подписаться');
define('_COM_A_UNSUBSCRIBE','Отказаться от подписки');
define('_COM_A_BACKUP','Создать архив(Backup)');
define('_COM_A_BACKUP_DESC','Создать архив таблицы комментариев');
define('_COM_A_RESTORE','Восстановить из архива');
define('_COM_A_RESTORE_DESC','Восстановить таблицу комментариев из архива');
define('_COM_A_CONFIG','Настройка');
define('_COM_A_CONFIG_DESC','Изменить настройку');
define('_COM_A_INSTRUCTIONS','Инструкции');
define('_COM_A_INSTRUCTIONS_DESC','Настройка после установки');
define('_COM_A_ABOUT','Описание');
define('_COM_A_ABOUT_DESC','Описание компоненты');
define('_COM_A_LINK','Ссылка');
define('_COM_A_LINK_DESC','На сайт авторов');
define('_COM_A_CHECK','Проверить наличие обновлений');
define('_COM_A_VERSION','Ваша версия ');
define('_COM_A_DONATE','Кнопка для пожертвований. Пожертвовав деньги вы простимулируете дальнейшее развитие программы');
define('_COM_A_REVIEW','Пересмотреть комментарии (От новых к более старым)');
define('_COM_A_DISPLAY','Вывести #');
define('_COM_A_NAME_SUB','Имя');
define('_COM_A_EMAIL_SUB','Email');
define('_COM_A_HOMEPAGE','Домашняя страничка');
define('_COM_A_COMMENT','Комментарий');
define('_COM_A_ARTICLE','Статья');
define('_COM_A_PUBLISHED','Опубликовано');
define('_COM_A_MOS_BY','A MOS4.5 Custom Component by');
define('_COM_A_CURRENT_SETTINGS','Текущие настройки');
define('_COM_A_EXPLANATION','Объяснение');
define('_COM_A_ADMIN_EMAIL','Email администратора');
define('_COM_A_ADMIN_EMAIL_DESC','Если email включен, то email будет отослан на указанный аддресс при появлении новых комментариев');
define('_COM_A_ADMIN_ALERTS','Оповещение администратора по Email');
define('_COM_A_ADMIN_EMAIL_ENABLE','Включить/Выключить отсылку писем администратору');
define('_COM_A_VISITOR_EMAIL','Оповещения визитёра по Email');
define('_COM_A_VISITOR_EMAIL_DESC','Включить/Выключить отсылку email автору комментариев');
define('_COM_A_REVIEW_SUBM','Просмотр введённой формы');
define('_COM_A_REVIEW_DESC','Режим модератора. Пока комментарий не будет просмотрен админом, комментарий не опубликуется. Вы получите оповещение <strong>только при условии</strong> включённого оповещения администратора по email');
define('_COM_A_REGISTERED_ONLY','Только для зарегистрированных пользователей');
define('_COM_A_REG_ONLY_DESC','&quot;Включить&quot; и только зарегистрированные пользователи смогут видеть и оставлять комментарии');
define('_COM_A_NOTIFY_VERSION','Оповещение о новых версиях');
define('_COM_A_NOT_VER_DESC','Диалог оповещения об обновлениях (на сервер обновлений отсылается только текущая версия компонента)');
define('_COM_A_HAVE_DONATED','Вы уже что-то пожертвовали?');
define('_COM_A_DONATE2','Пожертвуйте мне &pound;10.00 через paypal. Это вдохновит меня на дальнейшую разработку :-)');
define('_COM_A_IMPORTANT_NOTE','ВАЖНЫЕ ЗАМЕТКИ');
define('_COM_A_TEMPLATE','In order for mambo to check and see if its showing an article that can be commented on, you must make a small change to your template.<br><a href="index2.php?option=templates&task=edit">Edit your template file</a> and look for the entry');
define('_COM_A_CHANGE_TO','Измените это на следующее');
define('_COM_A_HAVE_FUN','Thats it! ~ (I will not be answering emails along the line of &quot;<em>I&quot;ve installed your component but the form doesn&quot;t show.....</em>&quot; :-)</p> <p>          Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_COM_A_FORCE_PREVIEW','Обязательный просмотр введённого');
define('_COM_A_FORCE_PREVIEW_TEXT','Обязательный предпросмотр введённого');
define('_COM_A_HIDE','Спрятать комментарии');
define('_COM_A_HIDE_DESC','Показывать (Комментарии (x) - Добавить комментарий) вместо списка комментариев и формы прямо в статье');
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
define('_COM_A_NO',"Нет");
define('_COM_A_YES',"Да");
define('_COM_C_COM_NUMBER',"Колличество комментариев");
define('_COM_C_NO_COM',"Пока никто не прокомментировал - для Вашего комментария заполните приведённую ниже форму...");
define('_COM_C_POST',"Написал");
define('_COM_C_HOMEPAGE',"<br>Домашняя страница");
define('_COM_C_DATE_ON',"<br>Дата");
define('_COM_C_DATE_AT',"Время");
define('_COM_C_ADD_COM',"Ваш комментарий:");
define('_COM_C_ADD_COM2'," ...");
define('_COM_C_NAME',"Ваше имя");
define('_COM_C_EMAIL',"E-Mail");
define('_COM_C_EMAIL_NOT',"Ваш email не будет опубликован на сайте, он будет виден только администратору сайта");
define('_COM_C_HOMEPAGE_IN',"Домашняя страница");
define('_COM_C_COM',"Текст:");
define('_COM_C_FULLY',"Не все поля заполнены!");
define('_COM_C_NEW_COM',"Дата нового комментария");
define('_COM_C_HAVE_NEW',"Появился новый комментарий к статье:");
define('_COM_C_LOGIN',"Пожалуйста зарегистрируйтесь на сайте, чтобы опубликовать или удалить комментарий");
define('_COM_C_QUICKLINK',"Быстрая ссылка для регистрации на сайте (login)");
define('_COM_C_THANKS',"Спасибо за Ваш комментарий к статье");
define('_COM_C_THANKS2',"Спасибо за Ваш комментарий к слудующей статье");
define('_COM_C_ADMIN_REV',"Ваш комментарий будет опубликован после проверки модератором");
define('_COM_C_ENTERED',"Вы ввели");
define('_COM_C_VISIT',"Заходите ещё");
define('_COM_C_THANKS3',"Спасибо за комментарий");
define('_COM_C_THANKS4',"Ваш комментарий будет опубликован после проверки модератором!");
define('_COM_C_SUBMIT',"Отослать");
define('_COM_C_RESET',"Reset");
define('_COM_C_NOT_AUTH',"Чтобы оставить/прочитать комментарии - зарегистрируйтесь (залогиньтесь)");
define('_COM_C_PREV_PAGE',"Prev Page");
define('_COM_C_NEXT_PAGE',"Next Page");
define('_COM_C_PAGE',"Page");
define('_COM_C_COMMENT',"User Comments");
define('_COM_C_OF',"of");
define('_COM_C_CANCEL',"Cancel");
define('_COM_C_FORM_INTRO',"Enter your comment below.");
define('_COM_C_PREVIEW_HEAD',"Please check your entry...");
define('_COM_C_PREVIEW_INTRO',"Is the below correct? <p />Please make any necessary changes before submitting.  Warning: Cancelling will erase your comment!");
define('_COM_C_REQ'," <small><i>(обязательное поле)</i></small>");
define('_COM_C_OPT'," <small><i>(optional)</i></small>");
define('_COM_C_HOMEURL',"here");
define('_COM_C_CHECKLINK',"CHECK LINK");
define('_COM_C_QUICKPOST',"Quick Post");
?>