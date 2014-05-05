<?php /* Smarty version Smarty-3.1.8, created on 2012-11-09 12:28:17
         compiled from "/Users/Pixeloid/Sites/csaladimatrica/application/modules/default/views/common/error/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134022528509ce8d108dd17-98477469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f5d6cd73c1696b54fdd370448ea82226de5c5ec' => 
    array (
      0 => '/Users/Pixeloid/Sites/csaladimatrica/application/modules/default/views/common/error/error.tpl',
      1 => 1342189946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134022528509ce8d108dd17-98477469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509ce8d112a2c4_14581919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509ce8d112a2c4_14581919')) {function content_509ce8d112a2c4_14581919($_smarty_tpl) {?><h1>An error occurred</h1>

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