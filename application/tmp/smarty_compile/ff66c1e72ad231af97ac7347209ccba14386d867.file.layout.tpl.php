<?php /* Smarty version Smarty-3.1.8, created on 2013-02-15 20:43:36
         compiled from "/Users/Pixeloid/Sites/runningtours/application/modules/default/views/csaladimatrica/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1914009591511e8fe8bc1b52-85121631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff66c1e72ad231af97ac7347209ccba14386d867' => 
    array (
      0 => '/Users/Pixeloid/Sites/runningtours/application/modules/default/views/csaladimatrica/layout.tpl',
      1 => 1352461068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1914009591511e8fe8bc1b52-85121631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'sessid' => 0,
    'uploadType' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511e8fe8c22b18_45604954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e8fe8c22b18_45604954')) {function content_511e8fe8c22b18_45604954($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/runningtours/library/Smarty/plugins/function.zend_url.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>

	<base href="<?php echo $_smarty_tpl->tpl_vars['this']->value->baseHref();?>
" target="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">


	<!-- Le styles -->
	<link href="css/bootstrap.css" rel="stylesheet">




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




	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	
	<script src="js/jquery-1.8.1.min.js"></script>
	
	<script type="text/javascript" src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script>
	<script type="text/javascript" src="plupload/js/plupload.js"></script>
	<script type="text/javascript" src="plupload/js/plupload.gears.js"></script>
	<script type="text/javascript" src="plupload/js/plupload.silverlight.js"></script>
	<script type="text/javascript" src="plupload/js/plupload.flash.js"></script>
	<script type="text/javascript" src="plupload/js/plupload.browserplus.js"></script>
	<script type="text/javascript" src="plupload/js/plupload.html4.js"></script>
	<script type="text/javascript" src="plupload/js/plupload.html5.js"></script>
	
	<script src="js/site.js"></script>
	
	
	<script type="text/javascript">
	
	$(document).ready(function() {

		Site.init({s: '<?php echo $_smarty_tpl->tpl_vars['sessid']->value;?>
', uploadType:'<?php echo $_smarty_tpl->tpl_vars['uploadType']->value;?>
'});

	});
	
	</script>




</head>

<body>
	
	
	<div class="navbar-fixed-top">	
		
		<div class="container">
			<h1><a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'index'),$_smarty_tpl);?>
"></a></h1>
		</div>
			

		<div class="navbar ">
			<div class="navbar-inner">
				<div class="container">			
					<div class="nav-collapse collapse">
						<?php if ($_smarty_tpl->tpl_vars['request']->value->action!='login'){?><?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav')->renderMenu($_smarty_tpl->tpl_vars['this']->value->adminMainNav);?>
<?php }?>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="container">
		<div class="row">
			<?php echo $_smarty_tpl->tpl_vars['this']->value->layout()->content;?>

			</div>

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