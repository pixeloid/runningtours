<?php /* Smarty version Smarty-3.1.8, created on 2012-07-15 23:31:56
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182639581250030ad4583709-54591517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4120e873176318854d1f201b3463576decbc20bc' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/search.tpl',
      1 => 1342387894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182639581250030ad4583709-54591517',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50030ad4606783_62144682',
  'variables' => 
  array (
    'searchForm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50030ad4606783_62144682')) {function content_50030ad4606783_62144682($_smarty_tpl) {?><div class="span6">
	<div class="orangeBox">
		<h3>Suchen Sie die passende Künstlern</h3>
		
		<p>Geben Sie mindestens ein Suchoption an.</p>
		
		
		<?php echo $_smarty_tpl->tpl_vars['searchForm']->value;?>

		
	</div>

	<?php echo $_smarty_tpl->getSubTemplate ("common/already-registered.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	
</div>
<div class="span6">
	<?php echo $_smarty_tpl->getSubTemplate ("common/featured-artists.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('num'=>2), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("common/keine-website.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>


<?php }} ?>