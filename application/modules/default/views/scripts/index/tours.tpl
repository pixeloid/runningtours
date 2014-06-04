
<div class="container">


	<div class="row">

		<div class="span3">


			<ul class="nav nav-pills nav-stacked  well">
				{foreach $tours as $tour}
				<li{if $selectedTour->id|default:null eq $tour->id} class="active"{/if}>
					<a href="{$this->url([id => $tour->id])}" class=""><strong>{$tour->title}</strong><br>
						{*<i>Every {$tour->dayString}, at {$tour->hour}</i> 
												<small>(Approx. {$tour->distance} km)</small>*}
					</a>
				</li>
				{/foreach}
				{if $isAdmin}<li>
					<a href="{$this->url([action=>'add-tour'], null, true)}"><strong>Add tour...</strong></a>
				</li>{/if}
			</ul>
			

			<div class="well">
				{$rand = rand(1,3)}
				{if $rand eq 1}
					<p><a href="{$this->url([action=>'customized-tour'], null, true)}" class="btn btn-info btn-large btn-block">Other time, other route?</a></p>
					<p>If you wish to start your tour at a different time, or run off the beaten path, just let us know and we can set up a customized tour for you!</p>
					<p><b class="text-pink">Customized tours from 30 euro.</b></p>
				{elseif $rand eq 2}
					<p><a href="{$this->url([action=>'customized-tour'], null, true)}" class="btn btn-info btn-large btn-block">A tour just for you?</a></p>
					<p>Fancy a beer, a market hall or a metro station along the way? Tell us what you would like to see and we'll create a tour for you!</p>
					<p><b class="text-pink">Customized tours from 30 euro.</b></p>
				{else}
					<p><a href="{$this->url([action=>'customized-tour'], null, true)}" class="btn btn-info btn-large btn-block">City of Lights Tour</a></p>
					<p>Try any of our routes at 21PM and check out the city's charming lights after sunset!</p>
				{/if}
			</div>


<!-- 			<div class="well">
				<h3>{$selectedTour->title} timetable</h3>
				
				<p>We offer a discount for a group of 2-5 people!</p>
				
				{foreach $dates as $date}
				<div class="">
					<a class="btn btn-alert pull-right ajax" data-toggle="modal" href="{$this->url([action => 'book-now', id => $selectedTour->id, date => $date.date->format('Y-m-d H:i:s')])}" data-targetmodal="#mainModal">Book Now!</a>
					{$date.text}
				</div>
				{/foreach}
			</div>
 -->			
		</div>

		<div class="span9">
			<div class="well">
				
				<div class="row-fluid">
					<div class="span6">
						<h2>{$selectedTour->title}</h2>
						
						{if $isAdmin}<a href="{$this->url([action=>'edit-tour', id => $selectedTour->id])}" class="">EDIT</a>{/if}

						<p><b>Distance:</b> Approx. {$selectedTour->distance} km</p>
						<p><b>Meeting point:</b> {$selectedTour->stops.0}</p>
						<ul>
							<li>Price for 1 person: <b>{$tour->prices.0} EUR</b></li>
							<li>Price for 2-3 persons: <b>{$tour->prices.1} EUR</b></li>
							<li>Price for 4-5 persons: <b>{$tour->prices.2} EUR</b> </li>
						</ul>
						<p>
							<a href="{$this->url()}#timetable" class="btn btn-mini btn-success"><b>Click here for booking</b></a>
						</p>

					</div>
					<div class="span6">
						<ul class="thumbnails"  id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
							{foreach $selectedTour->photos as $photo}
							<li class="span4">
								<a data-gallery="gallery" href="{$photo->file->filename}" class="thumbnail"><img src="{$photo->file->filename}"></a></li>
							{/foreach}
						</ul>
					</div>
				</div>
				
				<hr>
				<div class="row-fluid">
									<div class="span8">
				
				
				<!-- <button type="button" class="btn btn-danger pull-right" data-toggle="collapse" data-target="#more">Info</button> -->
				
				<div id="more" class="collapse in">
					<p><strong>{$selectedTour->brief}</strong></p>
					<p>{$selectedTour->description}</p>
				</div>
				<hr>


				<p class="fb-like" data-send="false"  data-show-faces="false" data-font="lucida grande"></p>

				</div>
				<div class="map span4"  id="route-map" style="height: 300px"></div>
				
				<ul id="points">
					{foreach $selectedTour->stops as $stop}
					<li>{$stop}</li>
					{/foreach}
				</ul>
				

				</div>			
			</div>
			

			
		</div>
		
	</div>
	<div class="row">
		<div class="span12">
			<div class="well">
				<h2>Timetable</h2>
				<p>If you are a group of more than 5 runners, send us a mail to <a href="hello@runningtoursbudapest.com">hello@runningtoursbudapest.com</a> and we can set up a personalized group tour for you!</p>
				<p>Choose the date and time then click on the appropriate box for booking!</p>
				<div id="timetable">
				</div>


			</div>

		</div>
	</div>
<!-- 	<div class="row">
		<div class="span12">
			<div class="well" id="customized">
				<h3>Do not wish to accommodate yourself?</h3>
				 
				<p><strong>If you do not wish to accommodate yourself to our timetable or run in a group,</strong>please feel free to <strong>share your preferences with us,</strong> so we can build up a sightseeing running program <strong>customized only for you!</strong></p>
				<p>You only have to state which route are you interested in and indicate the preferred date and time of the run! <a href="{$this->url([action => tours])}">Routes can be picked from our Tours menu</a> or <a href="{$this->url([action => 'customized-tour'])}">defined individually.</a></p>
				<p>We want to focus on your wish entirely, so please make your booking <strong>at least 48 hours prior to the personalized tour </strong>and we will get back to you <strong>within 24 hours with our detailed special offer.</strong></p>
				<a href="{$this->url([action=>'customized-tour'], null, true)}" class="btn btn-info btn-large">Define your tour here!</a>
			</div>

		</div>
	</div> -->

</div>

