<?php /* Smarty version Smarty-3.1.8, created on 2013-07-19 13:31:51
         compiled from "/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43409763751e9227af0cbd5-26213689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84771ca537ca3286a41bbfad153f3c6e80e4282d' => 
    array (
      0 => '/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/gallery.tpl',
      1 => 1374233510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43409763751e9227af0cbd5-26213689',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51e9227b03bf96_81851489',
  'variables' => 
  array (
    'tours' => 0,
    'tour' => 0,
    'photo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e9227b03bf96_81851489')) {function content_51e9227b03bf96_81851489($_smarty_tpl) {?><div class="container">
	<div class="well">
		
		<?php  $_smarty_tpl->tpl_vars['tour'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tour']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tours']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tour']->key => $_smarty_tpl->tpl_vars['tour']->value){
$_smarty_tpl->tpl_vars['tour']->_loop = true;
?>
		
		<h3><?php echo $_smarty_tpl->tpl_vars['tour']->value->title;?>
</h3>
		
		<ul class="thumbnails"  id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
			<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tour']->value->photos; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
			<li class="span2"><a data-gallery="gallery" href="<?php echo $_smarty_tpl->tpl_vars['photo']->value->file->filename;?>
" class="thumbnail"><img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value->file->filename;?>
"></a></li>
			<?php } ?>
		</ul>
		
		<?php } ?>
		
		
	</div>
</div>



<div id="modal-gallery" class="modal modal-gallery hide fade" tabindex="-1">
    <div class="modal-body"><div class="modal-image"></div></div>
</div>
<?php }} ?>