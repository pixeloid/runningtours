<?php /* Smarty version Smarty-3.1.8, created on 2012-07-13 13:48:17
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/templates/artist-eu/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1823778428500009c0bd3171-05039608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3453c2a7605497a0633e0cbd6cfe10f9039f093c' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/templates/artist-eu/layout.tpl',
      1 => 1342180092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1823778428500009c0bd3171-05039608',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_500009c0c7b270_25204553',
  'variables' => 
  array (
    'this' => 0,
    'contentLayout' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500009c0c7b270_25204553')) {function content_500009c0c7b270_25204553($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>homepage-eu.com</title>
	
	<base href="<?php echo $_smarty_tpl->tpl_vars['this']->value->baseHref();?>
" target="">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">


	<!-- Le styles -->
	<link href="css/artist-eu.css" rel="stylesheet">

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
		<div class="container relative">

			<h1><a href="#"><img src="img/logo.png" width="383" height="42" alt="homepage-eu.com"></a></h1>
			
			<div class="breadcrumbs">
				<?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->breadcrumbs()->setMinDepth(1)->setLinkLast(true)->setSeparator(" : ");?>

			</div>

			<div class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<div class="nav-collapse lavaLampNoImage">
							<?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav')->renderMenu($_smarty_tpl->tpl_vars['this']->value->mainNav);?>

						</div><!--/.nav-collapse -->
					</div>
				</div>
			</div>

			<div class="navbar navbarSecondary">
				<?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav')->renderMenu($_smarty_tpl->tpl_vars['this']->value->secondaryNav);?>

				<?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav social')->renderMenu($_smarty_tpl->tpl_vars['this']->value->socialNav);?>

			</div>

		</div>

		<?php echo $_smarty_tpl->getSubTemplate ("./content_".((($tmp = @$_smarty_tpl->tpl_vars['contentLayout']->value)===null||$tmp==='' ? '2col' : $tmp)).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



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