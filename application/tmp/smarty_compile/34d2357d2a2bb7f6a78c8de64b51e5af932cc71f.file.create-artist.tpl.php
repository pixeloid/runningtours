<?php /* Smarty version Smarty-3.1.8, created on 2012-08-01 16:19:02
         compiled from "/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/create-artist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142627448750193ad692cb70-10374121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34d2357d2a2bb7f6a78c8de64b51e5af932cc71f' => 
    array (
      0 => '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/create-artist.tpl',
      1 => 1342524372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142627448750193ad692cb70-10374121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50193ad6a1d1a0_39352596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50193ad6a1d1a0_39352596')) {function content_50193ad6a1d1a0_39352596($_smarty_tpl) {?><div class="span6">
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