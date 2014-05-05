<?php /* Smarty version Smarty-3.1.8, created on 2012-09-11 22:23:09
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/add-parameter-category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289257940504f9dad164cc5-79583044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e41fca941fd1ded0b4cc83d5e1950ed7fc54e459' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/add-parameter-category.tpl',
      1 => 1347394884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289257940504f9dad164cc5-79583044',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504f9dad19e521_55088348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504f9dad19e521_55088348')) {function content_504f9dad19e521_55088348($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/emlekmentes/library/Smarty/plugins/function.zend_url.php';
?><h3>Paraméter-kategóira létrehozása</h3>
<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'index'),$_smarty_tpl);?>
" class="btn btn-primary">« Vissza</a><?php }} ?>