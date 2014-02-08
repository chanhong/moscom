<?php
/**
* @version 
* @package MosCom - COAddOns for Mambo & Jommla - Comments on Articles based on COMBO by Phil Taylor
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http:/ongetc.com/gpl.html.
*/ 

class MoscomFront extends MoscomMain{

  function showMain($id,$etype="com") {   
  	global $task, $option, $Itemid;
  
    $this->mccom = $this->myInit($id,$etype); // much pass the article id  
//    $this->ut->ppDebug($this->mccom,__METHOD__);  
  	if ( (!$this->mccom['atitle']) or (!$this->comment->notExclude($this->mccfg,$this->mccom['articleid'])) ) return;   // no valid article
    
  	$Itemid = mosGetParam( $_REQUEST, 'Itemid', NULL );
  	$return = mosGetParam( $_REQUEST, 'return', NULL );
  	$show = mosGetParam( $_REQUEST, 'show', NULL );
  	$start = mosGetParam( $_REQUEST, 'start', 0 ); // default to first page
  	if (!isset($secid)) { $secid=""; }

// can't echo anything will break the ajax call    
//    $this->ut->ppDebug($task,__METHOD__);       
//  	$output = "<!-- Itemid = ".$Itemid." show: $show -->";
  	$output = "";    
  	switch ($task) {
    case "gettoken":
      $mysite=$this->ut->getParam('ip');
      if ($this->ut->isGoodRequest($mysite)==true) $this->ut->sendToken($mysite);
      break;
  	case "quickcomment":
//      $output = $this->isTokenGood();  

      ($this->mccfg['use_sectoken']=="1")  
      ? $output = $this->isTokenGood()
      : $output = "1"; // bypass security token check       
      if ($output=="1") {   // check to make sure token is good before allow insert        
        $output = $this->comment->dbAdd($this->mccom, $this->mccfg);
      } 
      $this->ut->sendHeader();           
      echo $this->ut->jsonEncode(array("msg"=>$output));      
      break;    
  	case "addcomment":
    
      ($this->mccfg['use_sectoken']=="1")  
      ? $output = $this->isTokenGood()
      : $output = "1"; // bypass security token check 
      if ($output=="1") {   // check to make sure token is good before allow insert    
        $output = $this->comment->dbAdd($this->mccom, $this->mccfg);  
        $output = $this->h->jsPopupAlert($return, $output);        
      } 
      echo "<p />".$output;
      break;
  	case "preview":
  		echo $this->commentAddPreview($this->mccom, $return, $Itemid, $start, $show, $this->mccfg);
  		break;
  	case "category": 
  	case "section": 
  		break; // exclude cat id not cid          
  	//  case "blogcategory":
  	//  case "blogsection": // show comment link on blog
  	case "view":
  	default:
    // if bot publish or not public but use com
      if ($this->isShowLink($option, $this->mccom)==true) {     
//        $this->ut->ppDebug($this->mccom,__METHOD__);             
        return $this->commentCSS()
       .$this->commentLink($this->mccom['articleid'])
       .$this->commentForm($this->mccom, $this->mccfg, $Itemid, $show, $start)
        ;
      }
  	}
  }
  function commentCSS() {
    $mccss = $this->mccom['mcasiteurl'].'css/moscom.css';
   ($this->mccom['etype'] == "bot") 
   ? $cssLink = $this->ut->inHeadCSS($mccss)
   : $cssLink = $this->h->cssLink($mccss);
   return $cssLink;  
  }  
  function commentLink($id) {
    global $option,$Itemid;
    global $gaid;
    $gaid=$id;

    $mc_numrows = count($this->comment->dbSelectArticleComments($this->mccfg, $id));
    if (preg_match("/com_frontpage/i", $option)) 
      $thisoption = "com_content";  // overwrite frontpage
    else if ($option) {
    	$thisoption = $option;
    } else {
    	$thisoption = "com_content";
    }

    $catid	= mosGetParam( $_REQUEST, 'catid', 1 );	// need to have this so J1.5 can route correct with SEO enable
    $thisurl = "index.php".$this->h->href(array('option'=>$thisoption, 'task'=>"view", 'catid'=>$catid, 'id'=>$id, 'Itemid'=>$Itemid));
//    $thisurl="index.php?option=".$thisoption."&task=view&catid=".$catid."&id=".$id."&Itemid=".$Itemid;

    $showmc = $this->sef2NormURL($thisurl.'&show=1').'#comments';
    $addmc = $this->sef2NormURL($thisurl.'&addcomment=1').'#mcform'.$id;
// must use ' to avoid missing #mcform
    ($mc_numrows) 
    ? $showcomments = "<a id='moscomLink".$id."' href='".$showmc."'>"._COM_C_COM_NUMBER."</a> (".$mc_numrows.")"     
    : $showcomments = "";
    ($this->comment->notCloseContents($this->mccfg, $id))    
     ? $addcomments = "<a href='".$addmc."'>"._COM_C_ADD_COM."</a>"
     : $addcomments = "";
   (!empty($showcomments) and !empty($addcomments)) ? $dash = " - " : $dash = ""; 
//    $this->ut->ppDebug($gaid.",".$thisoption.",".$this->mccom['etype'],__METHOD__);     
    return '<p class="moscomLink">'.$showcomments.$dash.$addcomments.'</p>';
  }  
  function createForm($option, $aid, $mccfg, $Itemid, $start, $show ) {
  	if (!($atitle=$this->m->getArticleTitle($aid))) return;  // no valid article
      // If force preview is on.... change post string.
   	($mccfg['force_preview']=="1") ? $task = "preview" : $task = "addcomment";
    
//    $returnHere = $this->ut->ampIt("index.php?option=".$option."&task=view&id=".$aid);   
    $catid	= mosGetParam( $_REQUEST, 'catid', 1 );	// need to have this so J1.5 can route correct with SEO enable
//    $returnHere="index.php?option=".$option."&task=view&catid=".$catid."&id=".$aid."&Itemid=".$Itemid;	 
    $returnHere = "index.php".$this->h->href(array('option'=>$option, 'task'=>"view", 'catid'=>$catid, 'id'=>$aid, 'Itemid'=>$Itemid));
    
   	$this->_viewParm = $this->getUserInfo($mccfg);
    $this->_viewParm['moscomts'] = $this->mccom['moscomts']; // testing to see if token get pass around          
    $this->_viewParm['mc_post_string'] = $this->commentPoststring($aid, $task, $Itemid, $start, $show);
    $this->_viewParm['quick_post_string'] = $this->commentPoststringAjax($aid, "quickcomment", $Itemid, $start, $show);    
    $this->_viewParm['articleid'] = $aid;
    $this->_viewParm['atitle'] = $atitle;
    $this->_viewParm['about'] = $this->h->aboutBBLink($aid);
    $this->_viewParm['aboutbar'] = $this->h->bbCodeBar("commentForm".$aid,"mc_comment");
//    $this->_viewParm['return'] = "index.php?option=".$option."&amp;task=view&amp;id=".$aid;
    $this->_viewParm['return'] = $returnHere;    
    $this->_viewParm['emailoption'] = $this->setEmailSuffix();    
    $this->_viewParm['url'] = $this->setHomeURL();
// this use jQuery click event    
    $this->_viewParm['mcajaxsubmit']=$this->h->jQSubmit($aid, $this->_viewParm['quick_post_string'], $returnHere);
// this use jQuery plugin and js submit
//    $this->_viewParm['mcajaxsubmit']=$this->h->jQFnSubmit($aid, $this->_viewParm['quick_post_string'], $returnHere);
// this use plain ajax js submit
//    $this->_viewParm['mcajaxsubmit']=$this->h->ajaxSubmit($aid, $this->_viewParm['quick_post_string'], $returnHere);   
  	($mccfg['use_divcss']=="0") 
    ? $commentForm = $this->renderView("commentform.table.php") 
    : $commentForm = $this->renderView("commentform.div.php");    

  	return "<div id='moscomFORM'><a name='mcform".$aid."'></a>"
      .$commentForm
      // debug j1.0 ajax issue
      .$this->h->jQGetToken("#commentForm",$this->mccom) // may be need to move after the view is rendered!        
      // debug j1.0 ajax issue      
      .$this->moscomURL("Footer")
      ."</div>";
  }  

