<?php /* Smarty version Smarty-3.1.8, created on 2012-09-17 00:05:23
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/emlekmentes/index/search-result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14471794250564d2310c6c2-86263975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41d3e0163d2504087184f16e32160523335e3430' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/emlekmentes/index/search-result.tpl',
      1 => 1347815826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14471794250564d2310c6c2-86263975',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'searchParams' => 0,
    'param' => 0,
    'searchResult' => 0,
    'relic' => 0,
    'photo' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50564d231ae988_87297494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50564d231ae988_87297494')) {function content_50564d231ae988_87297494($_smarty_tpl) {?><div class="row">
	<ul>
	<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchParams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
$_smarty_tpl->tpl_vars['param']->_loop = true;
?>
		<li><b><?php echo $_smarty_tpl->tpl_vars['param']->value['name'];?>
:</b> <?php echo implode($_smarty_tpl->tpl_vars['param']->value['values'],', ');?>
</li>
	<?php } ?>
	</ul>
	<?php  $_smarty_tpl->tpl_vars['relic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['relic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchResult']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['relic']->key => $_smarty_tpl->tpl_vars['relic']->value){
$_smarty_tpl->tpl_vars['relic']->_loop = true;
?>
	<div class="span2">
		<h4><?php echo $_smarty_tpl->tpl_vars['relic']->value->title;?>
</h4>
		
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

	</div>
	<?php } ?>
	
</div><?php }} ?>