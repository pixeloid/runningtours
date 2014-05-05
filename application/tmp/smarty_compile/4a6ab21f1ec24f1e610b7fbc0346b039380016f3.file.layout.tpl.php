<?php /* Smarty version Smarty-3.1.8, created on 2012-11-01 18:02:07
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvneral/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2011638178508d7897ccab14-12071479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a6ab21f1ec24f1e610b7fbc0346b039380016f3' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/default/views/fvneral/layout.tpl',
      1 => 1351789053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2011638178508d7897ccab14-12071479',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508d7897df7f51_11263139',
  'variables' => 
  array (
    'this' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508d7897df7f51_11263139')) {function content_508d7897df7f51_11263139($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/fvneralapparel/library/Smarty/plugins/function.zend_url.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>fvneralapparel.com</title>

	<base href="<?php echo $_smarty_tpl->tpl_vars['this']->value->baseHref();?>
" target="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Fvnarelapparel.com">

	<meta name="author" content="Pixeloid Vizuális Munkaközösség">

	<link href="css/fvnarelapparel_base.css" rel="stylesheet">
	<link href="css/fvnarelapparel.css" rel="stylesheet">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->



	<link rel="shortcut icon" href="../assets/ico/favicon.ico">

	
	
	
	
	

</head>

<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/hu_HU/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	
	
	<div class="wrapper <?php echo $_smarty_tpl->tpl_vars['request']->value->action;?>
 <?php echo $_smarty_tpl->tpl_vars['request']->value->controller;?>
-<?php echo $_smarty_tpl->tpl_vars['request']->value->action;?>
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
			
		<div class="footer">
			<a href="https://www.facebook.com/FvneralApparel" class="fb" tareget="_blank">Facebook</a>
			<a href="" class="tumblr" tareget="_blank">Tumblr</a>
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
	


	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-2124136-41']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	
	
	
</body>
</html>
<?php }} ?>