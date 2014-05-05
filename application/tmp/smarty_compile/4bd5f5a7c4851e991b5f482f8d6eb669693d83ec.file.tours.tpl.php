<?php /* Smarty version Smarty-3.1.8, created on 2013-04-14 20:12:21
         compiled from "/Users/Pixeloid/Sites/runningtours/htdocs/application/modules/default/views/scripts/index/tours.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17139336525134c985f16165-97487304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bd5f5a7c4851e991b5f482f8d6eb669693d83ec' => 
    array (
      0 => '/Users/Pixeloid/Sites/runningtours/htdocs/application/modules/default/views/scripts/index/tours.tpl',
      1 => 1363008140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17139336525134c985f16165-97487304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5134c9860bbf58_45946723',
  'variables' => 
  array (
    'tours' => 0,
    'selectedTour' => 0,
    'tour' => 0,
    'this' => 0,
    'dates' => 0,
    'date' => 0,
    'stop' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5134c9860bbf58_45946723')) {function content_5134c9860bbf58_45946723($_smarty_tpl) {?>
<div class="container">


	<div class="row">

		<div class="span5">
			<ul class="nav nav-pills nav-stacked  well">
				<?php  $_smarty_tpl->tpl_vars['tour'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tour']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tours']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tour']->key => $_smarty_tpl->tpl_vars['tour']->value){
$_smarty_tpl->tpl_vars['tour']->_loop = true;
?>
				<li<?php if ((($tmp = @$_smarty_tpl->tpl_vars['selectedTour']->value->id)===null||$tmp==='' ? null : $tmp)==$_smarty_tpl->tpl_vars['tour']->value->id){?> class="active"<?php }?>>
					<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('id'=>$_smarty_tpl->tpl_vars['tour']->value->id));?>
" class=""><strong><?php echo $_smarty_tpl->tpl_vars['tour']->value->title;?>
</strong><br>
						<i>Every <?php echo $_smarty_tpl->tpl_vars['tour']->value->dayString;?>
, at <?php echo $_smarty_tpl->tpl_vars['tour']->value->hour;?>
</i> 
						<small>(Approx. <?php echo $_smarty_tpl->tpl_vars['tour']->value->distance;?>
 km)</small>
					</a>
				</li>
				<?php } ?>
				<li>
					<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url();?>
#customized"><strong>Need a customized tour?</strong></a>
				</li>
			</ul>


			<div class="well">
				<h3><?php echo $_smarty_tpl->tpl_vars['selectedTour']->value->title;?>
 timetable</h3>
				
				<p>We offer a discount for a group of 2-5 people!</p>
				
				<?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value){
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>
				<div class="">
					<a class="btn btn-alert pull-right ajax" data-toggle="modal" href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'book-now','id'=>$_smarty_tpl->tpl_vars['selectedTour']->value->id,'date'=>$_smarty_tpl->tpl_vars['date']->value['date']->format('Y-m-d H:i:s')));?>
" data-targetmodal="#mainModal">Book Now!</a>
					<?php echo $_smarty_tpl->tpl_vars['date']->value['text'];?>

				</div>
				<?php } ?>
			</div>
			
		</div>

		<div class="span7">
			<div class="well">
				
				<h2><?php echo $_smarty_tpl->tpl_vars['selectedTour']->value->title;?>
</h2>
				
				
				<p>Approx. <?php echo $_smarty_tpl->tpl_vars['selectedTour']->value->distance;?>
 km</p>
				<p>Meeting point: <?php echo $_smarty_tpl->tpl_vars['selectedTour']->value->stops[0];?>
</p>
				
				<!-- <button type="button" class="btn btn-danger pull-right" data-toggle="collapse" data-target="#more">Info</button> -->
				
				<div id="more" class="collapse in">
					<p><strong><?php echo $_smarty_tpl->tpl_vars['selectedTour']->value->brief;?>
</strong></p>
					<p><?php echo nl2br($_smarty_tpl->tpl_vars['selectedTour']->value->description);?>
</p>
				</div>
				<p class="fb-like" data-send="false"  data-show-faces="false" data-font="lucida grande"></p>

				<div class="map well"  id="route-map" style="height: 200px"></div>
				
				<ul id="points">
					<?php  $_smarty_tpl->tpl_vars['stop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['selectedTour']->value->stops; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stop']->key => $_smarty_tpl->tpl_vars['stop']->value){
$_smarty_tpl->tpl_vars['stop']->_loop = true;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['stop']->value;?>
</li>
					<?php } ?>
				</ul>
			
			</div>

		</div>

	</div>
	
	<div class="row">
		<div class="well" id="customized">
			<h3>Not wish to accommodate yourself?</h3>
			 
			<p><strong>If you do not wish to accommodate yourself to our timetable or run in a group,</strong>please feel free to <strong>share your preferences with us,</strong> so we can build up a sightseeing running program <strong>customized only for you!</strong></p>
			<p>You only have to state which route are you interested in and indicate the preferred date and time of the run! <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'tours'));?>
">Routes can be picked from our Tours menu</a> or <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'customized-tour'));?>
">defined individually.</a></p>
			<p>We want to focus on your wish entirely, so please make your booking <strong>at least 48 hours prior to the personalized tour </strong>and we will get back to you <strong>within 24 hours with our detailed special offer.</strong></p>
			<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'customized-tour'),null,true);?>
" class="btn btn-info btn-large">Define your tour here!</a>
		</div>
	</div>

</div>

<?php }} ?>