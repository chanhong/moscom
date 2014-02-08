<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?>
<div id="moscomPREVIEW"><a name="moscomPREVIEW" title="moscomPREVIEW"></a>
  <div class="componentheading"><?=_COM_C_PREVIEW_HEAD;?></div>
  <p class="moscomFORMMsg"><?=_COM_C_PREVIEW_INTRO;?></p>
  <p>
    <label for="mc_comment_name" id="labelmc_comment_name" class="moscomFORMLabel"><?=_COM_A_NAME_SUB;?>: </label>
    <?=$viewParm['name'];?>
  </p>
  <p>
    <label for="mc_comment_email" id="labelmc_comment_email" class="moscomFORMLabel"><?=_COM_A_EMAIL_SUB;?>: </label>
    <?=$viewParm['email'];?>
  </p>
  <p>
    <label for="mc_comment_homepage" id="labelmc_comment_homepage" class="moscomFORMLabel"><?=_COM_A_HOMEPAGE;?>: </label>
    <?=$viewParm['homepage'];?> [<a href="<?=$viewParm['homepage'];?>" target="_blank"><?=_COM_C_CHECKLINK;?></a>]  
  </p>
  <p>
    <label for="mc_comment_entry" id="labelmc_comment_entry" class="moscomFORMLabel"><?=_COM_A_COMMENT;?>: </label>
    <?=$viewParm['entry'];?>
  </p>
  <div id="moscomFORM"><a name="moscomFORM" title="moscomFORM"></a>
  <?=$this->renderView("_preview.php");?>
  </div>
</div>