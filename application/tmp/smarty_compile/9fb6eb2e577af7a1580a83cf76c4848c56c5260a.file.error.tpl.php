<?php /* Smarty version Smarty-3.1.8, created on 2013-04-17 22:07:43
         compiled from "/Users/Pixeloid/Sites/runningtours/application/modules/default/views/scripts/error/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1807197700511e921b071279-91051075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fb6eb2e577af7a1580a83cf76c4848c56c5260a' => 
    array (
      0 => '/Users/Pixeloid/Sites/runningtours/application/modules/default/views/scripts/error/error.tpl',
      1 => 1366023000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1807197700511e921b071279-91051075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511e921b2cfc10_85549366',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e921b2cfc10_85549366')) {function content_511e921b2cfc10_85549366($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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