<div id="loginModal<?php echo $module->id; ?>" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><?php echo $module->title; ?></h4>
      </div>
      <form id="loginForm<?php echo $module->id; ?>" action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>" method="post" class="form-horizontal" style="margin: 0;">
        <div class="modal-body">
          <fieldset class="well">
            <div class="form-group">
              <label id="username-lbl" for="username" class="col-sm-4 control-label required">Username or email<span class="star">&nbsp;*</span></label>
              <div class="input-group col-sm-7">
                <input type="text" name="username" id="username" value="" class="form-control validate-username required input-block-level" size="25" required aria-required="true">
                <a class="input-group-addon" title="<?php echo JText::_('Forgot your username?'); ?>" href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>"><i class="icon-question-sign muted"></i></a></div>
            </div>
            <div class="form-group">
              <label id="password-lbl" for="password" class="col-sm-4 control-label required">Password<span class="star">&nbsp;*</span></label>
              <div class="input-group col-sm-7">
                <input type="password" name="password" id="password" value="" class="form-control validate-password required input-block-level" size="25" required aria-required="true">
                <a class="input-group-addon" title="<?php echo JText::_('Forgot your password?'); ?>" href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>"><i class="icon-question-sign muted"></i></a></div>
            </div>
            <input type="hidden" name="return" value="<?php echo $return; ?>" />
            <?php echo JHtml::_('form.token'); ?>
          </fieldset>
          <?php echo JHTML::_('content.prepare', '{loadposition loginForm}'); ?></div>
        <div class="modal-footer">
          <button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('JCANCEL');?></button>
          <button type="submit" class="btn btn-primary"><i class="icon-user"></i> Log in</button>
          <button type="button" onClick="jQuery('#loginForm<?php echo $module->id; ?>').addClass('hide');jQuery('#registerForm<?php echo $module->id; ?>').removeClass('hide');" class="btn btn-success pull-left"><i class="icon-plus-sign"></i> Create an account</button>
        </div>
      </form>
      <form id="registerForm<?php echo $module->id; ?>" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post" class="hide form-validate form-horizontal" enctype="multipart/form-data" style="margin: 0;">
        <div class="modal-body">
          <fieldset class="well">
            <div class="form-group">
              <label class="col-sm-4 control-label"  id="jform_name-lbl" for="jform_name" title="" aria-invalid="true">Name:<span class="star">&nbsp;*</span></label>
              <div class="col-sm-7">
                <input type="text" name="jform[name]" id="jform_name" value="" class="form-control required invalid" size="30" required aria-required="true" aria-invalid="true">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label"  id="jform_username-lbl" for="jform_username" title="">Username:<span class="star">&nbsp;*</span></label>
              <div class="col-sm-7">
                <input type="text" name="jform[username]" id="jform_username" value="admin" class="form-control validate-username required" size="30" required aria-required="true">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label"  id="jform_password1-lbl" for="jform_password1" title="">Password:<span class="star">&nbsp;*</span></label>
              <div class="col-sm-7">
                <input type="password" name="jform[password1]" id="jform_password1" value="" autocomplete="off" class="form-control validate-password required" size="30" required aria-required="true">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label"  id="jform_password2-lbl" for="jform_password2" title="">Confirm Password:<span class="star">&nbsp;*</span></label>
              <div class="col-sm-7">
                <input type="password" name="jform[password2]" id="jform_password2" value="" autocomplete="off" class="form-control validate-password required" size="30" required aria-required="true">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label"  id="jform_email1-lbl" for="jform_email1" title="">Email Address:<span class="star">&nbsp;*</span></label>
              <div class="col-sm-7">
                <input type="email" name="jform[email1]" class="form-control validate-email required" id="jform_email1" value="" size="30" required aria-required="true">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label"  id="jform_email2-lbl" for="jform_email2" title="">Confirm email Address:<span class="star">&nbsp;*</span></label>
              <div class="col-sm-7">
                <input type="email" name="jform[email2]" class="form-control validate-email required" id="jform_email2" value="" size="30" required aria-required="true">
              </div>
            </div>
          </fieldset>
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
    </div>
  </div>
</div>
