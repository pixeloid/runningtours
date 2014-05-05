<?php /* Smarty version Smarty-3.1.8, created on 2013-02-17 15:48:00
         compiled from "/Users/pixeloid/Desktop/runningtours/application/modules/default/views/scripts/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8236577625120eda0c3a5d9-87491326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe2560c65fcdb8316af135a58c2f94beac64aece' => 
    array (
      0 => '/Users/pixeloid/Desktop/runningtours/application/modules/default/views/scripts/layout.tpl',
      1 => 1360969137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8236577625120eda0c3a5d9-87491326',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5120eda0cc6d90_26892205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5120eda0cc6d90_26892205')) {function content_5120eda0cc6d90_26892205($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>

	<base href="<?php echo $_smarty_tpl->tpl_vars['this']->value->baseHref();?>
" target="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script src="js/jquery-1.8.1.min.js"></script>
	<script src="js/site.js"></script>
	
</head>

<body>
	
	<div class="navbar-fixed-top">	
		
			

		<div class="navbar ">
			<div class="navbar-inner">
				<div class="container">			

						<h3><a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('controller'=>'index','action'=>'index'));?>
" class="brand">Running Tours Budapest</a></h3>
						<?php if ($_smarty_tpl->tpl_vars['request']->value->action!='login'){?><?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav')->renderMenu($_smarty_tpl->tpl_vars['this']->value->mainNav);?>
<?php }?>

				</div>
			</div>
		</div>
	</div>
	
	
	<?php echo $_smarty_tpl->tpl_vars['this']->value->layout()->content;?>


	<script src="js/jquery-1.8.1.min.js"></script>
	<script src="bootstrap-master/js/bootstrap-transition.js"></script>
	<script src="bootstrap-master/js/bootstrap-alert.js"></script>
	<script src="bootstrap-master/js/bootstrap-modal.js"></script>
	<script src="bootstrap-master/js/bootstrap-dropdown.js"></script>
	<script src="bootstrap-master/js/bootstrap-scrollspy.js"></script>
	<script src="bootstrap-master/js/bootstrap-tab.js"></script>
	<script src="bootstrap-master/js/bootstrap-tooltip.js"></script>
	<script src="bootstrap-master/js/bootstrap-popover.js"></script>
	<script src="bootstrap-master/js/bootstrap-button.js"></script>
	<script src="bootstrap-master/js/bootstrap-collapse.js"></script>
	<script src="bootstrap-master/js/bootstrap-carousel.js"></script>
	<script src="bootstrap-master/js/bootstrap-typeahead.js"></script>

</body>
</html>
<?php }} ?>