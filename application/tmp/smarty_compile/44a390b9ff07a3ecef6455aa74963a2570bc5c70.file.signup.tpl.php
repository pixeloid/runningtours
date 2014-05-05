<?php /* Smarty version Smarty-3.1.8, created on 2012-09-11 01:38:39
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/common/user/signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:928218365504e79ff409fa4-70068261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44a390b9ff07a3ecef6455aa74963a2570bc5c70' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/common/user/signup.tpl',
      1 => 1343894513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '928218365504e79ff409fa4-70068261',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'success' => 0,
    'errorMessage' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504e79ff449c29_09757540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504e79ff449c29_09757540')) {function content_504e79ff449c29_09757540($_smarty_tpl) {?><h3>Registrierung</h3>

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