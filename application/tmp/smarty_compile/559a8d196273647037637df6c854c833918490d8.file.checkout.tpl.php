<?php /* Smarty version Smarty-3.1.8, created on 2012-10-29 11:34:35
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvneral/shop/checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2073767607508da7c5b3d1f2-66704588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '559a8d196273647037637df6c854c833918490d8' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvneral/shop/checkout.tpl',
      1 => 1351506874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2073767607508da7c5b3d1f2-66704588',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508da7c5b73bd9_22646862',
  'variables' => 
  array (
    'this' => 0,
    'checkoutForm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508da7c5b73bd9_22646862')) {function content_508da7c5b73bd9_22646862($_smarty_tpl) {?>
<div class="cartTableHolder">
	<?php echo $_smarty_tpl->tpl_vars['this']->value->Cart()->cartTable();?>

</div>

<?php echo $_smarty_tpl->tpl_vars['checkoutForm']->value;?>

<?php }} ?>