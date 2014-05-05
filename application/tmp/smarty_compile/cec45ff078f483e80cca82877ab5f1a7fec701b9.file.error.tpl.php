<?php /* Smarty version Smarty-3.1.8, created on 2012-09-11 01:34:09
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/common/error/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1074487130504e78f19818b5-37420582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cec45ff078f483e80cca82877ab5f1a7fec701b9' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/common/error/error.tpl',
      1 => 1342189946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1074487130504e78f19818b5-37420582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504e78f19a3890_98451881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504e78f19a3890_98451881')) {function content_504e78f19a3890_98451881($_smarty_tpl) {?><h1>An error occurred</h1>

<h2><?php echo $_smarty_tpl->tpl_vars['this']->value->message;?>
</h2>

  <?php if ($_smarty_tpl->tpl_vars['this']->value->exception){?>
<h3>
  Exception information:
</h3>

<p>
  <b>Message:</b> <?php echo $_smarty_tpl->tpl_vars['this']->value->exception->getMessage();?>

</p>

<h3>
  Stack trace:
</h3>

<pre><?php echo $_smarty_tpl->tpl_vars['this']->value->exception->getTraceAsString();?>

  </pre>

<h3>
  Request Parameters:
</h3>

<pre><?php echo var_export($_smarty_tpl->tpl_vars['this']->value->request->getParams(),true);?>

  </pre>
  <?php }?><?php }} ?>