<?php /* Smarty version Smarty-3.1.8, created on 2012-07-17 16:29:13
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152950504950056a7a96a392-18577246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72fd2dce1f4ce66e0d384a6eb54a0348cb03e670' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/signup.tpl',
      1 => 1342533834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152950504950056a7a96a392-18577246',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50056a7a9ae734_81908157',
  'variables' => 
  array (
    'success' => 0,
    'errorMessage' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50056a7a9ae734_81908157')) {function content_50056a7a9ae734_81908157($_smarty_tpl) {?><div class="span6">
	<div class="orangeBox">
		<h3>Registrierung</h3>


			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
			</p>
			<?php if (!$_smarty_tpl->tpl_vars['success']->value){?>

				<?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>

				<?php echo $_smarty_tpl->tpl_vars['form']->value;?>


			<?php }else{ ?>
				<p>	Registration successful!<br>
					Check your e-mail address, and validate your registration!</p>

			<?php }?>

		
	</div>
	
</div>
<div class="span6">
	<?php echo $_smarty_tpl->getSubTemplate ("common/featured-artists.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('num'=>6), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("common/keine-website.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php }} ?>