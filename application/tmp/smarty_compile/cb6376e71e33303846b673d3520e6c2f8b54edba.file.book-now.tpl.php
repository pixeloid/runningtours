<?php /* Smarty version Smarty-3.1.8, created on 2013-02-17 17:11:20
         compiled from "/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/book-now.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8425633005120f08b0ab982-32629514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb6376e71e33303846b673d3520e6c2f8b54edba' => 
    array (
      0 => '/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/book-now.tpl',
      1 => 1361117479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8425633005120f08b0ab982-32629514',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5120f08b152443_71469272',
  'variables' => 
  array (
    'tours' => 0,
    'selectedTour' => 0,
    'tour' => 0,
    'this' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5120f08b152443_71469272')) {function content_5120f08b152443_71469272($_smarty_tpl) {?>
<div class="container">

<div class="row">
	<div class="span12">
	<div class="navbar navbar-inverse">
		<div class="navbar-inner">
			<ul class="nav nav-pills">
				<?php  $_smarty_tpl->tpl_vars['tour'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tour']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tours']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tour']->key => $_smarty_tpl->tpl_vars['tour']->value){
$_smarty_tpl->tpl_vars['tour']->_loop = true;
?>
				<li<?php if ((($tmp = @$_smarty_tpl->tpl_vars['selectedTour']->value->id)===null||$tmp==='' ? null : $tmp)==$_smarty_tpl->tpl_vars['tour']->value->id){?> class="active"<?php }?>>
					<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('id'=>$_smarty_tpl->tpl_vars['tour']->value->id));?>
" class=""><?php echo $_smarty_tpl->tpl_vars['tour']->value->title;?>
</a>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	</div>
</div>
	
	
<?php if ($_smarty_tpl->tpl_vars['selectedTour']->value){?>
<div class="row">
	<div class="span6">
	<div class="well">
		<h1><?php echo $_smarty_tpl->tpl_vars['selectedTour']->value->title;?>
</h1>

		<h3><?php echo $_smarty_tpl->tpl_vars['selectedTour']->value->brief;?>
</h3>

		<p><?php echo $_smarty_tpl->tpl_vars['selectedTour']->value->description;?>
</p>
	</div>
	</div>
	
	<div class="span6">
		<div class="well">
			<ul id="points">
				<li>Kálvin tér</li>
				<li>Múzeum u.</li>
				<li>Lőrinc pap tér</li>
				<li>József u.</li>
				<li>Mátyás tér</li>
				<li>Dankó u.</li>
				<li>Koszorú u.</li>
				<li>Horváth Mihály tér</li>
			</ul>
			
			<div id="route-map" style="height: 500px">
				
				
			</div>
		<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

		</div>
	</div>
</div>
<?php }?>

</div>
<?php }} ?>