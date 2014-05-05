<?php /* Smarty version Smarty-3.1.8, created on 2012-09-18 12:51:38
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/emlekmentes/index/search-result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:650362883505603804afd16-29412824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41d3e0163d2504087184f16e32160523335e3430' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/emlekmentes/index/search-result.tpl',
      1 => 1347965496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '650362883505603804afd16-29412824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5056038050e832_58095128',
  'variables' => 
  array (
    'searchParams' => 0,
    'param' => 0,
    'paginator' => 0,
    'request' => 0,
    'this' => 0,
    'searchResult' => 0,
    'relic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5056038050e832_58095128')) {function content_5056038050e832_58095128($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/emlekmentes/library/Smarty/plugins/function.zend_url.php';
?><div class="row">
	<ul>
	<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchParams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
$_smarty_tpl->tpl_vars['param']->_loop = true;
?>
		<li><b><?php echo $_smarty_tpl->tpl_vars['param']->value['name'];?>
:</b> <?php echo implode($_smarty_tpl->tpl_vars['param']->value['values'],', ');?>
</li>
	<?php } ?>
	</ul>
	
	<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['paginator']->value,'Sliding','paginate.tpl',array('request'=>$_smarty_tpl->tpl_vars['request']->value));?>

	
	<?php  $_smarty_tpl->tpl_vars['relic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['relic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchResult']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['relic']->key => $_smarty_tpl->tpl_vars['relic']->value){
$_smarty_tpl->tpl_vars['relic']->_loop = true;
?>
	<div class="span2">
		<h4><?php echo $_smarty_tpl->tpl_vars['relic']->value->title;?>
</h4>
		
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['photo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['name'] = 'photo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['relic']->value->photos->toArray()) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['max'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['total']);
?>
		<li class="thumbnail">
			<img src="<?php echo $_smarty_tpl->tpl_vars['relic']->value->photos[$_smarty_tpl->getVariable('smarty')->value['section']['photo']['index']]->filename;?>
" alt="" />
		</li>
		<?php endfor; endif; ?>
		
		
		<a href="<?php echo smarty_function_zend_url(array('module'=>'default','controller'=>'index','action'=>'show','slug'=>$_smarty_tpl->tpl_vars['relic']->value->slug),$_smarty_tpl);?>
" class="btn btn-info">Megnézem!</a>

	</div>
	<?php } ?>
	
</div><?php }} ?>