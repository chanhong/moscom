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
define('_COM_A_KEEPUPTODATE','Si quieres mantenerte actualizado con �ste y otros excelentes componentes de Chanh Ong subscr�bete a la lista de correo clickeando en estos botones');
define('_COM_A_SUBSCRIBE','Subscribir');
define('_COM_A_UNSUBSCRIBE','Desuscribir');
define('_COM_A_BACKUP','Respaldo');
define('_COM_A_BACKUP_DESC','Respalda la tabla #__content_comments');
define('_COM_A_RESTORE','Restaurar');
define('_COM_A_RESTORE_DESC','Restaurar la tabla #__content_comments');
define('_COM_A_CONFIG','Configuraci�n');
define('_COM_A_CONFIG_DESC','Cambia la configuraci�n');
define('_COM_A_INSTRUCTIONS','Instrucciones');
define('_COM_A_INSTRUCTIONS_DESC','Configuraci�n Post Instalaci�n');
define('_COM_A_ABOUT','Acerca');
define('_COM_A_ABOUT_DESC','Acerca de este componente');
define('_COM_A_LINK','Enlace');
define('_COM_A_LINK_DESC','Al sitio web del autor');
define('_COM_A_CHECK','Buscar actualizaciones');
define('_COM_A_VERSION','Su versi�n es ');
define('_COM_A_DONATE','Por favor considera pulsar el bot�n y enviarme GBP�5.00 Me inspirar� para mejorar este script');
define('_COM_A_REVIEW','Revisar Comentarios (Recientes primero)');
define('_COM_A_DISPLAY','Mostrar #');
define('_COM_A_NAME_SUB','Nombre');
define('_COM_A_EMAIL_SUB','Email');
define('_COM_A_HOMEPAGE','Sitio web');
define('_COM_A_COMMENT','Comentario');
define('_COM_A_ARTICLE','Art�culo');
define('_COM_A_PUBLISHED','Publicado');
define('_COM_A_MOS_BY','Componente para MOS4.5 por');
define('_COM_A_CURRENT_SETTINGS','Opciomes Actuales');
define('_COM_A_EXPLANATION','Explicaci�n');
define('_COM_A_ADMIN_EMAIL','Email del Administrador');
define('_COM_A_ADMIN_EMAIL_DESC','Si la opci�n email est� activa, se te enviar� un email a esta casilla cuando will se ingrese un nuevo comentario');
define('_COM_A_ADMIN_ALERTS','Alertas por Email al Administrador');
define('_COM_A_ADMIN_EMAIL_ENABLE','Habilitar/Deshabilitar emails al Administrador');
define('_COM_A_VISITOR_EMAIL','Alertas por email al Visitante');
define('_COM_A_VISITOR_EMAIL_DESC','Habilitar/Deshabilita emails a la persona que envi� el comentario');
define('_COM_A_REVIEW_SUBM','Revisar Env�os');
define('_COM_A_REVIEW_DESC','Al optar por SI los comentarios se agregar�n a la base de datos, esperando su revisi�n y publicaci�n antes de hacerse p�blicos. Recibir� un email <strong>s�lo</strong> si est� activado &quot;Email al Admin&quot; y has fijado &quot;Alerts por Email &quot; en &quot;SI&quot;');
define('_COM_A_REGISTERED_ONLY','S�lo Usuarios Registrados');
define('_COM_A_REG_ONLY_DESC','Establezca &quot;SI&quot; para permitir que s�lo los usuarios registrados vean o dejen comentarios, Establezca &quot;No&quot; para permitir que cualquier visitante haga comentarios');
define('_COM_A_NOTIFY_VERSION','Notificarme si hay una nueva vesi�n disponible');
define('_COM_A_NOT_VER_DESC','Si establece &quot;SI&quot; se le mostrar� un di�logo en la pantalla cuando exista una nueva versi�n de este componente (<em>NOTA: Los �nicos datos eviados al servidor de actualizaci�n es el n�mero de su versi�n</em>)');
define('_COM_A_HAVE_DONATED','Ha hecho una donaci�n?');
define('_COM_A_DONATE2','Por avor considere donar GBP&pound;10.00 a trav�s de paypal. Me instpriar� para mejorar m�s este script.! :-)');
define('_COM_A_IMPORTANT_NOTE','NOTAS IMPORTANTES');
define('_COM_A_TEMPLATE','Para que mambo revise si est� mostrando un art�culo que puede ser comentado, deber� modificar ligeramente su template.<br><a href="index2.php?option=templates&task=edit">Edit your template file</a> y busque la entrada');
define('_COM_A_CHANGE_TO','Cambie esto a lo siguiente');
define('_COM_A_HAVE_FUN','Listo! ~ (No contestar� del estilo de &quot;<em>Instal� su componente pero el formulario no se ve.....</em>&quot; :-)</p> <p>          Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
define('_COM_A_FORCE_PREVIEW','Forzar vista previa');
define('_COM_A_FORCE_PREVIEW_TEXT','Establezca esto en SI para forzar a sus vistantes a ver su comentario antes de enviarlo');
define('_COM_A_HIDE','Ocultar Comentarios');
define('_COM_A_HIDE_DESC','Mostrar (Comentarios (x) - Agregar Comentarios) en vez de los comentarios y el formulario por defecto');
define('_COM_A_DATE','Fecha');
define('_COM_A_HIDE_URL','Ingrese URL');
define('_COM_A_HIDE_URL_DESC','Ocultar URL - Utilizado par ocultar URL en el formulario de comentarios por defecto');
define('_COM_A_EMAIL_REQ','Email es obligatorio');
define('_COM_A_EMAIL_REQ_DESC','Utilizado para configurar email obligatorio o no en el formulario de comentarios por defecto');
define('_COM_A_EXCL_SEC','Secci�n de Exclusi�n');
define('_COM_A_EXCL_SEC_DESC','Utilizado para no mostrar la secci�n de exclusi�n en el formulario de comentarios por defecto, por ejemplo : 0,1');
define('_COM_A_PER_PAGE','Comenatarios por P�gina');
define('_COM_A_PER_PAGE_DESC','Utilizador para mostrar el n�mero de comentarios por p�gina, por ejemplo : 3');
define('_COM_A_NEW_1ST','Primero los Nuevos Comentarios');
define('_COM_A_NEW_1ST_DESC','Muestra en la lista las nuevas entradas de comentarios');
define('_COM_A_FORM_ABOVE','El formulario de comentarios Arriba');
define('_COM_A_FORM_ABOVE_DESC','Muestra el formulario de comentario arriba de las entradas de comentarios');
define('_COM_A_USE_DIVCSS','Usa DIV CSS');
define('_COM_A_USE_DIVCSS_DESC','Muestra el formulario de comentario usando DIV CSS desde el template');
define('_COM_A_EXCL_CONT','Contenidos Exclu�dos');
define('_COM_A_EXCL_CONT_DESC','Utilizado para excluir contenidos via ID del art�culo no para mostrar el formulario de comentario, por ejemplo : 0,1');
define('_COM_A_IP','IP');
define('_COM_A_USE_USERNAME','Use username');
define('_COM_A_USE_USERNAME_DESC','Show username instead of name');
define('_COM_A_CLOSE_CONT','Close Contents');
define('_COM_A_CLOSE_CONT_DESC','Use to close contents via article id not to show comments form, eg: 0,1');
define('_COM_A_USE_SECTOKEN','Use security token');
define('_COM_A_USE_SECTOKEN_DESC','Check for security token when submit comment (invisible Captcha)');

//comments.php
define('_COM_A_NO',"No");
define('_COM_A_YES',"SI");
define('_COM_C_COM_NUMBER',"N�mero de comentarios");
define('_COM_C_NO_COM',"A�n no hay comentarios - Agrega uno usando el formulario de abajo ...");
define('_COM_C_POST',"Enviado por ");
define('_COM_C_HOMEPAGE',"Cuyo sitio web es");
define('_COM_C_DATE_ON',"el");
define('_COM_C_DATE_AT',"a");
define('_COM_C_ADD_COM',"Agrega tus comentarios a este art�culo...");
define('_COM_C_ADD_COM2'," ...");
define('_COM_C_NAME',"Nombre");
define('_COM_C_EMAIL',"E-Mail");
define('_COM_C_EMAIL_NOT',"Tu email no ser� mostrado en este sitio - s�lo al administrador");
define('_COM_C_HOMEPAGE_IN',"Sitio Web");
define('_COM_C_COM',"Comentario");
define('_COM_C_FULLY',"Por favor llena completa el formulario!");
define('_COM_C_NEW_COM',"Nuevo comentario en ");
define('_COM_C_HAVE_NEW',"Hay un nuevo comentario sobre:");
define('_COM_C_LOGIN',"Por favor ingrese y publique o borre este comentario");
define('_COM_C_QUICKLINK',"Enlace r�pido para ingresar");
define('_COM_C_THANKS',"Gracias por tu comentario sobre");
define('_COM_C_THANKS2',"Gracias por tu comentario sobre el siguiente art�culo");
define('_COM_C_ADMIN_REV',"Un administrador revisar� su comentario a la brevedad");
define('_COM_C_ENTERED',"Usted ingres�");
define('_COM_C_VISIT',"Por favor viste nuestro sitio nuevamente en ");
define('_COM_C_THANKS3',"Gracias por su comentario - Ha sido agregado a esta p�gina");
define('_COM_C_THANKS4',"Gracias por su comentario - Ser� revisado por un administrador antes de ser publicado!");
define('_COM_C_SUBMIT',"Enviar");
define('_COM_C_RESET',"Limpiar");
define('_COM_C_NOT_AUTH',"No est� autorizado a dejar comentarios - Por favor, ingrese como usuario.");
define('_COM_C_PREV_PAGE',"P�gina Anterior");
define('_COM_C_NEXT_PAGE',"P�gina Siguiente");
define('_COM_C_PAGE',"P�gina");
define('_COM_C_COMMENT',"comentarios");
define('_COM_C_OF',"de");
define('_COM_C_CANCEL',"Cancelar");
define('_COM_C_FORM_INTRO',"Ingrese su comentario abajo.");
define('_COM_C_PREVIEW_HEAD',"Por favor, revisa tu ingreso...");
define('_COM_C_PREVIEW_INTRO',"�Est� correcto lo de abajo? <p />Por favor, haga cualquier cambio necesario antes de enviar.  Advertencia : Cancelando borrar� tu comentario!");
define('_COM_C_REQ'," <small><i>(requerido)</i></small>");
define('_COM_C_OPT'," <small><i>(optional)</i></small>");
define('_COM_C_HOMEURL',"here");
define('_COM_C_CHECKLINK',"CHECK LINK");
define('_COM_C_QUICKPOST',"Quick Post");
?>