<?php /* Smarty version Smarty-3.1.8, created on 2012-09-11 19:58:55
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1808096131504f6d98601e70-48265972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87aa464fa216c1cab15bda91db9c887d0f4c6bec' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/layout.tpl',
      1 => 1347386335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1808096131504f6d98601e70-48265972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504f6d986291f9_54461983',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504f6d986291f9_54461983')) {function content_504f6d986291f9_54461983($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/emlekmentes/library/Smarty/plugins/function.zend_url.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Emlékmentés</title>

	<base href="<?php echo $_smarty_tpl->tpl_vars['this']->value->baseHref();?>
" target="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">


	<!-- Le styles -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->





	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="../assets/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

	<style type="text/css">
	body {
		padding-top:140px;
		padding-bottom: 40px;
	}
	.sidebar-nav {
		padding: 9px 0;
	}
	</style>


</head>

<body>
	
	
	<div class="navbar-fixed-top">	
		
		<div class="container">
			<h1><a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'index'),$_smarty_tpl);?>
">Emlékmentés ADMIN</a></h1>
		</div>
			

		<div class="navbar ">
			<div class="navbar-inner">
				<div class="container">			
					<div class="nav-collapse collapse">
						<?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav')->renderMenu($_smarty_tpl->tpl_vars['this']->value->adminMainNav);?>

					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="container">
			
			<?php echo $_smarty_tpl->tpl_vars['this']->value->layout()->content;?>


		
		
		
		<hr>

		<footer>

		</footer>

	</div><!--/.fluid-container-->

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery-1.8.1.min.js"></script>
	<script src="bootstrap/js/bootstrap-transition.js"></script>
	<script src="bootstrap/js/bootstrap-alert.js"></script>
	<script src="bootstrap/js/bootstrap-modal.js"></script>
	<script src="bootstrap/js/bootstrap-dropdown.js"></script>
	<script src="bootstrap/js/bootstrap-scrollspy.js"></script>
	<script src="bootstrap/js/bootstrap-tab.js"></script>
	<script src="bootstrap/js/bootstrap-tooltip.js"></script>
	<script src="bootstrap/js/bootstrap-popover.js"></script>
	<script src="bootstrap/js/bootstrap-button.js"></script>
	<script src="bootstrap/js/bootstrap-collapse.js"></script>
	<script src="bootstrap/js/bootstrap-carousel.js"></script>
	<script src="bootstrap/js/bootstrap-typeahead.js"></script>
	<script src="js/site.js"></script>

</body>
</html>
<?php }} ?>