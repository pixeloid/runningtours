<?php /* Smarty version Smarty-3.1.8, created on 2012-09-11 21:30:03
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/edit-parameter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1766314290504f90c73350f0-91132993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a40adddfc5ad50f39ab3ad5078c153bf34445ef9' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/edit-parameter.tpl',
      1 => 1347391803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1766314290504f90c73350f0-91132993',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504f90c73702a7_17116257',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504f90c73702a7_17116257')) {function content_504f90c73702a7_17116257($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/emlekmentes/library/Smarty/plugins/function.zend_url.php';
?><h3>Paraméter szerkesztése</h3>
<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'index'),$_smarty_tpl);?>
" class="btn btn-primary">« Vissza</a><?php }} ?>