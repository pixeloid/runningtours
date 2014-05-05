<?php /* Smarty version Smarty-3.1.8, created on 2012-08-02 10:02:08
         compiled from "/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/user/signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:414012292501a2bfc20d119-18739833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '785583e0726289b091926362f9f9973d5e5dd81f' => 
    array (
      0 => '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/user/signup.tpl',
      1 => 1343894513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '414012292501a2bfc20d119-18739833',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_501a2bfc2cd9c8_14469534',
  'variables' => 
  array (
    'success' => 0,
    'errorMessage' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501a2bfc2cd9c8_14469534')) {function content_501a2bfc2cd9c8_14469534($_smarty_tpl) {?><h3>Registrierung</h3>

<div class="content">
	<?php if (!$_smarty_tpl->tpl_vars['success']->value){?>

		<?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['form']->value;?>


	<?php }else{ ?>
		<p>	Registration successful!<br>
			Check your e-mail address, and validate your registration!</p>

	<?php }?>
	
</div>
<?php }} ?>