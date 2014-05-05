<?php /* Smarty version Smarty-3.1.8, created on 2012-07-14 21:17:20
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/error/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12895586365001c5c0647698-44351980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d1c400f124e1bd31800e109eafff766a02cc539' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/error/error.tpl',
      1 => 1342189947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12895586365001c5c0647698-44351980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5001c5c06d0470_95724378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5001c5c06d0470_95724378')) {function content_5001c5c06d0470_95724378($_smarty_tpl) {?><h1>An error occurred</h1>

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