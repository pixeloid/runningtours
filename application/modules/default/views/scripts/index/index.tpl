<div class="mainSlider">
	<div class="container">			
	
		<dl>
			<dt>Teenagers to retirees, solos, couples and families!</dt>
			<dd class="details">Let us go for a run with Running Tours Budapest! It is never too early and never too late to start running!</dd>
			<dd><img src="i/promo1.png" alt="" /></dd>
		</dl>

		<dl>
			<dt>Are you ready for some action? </dt>
			<dd class="details">A Running Tours Budapest’s program is a better “feel” for a city and easier to customize than bus tours or large group walking tours!</dd>
			<dd><img src="i/promo2.png" alt="" /></dd>
		</dl>

		<dl>
			<dt>Had a busy day of meetings and need to unwind? </dt>
			<dd class="details">With Budapest Running Tours we offer a unique and fun experience for the busy business traveller!</dd>
			<dd><img src="i/promo3.png" alt="" /></dd>
		</dl>

		<dl>
			<dt>Tired of the same old tourist run around?</dt>
			<dd class="details">Be a part of the city circulation and burn off those nasty calories by booking a tour with us!</dd>
			<dd><img src="i/promo4.png" alt="" /></dd>
		</dl>

		<dl>
			<dt>An alternative tour just for you? </dt>
			<dd class="details">Fancy a beer, a market hall or a metro station along the way? Tell us what you would like to see and we'll create an alternative running tour for you!</dd>
			<dd><img src="i/promo5.png" alt="" /></dd>
		</dl>

		<dl>
			<dt>Facing lack of time in Budapest?</dt>
			<dd class="details">Running Tours Budapest’s tours accomplish two things at once: see the sights plus get a workout in the fresh air!</dd>
			<dd><img src="i/promo6.png" alt="" /></dd>
		</dl>

	</div>
</div>


  

  
 
 

{if $lastminute}

<div class="lastMinute">
	<div class="container">
		<div class="row">
			<div class="span4">
				<h3>Last minute!</h3>

				<p><b>{$lastminute->personsNeeded} place{if $lastminute->personsNeeded gt 1}s{/if}</b> left for the {$lastminute->tour->title} on <b>{$lastminute->datefrom->format('d-M-Y')}</b> at {$lastminute->datefrom->format('H:i')} only for {$lastminute->price} EUR/person!</p>

				<a href="{$this->url([action => 'tours', id => $lastminute->tour->id])}" class="btn">Book Now!</a>
			</div>
			<div class="span4">
				<h3>Our partners!</h3>
				<div class="ta">							
					<div id="TA_linkingWidgetRedesign960" class="TA_linkingWidgetRedesign">
						<ul id="4218O6N" class="TA_links xB29w6xvxe">
							<li id="9DLHnTbMf" class="lo1PJeMLy1i">Read reviews of <a target="_blank" href="http://www.tripadvisor.co.uk/Attraction_Review-g274887-d4048276-Reviews-Running_Tours_Budapest-Budapest_Central_Hungary.html">Running Tours Budapest</a></li>
						</ul>
					</div>
					<script src="http://www.jscache.com/wejs?wtype=linkingWidgetRedesign&amp;uniq=960&amp;locationId=4048276&amp;lang=en_UK&amp;border=true"></script>
				</div>				
				<div class="gort">
					<a href="http://www.gorunningtours.com" target="_blank"><img src="i/gort_logo_premiumpartner_180x62.png" ></a>
				
				</div>

			</div>
			<div class="span4">
				<h3>Thank you!</h3>
				<blockquote>
					<p>{$feedback->description}</p>
					<i>{$feedback->author}</i>
				</blockquote>
			</div>
		</div>
	</div>
</div>

{/if}


<div class="toursSlider">

	<!-- <h2 class="container">Check out our tours!</h2> -->
	<div class="item">
		<h3><span class=""><strong>{$tour->title}</strong></span></h3>
		<div class="container">
			<p>{$tour->brief}</p>
			
			<div class="mapholder"><div class="map" id="map-{$tour->id}" style=""></div></div>
			<ul class="points">
				{foreach $tour->stops as $stop}
					<li>{$stop}</li>
				{/foreach}
			</ul>
			
			
			<a href="{$this->url([action => 'tours', id => $tour->id])}" class="show">more !</a>
		</div>
		
	</div>
	
	<!-- <div class="container next">
		<a href="#" class=""><span>Next Tour</span></a>
	</div> -->
	
</div>
