<?php /* Smarty version Smarty-3.1.8, created on 2012-08-02 10:03:33
         compiled from "/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/user/email-verification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:382434016501a345520eb19-52313946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8cd3b410a2c0a5af70f93cbeb34843db707561c' => 
    array (
      0 => '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/user/email-verification.tpl',
      1 => 1343894586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '382434016501a345520eb19-52313946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_501a3455285f49_29429894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501a3455285f49_29429894')) {function content_501a3455285f49_29429894($_smarty_tpl) {?><h3>Verifying....</h3>

<div class="content">
	<?php if ($_smarty_tpl->tpl_vars['error']->value){?>
		<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	<?php }else{ ?>
		Register success! Please log in!
	<?php }?>
	
</div>
<?php }} ?>