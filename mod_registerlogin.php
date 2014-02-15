<?php
defined('_JEXEC') or die('Restricted access');

$layout 			= $params->get('layout', 'default');
$return 			= base64_encode($params->get('return', JURI::current(), 'URL'));
$moduleclass_sfx 	= $params->get('moduleclass_sfx', '');
JHtml::_('behavior.keepalive');

$user = &JFactory::getUser();
		
if($user->guest) {
	JFactory::getLanguage()->load('com_users');
	$path = JPATH_ROOT.'/components/com_users/models/';
	require_once $path.'login.php';
	require_once $path.'registration.php';
	JForm::addFormPath($path . 'forms');
	JForm::addFieldPath($path . 'fields');
	$rmodel = new UsersModelRegistration();
	$register = $rmodel->getForm();
	$lmodel = new UsersModelLogin();
	$login = $lmodel->getForm();
	/*
echo '<div class="hide">';
print_r($register->getFieldset('default'));
echo '</div>';
*/
	require(JModuleHelper::getLayoutPath('mod_registerlogin', $layout));

}