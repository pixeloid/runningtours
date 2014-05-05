<?php /* Smarty version Smarty-3.1.8, created on 2013-04-17 23:03:54
         compiled from "/Users/Pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/book-now.ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7491992645131d351847721-90650730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbe33023f3d1cf56705163b9a1133be2701762c3' => 
    array (
      0 => '/Users/Pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/book-now.ajax.tpl',
      1 => 1366023000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7491992645131d351847721-90650730',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5131d35187d491_62574978',
  'variables' => 
  array (
    'selectedTour' => 0,
    'date' => 0,
    'fbUserInfo' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5131d35187d491_62574978')) {function content_5131d35187d491_62574978($_smarty_tpl) {?>

<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Tour: <?php echo $_smarty_tpl->tpl_vars['selectedTour']->value->title;?>
<br>Date: <?php echo $_smarty_tpl->tpl_vars['date']->value->format('Y-m-d H:i');?>
</h3>
</div>
<div class="modal-body">
	<?php if (!isset($_smarty_tpl->tpl_vars['fbUserInfo']->value)){?>
    	<fb:login-button scope="email">Fill the form from your Facebook info!</fb:login-button>
	<?php }?>
	
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

</div>

<?php }} ?>