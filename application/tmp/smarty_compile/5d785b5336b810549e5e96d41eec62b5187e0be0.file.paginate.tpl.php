<?php /* Smarty version Smarty-3.1.8, created on 2012-09-18 12:03:53
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/partials/paginate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:672431925056525d667960-96374164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d785b5336b810549e5e96d41eec62b5187e0be0' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/partials/paginate.tpl',
      1 => 1347962632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '672431925056525d667960-96374164',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5056525d72d467_89152739',
  'variables' => 
  array (
    'this' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5056525d72d467_89152739')) {function content_5056525d72d467_89152739($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/emlekmentes/library/Smarty/plugins/function.zend_url.php';
?>

<?php if ($_smarty_tpl->tpl_vars['this']->value->pageCount>1){?>
<div class="pagination paginationControl pagination-left">
	<ul>
	<!-- <li class="desc disabled"><a href="#"><<?php ?>?php echo $this->firstItemNumber; ?<?php ?>>-<<?php ?>?php echo $this->lastItemNumber; ?<?php ?>> / <<?php ?>?php echo $this->totalItemCount; ?<?php ?>></a></li> -->
	
	<?php if ($_smarty_tpl->tpl_vars['this']->value->previous){?>
		<li class="first"><a href="<?php echo smarty_function_zend_url(array('module'=>$_smarty_tpl->tpl_vars['this']->value->request->module,'controller'=>$_smarty_tpl->tpl_vars['this']->value->request->controller,'action'=>$_smarty_tpl->tpl_vars['this']->value->request->action,'page'=>$_smarty_tpl->tpl_vars['this']->value->first),$_smarty_tpl);?>
">&larr; Első</a></li>
		<li><a href="<?php echo smarty_function_zend_url(array('module'=>$_smarty_tpl->tpl_vars['this']->value->request->module,'controller'=>$_smarty_tpl->tpl_vars['this']->value->request->controller,'action'=>$_smarty_tpl->tpl_vars['this']->value->request->action,'page'=>$_smarty_tpl->tpl_vars['this']->value->previous),$_smarty_tpl);?>
">Előző</a></li>
	<?php }?>
	
	
	
<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['this']->value->pagesInRange; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>

	<?php if (($_smarty_tpl->tpl_vars['this']->value->first>$_smarty_tpl->tpl_vars['page']->value)&&($_smarty_tpl->tpl_vars['page']->value<$_smarty_tpl->tpl_vars['this']->value->last)||$_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['this']->value->current){?>
		<li<?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['this']->value->current){?> class="active"<?php }?>><a href="<?php echo smarty_function_zend_url(array('module'=>$_smarty_tpl->tpl_vars['this']->value->request->module,'controller'=>$_smarty_tpl->tpl_vars['this']->value->request->controller,'action'=>$_smarty_tpl->tpl_vars['this']->value->request->action,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
	<?php }else{ ?>
		<li><a href="<?php echo smarty_function_zend_url(array('module'=>$_smarty_tpl->tpl_vars['this']->value->request->module,'controller'=>$_smarty_tpl->tpl_vars['this']->value->request->controller,'action'=>$_smarty_tpl->tpl_vars['this']->value->request->action,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
	<?php }?>
	
<?php } ?>

	<?php if ($_smarty_tpl->tpl_vars['this']->value->next){?>
		<li><a href="<?php echo smarty_function_zend_url(array('module'=>$_smarty_tpl->tpl_vars['this']->value->request->module,'controller'=>$_smarty_tpl->tpl_vars['this']->value->request->controller,'action'=>$_smarty_tpl->tpl_vars['this']->value->request->action,'page'=>$_smarty_tpl->tpl_vars['this']->value->next),$_smarty_tpl);?>
">Következő</a></li>
		<li class="last"><a href="<?php echo smarty_function_zend_url(array('module'=>$_smarty_tpl->tpl_vars['this']->value->request->module,'controller'=>$_smarty_tpl->tpl_vars['this']->value->request->controller,'action'=>$_smarty_tpl->tpl_vars['this']->value->request->action,'page'=>$_smarty_tpl->tpl_vars['this']->value->last),$_smarty_tpl);?>
">Utolsó &rarr; </a></li>
	<?php }?>

	</ul>
</div>
<?php }?><?php }} ?>