<?php /* Smarty version Smarty-3.1.8, created on 2012-08-02 09:11:26
         compiled from "/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/common/already-registered.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16892149675011408f48a518-30645679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c015501821a2011e5cbbcea8ee09c456c93e1ea' => 
    array (
      0 => '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/common/already-registered.tpl',
      1 => 1343862256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16892149675011408f48a518-30645679',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5011408f49ce62_87680632',
  'variables' => 
  array (
    'loggedIn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5011408f49ce62_87680632')) {function content_5011408f49ce62_87680632($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/function.zend_url.php';
?><?php if (!$_smarty_tpl->tpl_vars['loggedIn']->value){?>
<div class="alreadyRegistered">
	<h3>Sind Sie Künstler?</h3>
	<p>Dann nützen Sie hier die Chance und</p>

<p>	<a href="<?php echo smarty_function_zend_url(array('controller'=>'user','action'=>'signup'),$_smarty_tpl);?>
" class="btn">Registrieren Sie sich » </a>
</p>
	<p>um Ihre künstlerische Tätigkeit zu präsentieren.</p>
</div>
<?php }?><?php }} ?>