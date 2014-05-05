<?php /* Smarty version Smarty-3.1.8, created on 2013-06-19 09:07:01
         compiled from "/Users/Pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/customized-tour.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18736576951c158953a52d5-55118462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de89321e14779eb8bc789676438cf6e457f01469' => 
    array (
      0 => '/Users/Pixeloid/Sites/runningtours/application/modules/default/views/scripts/index/customized-tour.tpl',
      1 => 1366023000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18736576951c158953a52d5-55118462',
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
  'unifunc' => 'content_51c15895462ce2_24706283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c15895462ce2_24706283')) {function content_51c15895462ce2_24706283($_smarty_tpl) {?><div class="container">
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