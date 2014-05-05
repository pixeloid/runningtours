<?php /* Smarty version Smarty-3.1.8, created on 2012-07-19 12:26:29
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/common/featured-artists.tpl" */ ?>
<?php /*%%SmartyHeaderCode:574214073500276f5c59486-82883873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '303e338184f18d039c29c258462a04440d52e0a0' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/common/featured-artists.tpl',
      1 => 1342693588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '574214073500276f5c59486-82883873',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_500276f5c5ae35_84911040',
  'variables' => 
  array (
    'latestArtists' => 0,
    'num' => 0,
    'artist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500276f5c5ae35_84911040')) {function content_500276f5c5ae35_84911040($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/function.zend_url.php';
?><div class="orangeBox">
	<h3>Die neuste Künstler der Artist-eu.com</h3>
	
	
	<?php  $_smarty_tpl->tpl_vars['artist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['artist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['latestArtists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['artists']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['artist']->key => $_smarty_tpl->tpl_vars['artist']->value){
$_smarty_tpl->tpl_vars['artist']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['artists']['index']++;
?>
	
	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['artists']['index']==$_smarty_tpl->tpl_vars['num']->value){?>
    	<?php break 1?>
  	<?php }?>
  
	
	<div class="listItem">
		<h4><a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'show-artist','name'=>$_smarty_tpl->tpl_vars['artist']->value->slug),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['artist']->value->name;?>
</a></h4>
		<p><?php echo nl2br($_smarty_tpl->tpl_vars['artist']->value->description);?>
</p>
		
		<a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'show-artist','slug'=>$_smarty_tpl->tpl_vars['artist']->value->slug),$_smarty_tpl);?>
"><img src="img/carousel_item_2.jpg" width="119" height="85" alt="Carousel Item 2"></a>		
		<ul>
			<li><a href="#">Band und Bands</a></li>
			<li><a href="#">Deutschland</a></li>
			<li class="last"><a href="#">Seite</a></li>
		</ul>
	</div>

	<?php } ?>

	<a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'show-artists'),$_smarty_tpl);?>
" class="more">Weiter zum Künstlersuche »</a>

</div><?php }} ?>