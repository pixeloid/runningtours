<?php /* Smarty version Smarty-3.1.8, created on 2013-02-17 15:48:00
         compiled from "/Users/pixeloid/Desktop/runningtours/application/modules/default/views/scripts/error/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10809941965120eda0b401b4-90526937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec22b55a30d42a3b80b9ae94809173cc38bd7510' => 
    array (
      0 => '/Users/pixeloid/Desktop/runningtours/application/modules/default/views/scripts/error/error.tpl',
      1 => 1342980420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10809941965120eda0b401b4-90526937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5120eda0c28d86_05536368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5120eda0c28d86_05536368')) {function content_5120eda0c28d86_05536368($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Zend Framework Default Application</title>
 
 
<h1>An error occurred</h1>
<h2><?php echo $_smarty_tpl->tpl_vars['this']->value->message;?>
</h2>
 
<?php if ($_smarty_tpl->tpl_vars['this']->value->exception){?>
 
<h3>Exception information:</h3>
<p>
    <b>Message:</b> <?php echo $_smarty_tpl->tpl_vars['this']->value->exception->getMessage();?>

</p>
 
<h3>Stack trace:</h3>
<pre><?php echo $_smarty_tpl->tpl_vars['this']->value->exception->getTraceAsString();?>

</pre>
 
<h3>Request Parameters:</h3>
<pre><?php echo var_export($_smarty_tpl->tpl_vars['this']->value->request->getParams(),true);?>

</pre>
<?php }?><?php }} ?>