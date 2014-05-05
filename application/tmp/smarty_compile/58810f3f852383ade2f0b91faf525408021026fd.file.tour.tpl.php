<?php /* Smarty version Smarty-3.1.8, created on 2013-02-19 22:25:25
         compiled from "/Users/Pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/tour.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5108913945120bad5125757-06455233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58810f3f852383ade2f0b91faf525408021026fd' => 
    array (
      0 => '/Users/Pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/tour.tpl',
      1 => 1361309114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5108913945120bad5125757-06455233',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5120bad5126613_46666493',
  'variables' => 
  array (
    'tour' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5120bad5126613_46666493')) {function content_5120bad5126613_46666493($_smarty_tpl) {?><div class="container">
	<div class="well">
		<h1><?php echo $_smarty_tpl->tpl_vars['tour']->value->title;?>
</h1>

		<h3><?php echo $_smarty_tpl->tpl_vars['tour']->value->brief;?>
</h3>

		<p><?php echo $_smarty_tpl->tpl_vars['tour']->value->description;?>
</p>
		
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'book-now','id'=>$_smarty_tpl->tpl_vars['tour']->value->id));?>
" class="btn">Book now!</a></p>
	</div>
</div>
<?php }} ?>