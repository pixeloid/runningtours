<?php /* Smarty version Smarty-3.1.8, created on 2012-09-09 22:08:22
         compiled from "/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/partials/event.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1659720866504cf736221509-21900005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb5b64b69194ca75f63e200715eed8fdca4beb7a' => 
    array (
      0 => '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/partials/event.tpl',
      1 => 1342690912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1659720866504cf736221509-21900005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'event' => 0,
    'editable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504cf736282884_30375945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504cf736282884_30375945')) {function content_504cf736282884_30375945($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/function.zend_url.php';
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