<?php /* Smarty version Smarty-3.1.8, created on 2012-07-17 13:29:14
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/create-artist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197424850550054c8a12b0f1-08832377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '560f3d048d2ab4387f659a5be04daecaa26838dc' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/create-artist.tpl',
      1 => 1342524373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197424850550054c8a12b0f1-08832377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50054c8a16a093_29923659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50054c8a16a093_29923659')) {function content_50054c8a16a093_29923659($_smarty_tpl) {?><div class="span6">
	<div class="orangeBox">
		<h3>Create artist profile</h3>
		
		<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

		
	</div>
	
</div>
<div class="span6">
	<?php echo $_smarty_tpl->getSubTemplate ("common/featured-artists.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('num'=>4), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("common/keine-website.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php }} ?>