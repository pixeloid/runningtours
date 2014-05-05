<?php /* Smarty version Smarty-3.1.8, created on 2012-10-28 00:18:42
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/admin/views/index/lookbook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:678404008508be3700885c6-48371072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0092a4f1489efffc3f7627738f3e7d9a6e683471' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/admin/views/index/lookbook.tpl',
      1 => 1351376321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '678404008508be3700885c6-48371072',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508be370156fd7_22965263',
  'variables' => 
  array (
    'paginator' => 0,
    'request' => 0,
    'this' => 0,
    'lookbookItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508be370156fd7_22965263')) {function content_508be370156fd7_22965263($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/fvneralapparel/library/Smarty/plugins/function.zend_url.php';
?><div class="row">
	<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'manage-lookbook','operation'=>'add'),$_smarty_tpl);?>
" class="btn btn-info">Új Lookbook kép hozzáadása</a>
</div>

<div class="row">
	<?php if (count($_smarty_tpl->tpl_vars['paginator']->value)){?>
	
	<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['paginator']->value,'Sliding','paginate.tpl',array('request'=>$_smarty_tpl->tpl_vars['request']->value));?>


	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>Cím</th>
	      <th>Kép</th>
	      <th>Létrehozva</th>
	      <th>Módosítva</th>
	      <th colspan ="3"></th>
			
	    </tr>
	  </thead>
	  <tbody>
		<?php  $_smarty_tpl->tpl_vars['lookbookItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lookbookItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paginator']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lookbookItem']->key => $_smarty_tpl->tpl_vars['lookbookItem']->value){
$_smarty_tpl->tpl_vars['lookbookItem']->_loop = true;
?>
		<tr>
	      <td><?php echo $_smarty_tpl->tpl_vars['lookbookItem']->value->id;?>
</td>
	      <td><a href="<?php echo smarty_function_zend_url(array('module'=>'default','controller'=>'index','action'=>'show','slug'=>$_smarty_tpl->tpl_vars['lookbookItem']->value->id),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lookbookItem']->value->caption;?>
</a></td>
	      <td><img src="<?php echo $_smarty_tpl->tpl_vars['lookbookItem']->value->photo->filename;?>
" alt="" width="100"/></td>
	      <td><?php echo $_smarty_tpl->tpl_vars['lookbookItem']->value->created->format('Y-m-d H:i:s');?>
</td>
	      <td><?php echo $_smarty_tpl->tpl_vars['lookbookItem']->value->updated->format('Y-m-d H:i:s');?>
</td>
	      <td><a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'manage-lookbook','id'=>$_smarty_tpl->tpl_vars['lookbookItem']->value->id,'operation'=>'edit'),$_smarty_tpl);?>
" class="btn btn-success">Szerkesztés</a>
		<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'manage-lookbook','id'=>$_smarty_tpl->tpl_vars['lookbookItem']->value->id,'operation'=>'delete'),$_smarty_tpl);?>
" class="btn btn-alert">Törlés</a></td>
	    </tr>
		<?php } ?>
	  </tbody>
	</table>
	
	
	<?php }?>
</div>
<?php }} ?>