<?php /* Smarty version Smarty-3.1.8, created on 2012-07-15 20:52:56
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17983139895001c81637edb8-48504875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '515432bd1b1a7f9f32f34e287a42b16144264247' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/index.tpl',
      1 => 1342377756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17983139895001c81637edb8-48504875',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5001c8163a9d43_64182466',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5001c8163a9d43_64182466')) {function content_5001c8163a9d43_64182466($_smarty_tpl) {?><div class="span6">
	<div class="intro">

		<img src="img/artist-eu/intro_headline.png" />

		<p>Artists-eu.com präsentiert Ihnen Künstler alle Art aus ganz Europa.
		Unser durch verschiedene Kategorien geordnetes Künstlerverzeichnis hilft Ihnen, schnell und einfach Künstler Ihrer Wahl zu suchen, Talente
		zu entdecken, ihr Schaffen anzusehen oder anzuhören und sogar direkt Kontakt mit ihnen aufzunehmen.
		</p>
	</div>

	<?php echo $_smarty_tpl->getSubTemplate ("common/already-registered.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php echo $_smarty_tpl->getSubTemplate ("common/keine-website.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
</div>
<div class="span6">
	<?php echo $_smarty_tpl->getSubTemplate ("common/featured-artists.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('num'=>3), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("common/event-calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php }} ?>