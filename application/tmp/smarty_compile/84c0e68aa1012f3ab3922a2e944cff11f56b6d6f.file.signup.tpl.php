<?php /* Smarty version Smarty-3.1.8, created on 2012-07-11 02:14:17
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/templates/homepage-eu/index/signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10771565474ffcc559519c94-61715802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84c0e68aa1012f3ab3922a2e944cff11f56b6d6f' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/templates/homepage-eu/index/signup.tpl',
      1 => 1338888039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10771565474ffcc559519c94-61715802',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errorMessage' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ffcc5595a5263_02394122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffcc5595a5263_02394122')) {function content_4ffcc5595a5263_02394122($_smarty_tpl) {?><h3>Registrierung</h3>

<div class="content">
	
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

</div><?php }} ?>