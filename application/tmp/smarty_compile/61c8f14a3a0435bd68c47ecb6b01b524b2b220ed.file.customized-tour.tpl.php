<?php /* Smarty version Smarty-3.1.8, created on 2013-03-07 12:05:11
         compiled from "/Users/Pixeloid/Sites/runningtours/htdocs/application/modules/default/views/scripts/index/customized-tour.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56471021951352b95f35fa5-66494416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61c8f14a3a0435bd68c47ecb6b01b524b2b220ed' => 
    array (
      0 => '/Users/Pixeloid/Sites/runningtours/htdocs/application/modules/default/views/scripts/index/customized-tour.tpl',
      1 => 1362654244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56471021951352b95f35fa5-66494416',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51352b9602ffd1_24676944',
  'variables' => 
  array (
    'complete' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51352b9602ffd1_24676944')) {function content_51352b9602ffd1_24676944($_smarty_tpl) {?><div class="container">
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