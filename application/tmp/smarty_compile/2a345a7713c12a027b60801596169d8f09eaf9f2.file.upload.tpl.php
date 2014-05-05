<?php /* Smarty version Smarty-3.1.8, created on 2012-10-26 12:19:04
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/emlekmentes/index/upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1192103291504fabd15d7fa0-37245598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a345a7713c12a027b60801596169d8f09eaf9f2' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/emlekmentes/index/upload.tpl',
      1 => 1351246737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1192103291504fabd15d7fa0-37245598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504fabd15d8f99_65741516',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504fabd15d8f99_65741516')) {function content_504fabd15d8f99_65741516($_smarty_tpl) {?><div class="head">
	<h2>"Van képem hozzá!"</h2>
	<h3>Építsük együtt Székesfehérvár fotótörténeti archívumát!</h3>
</div>


<div class="row">
	<div class="span12"><p>KÉPEIT 3 MÓDON JUTTATHATJA EL HOZZÁNK:</p>
	</div>
</div>
<div class="row upload">


	<div class="col">
<div class="inner">		<h4>Személyesen</h4>
		<p>Kérjük fáradjon be hozzánk a Városi Képtárba, és keresse Szabó Piroskát.</p>
		<p>Amennyiben teheti, kérjük nyomtassa ki, és töltse ki az alábbi dokumentumot.</p>
	
		<p><a href="#" class="dl"><span>Képkísérőlap letöltése</span></a></p>
	
		<p><strong>Címünk:</strong></p>
		<p>Városi Képtár - Deák Gyűjtemény (Székesfehérvár, Oskola u. 10.)</p>
		
		<iframe width="200" height="180" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.hu/maps?client=safari&amp;oe=UTF-8&amp;ie=UTF8&amp;q=De%C3%A1k+Gy%C5%B1jtem%C3%A9ny+(Sz%C3%A9kesfeh%C3%A9rv%C3%A1r,+Oskola+u.+10&amp;fb=1&amp;gl=hu&amp;hq=De%C3%A1k+Gy%C5%B1jtem%C3%A9ny+(Sz%C3%A9kesfeh%C3%A9rv%C3%A1r,+Oskola+u.+10&amp;cid=0,0,6171041879070886600&amp;t=m&amp;iwloc=A&amp;ll=47.192204,18.408333&amp;spn=0.006295,0.006295&amp;output=embed"></iframe><br />
</div>		
		
	</div>
	<div class="col">
		<div class="inner">
			<h4>Postán</h4>
		
		<p>Kérjük minden esetben töltse ki a képkísérőlapot, a rendelkezésre álló információval.</p>
		<p>Képét 2 héten belül postán juttatjuk vissza Önnek.</p>
		<p><a href="#" class="dl"><span>Képkísérőlap letöltése</span></a></p>
		<p><strong>Postacímünk</strong></p>

		<p>Városi Képtár - Deák Gyűjtemény <br>(Székesfehérvár, Oskola u. 10.) </p>

		<p>A borítékra kérjük írja rá, hogy <strong>Emlékmentés</strong>!</p>
		
		</div>	
		
	</div>
	<div class="col last">
<div class="inner">
			<h4>Weblapra feltöltve</h4>
		
		<div id="uploadContainer">
			<p class="clearfix">
				<a href="#" class="ul" id="pickfiles"><span>Válassza ki a bescannelt képet</span></a>
				<span class="important" rel="popover" data-trigger="hover" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." data-placement="bottom" data-original-title="Mire érdemes figyelni a scannelésnél?"><i>Mire érdemes figyelni<br>a scannelésnél?</i></span>
			</p>		

			<div class="pending">
				<?php echo $_smarty_tpl->tpl_vars['this']->value->action('pending-photos','index');?>

			</div>
			
			
			<div id="filelist"></div>
				<a href="#" class="btn btn-large btn-success" id="uploadfiles">Kép feltöltése »</a>
			</div>
			
		</div>
</div>		

		<script type="text/javascript" src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script>
		<script type="text/javascript" src="plupload/js/plupload.js"></script>
		<script type="text/javascript" src="plupload/js/plupload.gears.js"></script>
		<script type="text/javascript" src="plupload/js/plupload.silverlight.js"></script>
		<script type="text/javascript" src="plupload/js/plupload.flash.js"></script>
		<script type="text/javascript" src="plupload/js/plupload.browserplus.js"></script>
		<script type="text/javascript" src="plupload/js/plupload.html4.js"></script>
		<script type="text/javascript" src="plupload/js/plupload.html5.js"></script>

</div>



<?php }} ?>