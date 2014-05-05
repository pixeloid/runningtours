<?php /* Smarty version Smarty-3.1.8, created on 2013-06-19 00:36:15
         compiled from "/Users/Pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/feedbacks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1015519116512e5b7b227060-06989160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27a929cbf5cacf9a9f26ec9eb53c683fda3e8413' => 
    array (
      0 => '/Users/Pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/feedbacks.tpl',
      1 => 1371594967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1015519116512e5b7b227060-06989160',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_512e5b7b227ef5_32282964',
  'variables' => 
  array (
    'isAdmin' => 0,
    'this' => 0,
    'feedbacks' => 0,
    'fb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_512e5b7b227ef5_32282964')) {function content_512e5b7b227ef5_32282964($_smarty_tpl) {?><div class="container">
	<h2>Feedbacks</h2>

	<div class="well">
		
		<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'add-feedback'));?>
" class="">Add new feedback</a><?php }?>
		
		<?php  $_smarty_tpl->tpl_vars['fb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feedbacks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fb']->key => $_smarty_tpl->tpl_vars['fb']->value){
$_smarty_tpl->tpl_vars['fb']->_loop = true;
?>
		<blockquote><?php echo nl2br($_smarty_tpl->tpl_vars['fb']->value->description);?>
<br><strong><em><?php echo $_smarty_tpl->tpl_vars['fb']->value->author;?>
</em></strong>
		
			<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'edit-feedback','id'=>$_smarty_tpl->tpl_vars['fb']->value->id));?>
" class="">EDIT</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'delete-feedback','id'=>$_smarty_tpl->tpl_vars['fb']->value->id));?>
" class="">REMOVE</a><?php }?>
		
		</blockquote> 
		<?php } ?>
		
	</div>
</div><?php }} ?>