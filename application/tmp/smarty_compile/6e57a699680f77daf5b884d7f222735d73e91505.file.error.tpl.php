<?php /* Smarty version Smarty-3.1.8, created on 2013-02-15 20:43:37
         compiled from "/Users/Pixeloid/Sites/runningtours/application/modules/default/views/csaladimatrica/error/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2020856830511e8fe90cdfb4-30370548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e57a699680f77daf5b884d7f222735d73e91505' => 
    array (
      0 => '/Users/Pixeloid/Sites/runningtours/application/modules/default/views/csaladimatrica/error/error.tpl',
      1 => 1342980420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2020856830511e8fe90cdfb4-30370548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511e8fe9188034_04699950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e8fe9188034_04699950')) {function content_511e8fe9188034_04699950($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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