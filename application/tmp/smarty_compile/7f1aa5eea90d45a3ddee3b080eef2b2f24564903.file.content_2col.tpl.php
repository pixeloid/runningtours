<?php /* Smarty version Smarty-3.1.8, created on 2012-07-11 01:19:22
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/templates/content_2col.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15038383364ffcb87ad0f695-50971466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f1aa5eea90d45a3ddee3b080eef2b2f24564903' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/templates/content_2col.tpl',
      1 => 1336633886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15038383364ffcb87ad0f695-50971466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'loggedIn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ffcb87ad6dde2_43851302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffcb87ad6dde2_43851302')) {function content_4ffcb87ad6dde2_43851302($_smarty_tpl) {?>
<div class="container">

	<div class="row">
		<div class="span8 mainContent">
			
			<div class="gradBox">
				<?php echo $_smarty_tpl->tpl_vars['this']->value->layout()->content;?>

			</div>
			
			
		
		</div>


		<div class="span4 sideBar">
		
			<div class="gradBox gradBoxTabs">

				<ul id="tab" class="nav nav-tabs">
					<li class="active"><a href="#tab-login" data-toggle="tab">Login</a></li>
					<li><a href="#tab-webmail" data-toggle="tab">Webmail</a></li>
				</ul>


				<div class="tab-content content">
					<div class="tab-pane fade in active" id="tab-login">
						
						<?php if (!$_smarty_tpl->tpl_vars['loggedIn']->value){?>

							<?php echo $_smarty_tpl->tpl_vars['this']->value->loginPanel();?>

						
						
						
						<?php }else{ ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->baseUrl('de/user/logout');?>
">Logout</a>
						<?php }?>
					</div>
					<div class="tab-pane fade" id="tab-webmail">
						<form class="form-horizontal">
							<fieldset>
								<div class="control-group">

									<label class="control-label" for="tab-login-username">Benutzername:</label>
									<div class="controls">
										<input type="text" class="input-medium" name="username" id="tab-login-username">
									</div>

								</div>
								<div class="control-group _error">
									<label class="control-label" for="tab-login-password">Kennwort:</label>
									<div class="controls">
										<input type="text" class="input-medium" name="password" id="tabtab-login-password">
										<!-- <span class="help-inline">Error!!!</span> -->
									</div>
								</div>

								<div class="control-group"><br><br>
									<button type="submit" class="btn">Webmail Login <i class="icon-chevron-right"></i></button>

								</div>

							</fieldset>
						</form>
					</div>
				</div>
			</div>
			
			
			<div class="gradBox domain-search">
				<h3>Domain <big>prüfen</big></h3>
				<div class="content">

					<form class="form-inline"><input type="text" name="" class="input-medium" /><span class="domains">.homepage-eu.com<br>.hp-eu.com </span><br><a href="#" class="btn pull-right">Jetzt prüfen! <i class="icon-chevron-right"></i></a><input type="submit" value="Jetzt prüfen!" class="hide"/>
						<p class="notes">Sie haben schon eine eigene Domain?<br>Sie können sie auch bei uns benutzen! <br><a href="#">Weiter lessen...</a></p>
					</form>
				</div>
			</div>
			

		
		</div>

	</div>

</div>

<?php }} ?>