<?php /* Smarty version Smarty-3.1.8, created on 2012-10-28 00:19:55
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/admin/views/index/manage-lookbook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:634731014508be39c73b4d3-88489094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '363568b4f332b5203b932f3041e763c34dea4f3a' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/admin/views/index/manage-lookbook.tpl',
      1 => 1351376394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '634731014508be39c73b4d3-88489094',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508be39c7d1087_72357149',
  'variables' => 
  array (
    'form' => 0,
    'lookbookItem' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508be39c7d1087_72357149')) {function content_508be39c7d1087_72357149($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/fvneralapparel/library/Smarty/plugins/function.zend_url.php';
?>
<div class="span6">
	
	
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'index'),$_smarty_tpl);?>
" class="btn btn-primary">« Vissza</a>

	<?php if ($_smarty_tpl->tpl_vars['lookbookItem']->value->id){?>
	<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'manage-lookbook','id'=>$_smarty_tpl->tpl_vars['lookbookItem']->value->id,'operation'=>'delete'),$_smarty_tpl);?>
" class="btn btn-error">Termék törlése</a>
	<?php }?>

	
</div>




<div class="span6">
	
	<div id="uploadContainer">
		<p class="clearfix">
			<a href="#" class="btn" id="pickfiles"><span>Válaszd ki a képeket!</span></a>
		</p>		

		<div class="imageList pending">
			<?php echo $_smarty_tpl->tpl_vars['this']->value->action('pending-photos','index','admin',array('type'=>'lookbook'));?>

		</div>


		<div id="filelist"></div>
			<a href="#" class="btn btn-large btn-success" id="uploadfiles">Képek feltöltése »</a>

	</div>
	<?php if ($_smarty_tpl->tpl_vars['lookbookItem']->value->photo){?>
	
	<div class="imageList">
		<ul class="thumbnails">
		<li class="span2">
			<span class="thumbnail">
				<img src="<?php echo $_smarty_tpl->tpl_vars['lookbookItem']->value->photo->filename;?>
" alt="" />
				<small><?php echo $_smarty_tpl->tpl_vars['lookbookItem']->value->photo->created->format('Y-m-d H:i:s');?>
<br><a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'delete-photo','id'=>$_smarty_tpl->tpl_vars['lookbookItem']->value->photo->id),$_smarty_tpl);?>
" class="text-error delete">Kép törlése</a></small>
			</span>
		</li>
	</ul>
	</div>
	<?php }?>
</div>

<?php }} ?>