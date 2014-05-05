<?php /* Smarty version Smarty-3.1.8, created on 2012-07-17 13:17:20
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/common/already-registered.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1729656074500275cae36f00-90468133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '286336708ed87ab1b654fae647a4689f46ac0c68' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/common/already-registered.tpl',
      1 => 1342523802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1729656074500275cae36f00-90468133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_500275cae3a487_33059002',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500275cae3a487_33059002')) {function content_500275cae3a487_33059002($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/function.zend_url.php';
?><div class="alreadyRegistered">
	<h3>Sind Sie Künstler?</h3>
	<p>Dann nützen Sie hier die Chance und</p>

<p>	<a href="<?php echo smarty_function_zend_url(array('controller'=>'user','action'=>'signup'),$_smarty_tpl);?>
" class="btn">Registrieren Sie sich » </a>
</p>
	<p>um Ihre künstlerische Tätigkeit zu präsentieren.</p>
</div>
<?php }} ?>