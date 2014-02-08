<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?>
<div id="moscomHEAD">
  <?=_COM_C_ADD_COM;?><b><?=$viewParm['atitle'];?></b>
  <?=_COM_C_ADD_COM2;?>
<?=$this->_viewParm['mcajaxsubmit'];?>
</div>
<form method="post" action="<?=$viewParm['mc_post_string'];?>" id="commentForm<?=$viewParm['articleid'];?>" name="commentForm<?=$viewParm['articleid'];?>">
<p class="moscomFORMMsg"><?=_COM_C_FORM_INTRO;?></p>
<div class="text">
<?=_COM_C_NAME;?><span class="moscomFORMLabelSuffix"><?=_COM_C_REQ;?></span>
</div>
<input type="text" id="mc_comment_name" title="<?=_COM_C_NAME;?>" name="mc_comment_name" class="moscomInputBox" style="width:268px;" value="<?=$viewParm['name'];?>" tabindex="1" <?=$viewParm['mode'];?> />
<div class="text">
<?=_COM_C_EMAIL;?><span class="moscomFORMLabelSuffix"><?=$viewParm['emailoption'];?></span>
</div>
<input type="text" id="mc_comment_email" title="<?=_COM_C_EMAIL;?>" name="mc_comment_email" class="moscomInputBox" style="width:268px;" value="<?=$this->ut->spamNotEmail($viewParm['email']);?>" tabindex="2" <?=$viewParm['mode'];?> />
<div class="smalltext"><?=_COM_C_EMAIL_NOT;?></div>
<?=$viewParm['url'];?>
<p>
<?=$viewParm['about'];?>
<?=$viewParm['aboutbar'];?><br />
<div class="text"><?=_COM_C_COM;?></div>
<textarea id="mc_comment" title="<?=_COM_C_COM;?>" name="mc_comment" cols="48" rows="7" wrap="virtual" tabindex="4" class="moscomTextBox"></textarea><br />
<div id="result" style="padding:5px;">
</div>
<?=$this->renderView("_submit.button.php");?>
</form>