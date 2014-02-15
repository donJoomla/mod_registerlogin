<form id="loginForm<?php echo $module->id; ?>" action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data" style="margin: 0;">
  <div class="modal-body">
    <fieldset class="well">
    <?php 
	foreach ($login->getFieldset('credentials') as $field) {
    	if(!$field->hidden && $field->type != 'Spacer') $login->setFieldAttribute(str_replace('jform_','',$field->id),'class','form-control '.$field->class);
	} 
	?>
      <?php foreach ($login->getFieldset('credentials') as $field) : ?>
      <?php if ($field->name=='username' || $field->name=='password') : ?>
      <?php if ($field->name=='password') $ucheck = true; ?>
      <div class="form-group">
        <div class="col-sm-4"> <?php echo $field->label; ?></div>
        <div class="col-sm-7 input-group"> <?php echo $field->input; ?>
          <a class="input-group-addon" title="<?php echo JText::_('COM_USERS_LOGIN_'.($ucheck?'RESET':'REMIND')); ?>" href="<?php echo JRoute::_('index.php?option=com_users&view='.($ucheck?'reset':'remind')); ?>"><i class="icon-question-sign muted"></i></a>
        </div>
      </div>
      <?php elseif (!$field->hidden) : ?>
      <div class="form-group">
        <div class="col-sm-4"> <?php echo $field->label; ?></div>
        <div class="col-sm-8"> <?php echo $field->input; ?></div>
      </div>
      <?php endif; ?>
      <?php endforeach; ?>
      <?php $tfa = JPluginHelper::getPlugin('twofactorauth'); ?>
      <?php if (!is_null($tfa) && $tfa != array()): ?>
      <div class="form-group">
        <div class="col-sm-4"> <?php echo $this->form->getField('secretkey')->label; ?></div>
        <div class="col-sm-8"> <?php echo $this->form->getField('secretkey')->input; ?></div>
      </div>
      <?php endif; ?>
      <?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
      <div  class="row">
        <div class="col-sm-8 col-sm-offset-4">
          <div class="checkbox">
            <label><input id="remember" type="checkbox" name="remember" class="inputbox" value="yes"/> <?php echo JText::_('COM_USERS_LOGIN_REMEMBER_ME') ?></label>
      </div>
          
        </div>
      </div>
      <?php endif; ?>
      <input type="hidden" name="return" value="<?php echo $return; ?>" />
      <?php echo JHtml::_('form.token'); ?>
    </fieldset>
    <?php echo JHTML::_('content.prepare', '{loadposition loginForm}'); ?> </div>
  <div class="modal-footer">
    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('JCANCEL');?></button>
    <button type="submit" class="btn btn-primary"><i class="icon-user"></i> Log in</button>
    <button type="button" onClick="jQuery('#loginForm<?php echo $module->id; ?>').addClass('hide');jQuery('#registerForm<?php echo $module->id; ?>').removeClass('hide');" class="btn btn-success pull-left"><i class="icon-plus-sign"></i> Create an account</button>
  </div>
</form>
