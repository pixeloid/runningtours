<?php /* Smarty version Smarty-3.1.8, created on 2013-04-15 12:56:04
         compiled from "/var/www/netstudio/runningtoursbudapest.com/application/modules/default/views/scripts/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1670844251516bdcc4c405d9-94430746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc00843147f6a33dce0bd40fd325d1a899684ff0' => 
    array (
      0 => '/var/www/netstudio/runningtoursbudapest.com/application/modules/default/views/scripts/layout.tpl',
      1 => 1366023027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1670844251516bdcc4c405d9-94430746',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_516bdcc4ca0794_06392049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516bdcc4ca0794_06392049')) {function content_516bdcc4ca0794_06392049($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<?php echo $_smarty_tpl->tpl_vars['this']->value->headTitle();?>


	<base href="<?php echo $_smarty_tpl->tpl_vars['this']->value->baseHref();?>
" target="">
	<meta name="google-site-verification" content="4uNcu9REdTg2PxrO8Bswh1GucnMNff-Tnvftn6zwlF4" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	
	<meta property="fb:app_id"               content="325033537600259">
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['this']->value->baseHref();?>
<?php echo $_smarty_tpl->tpl_vars['this']->value->url();?>
"/>
	<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['this']->value->baseHref();?>
/i/rt.png"/>
	
	<meta property="og:title" content="<?php echo strip_tags($_smarty_tpl->tpl_vars['this']->value->headTitle());?>
"/>
    <meta property="og:description"          content="Who needs a beastly tour bus that can barely fit through narrow streets when we have our legs for transportation? And you do not even have to mind CO emission either! So put on your sneakers and let’s go for a run!"> 
	
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="bootstrap-modal-master/css/bootstrap-modal.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="Bootstrap-Image-Gallery-master/css/bootstrap-image-gallery.min.css" type="text/css" media="screen" title="no title" charset="utf-8">



	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

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
	
	<script src="bootstrap-modal-master/js/bootstrap-modal.js" type="text/javascript" charset="utf-8"></script>
	<script src="bootstrap-modal-master/js/bootstrap-modalmanager.js" type="text/javascript" charset="utf-8"></script>
	
	<script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
	<script src="Bootstrap-Image-Gallery-master/js/bootstrap-image-gallery.min.js" type="text/javascript" charset="utf-8"></script>
	

	<script src="js/site.js"></script>
	
</head>

<body>
	<div id="fb-root"></div>
    
	<script>
	        window.fbAsyncInit = function() {
	          FB.init({
		        appId      : '325033537600259', // App ID
		        channelUrl : '<?php echo $_smarty_tpl->tpl_vars['this']->value->baseHref();?>
/channel.html', // Channel File
	            status     : true, // check login status
	            cookie     : true, // enable cookies to allow the server to access the session
	            xfbml      : true  // parse XFBML
	          });
	        FB.Event.subscribe('auth.login', function(response) {
	          window.location.reload();
	        });
	        };
	        // Load the SDK Asynchronously
	        (function(d){
	           var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
	           if (d.getElementById(id)) {return;}
	           js = d.createElement('script'); js.id = id; js.async = true;
	           js.src = "//connect.facebook.net/en_US/all.js";
	           ref.parentNode.insertBefore(js, ref);
	         }(document));
	</script>
	
    
	<div class="navbar-fixed-top">	
		
			

		<div class="navbar ">
			<div class="navbar-inner">
				<div class="container">			
			      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </a>

						<h1><a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('controller'=>'index','action'=>'index'));?>
" class="brand">Running Tours Budapest</a></h1>
						<h2>Running is stunning!</h2>
						<div class="nav-collapse collapse">
							<?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav')->renderMenu($_smarty_tpl->tpl_vars['this']->value->mainNav);?>

						</div>
						
						
				</div>
			</div>
		</div>
	</div>
	
	
	<?php echo $_smarty_tpl->tpl_vars['this']->value->layout()->content;?>


	<footer class="navbar-fixed-bottom">
			<div class="navbar navbar-inverse">
				<?php echo $_smarty_tpl->tpl_vars['this']->value->navigation()->menu()->setUlClass('nav')->renderMenu($_smarty_tpl->tpl_vars['this']->value->mainNav);?>

				<div class="pull-right copyright">
					© <?php echo date('Y');?>
 runningtoursbudapest.com
				</div>
			</div>
			
	</footer>
	
	<div id="mainModal" class="modal hide fade" tabindex="-1"></div>
	
	<div id="demoLightbox" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
		<div class='lightbox-header'>
			<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
		</div>
		<div class='lightbox-content'>
		</div>
	</div>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-2124136-42']);
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