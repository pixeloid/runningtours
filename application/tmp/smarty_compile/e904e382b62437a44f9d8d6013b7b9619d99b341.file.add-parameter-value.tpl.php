<?php /* Smarty version Smarty-3.1.8, created on 2012-09-11 22:35:32
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/add-parameter-value.tpl" */ ?>
<?php /*%%SmartyHeaderCode:734627916504fa094e992d4-68189954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e904e382b62437a44f9d8d6013b7b9619d99b341' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/add-parameter-value.tpl',
      1 => 1347395692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '734627916504fa094e992d4-68189954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504fa094ed3d61_07845010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504fa094ed3d61_07845010')) {function content_504fa094ed3d61_07845010($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/emlekmentes/library/Smarty/plugins/function.zend_url.php';
?><h3>Paraméter érték hozzáadása</h3>
<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'index'),$_smarty_tpl);?>
" class="btn btn-primary">« Vissza</a><?php }} ?>