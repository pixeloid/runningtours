<?php /* Smarty version Smarty-3.1.8, created on 2012-11-09 17:02:10
         compiled from "/Users/Pixeloid/Sites/csaladimatrica/application/modules/default/views/csaladimatrica/index/photos-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1898466918509cee8fd8cb68-29870790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '426f9785985da9282fe5f1bf6844ee282da4ef3a' => 
    array (
      0 => '/Users/Pixeloid/Sites/csaladimatrica/application/modules/default/views/csaladimatrica/index/photos-list.tpl',
      1 => 1352476915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1898466918509cee8fd8cb68-29870790',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509cee8fdc6807_33657958',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509cee8fdc6807_33657958')) {function content_509cee8fdc6807_33657958($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/csaladimatrica/library/Smarty/plugins/function.zend_url.php';
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