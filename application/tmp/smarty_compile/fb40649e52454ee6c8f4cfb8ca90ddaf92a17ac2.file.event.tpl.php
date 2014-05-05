<?php /* Smarty version Smarty-3.1.8, created on 2012-07-19 11:44:06
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/partials/event.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8757415275007d1d0b86d53-50037895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb40649e52454ee6c8f4cfb8ca90ddaf92a17ac2' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/partials/event.tpl',
      1 => 1342690912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8757415275007d1d0b86d53-50037895',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5007d1d0c03f36_83034468',
  'variables' => 
  array (
    'event' => 0,
    'editable' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5007d1d0c03f36_83034468')) {function content_5007d1d0c03f36_83034468($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/function.zend_url.php';
?><div class="listItem">
	<h4><a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'show-event','name'=>$_smarty_tpl->tpl_vars['event']->value->slug,'zend_url_reset'=>true),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value->name;?>
</a></h4>
	<p><?php echo nl2br($_smarty_tpl->tpl_vars['event']->value->description);?>
</p>

	<a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'show-event','name'=>$_smarty_tpl->tpl_vars['event']->value->slug,'zend_url_reset'=>true),$_smarty_tpl);?>
"><img src="img/carousel_item_2.jpg" width="119" height="85" alt="Carousel Item 2"></a>		
	<ul>
		<?php if (isset($_smarty_tpl->tpl_vars['editable']->value)){?><li><a href="<?php echo smarty_function_zend_url(array('controller'=>'user','action'=>'edit-event','id'=>$_smarty_tpl->tpl_vars['event']->value->id,'zend_url_reset'=>true),$_smarty_tpl);?>
">Edit</a></li><?php }?>
	</ul>
</div>
<?php }} ?>