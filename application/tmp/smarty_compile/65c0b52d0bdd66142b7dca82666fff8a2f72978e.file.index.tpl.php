<?php /* Smarty version Smarty-3.1.8, created on 2012-07-26 15:05:19
         compiled from "/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6793522575011408f3ddf32-94951177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65c0b52d0bdd66142b7dca82666fff8a2f72978e' => 
    array (
      0 => '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/index.tpl',
      1 => 1342377756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6793522575011408f3ddf32-94951177',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5011408f483f66_66951126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5011408f483f66_66951126')) {function content_5011408f483f66_66951126($_smarty_tpl) {?><div class="span6">
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