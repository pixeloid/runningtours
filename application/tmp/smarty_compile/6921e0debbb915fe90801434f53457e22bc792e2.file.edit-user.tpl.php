<?php /* Smarty version Smarty-3.1.8, created on 2012-08-02 09:53:11
         compiled from "/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/edit-user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118905969501a31e78e5896-64945381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6921e0debbb915fe90801434f53457e22bc792e2' => 
    array (
      0 => '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/edit-user.tpl',
      1 => 1343893963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118905969501a31e78e5896-64945381',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_501a31e7958839_79213282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501a31e7958839_79213282')) {function content_501a31e7958839_79213282($_smarty_tpl) {?><div class="span6">
	<div class="orangeBox">
		<?php echo $_smarty_tpl->getSubTemplate ('../../common/user/edit-user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	</div>
	
</div>
<div class="span6">
	<?php echo $_smarty_tpl->getSubTemplate ("common/featured-artists.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('num'=>6), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("common/keine-website.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php }} ?>