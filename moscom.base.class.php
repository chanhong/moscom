<?php
/**
* @version 
* @package MosCom - COAddOns for Mambo & Jommla - Comments on Articles based on COMBO by Phil Taylor
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http:/ongetc.com/gpl.html.
*/ 
defined('MOSCOM_DEBUG') or define('MOSCOM_DEBUG',false);
if (MOSCOM_DEBUG) define('CO_DEBUG',true);  // turn on CoBase debug if MOSCOM_DEBUG is turn on
// my general classes
include_once("co.base.class.php");
// moscom classes
include_once("json.php");
include_once("moscom.html.class.php");
include_once("moscom.utils.class.php");

class MoscomBase extends CoBase {
  var $mccom;
  var $m;
  var $config;
  var $h;
  var $ut;
  var $mainframe;
  var $database;
  var $lang;
  var $mccfg;
  var $mcSchema;
  var $my;
  var $type;  
  var $pageNav;

  function MoscomBase() { // contructor
    global $mainframe;
    global $database;
    global $my;
    global $type;  
    $this->mainframe = $mainframe;
    $this->database = $database;
    $this->lang = $GLOBALS['mosConfig_lang'];
    $this->my = $my;   
    $this->type = $type;   
  	if (!defined('_DATE_FORMAT_LC')) DEFINE('_DATE_FORMAT_LC',"%A, %d %B %Y"); //Uses PHP's strftime Command Format
  	if (!isset($coHTML)) $coHTML = new MoscomHTML();
		$this->h = $coHTML;
    if (!isset($coUtils)) $coUtils = new MoscomUtils();
		$this->ut = $coUtils;
    $this->mccom = $this->init($my);

    $mosmodulefunc = $this->mccom['siteabspath'].$this->ut->getBot()."/content/mosmodule/mosmodule_func.php";
    if (file_exists($mosmodulefunc)) { include_once($mosmodulefunc); }
    
    include_once("model".$this->mccom['ds']."moscom.php");
    include_once("model".$this->mccom['ds']."config.php");
    include_once("model".$this->mccom['ds']."comment.php"); 

    if (!isset($moscomModel)) $moscomModel = new MoscomModel();
   	if (!isset($moscomConfigModel)) $moscomConfigModel = new MoscomConfigModel();    
    if (!isset($moscomCommentModel)) $moscomCommentModel = new MoscomCommentModel();
		$this->m        = $moscomModel;    
		$this->config   = $moscomConfigModel;    
		$this->comment  = $moscomCommentModel;  

  	if (!isset($this->mcSchema)) $this->mcSchema = $this->ut->mergeArrayWithRow($this->comment->schemaArrayFromFieldsList("current"),$this->comment->getSchema());	// get comment from db    
  	if (!isset($this->mccfg)) $this->mccfg = $this->ut->mergeArrayWithRow($this->config->schemaArrayFromFieldsList("current"),$this->config->getSchema());	// get cfg from db
  	$this->loadLang();    
  }
  function init($my) {
  	$mccom=(array)$my;
    if ($this->ut->isJ15() and $mccom['gid']==2) {
      $mccom['admin'] = true;
    } else if ($mccom['gid']==25) {
      $mccom['admin'] = true;
    }
      
  	$me='com_comments';
  	$mccom['meip']=$_SERVER['SERVER_NAME'];
//  	$mccom['ds']=$this->ut->setDS();
  	$mccom['ds']=DIRECTORY_SEPARATOR;    
  	$mccom['mesite']="http://ongetc.com/";
  	$mccom['me']=$me;
    /*
    if (function_exists('mosGetParam')) {
      $mccom['cid'] = intval(mosGetParam($_GET, 'cid', 0));
      $mccom['task'] = mosGetParam($_GET, 'task', '');
    }
    */
  	// mambo h:/path/mos joomla path/joomla  H:/mos46, add slash for abs path to make the same as url path with slash for consistent
 // 	$mccom['siteabspath']=$this->ut->mambo['siteabspath']; 
 // 	$mccom['siteurl']=$this->ut->mambo['siteurl'];
//  	$mccom['siteabspath']=$this->ut->fixDupInPathRtrim($GLOBALS['mosConfig_absolute_path'],$mccom['ds']).$mccom['ds']; 
//  	$mccom['siteurl']=$this->ut->fixDupInPathRtrim($GLOBALS['mosConfig_live_site'],'/').'/';
  	$mccom['siteabspath']=$this->ut->fixDupInPathRtrim($GLOBALS['mosConfig_absolute_path']); 
  	$mccom['siteurl']=$this->ut->fixDupInPathRtrim($GLOBALS['mosConfig_live_site']);
   	$mccom['mcdpath']='components'.$mccom['ds'].$me.$mccom['ds']; // components\com_comments\ if Windows
  	$mccom['mcadpath']='administrator'.$mccom['ds'].$mccom['mcdpath']; // administrator\components\com_comments\ if Windows
  	$mccom['mcaabspath']=$mccom['siteabspath'].$mccom['mcadpath']; // H:/mos46/administrator/components/com_comments/ 
  	$mccom['mcaabslangpath']=$mccom['mcaabspath'].'language'.$mccom['ds']; // H:/mos46/administrator/components/com_comments/language/
  	// url has slash but abspath has no slash, be consistent!
  	$mccom['mcupath']=$this->ut->ds2UrlPath($mccom['mcdpath'],$mccom['ds']); // components/com_comments/
  	$mccom['mcaupath']=$this->ut->ds2UrlPath($mccom['mcadpath'],$mccom['ds']); // administrator/components/com_comments/
  	$mccom['mcasiteurl']=$mccom['siteurl'].$mccom['mcaupath']; // http://localhost/mos46/administrator/components/com_comments/
  	$mccom['feindex']="index.php?option=";
  	$mccom['beindex']="index2.php?option=";
// move here in case something cause this to fail and won't skip all code above
    if (function_exists('mosGetParam')) {
      $mccom['cid'] = intval(mosGetParam($_GET, 'cid', 0));
      $mccom['task'] = mosGetParam($_GET, 'task', '');
    }    
//  	$mccom['version']=$this->ut->moscomVersion($mccom['mcaabspath'].'comments.xml'); // more efficient here
    return $mccom;
  }
  function loadLang() {
  	if ($this->lang=="en" or $this->lang=="") $this->lang="english"; //for Mambo 4.6 w/ gettext where it return en instead of english
  	$langfile=$this->mccom['mcaabslangpath'].$this->lang.'.php';
  	if ($this->ut->usingOnce($langfile)==false) $this->ut->usingOnce($this->mccom['mcaabslangpath'].'english.php'); 
//  	return "<!-- ".$langfile." -->";
  }
  function jQueryLoad() {
     return $this->ut->inHeadJS($this->mccom['mcasiteurl'].'js/moscom.jquery.js')    
    .$this->ut->inHeadJS($this->mccom['mcasiteurl'].'js/moscom.ui.tabs.js')
    .$this->ut->inHeadJS($this->mccom['mcasiteurl'].'js/moscom.js')
    ;
  }   
  function moscomURL($text) { return "<!-- MosCom $text version: ".$this->mccom['version']." http://ongetc.com -->"; }
  function commentEditLink($row) { return '<a href="index2.php?option=com_comments&task=editcomment&cid='.intval($row->id).'">'.$row->entry.'</a>'; }
  // need to work on this logic more to tight down security
  function isTokenGood() {
    $token=$this->ut->getToken($this->mccom);
  	if (strlen($token) == 10 and is_numeric($token)) {
      $this->mccom['moscomts'] = $token;
      $return = "1";
    } 
    else if ($token == "-1") $return = 'Too much time elapsed!'; 
    else if ($token == "0") $return = 'Form processing halted for suspicious activity!'; 
    return $return;
  }  
  function commentPoststringAjax($id, $itask, $Itemid, $start, $show) {
    return "index2.php?".$this->commentBuildPS($id, $itask, $Itemid, $start, $show)."&no_html=1";
  }  
  function commentBuildPS($id, $itask, $Itemid, $start, $show) {
    $itask ? $task="&task=".$itask : $task="";
  	$start ? $startstr="&start=$start": $startstr="";
  	$show ? $showstr="&show=1": $showstr="";
  	$ps = "option=com_comments".$task."&id=".$id."&Itemid=".$Itemid;    
  	return $ps.$showstr.$startstr.$returnstr;
  }
  function commentPoststring($id, $itask, $Itemid, $start, $show) {
    return $this->ut->ampIt("index.php?".$this->commentBuildPS($id, $itask, $Itemid, $start, $show));
  }
  function isShowLink($option,$mccom) {
    $show = true;
    if (($this->isMCBOT()=="1" and ($mccom['etype']=="com"))  	// avoid dup
      or ($this->mambotParm("showonfp")=="0" and $_SERVER['QUERY_STRING']=="") 	// dont' show on joomla frontpage
      or ($this->mambotParm("showonfp")=="0" and !preg_match("/com_content/i", $option)) 	// don't show on mambo frontpage
      or ($this->mambotParm("showonfp")=="0" and $this->isMCBOT()=="1" and  empty($option))   // only turn off when bot is install but, noshowfp and not content
//      or ($this->ut->isJ15() and $_SERVER['QUERY_STRING']=="") // don't show on frontpage for J15, whether showfp or not, 1.5.12 is ok now
      ) {
      $show = false;
    }
    return $show;
  }  
  function navLink($thispage, $num, $start, $per_page) {
    $showeachside = 5; //  Number of items to show either side of selected page
    $prevpagelink=$nextpagelink=$prevdot=$sufdot=$pagenum="";

    $eitherside = ($showeachside * $per_page);
    if ($start+1 > $eitherside) { $prevdot = " .... "; }  
    if (($start+$eitherside)<$num) { $sufdot = " .... "; }   
    $pg=1;
    for ($y=0;$y<$num;$y+=$per_page) {   
      $class=($y==$start)?'moscomPAGESelected':'';
      if (($y > ($start - $eitherside)) && ($y < ($start + $eitherside))) {
        $pagenum.='&nbsp;<a class="'.$class.'" href="'.$thispage. ($y>0?('&start=').$y:'') .'#comments">'.$pg.'</a>&nbsp;';
//        $pagenum.='&nbsp;<a class="'.$class.'" href="'.$thispage. ($y>0?('&amp;start=').$y:'') .'#comments">'.$pg.'</a>&nbsp;';        
      }
      $pg++;
    }

    if (($start-$per_page) >= 0) { 
      $next = $start-$per_page; 
//      $prevpagelink='<a href="'.$this->sef2NormURL($thispage.($next>0?('&amp;start=').$next:''));  
      $prevpagelink='<a href="'.$this->sef2NormURL($thispage.($next>0?('&start=').$next:''));        
      $prevpagelink.= '#comments">< '._COM_C_PREV_PAGE.'</a>';
    } 
    if ($start+$per_page<$num) { 
//      $nextpagelink='&nbsp;<a href="'.$this->sef2NormURL($thispage.'&amp;start='.max(0,$start+$per_page));
      $nextpagelink='&nbsp;<a href="'.$this->sef2NormURL($thispage.'&start='.max(0,$start+$per_page));      
      $nextpagelink.= '#comments">'._COM_C_NEXT_PAGE.' ></a>';
    }
    
    $max_pages = ceil($num / $per_page); // Number of pages
    $cur = ceil($start / $per_page)+1; // Current page number    
    // Page 1 of 0 ( 0 comments )
    $navtext = _COM_C_PAGE.' '.$cur.' '._COM_C_OF.' '.$max_pages.' ( '.$num.' '._COM_C_COMMENT.' )';    
    
    return $prevpagelink." ".$prevdot.$pagenum.$sufdot.$nextpagelink."<br />".$navtext; 
  }  
  function setHomeURL() {
  	if ($this->mccfg['use_divcss']=="0") {
      $iurl = _COM_C_HOMEPAGE_IN.'<span class="moscomFORMLabelSuffix">'. _COM_C_OPT. '</span><br /><input type="text" title="'._COM_C_HOMEPAGE_IN.'" name="mc_comment_homepage" style="width:268px;" class="inputbox" value="http://" tabindex="3" /><br />';
    } else {
        $iurl = '<p><label for="mc_comment_homepage" id="labelmc_comment_homepage" class="moscomFORMLabel">'. _COM_C_HOMEPAGE_IN. '</label>
	<input type="text" title="'._COM_C_HOMEPAGE_IN.'" name="mc_comment_homepage" id="mc_comment_homepage" class="moscomInputBox" value="http://" tabindex="3" />
	<span class="moscomFORMLabelSuffix">'. _COM_C_OPT. '</span></p>';
  }
   	($this->mccfg['hide_url']=="0") ? $lshow_url = $iurl : $lshow_url="";
  	return $lshow_url;
  }
  function setEmailSuffix() {
    ($this->mccfg['email_req']=="0") ? $lemailsuffix=_COM_C_OPT : $lemailsuffix=_COM_C_REQ;
    return $lemailsuffix;
  }
  function sef2NormURL($url) { return $this->ut->ampIt($this->ut->unSefURL($this->mccom['siteurl'].$url)); }  
  function commentBy($type, $iVar, $iClass="") {
    switch (strtolower($type)) {
    case "user" : 
      $return = count($iVar) . " " ._COM_C_COMMENT . " ". _COM_C_POST.' '.$iVar['name']; 
      break;
    case "name" : 
      $return = _COM_C_POST.' '.stripslashes($iVar->name).', '.$this->userHomePage($iVar, $iClass).$this->ut->getOffsetDate($iVar); 
      break;
    }
    return $return;
  }  
  function commentListX($rows, $param) {
    $output = "";
    foreach ($rows as $row) {
      if ($param['type']=="userx") { // "userX"
        $metaData = " <span class=\"moscomlatesxmeta\">"
        .$this->ut->getOffsetDate($row)
        ."</span>";
      } else if ($param['type']=="latestx") {  // "latestX"
        $metaData =  " <span class=\"moscomlatesxmeta\">"
            .$this->commentBy("name", $row, $param['moduleclass_sfx'])    
/*            
          ._COM_C_POST.' '.stripslashes($row->name).', '
          .$this->userHomePage($row, $param['moduleclass_sfx'])
          .$this->ut->getOffsetDate($row)
  */        
          ."</span>"; 
      }

      $itemid = $this->m->getItemid($row);
      $thisurl = $this->sef2NormURL("index.php?option=com_content&task=view&id=".$row->id."&Itemid=".$itemid."&show=1");   
      $atitle = $this->ut->setNameWithMaxLength($row->title, $param['max_length']);
      $output .= "<li><span class=\"moscomlatesxmeta\">"._COM_C_NEW_COM."</span> "
//        .$this->h->aLink($thisurl,$atitle,"notarget")
        .$this->h->aLink($thisurl,$atitle)        
        .$metaData."</li>";
    }
    return "<div class=\"moduletable".$param['moduleclass_sfx']."\"><ul>"
    .$output."</ul></div>";
  }
  function userHomePage($iVar, $iClass) {
    (!$iVar->homepage || $iVar->homepage == "http://" || $iVar->homepage == $this->mccom['siteurl']) 
      ? $lhomepage=""
      : $lhomepage = "<span class=\"".$iClass."url\">"._COM_C_HOMEPAGE." ".$this->h->aLink($iVar->homepage,_COM_C_HOMEURL)." "; 
    return $lhomepage;
  }  
  // view can use $this  or $viewData from this class for data into view
  function renderView($filename) {
    $viewFile = $this->ut->frontOrBack($this->mccom)."view".$this->mccom['ds'].$filename;    
    $this->ut->ppDebug($viewFile,__METHOD__.' etype=>'.$this->mccom['etype']);  
    return parent::renderView($viewFile);
	}  
  function getArticleTitleLink($larticleid) {
    $art_txt = $this->m->getArticleTitle($larticleid);
    return $this->h->aLink("../index.php?option=com_content&task=view&id=$larticleid",$art_txt); // .. to get from the root not admin
  }  
  
