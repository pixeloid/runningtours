<?php /* Smarty version Smarty-3.1.8, created on 2012-07-17 16:33:21
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/edit-user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1053866551500577420b5d22-34881837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfdfdcf9227d0744471eb9918c9c9aad370eb457' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/edit-user.tpl',
      1 => 1342535600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1053866551500577420b5d22-34881837',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_500577420f9e50_93225981',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500577420f9e50_93225981')) {function content_500577420f9e50_93225981($_smarty_tpl) {?><div class="span6">
	<div class="orangeBox">
		<h3>Edit user data</h3>


			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
			</p>
				<?php echo $_smarty_tpl->tpl_vars['form']->value;?>


	</div>
	
</div>
<div class="span6">
	<?php echo $_smarty_tpl->getSubTemplate ("common/featured-artists.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('num'=>6), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("common/keine-website.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php }} ?>