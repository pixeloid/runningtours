<?php /* Smarty version Smarty-3.1.8, created on 2013-06-19 11:13:29
         compiled from "/Users/Pixeloid/Sites/runningtours/application/modules/default/views/scripts/about/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115978567551c15255b5e8b6-40122246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10fe30239ad7e0f3975ae16f776192eebb7f2723' => 
    array (
      0 => '/Users/Pixeloid/Sites/runningtours/application/modules/default/views/scripts/about/edit.tpl',
      1 => 1371633198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115978567551c15255b5e8b6-40122246',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51c15255b7b445_98591851',
  'variables' => 
  array (
    'form' => 0,
    'teamMember' => 0,
    'photo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c15255b7b445_98591851')) {function content_51c15255b7b445_98591851($_smarty_tpl) {?>
<div class="container">
<div class="row">
	
	<div class="span8">
		<div class="well">
			<h2>Edit team member</h2>
			<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

		</div>
	</div>

	<div class="span4">
		<div class="well">
			<div id="uploadContainer">
				<p class="clearfix">
					<a href="#" class="btn" id="pickfiles"><span>Válaszd ki a képeket!</span></a>
				</p>		

				<div id="filelist"></div>
				<a href="#" class="btn btn-large btn-success" id="uploadfiles">Képek feltöltése »</a>
			</div>
		</div>
	
	
		<div class="imageList">
			<ul class="thumbnails">
			<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['teamMember']->value->photos; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
			<li class=" span2">
					<img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value->file->filename;?>
" alt="" />
					<small><a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value->file->id;?>
" class="text-error delete">Kép törlése</a></small>
			</li>
			<?php } ?>
			</ul>
		</div>
	</div>


</div>
</div>
<?php }} ?>