<?php /* Smarty version Smarty-3.1.8, created on 2012-07-19 11:46:37
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85732547750054aa6219f34-01264243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e794b3740842a5aa9f23f78fd757742584cfbb92' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/index.tpl',
      1 => 1342691069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85732547750054aa6219f34-01264243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50054aa62c55f1_42067990',
  'variables' => 
  array (
    'user' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50054aa62c55f1_42067990')) {function content_50054aa62c55f1_42067990($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/function.zend_url.php';
?><div class="span6">
	<div class="orangeBox">
		<h3>My info</h3>
		
		<ul>
			<li>Name: <?php echo $_smarty_tpl->tpl_vars['user']->value->meta->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->meta->lastname;?>
</li>
			<li>E-mail: <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</li>
			<li>Created: <?php echo $_smarty_tpl->tpl_vars['user']->value->created->format('Y. M. d. H:i:s');?>
</li>
		</ul>

		<ul>
			<li>Gender: <?php echo $_smarty_tpl->tpl_vars['user']->value->meta->gender;?>
</li>
			<li>Birthdate: <?php echo $_smarty_tpl->tpl_vars['user']->value->meta->birthdate;?>
</li>
			<li>Country: <?php echo $_smarty_tpl->tpl_vars['user']->value->meta->country;?>
</li>
			<li>City: <?php echo $_smarty_tpl->tpl_vars['user']->value->meta->city;?>
 – <?php echo $_smarty_tpl->tpl_vars['user']->value->meta->postcode;?>
</li>
			<li>Address: <?php echo $_smarty_tpl->tpl_vars['user']->value->meta->street;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->meta->housenumber;?>
</li>
		</ul>

		<ul>
			<li>Phone: <?php echo $_smarty_tpl->tpl_vars['user']->value->meta->phone;?>
</li>
			<li>Mobile: <?php echo $_smarty_tpl->tpl_vars['user']->value->meta->mobile;?>
</li>
		</ul>
		
		<a href="<?php echo smarty_function_zend_url(array('controller'=>'user','action'=>'edit-user'),$_smarty_tpl);?>
" class="pull-right">Edit personal data</a>
		<br>
	</div>

		<?php if (!$_smarty_tpl->tpl_vars['user']->value->artist){?>
			<a href="<?php echo smarty_function_zend_url(array('controller'=>'user','action'=>'create-artist'),$_smarty_tpl);?>
" class="btn">Create artist profile</a>
		<?php }else{ ?>
	<div class="orangeBox">
				<h3>My artist profile info</h3>

				<?php echo $_smarty_tpl->getSubTemplate ('../partials/artist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('artist'=>$_smarty_tpl->tpl_vars['user']->value->artist), 0);?>



				<a href="<?php echo smarty_function_zend_url(array('controller'=>'user','action'=>'edit-artist'),$_smarty_tpl);?>
" class="pull-right">Edit your artist profile</a>
				<br>
			</div>
		<?php }?>
	
	
		
			<div class="orangeBox clearfix">
				<h3>My events</h3>
				
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
" class="btn pull-right">Create new event</a>
</p>
			</div>

	


	
</div>
<div class="span6">
	<?php echo $_smarty_tpl->getSubTemplate ("common/featured-artists.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('num'=>2), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("common/keine-website.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php }} ?>