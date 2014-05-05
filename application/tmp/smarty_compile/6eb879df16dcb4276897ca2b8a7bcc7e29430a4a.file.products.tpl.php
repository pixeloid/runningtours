<?php /* Smarty version Smarty-3.1.8, created on 2012-11-01 18:22:43
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/admin/views/index/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:419318991508b8c16f29c37-81816713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eb879df16dcb4276897ca2b8a7bcc7e29430a4a' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/admin/views/index/products.tpl',
      1 => 1351624487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '419318991508b8c16f29c37-81816713',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508b8c170d7e62_76251004',
  'variables' => 
  array (
    'paginator' => 0,
    'request' => 0,
    'this' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508b8c170d7e62_76251004')) {function content_508b8c170d7e62_76251004($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/fvneralapparel/library/Smarty/plugins/function.zend_url.php';
?><div class="row">
	<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'manage-product','operation'=>'add'),$_smarty_tpl);?>
" class="btn btn-info">Új termék hozzáadása</a>
</div>

<div class="row">
	
	<?php if (count($_smarty_tpl->tpl_vars['paginator']->value)){?>
	
	<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['paginator']->value,'Sliding','paginate.tpl',array('request'=>$_smarty_tpl->tpl_vars['request']->value));?>


	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>Pos.</th>
	<th></th>
	      <th>Név</th>
	      <th>Ár</th>
	      <th>Képek</th>
	      <th>Létrehozva</th>
	      <th>Módosítva</th>
	      <th colspan ="3"></th>
			
	    </tr>
	  </thead>
	  <tbody>
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paginator']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
		<tr>
	      <td><?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
</td>
	      <td><?php echo $_smarty_tpl->tpl_vars['product']->value->position;?>
</td>
	      	<td><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->photos[0]->filename;?>
" width="40" alt="" /></td>
			<td><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</td>
	      <td><?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</td>
	      <td><?php echo $_smarty_tpl->tpl_vars['product']->value->photos->count();?>
</td>
	      <td><?php echo $_smarty_tpl->tpl_vars['product']->value->created->format('Y-m-d H:i:s');?>
</td>
	      <td><?php echo $_smarty_tpl->tpl_vars['product']->value->updated->format('Y-m-d H:i:s');?>
</td>
	      <td><a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'manage-product','id'=>$_smarty_tpl->tpl_vars['product']->value->id,'operation'=>'edit'),$_smarty_tpl);?>
" class="btn btn-success">Szerkesztés</a>
		<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'manage-product','id'=>$_smarty_tpl->tpl_vars['product']->value->id,'operation'=>'delete'),$_smarty_tpl);?>
" class="btn btn-alert">Törlés</a></td>
	    </tr>
		<?php } ?>
	  </tbody>
	</table>
	
	
	<?php }?>
	
</div>
<?php }} ?>