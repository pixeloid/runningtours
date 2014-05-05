<?php /* Smarty version Smarty-3.1.8, created on 2012-10-26 15:57:41
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/emlekmentes/index/add-photo-parameters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4765264185050d659871261-76793327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dabe9620fc48ef8d7bc1264a6eee6dbf8b630f74' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/emlekmentes/index/add-photo-parameters.tpl',
      1 => 1351259860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4765264185050d659871261-76793327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5050d6598bd471_44188421',
  'variables' => 
  array (
    'this' => 0,
    'errors' => 0,
    'parameters' => 0,
    'cat' => 0,
    'param' => 0,
    'value' => 0,
    'values' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5050d6598bd471_44188421')) {function content_5050d6598bd471_44188421($_smarty_tpl) {?><div class="pending">
	<?php echo $_smarty_tpl->tpl_vars['this']->value->action('pending-photos','index');?>

</div>

	
	<form action="" method="post" accept-charset="utf-8">

		<div class="control-group <?php if ($_smarty_tpl->tpl_vars['errors']->value['relicTitle']){?>error<?php }?>">
			<label for="relicTitle">Emlék címe</label>
			<div class="controls">
				<input type="text" name="relicTitle" value="" id="relicTitle">
			</div>
			
			<div class="help-block"><?php if (isset($_smarty_tpl->tpl_vars['errors']->value['relicTitle'])){?>Kötelező megadni!<?php }?></div>
			
		</div>

			<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parameters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
			<div class="span3">
				<h4><?php echo $_smarty_tpl->tpl_vars['cat']->value->name;?>
</h4>
				<dl>
					<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value->parameters; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
$_smarty_tpl->tpl_vars['param']->_loop = true;
?>
					<dt><?php echo $_smarty_tpl->tpl_vars['param']->value->name;?>
</dt>

					<?php if ($_smarty_tpl->tpl_vars['param']->value->type->name=='radio'||$_smarty_tpl->tpl_vars['param']->value->type->name=='checkbox'||$_smarty_tpl->tpl_vars['param']->value->type->name=='select'){?>
						
						<select name="param[<?php echo $_smarty_tpl->tpl_vars['param']->value->id;?>
]"  id="<?php echo $_smarty_tpl->tpl_vars['param']->value->slug;?>
">
							<option value=""  selected="selected">Válasszon...</option>
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['param']->value->parameterValues; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
							<option <?php if (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['value']->value->id])){?><?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</option>
							<?php } ?>

						</select>
						
						
					




					<?php }elseif($_smarty_tpl->tpl_vars['param']->value->type->name=='text'){?>

					<dd><input type="text"  name="param[<?php echo $_smarty_tpl->tpl_vars['param']->value->id;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['param']->value->slug;?>
" class="typeahead"></dd>

					<?php }elseif($_smarty_tpl->tpl_vars['param']->value->type->name=='select'){?>


					<?php }?>

					<?php } ?>
				</dl>

			</div>
			<?php } ?>

			<p><input type="submit" class="btn pull-right" value="Mentés &rarr;"></p>


		</form>

<?php }} ?>