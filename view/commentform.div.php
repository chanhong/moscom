<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?>
<div id="moscomHEAD">
	<span class="moscomHEADPrefix"><?=_COM_C_ADD_COM;?></span><span class="moscomHEADArticle"><?=$viewParm['atitle'];?></span>
	<span class="moscomHEADSuffix"><?=_COM_C_ADD_COM2;?></span>
<?=$this->_viewParm['mcajaxsubmit'];?>  
</div>
<form method="post" action="<?=$viewParm['mc_post_string'];?>" id="commentForm<?=$viewParm['articleid'];?>" name="commentForm<?=$viewParm['articleid'];?>">
<p class="moscomFORMMsg"><?=_COM_C_FORM_INTRO;?></p>
<p>
<label for="mc_comment_name" id="labelmc_comment_name" class="moscomFORMLabel"><?=_COM_C_NAME;?></label>
<input type="text" id="mc_comment_name" title="<?=_COM_C_NAME;?>" name="mc_comment_name" class="moscomInputBox" value="<?=$viewParm['name'];?>" tabindex="1" <?=$viewParm['mode'];?> />
<span class="moscomFORMLabelSuffix"><?=_COM_C_REQ;?></span>
</p>
<p>
<label for="mc_comment_email" id="labelmc_comment_email" class="moscomFORMLabel"><?=_COM_C_EMAIL;?></label>
<input type="text" id="mc_comment_email" title="<?=_COM_C_EMAIL;?>" name="mc_comment_email" class="moscomInputBox" value="<?=$this->ut->spamNotEmail($viewParm['email']);?>" tabindex="2" <?=$viewParm['mode'];?> />
<span class="moscomFORMLabelSuffix"><?=$viewParm['emailoption'];?></span>
</p>
<p class="moscomFORMMsg"><?=_COM_C_EMAIL_NOT;?></p>
<?=$viewParm['url'];?>
<p>
<?=$viewParm['about'];?>
<?=$viewParm['aboutbar'];?><br />
<label for="mc_comment" id="labelmc_comment" class="moscomFORMLabel"><?=_COM_C_COM;?></label><br />
<textarea id="mc_comment" title="<?=_COM_C_COM;?>" name="mc_comment" cols="48" rows="7" wrap="virtual" tabindex="4" class="moscomTextBox"></textarea>
</p>
<?=$this->renderView("_submit.button.php");?>
</form>