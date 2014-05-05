<?php /* Smarty version Smarty-3.1.8, created on 2012-07-19 11:44:06
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/partials/artist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6718284065007d6e633cf68-13696901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d6aacc38bf32d1cb6617f231e6827655a84475c' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/partials/artist.tpl',
      1 => 1342690899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6718284065007d6e633cf68-13696901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'artist' => 0,
    'event' => 0,
    'editable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5007d6e637a676_50543862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5007d6e637a676_50543862')) {function content_5007d6e637a676_50543862($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/function.zend_url.php';
?><div class="listItem">
	<h4><a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'show-artist','name'=>$_smarty_tpl->tpl_vars['artist']->value->slug,'zend_url_reset'=>true),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['artist']->value->name;?>
</a></h4>
	<p><?php echo nl2br($_smarty_tpl->tpl_vars['artist']->value->description);?>
</p>

	<a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'show-artist','name'=>$_smarty_tpl->tpl_vars['event']->value->slug,'zend_url_reset'=>true),$_smarty_tpl);?>
"><img src="img/carousel_item_2.jpg" width="119" height="85" alt="Carousel Item 2"></a>		
	<ul>
		<?php if (isset($_smarty_tpl->tpl_vars['editable']->value)){?><li><a href="<?php echo smarty_function_zend_url(array('controller'=>'user','action'=>'edit-artist','id'=>$_smarty_tpl->tpl_vars['event']->value->id,'zend_url_reset'=>true),$_smarty_tpl);?>
">Edit</a></li><?php }?>
		<li><a href="#">Band und Bands</a></li>
		<li><a href="#">Deutschland</a></li>
		<li class="last"><a href="#">Seite</a></li>
	</ul>
</div>
<?php }} ?>