<?php /* Smarty version Smarty-3.1.8, created on 2012-07-17 13:08:31
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91678967750053d0ea75ff8-86712305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f89fc4e1506c592b52eac28a6d76522fc1d5a3b4' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/user.tpl',
      1 => 1342523310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91678967750053d0ea75ff8-86712305',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50053d0eaa2451_93083746',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50053d0eaa2451_93083746')) {function content_50053d0eaa2451_93083746($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/function.zend_url.php';
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
			<li>Birthdate: <?php echo $_smarty_tpl->tpl_vars['user']->value->meta->birthdate->format('Y-m-d');?>
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
		
		<a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'user-edit'),$_smarty_tpl);?>
" class="pull-right">Edit personal data</a>
		<br>
	</div>

		<?php if (!$_smarty_tpl->tpl_vars['user']->value->artist){?>
			<a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'add-artist'),$_smarty_tpl);?>
" class="btn">Create artist profile</a>
		<?php }else{ ?>
			<a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'edit-artist'),$_smarty_tpl);?>
" class="btn">Edit your artist profile</a>
		<?php }?>
	


	
</div>
<div class="span6">
	<?php echo $_smarty_tpl->getSubTemplate ("common/featured-artists.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('num'=>2), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("common/keine-website.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php }} ?>