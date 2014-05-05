<?php /* Smarty version Smarty-3.1.8, created on 2012-08-02 00:11:18
         compiled from "/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/user/new-password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130716644450184f92d6f435-06205501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8df7d986c6e7f5e5698688ccf5e71b87a7c2bdc1' => 
    array (
      0 => '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/user/new-password.tpl',
      1 => 1343859077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130716644450184f92d6f435-06205501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50184f92dda4a0_84637120',
  'variables' => 
  array (
    'success' => 0,
    'error' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50184f92dda4a0_84637120')) {function content_50184f92dda4a0_84637120($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/block.t.php';
?><div class="span12">
	<div class="orangeBox">
		<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
New password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
		
		<?php if ($_smarty_tpl->tpl_vars['success']->value){?>
		
			Password successfully changed. Please login!
		
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

</div><?php }} ?>