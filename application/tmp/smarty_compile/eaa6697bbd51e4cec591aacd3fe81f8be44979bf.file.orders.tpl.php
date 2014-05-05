<?php /* Smarty version Smarty-3.1.8, created on 2012-11-04 01:31:20
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/admin/views/index/orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20210778695092755e662c23-96497704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaa6697bbd51e4cec591aacd3fe81f8be44979bf' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/admin/views/index/orders.tpl',
      1 => 1351989065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20210778695092755e662c23-96497704',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5092755e6f6722_98199101',
  'variables' => 
  array (
    'paginator' => 0,
    'request' => 0,
    'this' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5092755e6f6722_98199101')) {function content_5092755e6f6722_98199101($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/fvneralapparel/library/Smarty/plugins/function.zend_url.php';
?>
<div class="row">
	
	<?php if (count($_smarty_tpl->tpl_vars['paginator']->value)){?>
	
	<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['paginator']->value,'Sliding','paginate.tpl',array('request'=>$_smarty_tpl->tpl_vars['request']->value));?>


	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>Név.</th>
			<th>Termékek</th>
	      <th>Összérték</th>
	      <th>Létrehozva</th>
	      <th>Módosítva</th>
	      <th colspan ="3"></th>
			
	    </tr>
	  </thead>
	  <tbody>
		<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paginator']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value){
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
		<tr>
	      <td><?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</td>
	      <td><?php echo $_smarty_tpl->tpl_vars['order']->value->user->name;?>
</td>
	      	<td><?php echo $_smarty_tpl->tpl_vars['order']->value->orderitems->count();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['order']->value->getTotal();?>
</td>
	      <td><?php echo $_smarty_tpl->tpl_vars['order']->value->created->format('Y-m-d H:i:s');?>
</td>
	      <td><?php echo $_smarty_tpl->tpl_vars['order']->value->updated->format('Y-m-d H:i:s');?>
</td>
	      <td><a href="<?php echo smarty_function_zend_url(array('module'=>'admin','controller'=>'index','action'=>'view-order','id'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl);?>
" class="btn btn-success">Részletek</a>
		</td>
	    </tr>
		<?php } ?>
	  </tbody>
	</table>
	
	
	<?php }?>
	
</div>
<?php }} ?>