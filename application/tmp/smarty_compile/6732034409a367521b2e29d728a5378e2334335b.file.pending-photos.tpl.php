<?php /* Smarty version Smarty-3.1.8, created on 2012-10-27 11:15:13
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvnarel/index/pending-photos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1781993865508ba621cb12a6-68533454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6732034409a367521b2e29d728a5378e2334335b' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvnarel/index/pending-photos.tpl',
      1 => 1351247338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1781993865508ba621cb12a6-68533454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'response' => 0,
    'pendingPhotos' => 0,
    'photo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508ba621ee01f0_81095036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508ba621ee01f0_81095036')) {function content_508ba621ee01f0_81095036($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/fvneralapparel/library/Smarty/plugins/function.zend_url.php';
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
<br><a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'pending-photos','delete'=>$_smarty_tpl->tpl_vars['photo']->value->id),$_smarty_tpl);?>
" class="text-error delete-pending">Kép törlése</a></small>
			</span>
		</li>
		<?php } ?>

	</ul>
	<a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'add-photo-parameters'),$_smarty_tpl);?>
" class="fw pull-right"><span>Kép adatainak megadása</span></a>
	
</div>

<?php }?>

<?php }} ?>