<?php /* Smarty version Smarty-3.1.8, created on 2014-04-16 19:40:22
         compiled from "/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4914768705120f07c80f529-39968482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '754af95619cdbf4eb75b3b8dc676114e5c3af992' => 
    array (
      0 => '/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/index.tpl',
      1 => 1396959704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4914768705120f07c80f529-39968482',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5120f07c8fd023_94799617',
  'variables' => 
  array (
    'lastminute' => 0,
    'this' => 0,
    'tour' => 0,
    'stop' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5120f07c8fd023_94799617')) {function content_5120f07c8fd023_94799617($_smarty_tpl) {?><div class="mainSlider">
	<div class="container">			
	
		<dl>
			<dt>Teenagers to retirees, solos, couples and families!</dt>
			<dd class="details">Let us go for a run with Running Tours Budapest! It is never too early and never too late to start running!</dd>
			<dd><img src="i/promo1.png" alt="" /></dd>
		</dl>

		<dl>
			<dt>Are you ready for some action? </dt>
			<dd class="details">A Running Tours Budapest’s program is a better “feel” for a city and easier to customize than bus tours or large group walking tours!</dd>
			<dd><img src="i/promo2.png" alt="" /></dd>
		</dl>

		<dl>
			<dt>Had a busy day of meetings and need to unwind? </dt>
			<dd class="details">With Budapest Running Tours we offer a unique and fun experience for the busy business traveller!</dd>
			<dd><img src="i/promo3.png" alt="" /></dd>
		</dl>

		<dl>
			<dt>Tired of the same old tourist run around?</dt>
			<dd class="details">Be a part of the city circulation and burn off those nasty calories by booking a tour with us!</dd>
			<dd><img src="i/promo4.png" alt="" /></dd>
		</dl>

		<dl>
			<dt>An alternative tour just for you? </dt>
			<dd class="details">Fancy a beer, a market hall or a metro station along the way? Tell us what you would like to see and we'll create an alternative running tour for you!</dd>
			<dd><img src="i/promo5.png" alt="" /></dd>
		</dl>

		<dl>
			<dt>Facing lack of time in Budapest?</dt>
			<dd class="details">Running Tours Budapest’s tours accomplish two things at once: see the sights plus get a workout in the fresh air!</dd>
			<dd><img src="i/promo6.png" alt="" /></dd>
		</dl>

	</div>
</div>


  

  
 
 

<?php if (isset($_smarty_tpl->tpl_vars['lastminute']->value->title)){?>

<div class="lastMinute">
	<div class="container">
		<h3>Last minute reservation!</h3>
		<p>Book now for <?php echo $_smarty_tpl->tpl_vars['lastminute']->value->personsNeeded;?>
 tourists on the <?php echo $_smarty_tpl->tpl_vars['lastminute']->value->title;?>
, only for <?php echo $_smarty_tpl->tpl_vars['lastminute']->value->price;?>
 EUR per person, on <?php echo $_smarty_tpl->tpl_vars['lastminute']->value->reservations->first()->date;?>
!
			<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'book-now','id'=>$_smarty_tpl->tpl_vars['lastminute']->value->id));?>
" class="btn">Book Now!</a>
		</p>

	</div>
</div>

<?php }?>

<div class="container">
	<div class="toplogos " style="padding-top: 20px;">
		<div class="ta">							
			<div id="TA_linkingWidgetRedesign960" class="TA_linkingWidgetRedesign">
				<ul id="4218O6N" class="TA_links xB29w6xvxe">
					<li id="9DLHnTbMf" class="lo1PJeMLy1i">Read reviews of <a target="_blank" href="http://www.tripadvisor.co.uk/Attraction_Review-g274887-d4048276-Reviews-Running_Tours_Budapest-Budapest_Central_Hungary.html">Running Tours Budapest</a></li>
				</ul>
			</div>
			<script src="http://www.jscache.com/wejs?wtype=linkingWidgetRedesign&amp;uniq=960&amp;locationId=4048276&amp;lang=en_UK&amp;border=true"></script>
		</div>				
		<div class="gort">
			<a href="http://www.gorunningtours.com" target="_blank"><img src="i/gort_logo_premiumpartner_180x62.png" style="margin-top: -35px;margin-left: 10px; position: relative; z-index: 100" alt="Gort Logo Premiumpartner 180x62">						</div></a>
	
	</div>
	
</div>

<div class="toursSlider">

	<!-- <h2 class="container">Check out our tours!</h2> -->
	<div class="item">
		<h3><span><strong><?php echo $_smarty_tpl->tpl_vars['tour']->value->title;?>
</strong></span></h3>
		<div class="container">
			<p><?php echo $_smarty_tpl->tpl_vars['tour']->value->brief;?>
</p>
			
			<div class="map" id="map-<?php echo $_smarty_tpl->tpl_vars['tour']->value->id;?>
" style="height:200px; width:450px"></div>
			<ul class="points">
				<?php  $_smarty_tpl->tpl_vars['stop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tour']->value->stops; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stop']->key => $_smarty_tpl->tpl_vars['stop']->value){
$_smarty_tpl->tpl_vars['stop']->_loop = true;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['stop']->value;?>
</li>
				<?php } ?>
			</ul>
			
			
			<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'tours','id'=>$_smarty_tpl->tpl_vars['tour']->value->id));?>
" class="show">more !</a>
		</div>
		
	</div>
	
	<!-- <div class="container next">
		<a href="#" class=""><span>Next Tour</span></a>
	</div> -->
	
</div>
<?php }} ?>