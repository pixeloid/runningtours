<?php /* Smarty version Smarty-3.1.8, created on 2012-07-26 14:43:11
         compiled from "/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/error/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149026496750113b5f85bc49-24755737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f14c59631f02ba1503d36fe06e37f719010126a4' => 
    array (
      0 => '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/error/error.tpl',
      1 => 1342189946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149026496750113b5f85bc49-24755737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50113b5fab8b58_06346191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50113b5fab8b58_06346191')) {function content_50113b5fab8b58_06346191($_smarty_tpl) {?><h1>An error occurred</h1>

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