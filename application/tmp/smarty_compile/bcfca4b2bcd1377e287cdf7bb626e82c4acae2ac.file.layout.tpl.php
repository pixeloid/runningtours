<?php /* Smarty version Smarty-3.1.8, created on 2013-02-19 10:25:28
         compiled from "/var/www/virtual/pixeloid.hu/rt/application/modules/default/views/scripts/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1281241105512345087c7666-40942966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcfca4b2bcd1377e287cdf7bb626e82c4acae2ac' => 
    array (
      0 => '/var/www/virtual/pixeloid.hu/rt/application/modules/default/views/scripts/layout.tpl',
      1 => 1361265819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1281241105512345087c7666-40942966',
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
  'unifunc' => 'content_512345087eb234_99989150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_512345087eb234_99989150')) {function content_512345087eb234_99989150($_smarty_tpl) {?><!DOCTYPE html>
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

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

	<script src="js/jquery-1.8.1.min.js"></script>
	<script src="js/jquery.easing.min.js" type="text/javascript" charset="utf-8"></script>
	
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



</body>
</html>
<?php }} ?>