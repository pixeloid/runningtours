<?php /* Smarty version Smarty-3.1.8, created on 2012-10-26 11:25:10
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/emlekmentes/index/browse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20428773315051a9c12df241-51394272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17bdef04ca5e7aced6932ff46b4768bfa170db2e' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/emlekmentes/index/browse.tpl',
      1 => 1351243509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20428773315051a9c12df241-51394272',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5051a9c132d194_44167851',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5051a9c132d194_44167851')) {function content_5051a9c132d194_44167851($_smarty_tpl) {?><div class="head browser-nav">
	<ul class="nav">               
		<li class="n1"><a href="#"><strong>Legújabb fényképek</strong></a></li>
		<li class="n2"><a href="#"><strong>Legtöbbször megtekintett fényképek</strong></a></li>
		<li class="n3"><a href="#"><strong>Fotótörténeti szempontból kiemelt képek</strong></a></li>
		<li class="n4 last"><a href="#"><strong>Látogatóink által feltöltött képek</strong></a></li>
	</ul>
</div>

<div class="imageBrowser">
	<a href="#" class="nav prev">Előző</a>
	<a href="#" class="nav next">Következő</a>
	<div class="main"><img src="http://placehold.it/360x550" alt=""></div>
	<div class="details">
		<h2>Fotó címsor</h2>
		
		<ul>
			<li><b>Készült:</b> 1910-es évek</li>
			<li><b>Technika:</b> ezüstzselatin, papír</li>
			<li><b>Méret:</b> 13x24 cm</li>
		</ul>
		
		<a href="#" class="allInfo"><span>Összes infó</span></a>
		
		<p>
			Megjegyzés:<br>
			xxxxx x xxxxxx x xx x xxxxxxxxx x xxxxxx x xx x xxxxxxxxx x xxxxxx x xx x xxxxxxxxx x xxxxxx x xx x xxxxxxxxx x xxxxxx x xx x xxxx
		</p>
		
		<a href="#" class="contactUs">Szeretné felhasználni a képet?<br>Lépjen kapcsolatba velünk!</a>
		
		<div class="vankepe">
			<h3>Van képe hozzá?</h3>
			<p>Birtokában van olyan fotó, mely gazdagíthatná a gyűjteményt? Kérjük juttassa el hozzánk, hogy minden képet megőrizhessünk az utókornak, és értékes kiindulási anyaggal szolgálhassunk a jövő kutatói számára!</p>
			
			<a href="#" class="eljuttatom">Eljuttatom a képet</a>
			<a href="#" class="close">Bezárás</a>
		</div>
		
	</div>
</div>

<?php }} ?>