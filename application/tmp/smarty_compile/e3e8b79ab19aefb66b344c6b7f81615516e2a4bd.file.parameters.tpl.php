<?php /* Smarty version Smarty-3.1.8, created on 2012-09-14 14:03:28
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/parameters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168119640504f708d37b385-89678987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3e8b79ab19aefb66b344c6b7f81615516e2a4bd' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/parameters.tpl',
      1 => 1347624208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168119640504f708d37b385-89678987',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504f708d37c384_44817957',
  'variables' => 
  array (
    'parameters' => 0,
    'cat' => 0,
    'param' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504f708d37c384_44817957')) {function content_504f708d37c384_44817957($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/emlekmentes/library/Smarty/plugins/function.zend_url.php';
?><h2>Paraméterek szerkesztése</h2>
<hr />
<div class="editParametersPanel"><?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parameters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
	<h4><?php echo $_smarty_tpl->tpl_vars['cat']->value->name;?>
 – <small><a href="<?php echo smarty_function_zend_url(array('module'=>'admin','action'=>'edit-parameter-category','catId'=>$_smarty_tpl->tpl_vars['cat']->value->id),$_smarty_tpl);?>
" class="text-warning">Szerkesztés</a> | <a href="<?php echo smarty_function_zend_url(array('module'=>'admin','action'=>'edit-parameter-category','catId'=>$_smarty_tpl->tpl_vars['cat']->value->id,'delete'=>'true'),$_smarty_tpl);?>
" class="text-error" data-dismiss="alert">Törlés</a></small></h4>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value->parameters; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
$_smarty_tpl->tpl_vars['param']->_loop = true;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['param']->value->name;?>
 – (<b><?php echo $_smarty_tpl->tpl_vars['param']->value->type->name;?>
</b>) <small><a href="<?php echo smarty_function_zend_url(array('module'=>'admin','action'=>'manage-parameter','id'=>$_smarty_tpl->tpl_vars['param']->value->id,'operation'=>'edit'),$_smarty_tpl);?>
" class="text-warning">Szerkesztés</a> | <a href="<?php echo smarty_function_zend_url(array('module'=>'admin','action'=>'manage-parameter','id'=>$_smarty_tpl->tpl_vars['param']->value->id,'operation'=>'delete'),$_smarty_tpl);?>
" class="text-error">Törlés</a></small>
				
				<ul>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['param']->value->parameterValues; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
 – <small>
							<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','action'=>'manage-parameter-value','id'=>$_smarty_tpl->tpl_vars['value']->value->id,'operation'=>'edit'),$_smarty_tpl);?>
" class="text-warning">Szerkesztés</a> | 
							<a href="<?php echo smarty_function_zend_url(array('module'=>'admin','action'=>'manage-parameter-value','id'=>$_smarty_tpl->tpl_vars['value']->value->id,'operation'=>'delete'),$_smarty_tpl);?>
" class="text-error">Törlés</a></small></li>
					<?php } ?>
					<li><small><a href="<?php echo smarty_function_zend_url(array('module'=>'admin','action'=>'manage-parameter-value','operation'=>'add','parameterId'=>$_smarty_tpl->tpl_vars['param']->value->id),$_smarty_tpl);?>
" class="text-info">+ Új érték hozzáadása a <b><?php echo $_smarty_tpl->tpl_vars['param']->value->name;?>
</b> paraméterhez</a></small></li>
				</ul>
				
			</li>
		<?php } ?>
		
		<li><small><a href="<?php echo smarty_function_zend_url(array('module'=>'admin','action'=>'manage-parameter','operation'=>'add','categoryId'=>$_smarty_tpl->tpl_vars['cat']->value->id),$_smarty_tpl);?>
" class="text-info">+ Új paraméter hozzáadása a <b><?php echo $_smarty_tpl->tpl_vars['cat']->value->name;?>
</b> kategóriához</a></small></li>
		
	</ul>
	
<?php } ?>

<h4><small><a href="<?php echo smarty_function_zend_url(array('module'=>'admin','action'=>'add-parameter-category'),$_smarty_tpl);?>
" class="text-info">+ Új kategória hozzáadása</a></small></h4>



</div>
<?php }} ?>