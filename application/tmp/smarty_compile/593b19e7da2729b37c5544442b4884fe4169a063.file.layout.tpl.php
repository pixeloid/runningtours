<?php /* Smarty version Smarty-3.1.8, created on 2012-07-27 12:26:20
         compiled from "/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69454019350113b5fafa387-28335584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '593b19e7da2729b37c5544442b4884fe4169a063' => 
    array (
      0 => '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/layout.tpl',
      1 => 1343384289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69454019350113b5fafa387-28335584',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50113b5fc36d23_05702945',
  'variables' => 
  array (
    'this' => 0,
    'loggedIn' => 0,
    'contentLayout' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50113b5fc36d23_05702945')) {function content_50113b5fc36d23_05702945($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/function.zend_url.php';
if (!is_callable('smarty_block_t')) include '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/block.t.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Artist-eu.com</title>
	
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

			<h1><a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->baseHref();?>
"><img src="img/artist-eu/logo.png" width="383" height="42" alt="artist-eu.com"></a></h1>
			
			<div class="breadcrumbs">
				<?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->breadcrumbs()->setMinDepth(1)->setLinkLast(true)->setSeparator(" : ");?>

			</div>
			
			<div class="row">
				
			<div class="navbar span12">
				<div class="navbar-inner">
					<div class="container">
						<div class="nav-collapse lavaLampNoImage">
							<?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav')->renderMenu($_smarty_tpl->tpl_vars['this']->value->mainNav);?>

						</div><!--/.nav-collapse -->
					</div>
				</div>
			</div>

			<div class="span6 loginBox">
				<div class="orangeBox">
					<h3>Artist-eu.com Login</h3>
					<?php if (!$_smarty_tpl->tpl_vars['loggedIn']->value){?>

						<?php echo $_smarty_tpl->tpl_vars['this']->value->loginPanel();?>

						
						<ul class="links">
							<li><a href="<?php echo smarty_function_zend_url(array('controller'=>'user','action'=>'signup'),$_smarty_tpl);?>
">Registrieren Sie sich »</a></li>
							<li><a href="<?php echo smarty_function_zend_url(array('controller'=>'user','action'=>'forgotten-password'),$_smarty_tpl);?>
">Kennwort vergessen? »</a></li>
						</ul>

					<?php }else{ ?>
						<a href="<?php echo smarty_function_zend_url(array('controller'=>'user','action'=>'index'),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					<?php }?>
					
					
				</div>
				
			</div>
			
			</div>			
			
			
			

		</div>

		<?php echo $_smarty_tpl->getSubTemplate ("content_".((($tmp = @$_smarty_tpl->tpl_vars['contentLayout']->value)===null||$tmp==='' ? '2col' : $tmp)).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



		<div class="container">
			<footer>	
				<div class="navbar navbarSecondary">
					<?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav social')->renderMenu($_smarty_tpl->tpl_vars['this']->value->socialNav);?>

				</div>

				<div class="navbar navbarFooter">
					<?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav')->renderMenu($_smarty_tpl->tpl_vars['this']->value->footerNav);?>

						
						
				</div>

				<p>Alle Rechte vorbehalten © 2012 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="icon-chevron-up"></i></a></p>

			</footer>

		</div> <!-- /container -->
	</div>
	
	
	<script type="text/javascript">
	// $(window).load(function(){
	// 	$('.lavaLampNoImage ul').lavaLamp({
	// 	});
	// });
	
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