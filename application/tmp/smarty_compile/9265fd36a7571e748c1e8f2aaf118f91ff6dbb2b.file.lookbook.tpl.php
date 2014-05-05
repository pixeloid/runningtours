<?php /* Smarty version Smarty-3.1.8, created on 2012-10-28 19:27:32
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvneral/index/lookbook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1429690889508d7914813277-09224465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9265fd36a7571e748c1e8f2aaf118f91ff6dbb2b' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvneral/index/lookbook.tpl',
      1 => 1351419188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1429690889508d7914813277-09224465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lookbookItems' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508d79148c36b9_30694978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508d79148c36b9_30694978')) {function content_508d79148c36b9_30694978($_smarty_tpl) {?>

<div id="myCarousel" class="carousel slide ">
  <!-- Carousel items -->
  <div class="carousel-inner">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lookbookItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['photo']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['photo']['iteration']++;
?>
		<div class="item<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['photo']['iteration']==1){?> active<?php }?>">
			<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->photo->filename;?>
" alt="" />
		</div>
		<?php } ?>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>


<?php }} ?>