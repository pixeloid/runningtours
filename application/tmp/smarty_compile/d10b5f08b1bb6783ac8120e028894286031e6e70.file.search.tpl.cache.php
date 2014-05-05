<?php /* Smarty version Smarty-3.1.8, created on 2012-09-17 00:05:08
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/emlekmentes/index/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28180307450564d14d912d3-68280017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd10b5f08b1bb6783ac8120e028894286031e6e70' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/emlekmentes/index/search.tpl',
      1 => 1347832072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28180307450564d14d912d3-68280017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parameters' => 0,
    'cat' => 0,
    'param' => 0,
    'value' => 0,
    'values' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50564d14e24b39_82417214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50564d14e24b39_82417214')) {function content_50564d14e24b39_82417214($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/emlekmentes/library/Smarty/plugins/function.zend_url.php';
?><div class="row">
	<div class="span4">
		<h3>Szabadszavas kereső</h3>
		<form class="form-search" action="index/search-result">
		  <input type="text" class="input-medium search-query">
		  <button type="submit" class="btn">Keresés</button>
		
		<span class="help-block"><small>Több szóra is kereshet, vesszővel elválasztva őket</small></span>
		</form>
		
	</div>
	<div class="span5">
		<h3>Összetett kereső</h3>
		<p>Több feltétel is megadható!<br>
		Kérjük kattintson a keresési feltételre a kiválasztáshoz.<br>
		A nem kívánt feltételt szintén kattintással távolíthatja el.
		</p>
	</div>
	<div class="span3">
		<div class="well">
			<p>A jelenlegi keresési feltételekkel ennyi képet találtunk az adatbázisban</p>
			<p><big><strong class="numResults">123 db</strong></big></p>
		</div>
	</div>
</div>

<div class="row">
		<form action="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'search-result'),$_smarty_tpl);?>
" class="advancedSearch" method="post" accept-charset="utf-8">

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
				
				
					<?php if ($_smarty_tpl->tpl_vars['param']->value->type->name=='text'){?>

					<dd><input type="text"  name="param[<?php echo $_smarty_tpl->tpl_vars['param']->value->id;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['param']->value->slug;?>
" class="typeahead"></dd>

					<?php }else{ ?>

					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['param']->value->parameterValues; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
						
						
					
						<dd ><label for="<?php echo $_smarty_tpl->tpl_vars['value']->value->slug;?>
" class="checkbox"><input type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['value']->value->id])){?>checked="checked"<?php }?> name="param[<?php echo $_smarty_tpl->tpl_vars['param']->value->id;?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</label></dd>
					<?php } ?>

					<?php }?>
					
				
				
				<?php } ?>
			</dl>
			
		</div>
		<?php } ?>

		<p><input type="submit" class="btn pull-right" value="Keresés &rarr;"></p>


		</form>
		
</div><?php }} ?>