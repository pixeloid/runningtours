<?php /* Smarty version Smarty-3.1.8, created on 2014-05-12 22:32:29
         compiled from "/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/tours.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16402573145120f09a3845b5-77715844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae9f5e98486b5e3539797d8514be3ad1b5eeb87f' => 
    array (
      0 => '/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/tours.tpl',
      1 => 1399926748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16402573145120f09a3845b5-77715844',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5120f09a40c2c2_33244984',
  'variables' => 
  array (
    'tours' => 0,
    'selectedTour' => 0,
    'tour' => 0,
    'this' => 0,
    'photo' => 0,
    'dates' => 0,
    'date' => 0,
    'isAdmin' => 0,
    'stop' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5120f09a40c2c2_33244984')) {function content_5120f09a40c2c2_33244984($_smarty_tpl) {?>
<div class="container">


	<div class="row">

		<div class="span3">


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
						
					</a>
				</li>
				<?php } ?>
<!-- 				<li>
					<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'customized-tour'),null,true);?>
"><strong>Need a customized tour?</strong></a>
				</li>
 -->			</ul>
			

			<div class="well">
				<?php if (rand(1,2)==1){?>
<p>				<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'customized-tour'),null,true);?>
" class="btn btn-info btn-large btn-block">Other time, other route?</a>
				</p>				<p>If you wish to start your tour at a different time, or run off the beaten path, just let us know and we can set up a customized tour for you!</p>
				<?php }else{ ?>
<p>								<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'customized-tour'),null,true);?>
" class="btn btn-info btn-large btn-block">A tour just for you?</a>
								</p>								<p>Fancy a beer, a market hall or a metro station along the way? Tell us what you would like to see and we'll create a tour for you!
				</p>
				

				<?php }?>
				<p><b class="text-pink">Customized tours from 30 euro.</b></p>
			</div>
			<div class="well">
				<ul class="thumbnails"  id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
					<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tour']->value->photos; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
					<li class="span1"><a data-gallery="gallery" href="<?php echo $_smarty_tpl->tpl_vars['photo']->value->file->filename;?>
" class="thumbnail"><img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value->file->filename;?>
"></a></li>
					<?php } ?>
				</ul>
			</div>



<!-- 			<div class="well">
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
 -->			
		</div>

		<div class="span9">
			<div class="well">
				
									<h2><?php echo $_smarty_tpl->tpl_vars['selectedTour']->value->title;?>
</h2>
				<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'edit-tour','id'=>$_smarty_tpl->tpl_vars['selectedTour']->value->id));?>
" class="">EDIT</a><?php }?>

				<p>Approx. <?php echo $_smarty_tpl->tpl_vars['selectedTour']->value->distance;?>
 km</p>
				<p>Meeting point: <?php echo $_smarty_tpl->tpl_vars['selectedTour']->value->stops[0];?>
</p>
				<hr>
				<div class="row-fluid">
									<div class="span8">
				
				
				<!-- <button type="button" class="btn btn-danger pull-right" data-toggle="collapse" data-target="#more">Info</button> -->
				
				<div id="more" class="collapse in">
					<p><strong><?php echo $_smarty_tpl->tpl_vars['selectedTour']->value->brief;?>
</strong></p>
					<p><?php echo nl2br($_smarty_tpl->tpl_vars['selectedTour']->value->description);?>
</p>
				</div>
				<p class="fb-like" data-send="false"  data-show-faces="false" data-font="lucida grande"></p>

				</div>
				<div class="map span4"  id="route-map" style="height: 300px"></div>
				
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
		
	</div>
	<div class="row">
		<div class="span12">
			<div class="well">
				<h2>Timetable</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, autem, nihil eos consectetur qui atque placeat nesciunt accusantium? Vero eius voluptas facilis molestias totam distinctio officia voluptatibus eos vitae consectetur!</p>
				<table class="table table-bordered calendar" >
					<tr>
						<th></th>
						<th>7:00</th>
						<th>8:00</th>
						<th>9:00</th>
						<th>10:00</th>
						<th>11:00</th>
						<th>12:00</th>
						<th>13:00</th>
						<th>14:00</th>
						<th>15:00</th>
						<th>16:00</th>
						<th>17:00</th>
						<th>18:00</th>
						<th>19:00</th>
						<th>20:00</th>
						<th>21:00</th>
					</tr>

					<tr>
						<th>13. May</th>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td colspan="3"><a href="#" data-toggle="tooltip" title="1 person"><b>Riverbank Tour</b></a></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>

					<tr>
						<th>14. May</th>
						<td colspan="2"><a href="#" data-toggle="tooltip" title="5 persons"><b>Heartbeat tour</b></a></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td colspan="3"><a href="#" data-toggle="tooltip" title="1 person"><b>City of Lights Tour</b></a></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th>15. May</th>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td colspan="2"><a href="#" data-toggle="tooltip" title="3 persons"><b>Heartbeat tour</b></a></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
										<tr>
						<th>16. May</th>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td colspan="2"><a href="#" data-toggle="tooltip" title="6 persons"><b>Heartbeat tour</b></a></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
										<tr>
						<th>17. May</th>
						<td></td>
						<td colspan="2"><a href="#" data-toggle="tooltip" title="4 persons"><b>Heartbeat tour</b></a></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
									</table>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, laudantium, eaque est modi quas sapiente ipsum quo. Totam, illum, sapiente sint voluptates fuga sequi nemo vitae laudantium dolore expedita distinctio!</p>
			</div>

		</div>
	</div>
<!-- 	<div class="row">
		<div class="span12">
			<div class="well" id="customized">
				<h3>Do not wish to accommodate yourself?</h3>
				 
				<p><strong>If you do not wish to accommodate yourself to our timetable or run in a group,</strong>please feel free to <strong>share your preferences with us,</strong> so we can build up a sightseeing running program <strong>customized only for you!</strong></p>
				<p>You only have to state which route are you interested in and indicate the preferred date and time of the run! <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'tours'));?>
">Routes can be picked from our Tours menu</a> or <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'customized-tour'));?>
">defined individually.</a></p>
				<p>We want to focus on your wish entirely, so please make your booking <strong>at least 48 hours prior to the personalized tour </strong>and we will get back to you <strong>within 24 hours with our detailed special offer.</strong></p>
				<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'customized-tour'),null,true);?>
" class="btn btn-info btn-large">Define your tour here!</a>
			</div>

		</div>
	</div> -->

</div>

<?php }} ?>