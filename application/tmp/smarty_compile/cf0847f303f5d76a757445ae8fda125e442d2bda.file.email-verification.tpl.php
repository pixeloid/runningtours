<?php /* Smarty version Smarty-3.1.8, created on 2012-08-02 10:03:38
         compiled from "/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/email-verification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140114586501939d12487d7-03411900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf0847f303f5d76a757445ae8fda125e442d2bda' => 
    array (
      0 => '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/user/email-verification.tpl',
      1 => 1343894608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140114586501939d12487d7-03411900',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_501939d13b1a90_41320058',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501939d13b1a90_41320058')) {function content_501939d13b1a90_41320058($_smarty_tpl) {?><div class="span6">
	<div class="orangeBox">
		<?php echo $_smarty_tpl->getSubTemplate ('../../common/user/email-verification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
	</div>
	
</div>
<div class="span6">
	<?php echo $_smarty_tpl->getSubTemplate ("common/featured-artists.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('num'=>2), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("common/keine-website.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php }} ?>