<?php /* Smarty version Smarty-3.1.8, created on 2012-10-31 17:32:43
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvneral/partials/_cartlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1184637491508dac5d1c83e8-74905896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbc263c1b3d0f817cd1388ecf3b05f69a7dfe5f1' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvneral/partials/_cartlist.tpl',
      1 => 1351694335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1184637491508dac5d1c83e8-74905896',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508dac5d247a75_40885149',
  'variables' => 
  array (
    'this' => 0,
    'item' => 0,
    'cart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508dac5d247a75_40885149')) {function content_508dac5d247a75_40885149($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['this']->value->cart->count()){?>
    <table style="width: 100%;" class="table-condensed">
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['this']->value->cart; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

            <tr>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->photo;?>
" width="60" alt="" /> <?php echo $_smarty_tpl->tpl_vars['this']->value->Escape($_smarty_tpl->tpl_vars['item']->value->name);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value->qty;?>
</td>
				<td>x</td>
				<td><?php echo $_smarty_tpl->tpl_vars['this']->value->Cart()->formatAmount($_smarty_tpl->tpl_vars['item']->value->price);?>
</td>
                <td class="rt"><?php echo $_smarty_tpl->tpl_vars['this']->value->Cart()->formatAmount($_smarty_tpl->tpl_vars['item']->value->getLineCost());?>
</td>
            </tr>
            
			<?php } ?>

            <tr>
                <td colspan="4" class="rt">SubTotal:</td>
                <td class="rt colRight"><?php echo $_smarty_tpl->tpl_vars['this']->value->Cart()->formatAmount($_smarty_tpl->tpl_vars['cart']->value->getSubTotal());?>
</td>
            </tr>
			<?php if ($_smarty_tpl->tpl_vars['cart']->value->getShipping()){?>
            <tr>
                <td colspan="4"><?php echo $_smarty_tpl->tpl_vars['cart']->value->getShipping()->getDesc();?>
</td>
				<td class="rt colRight"><?php echo $_smarty_tpl->tpl_vars['this']->value->Cart()->formatAmount($_smarty_tpl->tpl_vars['cart']->value->getShipping()->getCost());?>
</td>
            </tr>
			<?php }?>



            <tr class="total">
                <td colspan="4" class="rt">Total:</td>
                <td class="rt"><?php echo $_smarty_tpl->tpl_vars['this']->value->Cart()->formatAmount($_smarty_tpl->tpl_vars['this']->value->cart->getTotal());?>
</td>
            </tr>

        </tbody>
    </table>

<?php }else{ ?>

Your cart is empty. <a href="shop">Let's go shopping!</a>

<?php }?>

<?php }} ?>