<?php /* Smarty version Smarty-3.1.8, created on 2012-10-27 23:39:56
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/admin/views/index/manage-product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:406576145508b9033bf4c04-09138516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '256709bed993cb0cf2001a945c6b6bc7fb180df3' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/admin/views/index/manage-product.tpl',
      1 => 1351373984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '406576145508b9033bf4c04-09138516',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508b9033ccb646_74357794',
  'variables' => 
  array (
    'product' => 0,
    'form' => 0,
    'this' => 0,
    'photo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508b9033ccb646_74357794')) {function content_508b9033ccb646_74357794($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/fvneralapparel/library/Smarty/plugins/function.zend_url.php';
?><div class="span6">
	<?php if (!$_smarty_tpl->tpl_vars['product']->value->id){?>
		<h3>Termék létrehozása</h3>
	<?php }else{ ?>
		<h3>Termék szerkesztése</h3>
	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'index'),$_smarty_tpl);?>
" class="btn btn-primary">« Vissza</a>

	<?php if ($_smarty_tpl->tpl_vars['product']->value->id){?>
	<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'manage-product','id'=>$_smarty_tpl->tpl_vars['product']->value->id,'operation'=>'delete'),$_smarty_tpl);?>
" class="btn btn-error">Termék törlése</a>
	<?php }?>
	
</div>



<div class="span6">
	<div id="uploadContainer">
		<p class="clearfix">
			<a href="#" class="btn" id="pickfiles"><span>Válaszd ki a képeket!</span></a>
		</p>		

		<div class="imageList pending">
			<?php echo $_smarty_tpl->tpl_vars['this']->value->action('pending-photos','index','admin',array('type'=>'product'));?>

		</div>


		<div id="filelist"></div>
			<a href="#" class="btn btn-large btn-success" id="uploadfiles">Képek feltöltése »</a>

	</div>
	
	
	<div class="imageList">
		<ul class="thumbnails">
		<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->photos; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
		<li class="span2">
			<span class="thumbnail">
				<img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value->filename;?>
" alt="" />
				<small><?php echo $_smarty_tpl->tpl_vars['photo']->value->created->format('Y-m-d H:i:s');?>
<br><a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'delete-photo','id'=>$_smarty_tpl->tpl_vars['photo']->value->id),$_smarty_tpl);?>
" class="text-error delete">Kép törlése</a></small>
			</span>
		</li>
		<?php } ?>
	</ul>
	</div>
</div>
<?php }} ?>