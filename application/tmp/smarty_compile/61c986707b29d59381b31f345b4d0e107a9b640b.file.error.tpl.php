<?php /* Smarty version Smarty-3.1.8, created on 2012-11-09 12:31:00
         compiled from "/Users/Pixeloid/Sites/csaladimatrica/application/modules/default/views/csaladimatrica/error/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:326687204509ce974545d10-70737235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61c986707b29d59381b31f345b4d0e107a9b640b' => 
    array (
      0 => '/Users/Pixeloid/Sites/csaladimatrica/application/modules/default/views/csaladimatrica/error/error.tpl',
      1 => 1342980420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326687204509ce974545d10-70737235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509ce97459c639_60736748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509ce97459c639_60736748')) {function content_509ce97459c639_60736748($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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