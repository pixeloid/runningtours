<?php /* Smarty version Smarty-3.1.8, created on 2012-09-14 12:53:14
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/manage-parameter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63145444550530039c26104-82553062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '460db8d766d2bfbbcedb35249fe58d2ce4661259' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/manage-parameter.tpl',
      1 => 1347619993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63145444550530039c26104-82553062',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50530039c5ee23_80129642',
  'variables' => 
  array (
    'parameter' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50530039c5ee23_80129642')) {function content_50530039c5ee23_80129642($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/emlekmentes/library/Smarty/plugins/function.zend_url.php';
?><?php if (!$_smarty_tpl->tpl_vars['parameter']->value->id){?>
	<h3>Paraméter létrehozása</h3>
<?php }else{ ?>
	<h3>Paraméter szerkesztése</h3>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'index'),$_smarty_tpl);?>
" class="btn btn-primary">« Vissza</a>

<?php if ($_smarty_tpl->tpl_vars['parameter']->value->id){?>
<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'manage-parameter','id'=>$_smarty_tpl->tpl_vars['parameter']->value->id,'operation'=>'delete'),$_smarty_tpl);?>
" class="btn btn-error">Paraméter törlése</a>
<?php }?>

<?php }} ?>