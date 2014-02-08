<?php
/**
* @version 
* @package moscom.jquery.class.php
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http:/ongetc.com/gpl.html.
*/ 
include_once("co.jquery.class.php");
class MoscomJQuery extends CoJQuery {
  var $jQ;
  function MoscomJQuery () { // contructor
    $this->jQ = "\$mcjq";
  }
  function jQMe($iJs) { return parent::jQMe($this->jQ,$iJs); }  
  function jQNoConflict() { return parent::jQNoConflict($this->jQ); }
  function jQFnPhp($iJs) { return self::jQMe(sprintf("\$(%s);",parent::jQDefFn($iJs))); }  // use this when call fn generate from  php
  function jQFnJs($iJs) { return sprintf(self::jQMe("\$(%s);"),parent::jQDefFn($iJs)); }   // work around not a function issue in jQ when call fn from js file 
  function jQReady($ijs) { return $this->jsCode(self::jQMe(parent::jQReady($ijs))); }    
  function jQTab($tagid) { return self::jQReady("\$('#$tagid > ul').tabs();"); } 

function xxmc_load_jquery_gettoken($selectid,$mccom) {
	$id=$mccom['aid'];
	$formid=$selectid.$id;
	$poststring=$mccom['mcasiteurl']."moscom.server.php";
	setcookie('$app', '', -10000, '/');	// clear cookie
	$js = "
	\$mcjq('.warning').remove();
	\$mcjq.get('$poststring',{task: 'gettoken', ip: '".$mccom['meip']."', app: '".$mccom['me']."', id: '$id'},function(txt){
		\$mcjq(\"$formid\").append('<input type=\"hidden\" name=\"MosComTS\" value=\"'+txt+'\" />');
	});";
	return mc_load_jquery().mc_jqready($js);
}
  function xxjQGetToken($selectid, $mccom) {
  	$id = $mccom['articleid'];
  	$formid = $selectid.$id;
//  	$poststring=$mccom['mcasiteurl']."moscom.server.php";
  	$poststring = "index2.php?option=com_comments&no_html=1";
    
    $app = $mccom['me'];
    $params =   "{task: 'gettoken', ip: '".$mccom['meip']."', app: '".$app."', id: '".$id."'}";
  	setcookie('$app', '', -10000, '/');	// clear cookie
  // nested article might cause false positive form process error
  
	$js = "
	\$mcjq('.warning').remove();
	\$mcjq.get('$poststring',{task: 'gettoken', ip: '".$mccom['meip']."', app: '".$mccom['me']."', id: '$id'},function(txt){
		\$mcjq(\"$formid\").append('<input type=\"hidden\" name=\"MosComTS\" value=\"'+txt+'\" />');
	});";
	return self::jQReady($js);
  }    
  function jQGetToken($selectid, $mccom) {
  	$id = $mccom['articleid'];
  	$formid = $selectid.$id;
//  	$poststring=$mccom['mcasiteurl']."moscom.server.php";
  	$poststring = "index2.php?option=com_comments";
    
    $app = $mccom['me'];
    $params =   "{no_html: 1, task: 'gettoken', ip: '".$mccom['meip']."', app: '".$app."', id: '".$id."'}";
  	setcookie('$app', '', -10000, '/');	// clear cookie
  // nested article might cause false positive form process error
  	return self::jQReady("
\$('.warning').remove();
\$.get('".$poststring."', ".$params.",
  function(txt){
      \$('".$formid."').append('<input type=\"hidden\" name=\"MosComTS\" value=\"'+txt+'\" />');   
  }
);");
  }  
  //   \$(\"input[name='MosComTS']\").text(\"'+txt+'\");
//    \$('".$formid."').append('".$moscomTS."');  
//      \$('".$formid."').append('<input type=\"hidden\" name=\"MosComTS\" value=\"'+txt+'\" />');
  function jQAnimate($aid) {
    return self::jQMe("
\$ajaxmsg = \$('div#commentAjaxMsg".$aid."');
\$ajaxmsg.text('Submitting ...');
\$ajaxmsg.animate({ 
    width: '70%',
    opacity: 0.4,
    marginLeft: '0.1in',
    fontSize: '2em', 
    borderWidth: '10px'
  }, 1500 );
"); 
  }
  function jQAjaxPost($aid, $ps, $return) {
    $img = $this->img("administrator/components/com_comments/css/loading.gif", "commentAjaxLoading".$aid); 
//    $ps = "index2.php?option=com_comments&task=quickcomment&no_html=1&id=".$aid;
    return "
\$('p#moscomBOTHBTNS".$aid."').empty().html('".$img."');     
\$formdata = \$('form#commentForm".$aid."').serialize();
\$.post('".$ps."', \$formdata, 
  function(data){
    alert(data.msg);     
    document.location.href='".$return."';   
  }, 
  'json'
);
";
  }  
  // normal js
  function ajaxSubmit($aid, $ps, $return) {
    $fName = "mcajaxsubmit";
    return $this->jsCode("function ".$fName."() {\n". self::jQMe(self::jQAjaxPost($aid, $ps, $return)) . "\n}");
  } 
  // js that call jQ function
  function jQFnSubmit($aid, $ps, $return) {
    $fName = "mcajaxsubmit";
    $jsDefFn = $this->jQDefFn($fName, self::jQAjaxPost($aid, $ps, $return));
    return $this->jsCode($jsDefFn."\nfunction ".$fName."() {\n". self::jQMe("\$('form#commentForm".$aid."').".$fName."();") . "\n}");
  } 
  // use jQ click event 
  function jQSubmit($aid, $ps, $return) {
    return self::jQReady("
\$('#moscomBTNQUICK".$aid."').click(function () {". self::jQAjaxPost($aid, $ps, $return) ."});
");
  }       
}
?>