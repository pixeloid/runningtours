<?php /* Smarty version Smarty-3.1.8, created on 2012-10-28 14:57:24
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvnarel/shop/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:582210315508cfe6488f9e1-71714005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41435902f1f3c7221d19fe7e9951b68a48aa6f5e' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvnarel/shop/show.tpl',
      1 => 1351432271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '582210315508cfe6488f9e1-71714005',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508cfe648eaac5_81465946',
  'variables' => 
  array (
    'product' => 0,
    'photo' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508cfe648eaac5_81465946')) {function content_508cfe648eaac5_81465946($_smarty_tpl) {?>

<div id="myCarousel" class="carousel  ">
  <!-- Carousel items -->
  <div class="carousel-inner">
		<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->photos; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['photo']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['photo']['iteration']++;
?>
		<div class="item<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['photo']['iteration']==1){?> active<?php }?>">
			<img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value->filename;?>
" alt="" />
		</div>
		<?php } ?>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>




<div class="details">
	<h2><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
<br><small><?php echo $_smarty_tpl->tpl_vars['product']->value->subname;?>
</small></h2>
	<p><?php echo nl2br($_smarty_tpl->tpl_vars['product']->value->description);?>
</p>
	<p class="price">Price: $<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</p>
	
	<?php echo $_smarty_tpl->tpl_vars['this']->value->Cart()->addForm($_smarty_tpl->tpl_vars['product']->value);?>

	
</div>
<?php }} ?>