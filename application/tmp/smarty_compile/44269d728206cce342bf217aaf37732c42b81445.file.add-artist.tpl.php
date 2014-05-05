<?php /* Smarty version Smarty-3.1.8, created on 2012-07-17 13:26:14
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/add-artist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123795144250054bb8bc4dc6-52089488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44269d728206cce342bf217aaf37732c42b81445' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/add-artist.tpl',
      1 => 1342524373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123795144250054bb8bc4dc6-52089488',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50054bb8bfe127_05222023',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50054bb8bfe127_05222023')) {function content_50054bb8bfe127_05222023($_smarty_tpl) {?><div class="span6">
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