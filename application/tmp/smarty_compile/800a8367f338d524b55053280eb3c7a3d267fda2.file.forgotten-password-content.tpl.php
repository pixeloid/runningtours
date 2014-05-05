<?php /* Smarty version Smarty-3.1.8, created on 2012-08-02 09:27:09
         compiled from "/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/user/forgotten-password-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:926862775501a2a79268f12-93461463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '800a8367f338d524b55053280eb3c7a3d267fda2' => 
    array (
      0 => '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/user/forgotten-password-content.tpl',
      1 => 1343892428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '926862775501a2a79268f12-93461463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_501a2a792897b9_55942092',
  'variables' => 
  array (
    'success' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501a2a792897b9_55942092')) {function content_501a2a792897b9_55942092($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/block.t.php';
?>		<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enter your e-mail address!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
		<div class="content"><?php if ($_smarty_tpl->tpl_vars['success']->value){?>
				Instructions has been sent to the submitted e-mail address.
			<?php }else{ ?>
				<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

			<?php }?>
</div>	<?php }} ?>