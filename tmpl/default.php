<?php JFactory::getDocument()->addStyleDeclaration('.tooltip { z-index: 1051 !important; }'); ?>
<div id="loginModal<?php echo $module->id; ?>" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><?php echo $module->title; ?></h4>
      </div>
      <?php require JModuleHelper::getLayoutPath('mod_registerlogin', 'default_login'); ?>
      <?php require JModuleHelper::getLayoutPath('mod_registerlogin', 'default_registration'); ?>
    </div>
  </div>
</div>
