<?php /* Smarty version Smarty-3.1.8, created on 2014-06-03 23:11:25
         compiled from "/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/book-now.ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:625434924534ec698efa375-07231960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b19dca54632a284a483897f1b3e82131f57e1c54' => 
    array (
      0 => '/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/book-now.ajax.tpl',
      1 => 1401829882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '625434924534ec698efa375-07231960',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_534ec6990068e7_90374955',
  'variables' => 
  array (
    'date' => 0,
    'fbUserInfo' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534ec6990068e7_90374955')) {function content_534ec6990068e7_90374955($_smarty_tpl) {?>

<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Date: <?php echo $_smarty_tpl->tpl_vars['date']->value->format('d-M-Y H:i');?>
</h3>
</div>
<div class="modal-body">
	<?php if (!isset($_smarty_tpl->tpl_vars['fbUserInfo']->value)){?>
    	<fb:login-button scope="email">Fill the form from your Facebook info!</fb:login-button>
	<?php }?>
	
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

</div>

<?php }} ?>