<?php /*%%SmartyHeaderCode:28180307450564d14d912d3-68280017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd10b5f08b1bb6783ac8120e028894286031e6e70' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/default/views/emlekmentes/index/search.tpl',
      1 => 1347832072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28180307450564d14d912d3-68280017',
  'variables' => 
  array (
    'parameters' => 0,
    'cat' => 0,
    'param' => 0,
    'value' => 0,
    'values' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50564d14e36e94_84772354',
  'cache_lifetime' => '14400',
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50564d14e36e94_84772354')) {function content_50564d14e36e94_84772354($_smarty_tpl) {?><div class="row">
	<div class="span4">
		<h3>Szabadszavas kereső</h3>
		<form class="form-search" action="index/search-result">
		  <input type="text" class="input-medium search-query">
		  <button type="submit" class="btn">Keresés</button>
		
		<span class="help-block"><small>Több szóra is kereshet, vesszővel elválasztva őket</small></span>
		</form>
		
	</div>
	<div class="span5">
		<h3>Összetett kereső</h3>
		<p>Több feltétel is megadható!<br>
		Kérjük kattintson a keresési feltételre a kiválasztáshoz.<br>
		A nem kívánt feltételt szintén kattintással távolíthatja el.
		</p>
	</div>
	<div class="span3">
		<div class="well">
			<p>A jelenlegi keresési feltételekkel ennyi képet találtunk az adatbázisban</p>
			<p><big><strong class="numResults">123 db</strong></big></p>
		</div>
	</div>
</div>

<div class="row">
		<form action="/index/search-result" class="advancedSearch" method="post" accept-charset="utf-8">

				<div class="span3">
			<h4>Téma</h4>
			<dl>
				
				
									<dt>Személyek</dt>
				
				
					
											
						
					
						<dd ><label for="kozeleti-szereplo" class="checkbox"><input type="checkbox"  name="param[11][]" value="23" id="kozeleti-szereplo">Közéleti szereplő</label></dd>
											
						
					
						<dd ><label for="polgarok" class="checkbox"><input type="checkbox"  name="param[11][]" value="24" id="polgarok">Polgárok</label></dd>
											
						
					
						<dd ><label for="kozosseg-tagja" class="checkbox"><input type="checkbox"  name="param[11][]" value="25" id="kozosseg-tagja">Közösség tagja</label></dd>
					
										
				
				
									<dt>Város</dt>
				
				
					
					<dd><input type="text"  name="param[19]" id="varos" class="typeahead"></dd>

										
				
				
									<dt>Épület</dt>
				
				
					
											
						
					
						<dd ><label for="kozigazgatasi" class="checkbox"><input type="checkbox"  name="param[20][]" value="32" id="kozigazgatasi">közigazgatási</label></dd>
											
						
					
						<dd ><label for="kulturalis" class="checkbox"><input type="checkbox"  name="param[20][]" value="33" id="kulturalis">kultúrális</label></dd>
											
						
					
						<dd ><label for="kereskedelmi" class="checkbox"><input type="checkbox"  name="param[20][]" value="34" id="kereskedelmi">kereskedelmi</label></dd>
											
						
					
						<dd ><label for="vendeglato-hely" class="checkbox"><input type="checkbox"  name="param[20][]" value="35" id="vendeglato-hely">vendéglátó hely</label></dd>
											
						
					
						<dd ><label for="egyeb-1" class="checkbox"><input type="checkbox"  name="param[20][]" value="36" id="egyeb-1">egyéb</label></dd>
					
										
				
				
									<dt>Enteriőr</dt>
				
				
					
											
						
					
						<dd ><label for="kozigazgatasi-1" class="checkbox"><input type="checkbox"  name="param[21][]" value="37" id="kozigazgatasi-1">közigazgatási</label></dd>
											
						
					
						<dd ><label for="kulturalis-1" class="checkbox"><input type="checkbox"  name="param[21][]" value="38" id="kulturalis-1">kultúrális</label></dd>
											
						
					
						<dd ><label for="kereskedelmi-1" class="checkbox"><input type="checkbox"  name="param[21][]" value="39" id="kereskedelmi-1">kereskedelmi</label></dd>
											
						
					
						<dd ><label for="vendeglato-hely-1" class="checkbox"><input type="checkbox"  name="param[21][]" value="40" id="vendeglato-hely-1">vendéglátó hely</label></dd>
											
						
					
						<dd ><label for="egyeb-2" class="checkbox"><input type="checkbox"  name="param[21][]" value="41" id="egyeb-2">egyéb</label></dd>
					
										
				
				
									<dt>Esemény</dt>
				
				
					
											
						
					
						<dd ><label for="csaladi-1" class="checkbox"><input type="checkbox"  name="param[22][]" value="43" id="csaladi-1">családi</label></dd>
											
						
					
						<dd ><label for="orszaggyules" class="checkbox"><input type="checkbox"  name="param[22][]" value="45" id="orszaggyules">országgyűlés</label></dd>
											
						
					
						<dd ><label for="tarsadalmi" class="checkbox"><input type="checkbox"  name="param[22][]" value="46" id="tarsadalmi">társadalmi</label></dd>
											
						
					
						<dd ><label for="egyhazi-kormenet" class="checkbox"><input type="checkbox"  name="param[22][]" value="47" id="egyhazi-kormenet">egyházi körmenet</label></dd>
					
										
				
				
							</dl>
			
		</div>
				<div class="span3">
			<h4>Egyéni kép</h4>
			<dl>
				
				
									<dt>Egyéni portré</dt>
				
				
					
											
						
					
						<dd ><label for="igazolvanykep" class="checkbox"><input type="checkbox"  name="param[16][]" value="48" id="igazolvanykep">igazolványkép</label></dd>
											
						
					
						<dd ><label for="arckep" class="checkbox"><input type="checkbox"  name="param[16][]" value="49" id="arckep">arckép</label></dd>
											
						
					
						<dd ><label for="mellkep" class="checkbox"><input type="checkbox"  name="param[16][]" value="50" id="mellkep">mellkép</label></dd>
											
						
					
						<dd ><label for="egeszalakos" class="checkbox"><input type="checkbox"  name="param[16][]" value="51" id="egeszalakos">egészalakos</label></dd>
											
						
					
						<dd ><label for="idos" class="checkbox"><input type="checkbox"  name="param[16][]" value="56" id="idos">idős</label></dd>
					
										
				
				
									<dt>Életkor</dt>
				
				
					
											
						
					
						<dd ><label for="csecsemo" class="checkbox"><input type="checkbox"  name="param[23][]" value="52" id="csecsemo">csecsemő</label></dd>
											
						
					
						<dd ><label for="gyermek" class="checkbox"><input type="checkbox"  name="param[23][]" value="53" id="gyermek">gyermek</label></dd>
											
						
					
						<dd ><label for="fiatal" class="checkbox"><input type="checkbox"  name="param[23][]" value="54" id="fiatal">fiatal</label></dd>
											
						
					
						<dd ><label for="felnott" class="checkbox"><input type="checkbox"  name="param[23][]" value="55" id="felnott">felnőtt</label></dd>
					
										
				
				
							</dl>
			
		</div>
				<div class="span3">
			<h4>Csoportkép</h4>
			<dl>
				
				
									<dt>Tagok viszonya</dt>
				
				
					
											
						
					
						<dd ><label for="csalad" class="checkbox"><input type="checkbox"  name="param[24][]" value="57" id="csalad">család</label></dd>
											
						
					
						<dd ><label for="munka" class="checkbox"><input type="checkbox"  name="param[24][]" value="58" id="munka">munka</label></dd>
											
						
					
						<dd ><label for="egyeb-3" class="checkbox"><input type="checkbox"  name="param[24][]" value="59" id="egyeb-3">egyéb</label></dd>
					
										
				
				
									<dt>Létszám</dt>
				
				
					
											
						
					
						<dd ><label for="ket-fo" class="checkbox"><input type="checkbox"  name="param[25][]" value="60" id="ket-fo">két fő</label></dd>
											
						
					
						<dd ><label for="3-9-fo" class="checkbox"><input type="checkbox"  name="param[25][]" value="61" id="3-9-fo">3-9 fő</label></dd>
											
						
					
						<dd ><label for="10-49-fo" class="checkbox"><input type="checkbox"  name="param[25][]" value="62" id="10-49-fo">10-49 fő</label></dd>
											
						
					
						<dd ><label for="50-fo-felett" class="checkbox"><input type="checkbox"  name="param[25][]" value="63" id="50-fo-felett">50 fő felett</label></dd>
					
										
				
				
									<dt>Történelmi eseményhez köthető csoport</dt>
				
				
					
					
										
				
				
							</dl>
			
		</div>
				<div class="span3">
			<h4>Speciális</h4>
			<dl>
				
				
									<dt>Technika</dt>
				
				
					
											
						
					
						<dd ><label for="technika-1" class="checkbox"><input type="checkbox"  name="param[18][]" value="64" id="technika-1">technika 1</label></dd>
											
						
					
						<dd ><label for="technika-2" class="checkbox"><input type="checkbox"  name="param[18][]" value="65" id="technika-2">technika 2</label></dd>
											
						
					
						<dd ><label for="technika-3" class="checkbox"><input type="checkbox"  name="param[18][]" value="66" id="technika-3">technika 3</label></dd>
					
										
				
				
									<dt>Évtized</dt>
				
				
					
					
										
				
				
									<dt>Méret</dt>
				
				
					
											
						
					
						<dd ><label for="kicsi" class="checkbox"><input type="checkbox"  name="param[28][]" value="67" id="kicsi">Kicsi</label></dd>
											
						
					
						<dd ><label for="kozepes" class="checkbox"><input type="checkbox"  name="param[28][]" value="68" id="kozepes">Közepes</label></dd>
											
						
					
						<dd ><label for="nagy" class="checkbox"><input type="checkbox"  name="param[28][]" value="69" id="nagy">Nagy</label></dd>
					
										
				
				
									<dt>Felbontás</dt>
				
				
					
											
						
					
						<dd ><label for="kicsi-1" class="checkbox"><input type="checkbox"  name="param[29][]" value="70" id="kicsi-1">Kicsi</label></dd>
											
						
					
						<dd ><label for="kozepes-1" class="checkbox"><input type="checkbox"  name="param[29][]" value="71" id="kozepes-1">Közepes</label></dd>
											
						
					
						<dd ><label for="nagy-1" class="checkbox"><input type="checkbox"  name="param[29][]" value="72" id="nagy-1">Nagy</label></dd>
					
										
				
				
									<dt>minőség</dt>
				
				
					
											
						
					
						<dd ><label for="tokeletes" class="checkbox"><input type="checkbox"  name="param[30][]" value="73" id="tokeletes">Tökéletes</label></dd>
											
						
					
						<dd ><label for="jo" class="checkbox"><input type="checkbox"  name="param[30][]" value="74" id="jo">Jó</label></dd>
											
						
					
						<dd ><label for="kozepes-2" class="checkbox"><input type="checkbox"  name="param[30][]" value="75" id="kozepes-2">Közepes</label></dd>
											
						
					
						<dd ><label for="rossz" class="checkbox"><input type="checkbox"  name="param[30][]" value="76" id="rossz">Rossz</label></dd>
					
										
				
				
									<dt>sdfv</dt>
				
				
					
					
										
				
				
							</dl>
			
		</div>
		
		<p><input type="submit" class="btn pull-right" value="Keresés &rarr;"></p>


		</form>
		
</div><?php }} ?>