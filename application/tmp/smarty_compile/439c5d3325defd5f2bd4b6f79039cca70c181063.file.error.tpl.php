<?php /* Smarty version Smarty-3.1.8, created on 2013-04-15 12:56:04
         compiled from "/var/www/netstudio/runningtoursbudapest.com/application/modules/default/views/scripts/error/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:794933079516bdcc4beeaf7-25036799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '439c5d3325defd5f2bd4b6f79039cca70c181063' => 
    array (
      0 => '/var/www/netstudio/runningtoursbudapest.com/application/modules/default/views/scripts/error/error.tpl',
      1 => 1366023028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '794933079516bdcc4beeaf7-25036799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_516bdcc4c3a3b5_70283968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516bdcc4c3a3b5_70283968')) {function content_516bdcc4c3a3b5_70283968($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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