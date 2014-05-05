<?php /* Smarty version Smarty-3.1.8, created on 2013-02-15 20:52:57
         compiled from "/Users/Pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/photos-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1797177046511e92193862f5-39841153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb4db133133c22e228eb5b3e3e54a3873936b592' => 
    array (
      0 => '/Users/Pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/photos-list.tpl',
      1 => 1352476915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1797177046511e92193862f5-39841153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groups' => 0,
    'key' => 0,
    'group' => 0,
    'photo' => 0,
    'parttypes' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511e9219420c76_31192910',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e9219420c76_31192910')) {function content_511e9219420c76_31192910($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/runningtours/library/Smarty/plugins/function.zend_url.php';
?>

<div class="clearfix">

<?php  $_smarty_tpl->tpl_vars["group"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["group"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["group"]->key => $_smarty_tpl->tpl_vars["group"]->value){
$_smarty_tpl->tpl_vars["group"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["group"]->key;
?>
	
	<h2><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h2>
	<ul class="thumbnails">
		<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
		<li class="span3">
			<span class="thumbnail">
				<small><?php echo basename($_smarty_tpl->tpl_vars['photo']->value->filename);?>
<br><a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'delete-photo','id'=>$_smarty_tpl->tpl_vars['photo']->value->id),$_smarty_tpl);?>
" class="text-error delete">Kép törlése</a></small><img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value->filename;?>
" alt="" width="200" />
				<br>
				<select name="type_id" id="type_id_<?php echo $_smarty_tpl->tpl_vars['photo']->value->id;?>
"  onchange="Site.changePartType(<?php echo $_smarty_tpl->tpl_vars['photo']->value->id;?>
, this.value)" style="width: 120px">
					<option value="">Válassz...</option>
					<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parttypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['type']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value->id==$_smarty_tpl->tpl_vars['photo']->value->type->id){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['type']->value->name;?>
</option>
					<?php } ?>
				</select>
				
			</span>
			
			
			
		</li>
		<?php } ?>

	</ul>
	<?php } ?>
	
</div>

<?php }} ?>