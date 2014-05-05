<?php /* Smarty version Smarty-3.1.8, created on 2012-10-28 12:44:07
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvnarel/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126361595508b8b455f2e18-60402386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26a59e5d4cc837fbc3bbe63cb72303adde97b9d1' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvnarel/layout.tpl',
      1 => 1351424647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126361595508b8b455f2e18-60402386',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508b8b456f7574_18535266',
  'variables' => 
  array (
    'this' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508b8b456f7574_18535266')) {function content_508b8b456f7574_18535266($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/fvneralapparel/library/Smarty/plugins/function.zend_url.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Fvneralapparel</title>

	<base href="<?php echo $_smarty_tpl->tpl_vars['this']->value->baseHref();?>
" target="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">


	<!-- Le styles -->
	<link href="css/fvnarelapparel_base.css" rel="stylesheet">
	<link href="css/fvnarelapparel.css" rel="stylesheet">

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

	
	
	
	
	

</head>

<body>
	
	
	
	<div class="wrapper <?php echo $_smarty_tpl->tpl_vars['request']->value->action;?>
">	
		
		<h1><a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'index'),$_smarty_tpl);?>
">Fvneralapparel</a></h1>
		
		<div class="cartSummary">
			<?php echo $_smarty_tpl->tpl_vars['this']->value->cart()->getSummary();?>

		</div>
		
		
		<?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav')->renderMenu($_smarty_tpl->tpl_vars['this']->value->mainNav);?>


		<div class="container">
				<?php echo $_smarty_tpl->tpl_vars['this']->value->layout()->content;?>

		</div>
			
	</div>
	
	
	
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
	
	<script type="text/javascript">
	
	$(document).ready(function() {

		Site.init();

	});
	
	</script>
	
</body>
</html>
<?php }} ?>