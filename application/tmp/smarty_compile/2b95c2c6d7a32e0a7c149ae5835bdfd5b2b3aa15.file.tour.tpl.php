<?php /* Smarty version Smarty-3.1.8, created on 2013-02-17 16:17:35
         compiled from "/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/tour.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4535951875120f4382ecac7-15223189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b95c2c6d7a32e0a7c149ae5835bdfd5b2b3aa15' => 
    array (
      0 => '/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/tour.tpl',
      1 => 1361114249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4535951875120f4382ecac7-15223189',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5120f43833cdf4_64557047',
  'variables' => 
  array (
    'tour' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5120f43833cdf4_64557047')) {function content_5120f43833cdf4_64557047($_smarty_tpl) {?><div class="container">
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