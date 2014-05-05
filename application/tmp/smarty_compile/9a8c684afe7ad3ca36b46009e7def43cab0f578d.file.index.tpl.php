<?php /* Smarty version Smarty-3.1.8, created on 2012-09-09 22:08:22
         compiled from "/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7971609350193a379c8dc1-25122626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a8c684afe7ad3ca36b46009e7def43cab0f578d' => 
    array (
      0 => '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/index.tpl',
      1 => 1347219997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7971609350193a379c8dc1-25122626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50193a37b93a04_16873854',
  'variables' => 
  array (
    'user' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50193a37b93a04_16873854')) {function content_50193a37b93a04_16873854($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/function.zend_url.php';
if (!is_callable('smarty_block_t')) include '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/block.t.php';
?><div class="span6">
	<div class="orangeBox">
		<?php echo $_smarty_tpl->getSubTemplate ('../../common/user/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>

		<?php if (!$_smarty_tpl->tpl_vars['user']->value->artist){?>
		<p><a href="<?php echo smarty_function_zend_url(array('controller'=>'user','action'=>'create-artist'),$_smarty_tpl);?>
" class="btn"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create artist profile<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></p>	
	<?php }else{ ?>
	<div class="orangeBox">
				<h3>My artist profile info</h3>

				<?php echo $_smarty_tpl->getSubTemplate ('../partials/artist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('artist'=>$_smarty_tpl->tpl_vars['user']->value->artist), 0);?>



				<a href="<?php echo smarty_function_zend_url(array('controller'=>'user','action'=>'edit-artist'),$_smarty_tpl);?>
" class="pull-right"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit your artist profile<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				<br>
			</div>
		<?php }?>
	
	
		
			<div class="orangeBox clearfix">
				<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My events<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
				
				<?php if (count($_smarty_tpl->tpl_vars['user']->value->events)){?>
				
				<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value->events; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>

					<?php echo $_smarty_tpl->getSubTemplate ('../partials/event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('event'=>$_smarty_tpl->tpl_vars['event']->value,'editable'=>true), 0);?>


				<?php } ?>

				<?php }?>
<p><br>				<a href="<?php echo smarty_function_zend_url(array('controller'=>'user','action'=>'create-event'),$_smarty_tpl);?>
" class="btn pull-right"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create new event<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
</p>
			</div>

	


	
</div>
<div class="span6">
	<?php echo $_smarty_tpl->getSubTemplate ("common/featured-artists.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('num'=>2), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("common/keine-website.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php }} ?>