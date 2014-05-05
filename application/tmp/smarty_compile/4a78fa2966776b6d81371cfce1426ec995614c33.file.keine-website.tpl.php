<?php /* Smarty version Smarty-3.1.8, created on 2012-07-17 13:17:21
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/common/keine-website.tpl" */ ?>
<?php /*%%SmartyHeaderCode:652808665500275f16b93e5-55157691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a78fa2966776b6d81371cfce1426ec995614c33' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/common/keine-website.tpl',
      1 => 1342523791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '652808665500275f16b93e5-55157691',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_500275f16b9c93_72826742',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500275f16b9c93_72826742')) {function content_500275f16b9c93_72826742($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/function.zend_url.php';
?><div class="keineWebsite">
	<h3>Sie haben noch keine Webseite?</h3>
	<p>Sie können bei uns ganz einfach, schnell und gratis eine</p>

<p>	<a href="<?php echo smarty_function_zend_url(array('controller'=>'user','action'=>'signup'),$_smarty_tpl);?>
" class="btn">Eigene Homepage erstellen » </a>
</p>
	<p>Wir wünschen Ihnen viel Erfolg in Ihrem künstlerischen Schaffen!</p>
	<p>Wir freuen uns auf Ihren Besuch bei Artists-eu.com!</p>

</div>
<?php }} ?>