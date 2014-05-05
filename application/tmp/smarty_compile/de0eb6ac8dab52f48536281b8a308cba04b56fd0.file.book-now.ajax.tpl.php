<?php /* Smarty version Smarty-3.1.8, created on 2013-03-04 17:24:24
         compiled from "/Users/Pixeloid/Sites/runningtours/htdocs/application/modules/default/views/scripts/index/book-now.ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5262083255134c98882f357-73192724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de0eb6ac8dab52f48536281b8a308cba04b56fd0' => 
    array (
      0 => '/Users/Pixeloid/Sites/runningtours/htdocs/application/modules/default/views/scripts/index/book-now.ajax.tpl',
      1 => 1362414258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5262083255134c98882f357-73192724',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5134c98887ecf4_95981234',
  'variables' => 
  array (
    'selectedTour' => 0,
    'date' => 0,
    'fbUserInfo' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5134c98887ecf4_95981234')) {function content_5134c98887ecf4_95981234($_smarty_tpl) {?>

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