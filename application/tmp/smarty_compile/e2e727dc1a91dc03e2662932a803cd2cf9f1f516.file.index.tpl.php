<?php /* Smarty version Smarty-3.1.8, created on 2013-10-22 00:49:49
         compiled from "/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/feedbacks/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7580559665265af8d0e3715-56660800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2e727dc1a91dc03e2662932a803cd2cf9f1f516' => 
    array (
      0 => '/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/feedbacks/index.tpl',
      1 => 1371622786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7580559665265af8d0e3715-56660800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isAdmin' => 0,
    'this' => 0,
    'feedbacks' => 0,
    'fb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5265af8d32fd08_61748141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5265af8d32fd08_61748141')) {function content_5265af8d32fd08_61748141($_smarty_tpl) {?><div class="container">
	<h2>Feedbacks</h2>

	<div class="well">
		
		<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'add'));?>
" class="">Add new feedback</a><?php }?>
		
		<?php  $_smarty_tpl->tpl_vars['fb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feedbacks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fb']->key => $_smarty_tpl->tpl_vars['fb']->value){
$_smarty_tpl->tpl_vars['fb']->_loop = true;
?>
		<blockquote><?php echo nl2br($_smarty_tpl->tpl_vars['fb']->value->description);?>
<br><strong><em><?php echo $_smarty_tpl->tpl_vars['fb']->value->author;?>
</em></strong>
		
			<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'edit','id'=>$_smarty_tpl->tpl_vars['fb']->value->id));?>
" class="">EDIT</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'delete','id'=>$_smarty_tpl->tpl_vars['fb']->value->id));?>
" class="">REMOVE</a><?php }?>
		
		</blockquote> 
		<?php } ?>
		
	</div>
</div><?php }} ?>