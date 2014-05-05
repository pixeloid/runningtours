<?php /* Smarty version Smarty-3.1.8, created on 2013-02-15 20:43:36
         compiled from "/Users/Pixeloid/Sites/runningtours/application/modules/default/views/csaladimatrica/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1977636264511e8fe85227e9-51984221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba8d242dae078d7be9c2d6de66cf12c24aa49d6c' => 
    array (
      0 => '/Users/Pixeloid/Sites/runningtours/application/modules/default/views/csaladimatrica/index/index.tpl',
      1 => 1352476991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1977636264511e8fe85227e9-51984221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511e8fe860a715_60155270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e8fe860a715_60155270')) {function content_511e8fe860a715_60155270($_smarty_tpl) {?>

<div class="row">
<div class="span6">
	
	<div id="uploadContainer">
		<p class="clearfix">
			<a href="#" class="btn" id="pickfiles"><span>Testrészek kiválasztása a feltöltéshez...</span></a>
		</p>		

		<a href="#" class="btn btn-large btn-success" id="uploadfiles">Képek feltöltése »</a>

	</div>

</div>


<div class="span6">
	<div id="filelist"></div>
	
</div>
</div>
<div class="row">
	<div class="span12">
		
		<a href="index/genereate" class="btn">Kombinációk generálása, letöltés ZIP-ben</a>
		
		<div id="uploadedParts">
			
			<?php echo $_smarty_tpl->tpl_vars['this']->value->action('uploaded','index');?>

			
			
		</div>
	</div>
</div>
<?php }} ?>