  function commentForm($mccom, $mccfg, $Itemid, $show, $start) {
  	global $option;
  	global $task;
  	global $id;

  	if (!preg_match("/com_content|com_mamblog/i", $option)) return;   // not content, don't show form	
  	if (!isset($task) or $task == "blogcategory" or $task == "blogsection") return;	// don't show comment form here

  	$mcform=$mcformabove=$mcformbelow=$mcpagecomments=$mcheader=$return=$mcjq=$mcwarning="";
  	($mccfg['regonly']=="1" && !$mccom['id']) ? $notauth= '<div align="center"><b>'._COM_C_NOT_AUTH.'</b></div>':$notauth="";
    
  	if (($mccfg['regonly']=="1" && $mccom['id'])  
      or $mccfg['regonly']=="0"
      or $this->comment->notCloseContents($mccfg, $mccom['id'])      
    )
  		$mcform = $this->createForm($option, $mccom['articleid'], $mccfg, $Itemid, $start,$show);

  	$addcomment = mosGetParam( $_REQUEST, 'addcomment', NULL ); // if click on show then show
    // form processing halted why? debug??
//  	if ($addcomment =="1") { 
  	if ($addcomment =="1" and empty($notauth)) {     // quick fix on reg user bug
  		($mccfg['form_above'] == "1" and $mcform) ? $mcformabove = $mcform : $mcformbelow = $mcform; 
      // get token only when click on add comment
      $mcwarning = "<p class='warning'>You must javascript enabled to use this form</p>";
      /*
    	$mcjq = $this->jQueryLoad()
        .$this->h->jsCode($this->h->jQNoConflict())
        .$this->h->jQGetToken("#commentForm",$mccom); // may be need to move after the view is rendered!
        */
    	$mcjq = $this->jQueryLoad()
        .$this->h->jsCode($this->h->jQNoConflict());

  	}
  	$show = mosGetParam( $_REQUEST, 'show', NULL ); // if click on show then show
  	if (($mccfg['hide_comments'] == "0") or ($show =="1")) // use config to over url
  		$mcpagecomments = $this->commentPage($option, $mccom['articleid'], $start, $mccfg, $Itemid);

  	if ($mcformabove or $mcformbelow or $mcpagecomments) { // last check if there is something to show then 
      $this->_viewParm['body'] = $mcwarning.$mcjq.$mcformabove.$mcpagecomments.$mcformbelow.$notauth;
      return $this->renderView("comment.main.php");
    }
  }   
  function commentList($iVar, $num, $start, $per_page) {
    $return = "";

    for ($x=$start;$x<min($num,($start+$per_page));$x++) { 
      if ($x % 2) { $iClass='moscomEVEN'; } else { $iClass='moscomODD'; }
      $commentBy = $this->commentBy("name", $iVar[$x], $iClass);  
     
      $commentText = '<div class="'.$iClass.'Text"> '.stripslashes($this->ut->nl2p($this->ut->bbCode($iVar[$x]->entry))).'</div>';   
       if (function_exists('mosmodule_bot')) { $commentText=mosmodule_bot($commentText); }
     
      ($this->mccfg['use_divcss']=="0")
      ? $metaData = '<font style="font-size: smaller;">'.$commentBy.'</font>'
      : $metaData = '<div class="'.$iClass.'Meta">'.$commentBy.'</div>';
      $return .= '<div class="'.$iClass.'">'.$commentText.$metaData.'</div>';
    } 
    return $return;
  }   
  function commentPage($option, $id, $start, $mccfg, $Itemid) {
    $mc_rows = $this->comment->dbSelectArticleComments($mccfg, $id);
    if (!$mc_rows) return $this->h->noComments($mccfg);
    // have to use option otherwise it won't work b/c it is com_content not com_comments when nav content.
 //   $thispage = $this->mccom['siteurl']."index.php?option=$option&amp;task=view&amp;id=$id&amp;Itemid=$Itemid&amp;show=1";
//    $thispage = "index.php?option=".$option."&amp;task=view&amp;id=".$id."&amp;Itemid=".$Itemid."&amp;show=1";   
    $thispage = "index.php?option=".$option."&task=view&id=".$id."&Itemid=".$Itemid."&show=1";       
    ($mccfg['per_page']) ? $per_page = $mccfg['per_page'] : $per_page = 0; // Number of items to show per page
    $num = count($mc_rows); // number of items in list
    if (empty($start)) $start=0;  // Current start position
    return '<div id="moscomBODY">'
      .$this->commentList($mc_rows, $num, $start, $per_page)
      .'<div id="moscomNAV" class="moscomNAV"><hr class="moscomHR" />'
      .$this->navLink($thispage, $num, $start, $per_page)
      .$this->h->copyright()
      .'<hr class="moscomHR" /></div>'
      .'</div>';
  }
  
  function commentAddPreview($mccom, $return, $Itemid, $start, $show, $mccfg) 	{
    $output = "";
//must check token here 
//    $output=$this->isTokenGood(); 
    ($mccfg['use_sectoken']=="1")  
    ? $output = $this->isTokenGood()
    : $output = "1"; // bypass security token check     
//    $this->ut->ppDebug($output,__METHOD__); 
  	if ($output=="1") { // check to make sure token is good before allow preview
      $this->_viewParm = $this->comment->getVarsFromPosts(); 
      $this->_viewParm['articleid'] = $mccom['articleid'];        
      $this->_viewParm['moscomts'] = $this->mccom['moscomts']; // testing to see if token get pass around      
      $this->_viewParm['mc_post_string'] = $this->commentPoststring($mccom['articleid'], "addcomment", $Itemid, $start, $show);
//      $this->_viewParm['mc_return'] = $return;
      $this->_viewParm['return'] = $return;      
     	($mccfg['use_divcss']=="0")
    	? $output = $this->renderView("preview.table.php")
    	: $output = $this->renderView("preview.div.php");
    }
  	return $output;
  }  
} // end class
?>