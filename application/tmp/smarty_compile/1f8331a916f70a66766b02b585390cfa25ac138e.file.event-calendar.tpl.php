<?php /* Smarty version Smarty-3.1.8, created on 2012-07-18 11:52:35
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/common/event-calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:403057754500278c9e612d5-66344550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f8331a916f70a66766b02b585390cfa25ac138e' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/common/event-calendar.tpl',
      1 => 1342605154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '403057754500278c9e612d5-66344550',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_500278c9e62e77_14176911',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500278c9e62e77_14176911')) {function content_500278c9e62e77_14176911($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/function.zend_url.php';
?><div class="eventCalendar orangeBox">
	<h3>Veranstaltungskalender</h3>

	<p>Finden Sie iaculis, metus in fermentum ullamcorper, elit purus varius metus, consectetur convallis dui nibh varius tortor.</p>
	<p>Sed lorem arcu, gravida quis sagittis eget, iaculis nec nunc.</p>
	<div class="eventCalendarHolder">Loading calendar...</div>
	
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('.eventCalendarHolder').load('<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'calendar'),$_smarty_tpl);?>
')
			
			$('.eventCalendarHolder .calendarHeader a').live('click',function(e){
				e.preventDefault();
				$('.eventCalendarHolder').load($(this).attr('href'))
			})
		
		});
		
	</script>
	
	<a href="#" class="more">Weiter zum Jahreskalener »</a>

</div><?php }} ?>