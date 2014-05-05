<?php /* Smarty version Smarty-3.1.8, created on 2012-10-27 23:51:30
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/admin/views/index/photos-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:828737613508c4c68e116f6-27763272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a79f94f799ad09645912daa761f5fbaa3a5e8184' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/admin/views/index/photos-list.tpl',
      1 => 1351374689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '828737613508c4c68e116f6-27763272',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508c4c68e753b9_60812189',
  'variables' => 
  array (
    'response' => 0,
    'pendingPhotos' => 0,
    'photo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508c4c68e753b9_60812189')) {function content_508c4c68e753b9_60812189($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/fvneralapparel/library/Smarty/plugins/function.zend_url.php';
?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['response']->value)===null||$tmp==='' ? '' : $tmp);?>


<?php if ($_smarty_tpl->tpl_vars['pendingPhotos']->value){?>
<div class="clearfix">
<h5>Eddig <?php echo count($_smarty_tpl->tpl_vars['pendingPhotos']->value);?>
 fotó van feltöltve:</h5>
	<ul class="thumbnails">
		<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pendingPhotos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
		<li class="span2">
			<span class="thumbnail">
				<img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value->filename;?>
" alt="" />
				<small><?php echo $_smarty_tpl->tpl_vars['photo']->value->created->format('Y-m-d H:i:s');?>
<br><a href="<?php echo smarty_function_zend_url(array('controller'=>'index','module'=>'admin','action'=>'delete-photo','id'=>$_smarty_tpl->tpl_vars['photo']->value->id),$_smarty_tpl);?>
" class="text-error delete">Kép törlése</a></small>
			</span>
		</li>
		<?php } ?>

	</ul>
	
</div>

<?php }?>

<?php }} ?>