  function getLatestX($numberofposts, $iusername="") {
    if (empty($iusername)) {
      $usrname = "";
    } else {
      $usrname = " and a.name = '".$iusername."'"; // get name
    }
    return $this->comment->getLatestX($numberofposts, $usrname);
  }    
  function getUserInfo($mccfg) {
  	$ruser=array('name'=>'','email'=>'','mode'=>'');
  	if ($mccfg['regonly'] == "1" || $this->my->id <> "") {
  		$mc_user = $this->m->dbQuerySelect("SELECT * FROM #__users where id = ".$this->my->id);  // get username
  		if ($mc_user) {
//        $this->mccom['gid'] = $mc_user[0]->gid;      
        ($mccfg['use_username'] == "1") 
        ?  $ruser['name'] = $mc_user[0]->username // pull username from user array        
        :  $ruser['name'] = $mc_user[0]->name; // pull name from user array
  		  $ruser['email'] = $mc_user[0]->email;
  		  $ruser['gid'] = $mc_user[0]->gid;        
  		  $ruser['mode'] = 'READONLY';
  		}
  	}
  	return $ruser;
  }
  function getBotId() {
  	$query = "SELECT id FROM ".$this->ut->getBotTableName()." WHERE element = 'moscombot' AND folder = 'content'";
    return $this->m->dbQuerySelectValue($query);
  }
  function mambotParm($parm) {
  	$mambot = new mosMambot( $this->database );
  	$mambot->load( $this->getBotId() );
  	$bot_params =& new mosParameters( $mambot->params );
  	return $bot_params->def($parm);
  }
  function isMCBOT() { 
    return $this->m->dbQuerySelectValue("SELECT published FROM ".$this->ut->getBotTableName()." WHERE name LIKE 'moscombot'"); 
  }  
 
} // end class
?>