<?php /* Smarty version Smarty-3.1.8, created on 2012-07-17 21:29:45
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/create-event.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12191694275005bd29096112-37895350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91090c165ccf6311bd1e0989fad5f6e7eba52e22' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/create-event.tpl',
      1 => 1342553029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12191694275005bd29096112-37895350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5005bd290d3be6_30890958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5005bd290d3be6_30890958')) {function content_5005bd290d3be6_30890958($_smarty_tpl) {?><div class="span6">
	<div class="orangeBox">
		<h3>Create new event</h3>
		
		<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

		
	</div>
	
</div>
<div class="span6">
	<?php echo $_smarty_tpl->getSubTemplate ("common/featured-artists.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('num'=>4), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("common/keine-website.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php }} ?>