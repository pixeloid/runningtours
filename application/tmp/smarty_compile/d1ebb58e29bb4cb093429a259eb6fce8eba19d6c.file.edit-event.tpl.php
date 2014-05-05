<?php /* Smarty version Smarty-3.1.8, created on 2012-07-17 21:33:50
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/edit-event.tpl" */ ?>
<?php /*%%SmartyHeaderCode:855130375005be1e528728-73827493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1ebb58e29bb4cb093429a259eb6fce8eba19d6c' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/edit-event.tpl',
      1 => 1342553010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '855130375005be1e528728-73827493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5005be1e567fe8_72111753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5005be1e567fe8_72111753')) {function content_5005be1e567fe8_72111753($_smarty_tpl) {?><div class="span6">
	<div class="orangeBox">
		<h3>Edit your event</h3>
		
		<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

		
	</div>
	
</div>
<div class="span6">
	<?php echo $_smarty_tpl->getSubTemplate ("common/featured-artists.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('num'=>3), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("common/keine-website.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php }} ?>