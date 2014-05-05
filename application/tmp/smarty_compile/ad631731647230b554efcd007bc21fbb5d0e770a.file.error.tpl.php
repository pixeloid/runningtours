<?php /* Smarty version Smarty-3.1.8, created on 2013-07-19 13:21:04
         compiled from "/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/error/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18096825555120ee2e517bb1-85719069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad631731647230b554efcd007bc21fbb5d0e770a' => 
    array (
      0 => '/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/error/error.tpl',
      1 => 1366023000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18096825555120ee2e517bb1-85719069',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5120ee2e61cd95_42279844',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5120ee2e61cd95_42279844')) {function content_5120ee2e61cd95_42279844($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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