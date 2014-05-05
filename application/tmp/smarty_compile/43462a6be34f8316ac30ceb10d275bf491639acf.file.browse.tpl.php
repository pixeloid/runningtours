<?php /* Smarty version Smarty-3.1.8, created on 2012-09-18 12:28:15
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/browse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19396806665058462708e0c2-78900141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43462a6be34f8316ac30ceb10d275bf491639acf' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/browse.tpl',
      1 => 1347964094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19396806665058462708e0c2-78900141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50584627128a42_91880687',
  'variables' => 
  array (
    'paginator' => 0,
    'request' => 0,
    'this' => 0,
    'relic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50584627128a42_91880687')) {function content_50584627128a42_91880687($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/emlekmentes/library/Smarty/plugins/function.zend_url.php';
?><div class="row">
	
	<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['paginator']->value,'Sliding','paginate.tpl',array('request'=>$_smarty_tpl->tpl_vars['request']->value));?>


	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>Cím</th>
	      <th>Képek száma</th>
	      <th>Létrehozva</th>
	      <th>Módosítva</th>
	      <th colspan ="3"></th>
			
	    </tr>
	  </thead>
	  <tbody>
		<?php  $_smarty_tpl->tpl_vars['relic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['relic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paginator']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['relic']->key => $_smarty_tpl->tpl_vars['relic']->value){
$_smarty_tpl->tpl_vars['relic']->_loop = true;
?>
		<tr>
	      <td><?php echo $_smarty_tpl->tpl_vars['relic']->value->id;?>
</td>
	      <td><a href="<?php echo smarty_function_zend_url(array('module'=>'default','controller'=>'index','action'=>'show','slug'=>$_smarty_tpl->tpl_vars['relic']->value->slug),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['relic']->value->title;?>
</a></td>
	      <td><?php echo $_smarty_tpl->tpl_vars['relic']->value->photos->count();?>
</td>
	      <td><?php echo $_smarty_tpl->tpl_vars['relic']->value->created->format('Y-m-d H:i:s');?>
</td>
	      <td><?php echo $_smarty_tpl->tpl_vars['relic']->value->updated->format('Y-m-d H:i:s');?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['relic']->value->disabled){?><a href="#" class="btn btn-success">Engedélyezés</a><?php }else{ ?><a href="#" class="btn btn-danger">Tiltás</a><?php }?></td>
	    </tr>
		<?php } ?>
	  </tbody>
	</table>
	
</div>
<?php }} ?>