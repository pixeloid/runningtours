<?php /* Smarty version Smarty-3.1.8, created on 2012-09-18 12:33:36
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/emlekmentes/index/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200075682550584d8e935a51-42568076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d2f120f7b50d514999414e47a710df6fed3e5dc' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/emlekmentes/index/show.tpl',
      1 => 1347964415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200075682550584d8e935a51-42568076',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50584d8e94b664_46056107',
  'variables' => 
  array (
    'relic' => 0,
    'photo' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50584d8e94b664_46056107')) {function content_50584d8e94b664_46056107($_smarty_tpl) {?><div class="row">
	<h2><?php echo $_smarty_tpl->tpl_vars['relic']->value->title;?>
</h2>
	<p>Feltöltve: <?php echo $_smarty_tpl->tpl_vars['relic']->value->created->format('Y-m-d');?>
</p>
	
	<ul class="thumbnails">
	<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['relic']->value->photos; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
	<li class="thumbnail">
		<img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value->filename;?>
" alt="" />
	</li>
	<?php } ?>
	</ul>
	
	<dl>
		<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['relic']->value->parameterValues; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
			<dt><?php echo $_smarty_tpl->tpl_vars['val']->value->parameter->name;?>
</dt>

				<dd><?php echo $_smarty_tpl->tpl_vars['val']->value->name;?>
</dd>
		<?php } ?>

	</dl>
	
	
	
</div><?php }} ?>