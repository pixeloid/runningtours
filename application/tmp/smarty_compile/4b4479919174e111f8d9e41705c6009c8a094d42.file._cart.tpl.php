<?php /* Smarty version Smarty-3.1.8, created on 2012-11-05 22:46:20
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvneral/partials/_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1661327485508d839c5fe762-55589792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b4479919174e111f8d9e41705c6009c8a094d42' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvneral/partials/_cart.tpl',
      1 => 1352151980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1661327485508d839c5fe762-55589792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508d839c654348_50046295',
  'variables' => 
  array (
    'this' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508d839c654348_50046295')) {function content_508d839c654348_50046295($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['this']->value->element->getModel()->count()){?>
    <table style="width: 100%;" class="table-condensed">
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['this']->value->element->getModel(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

            <tr>
                <td colspan="2"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->photo;?>
" width="60" alt="" /> <?php echo $_smarty_tpl->tpl_vars['this']->value->Escape($_smarty_tpl->tpl_vars['item']->value->name);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['this']->value->Cart()->formatAmount($_smarty_tpl->tpl_vars['item']->value->price);?>
</td>
				<td>x</td>
                <td><?php echo $_smarty_tpl->tpl_vars['this']->value->element->qtys->getElement(base64_encode($_smarty_tpl->tpl_vars['item']->value->rowId));?>
</td>
                <td class="rt"><?php echo $_smarty_tpl->tpl_vars['this']->value->Cart()->formatAmount($_smarty_tpl->tpl_vars['item']->value->getLineCost());?>
</td>
            </tr>
            
			<?php } ?>

           <tr class="total">
                <td colspan="5" class="rt">Total:</td>
                <td class="rt"><?php echo $_smarty_tpl->tpl_vars['this']->value->Cart()->formatAmount($_smarty_tpl->tpl_vars['this']->value->element->getModel()->getTotal());?>
</td>
            </tr>

        </tbody>
    </table>
	<p class="buttons">
		<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('module'=>'default','controller'=>'shop','action'=>'empty-cart'));?>
" class="btn">Empty cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->getElement('update-cart');?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<?php if ($_smarty_tpl->tpl_vars['this']->value->element->getModel()->getSubtotal()<12){?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('module'=>'default','controller'=>'shop','action'=>'index'));?>
" class="btn">Minimum order is <?php echo $_smarty_tpl->tpl_vars['this']->value->Cart()->formatAmount(12);?>
, please collect more items!</a>
		<?php }else{ ?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('module'=>'default','controller'=>'shop','action'=>'checkout'));?>
" class="btn">Proceed to checkout</a>
		<?php }?>
	</p>
	
	
	<?php }else{ ?>

	Your cart is empty. <a href="shop">Let's go shopping!</a>

	
	
<?php }?>

<?php }} ?>