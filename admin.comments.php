<?php
/**
* @version 
* @package MosCom - COAddOns for Mambo & Jommla - Comments on Articles based on COMBO by Phil Taylor
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
include_once('components/com_comments/moscom.main.class.php');
$cid = mosGetParam( $_REQUEST, 'cid', array() );
global $moscom;
if (!isset($moscom)) $moscom = new MoscomMain();
echo $moscom->mcaMain($cid, $option, $task);
?>
