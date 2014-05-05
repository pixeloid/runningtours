<?php /* Smarty version Smarty-3.1.8, created on 2013-02-19 10:25:28
         compiled from "/var/www/virtual/pixeloid.hu/rt/application/modules/default/views/scripts/error/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111515885751234508641f70-51557496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72fa5ad701faae154155ec5a105d5e8de8c73fbe' => 
    array (
      0 => '/var/www/virtual/pixeloid.hu/rt/application/modules/default/views/scripts/error/error.tpl',
      1 => 1361265819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111515885751234508641f70-51557496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_512345087c15b4_44574669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_512345087c15b4_44574669')) {function content_512345087c15b4_44574669($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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