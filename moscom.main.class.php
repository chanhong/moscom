<?php
/**
* @version 
* @package MosCom - COAddOns for Mambo & Jommla - Comments on Articles based on COMBO by Phil Taylor
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http:/ongetc.com/gpl.html.
*/ 
// comment this line for production
//defined('MOSCOM_DEBUG') or define('MOSCOM_DEBUG',true);
include_once("moscom.base.class.php");
class MoscomMain extends MoscomBase{

  // init from comment and comment admin
  function myInit($aid, $etype="bot") {
    $mccom = $this->mccom;
  	if (!isset($mccom['gaid'])) {	// set this value once for check later to prevent double post in Joomla 1.0.15 and Mia
  		$mccom['gaid']=$aid;
  	}
  	$mccom['articleid']=$aid;
  	$mccom['atitle']=$this->m->getArticleTitle($aid);
  	$mccom['etype']=$etype;
//  	$mccom['version']=$this->ut->moscomVersion($mccom['mcaabspath'].'comments.xml');    // cause memory exhaust in some config
  	return $mccom;
  }
  // entry point from comments, mosmodule, moscombot
  function mcMain($id, $etype="com") {
    include_once("controller".$this->mccom['ds']."front.php");
    if (!isset($moscomFront)) $moscomFront = new MoscomFront();
    return $moscomFront->showMain($id, $etype);
  }
  // entry point from admin
  function mcaMain($cid, $option, $task) {
    include_once("controller".$this->mccom['ds']."admin.php");
    if (!isset($moscomAdmin)) $moscomAdmin = new MoscomAdmin();
    return $moscomAdmin->showMain($cid, $option, $task);
  }
  // entry point from moscom cpplug
	function showUserX($parms) {
    ($this->mccfg['use_username'] == "1") 
    ?  $param['name'] = $parms['username'] // pull username from user array        
    :  $param['name'] = $parms['name']; // pull name from user array
        
    if (!$rows=$this->getLatestX($parms['number_posts'],$param['name']))
      return "<p align=\"center\">No new comments</p>";
  
    $this->loadLang();   
    $param['moduleclass_sfx'] = "";  
    $param['type'] = "userx";  
    $param['max_length'] = $parms['max_length'];   
//    $messageby = count($rows) . " " ._COM_C_COMMENT . " ". _COM_C_POST.' '.$param['name']; 
 
    $messageby = $this->commentBy("user",$param);  
    
    return "<div><strong>".htmlspecialchars($messageby)."</strong><p>"
    .$this->commentListX($rows, $param)
    ."</p></div>";
	}
  // entry point from mod_moscomlatestx
  function showLatestX($params) { 
    if (!$rows=$this->getLatestX($params->get('number_posts')))
      return "<p align=\"center\">No new comments</p>";

    $this->loadLang(); 
    $param['max_length'] = $params->get( 'max_length');
    $param['moduleclass_sfx'] = $params->get('moduleclass_sfx');    
    $param['type'] = "latestx";    
    return  $this->commentListX($rows, $param);
  }    
  
} // end class
?>