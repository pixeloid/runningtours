<?php /* Smarty version Smarty-3.1.8, created on 2012-10-27 09:20:20
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/common/error/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2095851968508b8b341d3749-23255113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a38771559cbca048fb0bc7a206d364267629122b' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/common/error/error.tpl',
      1 => 1342189946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2095851968508b8b341d3749-23255113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508b8b34231410_99518524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508b8b34231410_99518524')) {function content_508b8b34231410_99518524($_smarty_tpl) {?><h1>An error occurred</h1>

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