<?php /* Smarty version Smarty-3.1.8, created on 2012-09-11 22:20:37
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/edit-parameter-value.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1566356702504f9d1551f657-74560583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42ff73e8964dbeb516b50f0bd42753f0613c472c' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/edit-parameter-value.tpl',
      1 => 1347394743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1566356702504f9d1551f657-74560583',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504f9d15558545_61338871',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504f9d15558545_61338871')) {function content_504f9d15558545_61338871($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/emlekmentes/library/Smarty/plugins/function.zend_url.php';
?><h3>Paraméter érték módosítása</h3>
<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'index'),$_smarty_tpl);?>
" class="btn btn-primary">« Vissza</a><?php }} ?>