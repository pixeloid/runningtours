<?php /* Smarty version Smarty-3.1.8, created on 2012-10-30 02:10:03
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvneral/shop/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:877344819508d78b88c5e15-43955538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0346fb8ab4448a468220b951f5fabd26094bc275' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvneral/shop/index.tpl',
      1 => 1351559319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '877344819508d78b88c5e15-43955538',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508d78b891a496_44452404',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508d78b891a496_44452404')) {function content_508d78b891a496_44452404($_smarty_tpl) {?><div class="productList">
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>

<div class="product">
	<h2><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</h2>
	<p class="thumb"><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['product']->value->slug;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('module'=>'default','controller'=>'shop','action'=>'show','slug'=>$_tmp1));?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->photos[0]->filename;?>
" alt="" /></a></p>
	<small>Price: <?php echo $_smarty_tpl->tpl_vars['this']->value->Cart()->formatAmount($_smarty_tpl->tpl_vars['product']->value->price);?>
</small>
</div>

<?php } ?>
</div>
<?php }} ?>