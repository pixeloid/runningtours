<?php /* Smarty version Smarty-3.1.8, created on 2012-07-18 11:50:31
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/show-event.tpl" */ ?>
<?php /*%%SmartyHeaderCode:344643460500686b9abd0c1-91932260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3080ba54fb45bda539acff91ec9879fcc1b20c4' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/show-event.tpl',
      1 => 1342605030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '344643460500686b9abd0c1-91932260',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_500686b9afe184_61479812',
  'variables' => 
  array (
    'event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500686b9afe184_61479812')) {function content_500686b9afe184_61479812($_smarty_tpl) {?><div class="span12">
	<div class="searchResults orangeBox overlay">
		<h3>Event</h3>


		<div class="listItem">
			<h3><?php echo $_smarty_tpl->tpl_vars['event']->value->name;?>
</h3>
			<p>Date: <?php echo $_smarty_tpl->tpl_vars['event']->value->date;?>
</p>
			<p><?php echo nl2br($_smarty_tpl->tpl_vars['event']->value->description);?>
</p>
			<img src="img/carousel_item_2.jpg" width="119" height="85" alt="Carousel Item 2">		
			
			<a href="javascript:history.go(-1);">Back</a>
			
		</div>


	</div>


</div>
<?php }} ?>