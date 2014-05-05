<?php /* Smarty version Smarty-3.1.8, created on 2012-10-28 18:26:14
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvnarel/partials/_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2039159815508d1d00c246d4-93644842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01fe9b2eb2e2ce10731eabba0454d34eb7123120' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvnarel/partials/_cart.tpl',
      1 => 1351445159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2039159815508d1d00c246d4-93644842',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508d1d00c6be72_29241359',
  'variables' => 
  array (
    'this' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508d1d00c6be72_29241359')) {function content_508d1d00c6be72_29241359($_smarty_tpl) {?><div style="padding: 8px;">
    <table style="width: 100%;" class="table-condensed">
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['this']->value->element->getModel(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['this']->value->Escape($_smarty_tpl->tpl_vars['item']->value->name);?>
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
                <td colspan="4" class="rt">Total:</td>
                <td class="rt"><?php echo $_smarty_tpl->tpl_vars['this']->value->Cart()->formatAmount($_smarty_tpl->tpl_vars['this']->value->element->getModel()->getTotal());?>
</td>
            </tr>

        </tbody>
    </table>
	<p class="buttons">
	    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->getElement('update-cart');?>

		
	    <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('module'=>'default','controller'=>'shop','action'=>'checkout'));?>
" class="btn">Proceed to checkout</a>
	</p>
</div>


<?php }} ?>