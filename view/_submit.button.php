<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?>
<p id="moscomBOTHBTNS<?=$viewParm['articleid'];?>" class="moscomBOTHBTNS">
<input type="hidden" name="return" value="<?=$viewParm['return'];?>" />
<input type="button" id="moscomBTNQUICK<?=$viewParm['articleid'];?>" title="<?=_COM_C_QUICKPOST;?>" name="<?=_COM_C_QUICKPOST;?>" value="<?=_COM_C_QUICKPOST;?>" class="moscomBTNQUICK" tabindex="5" />
<input type="reset" id="moscomBTNRESET<?=$viewParm['articleid'];?>" title="<?=_COM_C_RESET;?>" name="<?=_COM_C_RESET;?>" value="<?=_COM_C_RESET;?>" class="moscomBTNRESET"  tabindex="6" />
<input type="submit" id="moscomBTNSUBMIT<?=$viewParm['articleid'];?>" title="<?=_COM_C_SUBMIT;?>" name="<?=_COM_C_SUBMIT;?>" value="<?=_COM_C_SUBMIT;?>" class="moscomBTNSUBMIT" tabindex="7" />
</p>