<?php /* Smarty version Smarty-3.1.8, created on 2012-07-19 11:39:14
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/show-events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131531480250068533025f43-51264304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5253cd4f7d9ea2cc85b28bab5c3e1ab121c6aae5' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/show-events.tpl',
      1 => 1342690753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131531480250068533025f43-51264304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50068533072e59_83700855',
  'variables' => 
  array (
    'date' => 0,
    'events' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50068533072e59_83700855')) {function content_50068533072e59_83700855($_smarty_tpl) {?><div class="span12">
	<div class="searchResults orangeBox overlay">
		<h3>Events on <?php echo $_smarty_tpl->tpl_vars['date']->value->format('Y. M. d.');?>
</h3>

		<div class="navbar">
			<div class="resultControls">
				<span><strong>Kategorie:</strong> Band und Bands <a href="#">(x)</a></span>
				<span><strong>Ort: </strong>Deutschland  <a href="#">(x)</a></span>
			</div>
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


		<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>

			<?php echo $_smarty_tpl->getSubTemplate ('../partials/event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('event'=>$_smarty_tpl->tpl_vars['event']->value), 0);?>

		
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