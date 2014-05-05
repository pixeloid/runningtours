<?php /* Smarty version Smarty-3.1.8, created on 2012-09-14 13:22:11
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/manage-parameter-value.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1427339054505313631c1812-28380555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f319779708f76e69b83e2f89fd3d982258e809f' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/manage-parameter-value.tpl',
      1 => 1347394743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1427339054505313631c1812-28380555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505313631fa6d0_55272296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505313631fa6d0_55272296')) {function content_505313631fa6d0_55272296($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/emlekmentes/library/Smarty/plugins/function.zend_url.php';
?><h3>Paraméter érték módosítása</h3>
<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'index'),$_smarty_tpl);?>
" class="btn btn-primary">« Vissza</a><?php }} ?>