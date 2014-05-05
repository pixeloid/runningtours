<?php /* Smarty version Smarty-3.1.8, created on 2012-08-02 09:59:45
         compiled from "/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/user/change-password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7986927035019aa79a400b0-72285121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '571d32d4b08e2fee7917358961a45c91bdb5c59f' => 
    array (
      0 => '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/user/change-password.tpl',
      1 => 1343894336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7986927035019aa79a400b0-72285121',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5019aa79ac9ad3_56973796',
  'variables' => 
  array (
    'success' => 0,
    'error' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5019aa79ac9ad3_56973796')) {function content_5019aa79ac9ad3_56973796($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/block.t.php';
?><h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Change password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
<div class="content">
<?php if ($_smarty_tpl->tpl_vars['success']->value){?>

	Password successfully changed. 

<?php }else{ ?>

	<?php if ($_smarty_tpl->tpl_vars['error']->value){?>
		<p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
	<?php }else{ ?>
		<p>Please enter a new password!</p>
		<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<?php }?>

<?php }?>

</div>


<?php }} ?>