<?php /* Smarty version Smarty-3.1.8, created on 2012-07-14 22:11:28
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/feldenkrais/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:866157105001d27043c788-28992959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17cad8c8233bb2e2a3e8bbcb09a38e5322a8a725' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/feldenkrais/index/index.tpl',
      1 => 1342105394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '866157105001d27043c788-28992959',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5001d2704705b7_40671988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5001d2704705b7_40671988')) {function content_5001d2704705b7_40671988($_smarty_tpl) {?><div class="mainPromo">
	<div class="container">
		<div class="item" style="background: url(img/feldenkrais/main_promo_item_1.png) no-repeat top left">

		</div>
	</div>
</div>




<div class="row">
	<div class="span5">
		<div class="gradBox domain-search">
			<h3>Eine eigene Homepage <big>selbst bauen?</big></h3>
			<div class="content">
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				
				<h3>Domain <big>prüfen</big></h3>
				
			</div>
			<div class="footer">
				<form class="form-inline"><input type="text" name="" class="input-medium" /><span class="domains">.homepage-eu.com<br>.hp-eu.com </span><br><a href="#" class="btn pull-right">Jetzt prüfen! <i class="icon-chevron-right"></i></a><input type="submit" value="Jetzt prüfen!" class="hide"/>
				<p class="notes">Sie haben schon eine eigene Domain?<br>Sie können sie auch bei uns benutzen! <br><a href="#">Weiter lessen...</a></p>
				</form>
			</div>
		</div>
	</div>
	<div class="span3">
		<div class="gradBox">

			<h3>Video Tour <img class="movieSymbol" src="img/movie_symbol.png" width="42" height="47" alt="Movie Symbol"></h3>

			<div class="content">
				<p>Sie bestimmen alles selbst! Sehen Sie in unserer Video-Tour, wie einfach Sie Texte ändern, Bilder einfügen, oder Hintergrund und Design anpassen können. <br><br><br></p>
				<a class="btn" href="#">Tour Ansehen! <i class="icon-chevron-right"></i> </a>
			</div>
		</div>
	</div>


</div>



<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	
	var maxH=0; // the height of the highest element (after the function runs)
	var $maxHelem;  // the highest element (after the function runs)

	$('.container > .row:first > div > div').each(function(){

	    if ( $(this).outerHeight() > maxH ) {
	        $maxHelem = $(this);
	        maxH = $(this).outerHeight();
	    }
	})
	
	$('.container > .row:first > div > div').each(function(){
		var curH = $(this).outerHeight();
		var $span = $(this);
		
	    if (curH < maxH ) {
			$('.content',$span).each(function(){
				var curPad = $(this).css('padding-bottom')
				$(this).css('padding-bottom', parseInt(curPad) + maxH - curH)
			})
	    }
	})
	
});
</script>


<div class="row">
	<div class="span8">
		<div class="gradBox gradBoxGallery">
			<h3>Beispiele <big>ansehen</big></h3>
			<div class="content">
				<div id="miniCarousel" class="carousel">
					<!-- Carousel items -->
					<div class="carousel-inner">
						<div class="active item">
							<a href="#"><img src="img/carousel_item_1.jpg" width="119" height="85" alt="Carousel Item 1"></a>
							<a href="#"><img src="img/carousel_item_2.jpg" width="119" height="85" alt="Carousel Item 1"></a>
							<a href="#"><img src="img/carousel_item_1.jpg" width="119" height="85" alt="Carousel Item 1"></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/carousel_item_1.jpg" width="119" height="85" alt="Carousel Item 1"></a>
							<a href="#"><img src="img/carousel_item_1.jpg" width="119" height="85" alt="Carousel Item 1"></a>
							<a href="#"><img src="img/carousel_item_2.jpg" width="119" height="85" alt="Carousel Item 2"></a>
						</div>
					</div>
					<!-- Carousel nav -->
					<a class="carousel-control left" href="#miniCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#miniCarousel" data-slide="next">&rsaquo;</a>
				</div>

				<script type="text/javascript" charset="utf-8">
				$(document).ready(function() {
					$('#miniCarousel').carousel()
				});
				</script>
			</div>
		</div>
	</div>
</div>


<?php }} ?>