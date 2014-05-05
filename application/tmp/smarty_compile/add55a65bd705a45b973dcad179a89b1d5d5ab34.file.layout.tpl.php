<?php /* Smarty version Smarty-3.1.8, created on 2012-07-17 20:23:35
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/admin/views/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23300401450058cf6c89471-91011122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'add55a65bd705a45b973dcad179a89b1d5d5ab34' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/admin/views/layout.tpl',
      1 => 1342549413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23300401450058cf6c89471-91011122',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50058cf6cbdd45_02458094',
  'variables' => 
  array (
    'this' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50058cf6cbdd45_02458094')) {function content_50058cf6cbdd45_02458094($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<?php echo $_smarty_tpl->tpl_vars['this']->value->headTitle();?>


	<base href="<?php echo $_smarty_tpl->tpl_vars['this']->value->baseHref();?>
" target="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="stylesheet" href="css/bootstrap.min.css" />

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>


    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


	<script src="js/jquery-1.7.1.min.js"></script>
	<!-- <script src="js/bootstrap.js" type="text/javascript" charset="utf-8"></script> -->

	
		
</head>

<body>
	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="brand" href="#">Artist.eu administration</a>
          <div class="btn-group pull-right">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-user"></i> Username
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Kilépés</a></li>
            </ul>
          </div>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="admin">Kezdőoldal</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
			<?php echo $_smarty_tpl->tpl_vars['this']->value->layout()->content;?>

      </div><!--/row-->

      <hr>


    </div><!--/.fluid-container-->
    <?php if ($_smarty_tpl->tpl_vars['this']->value->messages){?>
	<div id="flashMsg" class="modal"><div class="modal-header">
    <button class="close" data-dismiss="modal">×</button>
  	<h2><?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['this']->value->messages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value){
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<br><?php } ?></h2>
</div>
	</div>
<?php }?>

</body>
</html>
<?php }} ?>