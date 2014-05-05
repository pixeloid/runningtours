<?php /* Smarty version Smarty-3.1.8, created on 2012-11-04 13:38:28
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvneral/shop/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:652795924508d8369f274c5-24514459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86ddc5b0ee8ef2fa4a6a5a2da1982da722744e39' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvneral/shop/show.tpl',
      1 => 1351795384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '652795924508d8369f274c5-24514459',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508d836a050856_87668457',
  'variables' => 
  array (
    'product' => 0,
    'photo' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508d836a050856_87668457')) {function content_508d836a050856_87668457($_smarty_tpl) {?>

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
	<?php if ($_smarty_tpl->tpl_vars['product']->value->designby){?><p>Designed by: <?php if ($_smarty_tpl->tpl_vars['product']->value->designby_url){?><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->designby_url;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['product']->value->designby;?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product']->value->designby;?>
<?php }?></p><?php }?>
	<p class="price">Price: <?php echo $_smarty_tpl->tpl_vars['this']->value->Cart()->formatAmount($_smarty_tpl->tpl_vars['product']->value->price);?>
</p>
	
	<?php echo $_smarty_tpl->tpl_vars['this']->value->Cart()->addForm($_smarty_tpl->tpl_vars['product']->value);?>

	
</div>

<div class="clearfix"></div>
<a href="shop/index">&lt;&lt; Back to product list</a>
<?php }} ?>