<?php /* Smarty version Smarty-3.1.8, created on 2012-07-17 14:12:39
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/edit-artist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20594218535005558fe9e692-86168427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c219ec5a6fae8e28e0b152cc311d01ca4c9a17f' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/edit-artist.tpl',
      1 => 1342527155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20594218535005558fe9e692-86168427',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5005558fedda25_94578454',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5005558fedda25_94578454')) {function content_5005558fedda25_94578454($_smarty_tpl) {?><div class="span6">
	<div class="orangeBox">
		<h3>Edit your artist profile</h3>
		
		<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

		
	</div>
	
</div>
<div class="span6">
	<?php echo $_smarty_tpl->getSubTemplate ("common/featured-artists.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('num'=>3), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("common/keine-website.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php }} ?>