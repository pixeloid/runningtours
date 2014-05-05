<?php /* Smarty version Smarty-3.1.8, created on 2013-04-15 12:58:53
         compiled from "/var/www/netstudio/runningtoursbudapest.com/application/modules/default/views/scripts/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1790373910516bdd6d044852-79717427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64655ff1ff976e1b70cf38e9d08da1d7bbf591ab' => 
    array (
      0 => '/var/www/netstudio/runningtoursbudapest.com/application/modules/default/views/scripts/index/index.tpl',
      1 => 1366023028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1790373910516bdd6d044852-79717427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lastminute' => 0,
    'this' => 0,
    'tour' => 0,
    'stop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_516bdd6d0c4140_80304340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516bdd6d0c4140_80304340')) {function content_516bdd6d0c4140_80304340($_smarty_tpl) {?><div class="mainSlider">
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
			<dt>Need a good company to hang around with? </dt>
			<dd class="details">Join our young and enthusiastic tour guides on a run through one of the world’s most beautiful cities!</dd>
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

<div class="toursSlider">

	<h2 class="container">Check out our tours!</h2>
	
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