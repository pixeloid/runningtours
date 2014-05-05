<?php /* Smarty version Smarty-3.1.8, created on 2012-09-09 20:47:19
         compiled from "/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/common/event-calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16348928175011408f66c798-87380456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5556375dedb5c590a088c46d30c300bc3883d01' => 
    array (
      0 => '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/common/event-calendar.tpl',
      1 => 1347216389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16348928175011408f66c798-87380456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5011408f6ab151_09140150',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5011408f6ab151_09140150')) {function content_5011408f6ab151_09140150($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/block.t.php';
if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/function.zend_url.php';
?><div class="eventCalendar orangeBox">
	<h3>Veranstaltungskalender</h3>

	<p>Finden Sie iaculis, metus in fermentum ullamcorper, elit purus varius metus, consectetur convallis dui nibh varius tortor.</p>
	<p>Sed lorem arcu, gravida quis sagittis eget, iaculis nec nunc.</p>
	<div class="eventCalendarHolder"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Loading calendar...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
	
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
	
	<a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'search'),$_smarty_tpl);?>
" class="more">Weiter zum Jahreskalender »</a>

</div><?php }} ?>