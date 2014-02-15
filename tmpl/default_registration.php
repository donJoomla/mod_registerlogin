<form id="registerForm<?php echo $module->id; ?>" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post" class="hide form-horizontal" enctype="multipart/form-data" style="margin: 0;">
  <div class="modal-body">
    <?php foreach ($register->getFieldsets() as $fieldset): ?>
    
    <?php 
	foreach ($register->getFieldset($fieldset->name) as $field) {
    	if(!$field->hidden && $field->type != 'Spacer') $register->setFieldAttribute(str_replace('jform_','',$field->id),'class','form-control '.$field->class);
	} 
	?>
    
    <?php $fields = $register->getFieldset($fieldset->name);?>
    <?php if (count($fields)):?>
    <fieldset>
      <?php if (isset($fieldset->label)): ?>
      <!--legend><?php echo JText::_($fieldset->label);?></legend-->
      <?php endif;?>
      <?php foreach ($fields as $field) : ?>
      <?php if ($field->hidden):?>
      <?php echo $field->input;?>
      <?php else:?>
      <div class="form-group">
        <div class="col-sm-4"> <?php echo $field->label; ?>
          <?php if (!$field->required && $field->type != 'Spacer') : ?>
          <!--span class="optional"><?php echo JText::_('COM_USERS_OPTIONAL'); ?></span-->
          <?php endif; ?>
        </div>
        <div class="col-sm-7"> <?php echo $field->input; ?></div>
      </div>
      <?php endif;?>
      <?php endforeach;?>
    </fieldset>
    <?php endif;?>
    <?php endforeach;?>
  </div>
  <div class="modal-footer">
    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('JCANCEL');?></button>
    <button type="submit" class="btn btn-success validate"><i class="icon-ok"></i> <?php echo JText::_('Create account');?></button>
    <button type="button" onClick="jQuery('#registerForm<?php echo $module->id; ?>').addClass('hide');jQuery('#loginForm<?php echo $module->id; ?>').removeClass('hide');" class="btn btn-default pull-left"><i class="icon-chevron-left"></i> Back to login</button>
    <input type="hidden" name="option" value="com_users" />
    <input type="hidden" name="task" value="registration.register" />
    <input type="hidden" name="return" value="<?php echo $return; ?>" />
    <?php echo JHtml::_('form.token');?></div>
</form>
