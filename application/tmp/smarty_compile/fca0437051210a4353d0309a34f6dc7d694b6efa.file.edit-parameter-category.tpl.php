<?php /* Smarty version Smarty-3.1.8, created on 2012-09-11 22:17:04
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/edit-parameter-category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:224569221504f7bc943ead5-09276126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fca0437051210a4353d0309a34f6dc7d694b6efa' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/edit-parameter-category.tpl',
      1 => 1347394514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224569221504f7bc943ead5-09276126',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504f7bc946fae3_66392409',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504f7bc946fae3_66392409')) {function content_504f7bc946fae3_66392409($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/emlekmentes/library/Smarty/plugins/function.zend_url.php';
?><h3>Paraméter-kategóira módosítása</h3>
<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'index'),$_smarty_tpl);?>
" class="btn btn-primary">« Vissza</a><?php }} ?>