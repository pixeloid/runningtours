<?php /* Smarty version Smarty-3.1.8, created on 2012-07-13 13:23:57
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/templates/feldenkrais/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14091340194ffcbd35d0a3a0-18549946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76181e3822edd3e1d2b530413e5e29802bd1e40e' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/templates/feldenkrais/layout.tpl',
      1 => 1342178636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14091340194ffcbd35d0a3a0-18549946',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ffcbd35d73b03_41964917',
  'variables' => 
  array (
    'this' => 0,
    'contentLayout' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffcbd35d73b03_41964917')) {function content_4ffcbd35d73b03_41964917($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>feldenkrais</title>
	
	<base href="<?php echo $_smarty_tpl->tpl_vars['this']->value->baseHref();?>
" target="">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">


	<!-- Le styles -->
	<link href="css/feldenkrais.css" rel="stylesheet">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<!--     <link rel="shortcut icon" href="ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
	-->  

	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/bootstrap-tab.js"></script>
	<script src="js/bootstrap-carousel.js"></script>
	<script src="js/jquery.lavalamp.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap-transition.js"></script>


</head>

<body>
	<div class="wrapper">
		<div class="container relative contentHolder">

			<h1><a href="#"><img src="img/feldenkrais/logo.png" alt="feldenkrais.com"></a></h1>
			
			<div class="breadcrumbs">
				<?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->breadcrumbs()->setMinDepth(1)->setLinkLast(true)->setSeparator(" : ");?>

			</div>

			<div class="navbar navbarPrimary ">
				<div class="navbar-inner">
					<div class="container">
						<div class="nav-collapse lavaLampNoImage">
							<?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav')->renderMenu($_smarty_tpl->tpl_vars['this']->value->mainNav);?>

						</div><!--/.nav-collapse -->
					</div>
				</div>
			</div>

			<div class="navbar navbarSecondary">
				<div class="first"><?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav')->renderMenu($_smarty_tpl->tpl_vars['this']->value->secondaryNav);?>
</div>
				<div class="second"><p>Finden Sie uns:</p> <?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav social')->renderMenu($_smarty_tpl->tpl_vars['this']->value->socialNav);?>
</div>
			</div>

		</div>
		
		<div class="container contentHolder mainContentHolder ">
			<?php echo $_smarty_tpl->getSubTemplate ("./content_".((($tmp = @$_smarty_tpl->tpl_vars['contentLayout']->value)===null||$tmp==='' ? '2col' : $tmp)).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>


		<div class="container">
			<footer>
				<div class="navbar navbarFooter">
					<?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav')->renderMenu($_smarty_tpl->tpl_vars['this']->value->footerNav);?>

						
						
				</div>

				<p>Alle Rechte vorbehalten © 2012 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="icon-chevron-up"></i></a></p>

			</footer>

		</div> <!-- /container -->
	</div>
	
	
	<script type="text/javascript">
	$(window).load(function(){
		$('.lavaLampNoImage ul').lavaLamp({
		});
	});
	
	// $(document).ready(function() {
	// 	$('button, input[type=submit]').each(function(){
	// 		$('label', $(this).closest('.control-group')).hide();
	// 		$(this).append('&nbsp;<i class="icon-chevron-right"></i>')
	// 	})
	// });
		
	
	
	</script>
	
	
	
</body>
</html>
<?php }} ?>