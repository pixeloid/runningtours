<?php /* Smarty version Smarty-3.1.8, created on 2012-07-15 23:56:59
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/search-results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61428227650030e9784fd26-67552879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e3739e8a7ec619e62620a1e0b94b0ec7d25f5b1' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/search-results.tpl',
      1 => 1342389418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61428227650030e9784fd26-67552879',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50030e97888f21_38133669',
  'variables' => 
  array (
    'num' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50030e97888f21_38133669')) {function content_50030e97888f21_38133669($_smarty_tpl) {?><div class="span12">
	<div class="searchResults orangeBox overlay">
		<h3>Suchergebnisse</h3>

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


		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['artists'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['artists']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['name'] = 'artists';
$_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['loop'] = is_array($_loop=(($tmp = @$_smarty_tpl->tpl_vars['num']->value)===null||$tmp==='' ? 10 : $tmp)) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['artists']['total']);
?>

		<div class="listItem">
			<h4><a href="http://example.com/">On the Rocks - Tanz- und Showband</a></h4>
			<p>Ob private Feier, Firmen-Event oder Großveranstaltung - wir bieten für jeden Anlass das...</p>

			<a href="http://example.com/"><img src="img/carousel_item_2.jpg" width="119" height="85" alt="Carousel Item 2"></a>		
			<ul>
				<li><a href="#">Band und Bands</a></li>
				<li><a href="#">Deutschland</a></li>
				<li class="last"><a href="#">Seite</a></li>
			</ul>
		</div>

		<?php endfor; endif; ?>


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



	</div>


</div>
<?php }} ?>