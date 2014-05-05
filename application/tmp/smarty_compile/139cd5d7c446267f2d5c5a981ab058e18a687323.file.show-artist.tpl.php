<?php /* Smarty version Smarty-3.1.8, created on 2012-07-19 12:03:06
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/show-artist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32890333450033d4518c379-66410138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '139cd5d7c446267f2d5c5a981ab058e18a687323' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/show-artist.tpl',
      1 => 1342692185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32890333450033d4518c379-66410138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50033d451ba3b2_82149821',
  'variables' => 
  array (
    'artist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50033d451ba3b2_82149821')) {function content_50033d451ba3b2_82149821($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/function.zend_url.php';
?><div class="span12">
	<div class="searchResults orangeBox overlay">

		<div class="listItem">
			<h3><?php echo $_smarty_tpl->tpl_vars['artist']->value->name;?>
</h3>
			<p><?php echo nl2br($_smarty_tpl->tpl_vars['artist']->value->description);?>
</p>
			<a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'show-artist','slug'=>$_smarty_tpl->tpl_vars['artist']->value->slug),$_smarty_tpl);?>
"><img src="img/carousel_item_2.jpg" width="119" height="85" alt="Carousel Item 2"></a>		
				<a href="javascript:history.go(-1);">Back</a>
						
		</div>


	</div>


</div>
<?php }} ?>