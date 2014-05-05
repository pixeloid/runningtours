<?php /* Smarty version Smarty-3.1.8, created on 2012-10-25 20:51:00
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/emlekmentes/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164137602504e792ce73369-52069061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d35f96c768b8dbc781ec9f9314e4b0b2c33e061' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/emlekmentes/layout.tpl',
      1 => 1351191042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164137602504e792ce73369-52069061',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504e792cf23599_81329519',
  'variables' => 
  array (
    'this' => 0,
    'sessid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504e792cf23599_81329519')) {function content_504e792cf23599_81329519($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/emlekmentes/library/Smarty/plugins/function.zend_url.php';
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
	<link href="css/em.css" rel="stylesheet">
	<link href="css/emlekmentes.css" rel="stylesheet">

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

		Site.init('<?php echo $_smarty_tpl->tpl_vars['sessid']->value;?>
');

	});
	
	</script>

</head>

<body>
	
	
		
		<div class="container header">
			<div class="row">
				<div class="span3"><h1><a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'index'),$_smarty_tpl);?>
">Emlékmentés</a></h1></div>
				<div class="span9"><?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav')->renderMenu($_smarty_tpl->tpl_vars['this']->value->mainNav);?>
</div>
			</div>
			
		</div>
	
	
	<div class="container">
			
		<div class="row mainContainer">
			<?php echo $_smarty_tpl->tpl_vars['this']->value->layout()->content;?>

		</div>
		
		
		

		<footer>
		<?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav nav-partners')->renderMenu($_smarty_tpl->tpl_vars['this']->value->topRightNav);?>
	<?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav nav-small')->renderMenu($_smarty_tpl->tpl_vars['this']->value->footerNav);?>

		</footer>

	</div><!--/.fluid-container-->


</body>
</html>
<?php }} ?>