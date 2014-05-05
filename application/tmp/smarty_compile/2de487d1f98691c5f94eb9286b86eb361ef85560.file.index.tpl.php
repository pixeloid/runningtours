<?php /* Smarty version Smarty-3.1.8, created on 2012-11-09 17:03:11
         compiled from "/Users/Pixeloid/Sites/csaladimatrica/application/modules/default/views/csaladimatrica/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:962437321509cea7223fd47-45775497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2de487d1f98691c5f94eb9286b86eb361ef85560' => 
    array (
      0 => '/Users/Pixeloid/Sites/csaladimatrica/application/modules/default/views/csaladimatrica/index/index.tpl',
      1 => 1352476991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '962437321509cea7223fd47-45775497',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509cea72366703_27531957',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509cea72366703_27531957')) {function content_509cea72366703_27531957($_smarty_tpl) {?>

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