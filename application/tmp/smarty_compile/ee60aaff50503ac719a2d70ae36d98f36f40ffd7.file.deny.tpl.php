<?php /* Smarty version Smarty-3.1.8, created on 2012-09-11 18:56:47
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/common/error/deny.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202284552504f6d4fe26e05-13554452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee60aaff50503ac719a2d70ae36d98f36f40ffd7' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/common/error/deny.tpl',
      1 => 1342507800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202284552504f6d4fe26e05-13554452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504f6d4fe76613_74985739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504f6d4fe76613_74985739')) {function content_504f6d4fe76613_74985739($_smarty_tpl) {?><h1>Acces denied!</h1>


<h3>
  Request Parameters:
</h3>

<pre><?php echo var_export($_smarty_tpl->tpl_vars['this']->value->request->getParams(),true);?>
  </pre>
<?php }} ?>