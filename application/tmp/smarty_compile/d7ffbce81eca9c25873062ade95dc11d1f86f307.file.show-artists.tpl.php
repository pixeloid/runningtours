<?php /* Smarty version Smarty-3.1.8, created on 2012-07-19 12:26:44
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/show-artists.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18778948135007e0e4c58ae3-66021006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7ffbce81eca9c25873062ade95dc11d1f86f307' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/show-artists.tpl',
      1 => 1342693481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18778948135007e0e4c58ae3-66021006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'artists' => 0,
    'artist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5007e0e4c9e5f3_45702656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5007e0e4c9e5f3_45702656')) {function content_5007e0e4c9e5f3_45702656($_smarty_tpl) {?><div class="span12">
	<div class="searchResults orangeBox overlay">
		<h3>Artists</h3>

		<div class="navbar">
			<div class="pagination pull-right">
				<ul>
					<li><a href="#">Prev</a></li>
					<li class="active">
						<a href="#">1</a>
					</li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">Next</a></li>
				</ul>
			</div>

		</div>


		<?php  $_smarty_tpl->tpl_vars['artist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['artist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['artists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['artist']->key => $_smarty_tpl->tpl_vars['artist']->value){
$_smarty_tpl->tpl_vars['artist']->_loop = true;
?>

			<?php echo $_smarty_tpl->getSubTemplate ('../partials/artist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('artist'=>$_smarty_tpl->tpl_vars['artist']->value), 0);?>

		
		<?php } ?>


		<div class="navbar">
			<a href="javascript:history.go(-1);">Back</a>
			<div class="pagination pull-right">
				<ul>
					<li><a href="#">Prev</a></li>
					<li class="active">
						<a href="#">1</a>
					</li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">Next</a></li>
				</ul>
			</div>

		</div>



	</div>


</div>
<?php }} ?>