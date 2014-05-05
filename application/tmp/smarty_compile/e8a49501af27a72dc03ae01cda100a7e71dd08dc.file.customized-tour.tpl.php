<?php /* Smarty version Smarty-3.1.8, created on 2014-04-16 21:35:34
         compiled from "/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/customized-tour.tpl" */ ?>
<?php /*%%SmartyHeaderCode:714180670534edb8646ba16-72190631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8a49501af27a72dc03ae01cda100a7e71dd08dc' => 
    array (
      0 => '/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/customized-tour.tpl',
      1 => 1366023000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '714180670534edb8646ba16-72190631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'complete' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_534edb864a6584_62919968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534edb864a6584_62919968')) {function content_534edb864a6584_62919968($_smarty_tpl) {?><div class="container">
	<div class="well">
		<h3>Not wish to accommodate yourself?</h3>
		<p><strong>If you do not wish to accommodate yourself to our timetable or run in a group</strong>, please feel free to <strong>share your preferences with us</strong>, so we can build up a sightseeing running program <strong>customized only for you! </strong></p>
		<p>You only have to state which route are you interested in and indicate the preferred date and time of the run! Routes can be picked from our ‘Tours’ menu or defined individually. </p>
		<p>We want to focus on your wish entirely, so please make your booking <strong>at least 48 hours prior to the personalized tour</strong> and we will get back to you <strong>within 24 hours.</strong></p>
		
		<?php if ($_smarty_tpl->tpl_vars['complete']->value){?>
			<div class="well alert alert-success text-center">			<b>Your request has been sent to us succesfully.<br>You have received a confirmation e-mail in your mailbox. <br>(Please check your SPAM folder too!)</b>
			</div>			
			
		<?php }else{ ?>
		
			<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

		
		<?php }?>
		
	</div>
</div>


<?php }} ?>