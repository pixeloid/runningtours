<?php /* Smarty version Smarty-3.1.8, created on 2012-07-26 18:34:20
         compiled from "/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14954788555011718c08f9d6-49324765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30a4da40d3e126c1c4308b0825c365162c09fddc' => 
    array (
      0 => '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/search.tpl',
      1 => 1342387894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14954788555011718c08f9d6-49324765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'searchForm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5011718c119e15_30238488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5011718c119e15_30238488')) {function content_5011718c119e15_30238488($_smarty_tpl) {?><div class="span6">
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