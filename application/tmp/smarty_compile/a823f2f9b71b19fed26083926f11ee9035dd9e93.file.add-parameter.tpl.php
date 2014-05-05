<?php /* Smarty version Smarty-3.1.8, created on 2012-09-11 22:28:09
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/add-parameter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:469512593504f9ed9b448b2-37501087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a823f2f9b71b19fed26083926f11ee9035dd9e93' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/add-parameter.tpl',
      1 => 1347395288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '469512593504f9ed9b448b2-37501087',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504f9ed9b7e1d3_68089841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504f9ed9b7e1d3_68089841')) {function content_504f9ed9b7e1d3_68089841($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/emlekmentes/library/Smarty/plugins/function.zend_url.php';
?><h3>Paraméter létrehozása</h3>
<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'index'),$_smarty_tpl);?>
" class="btn btn-primary">« Vissza</a><?php }} ?>