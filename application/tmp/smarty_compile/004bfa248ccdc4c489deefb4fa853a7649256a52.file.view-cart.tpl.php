<?php /* Smarty version Smarty-3.1.8, created on 2012-10-28 18:26:14
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvnarel/shop/view-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1304713323508d1b7f4d1e84-71334804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '004bfa248ccdc4c489deefb4fa853a7649256a52' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvnarel/shop/view-cart.tpl',
      1 => 1351445173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1304713323508d1b7f4d1e84-71334804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508d1b7f506ca7_27523644',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508d1b7f506ca7_27523644')) {function content_508d1b7f506ca7_27523644($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['this']->value->Cart()->cartTable();?>



<form action='expresscheckout.php' METHOD='POST'>
<input type='image' name='submit' src='https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif' border='0' align='top' alt='Check out with PayPal'/>
</form>
<?php }} ?>