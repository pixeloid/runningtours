
<div class="container">


	<div class="row">

		<div class="span5">


			<ul class="nav nav-pills nav-stacked  well">
				{foreach $tours as $tour}
				<li{if $selectedTour->id|default:null eq $tour->id} class="active"{/if}>
					<a href="{$this->url([id => $tour->id])}" class=""><strong>{$tour->title}</strong><br>
						<i>Every {$tour->dayString}, at {$tour->hour}</i> 
						<small>(Approx. {$tour->distance} km)</small>
					</a>
				</li>
				{/foreach}
<!-- 				<li>
					<a href="{$this->url([action=>'customized-tour'], null, true)}"><strong>Need a customized tour?</strong></a>
				</li>
 -->			</ul>
			

			<div class="well">
				{if rand(1,2) eq 1}
<p>				<a href="{$this->url([action=>'customized-tour'], null, true)}" class="btn btn-info btn-large btn-block">Other time, other route?</a>
				</p>				<p>If you wish to start your tour at a different time, or run off the beaten path, just let us know and we can set up a customized tour for you!</p>
				{else}
<p>								<a href="{$this->url([action=>'customized-tour'], null, true)}" class="btn btn-info btn-large btn-block">A tour just for you?</a>
								</p>								<p>Fancy a beer, a market hall or a metro station along the way? Tell us what you would like to see and we'll create a tour for you!
				</p>
				

				{/if}
				<p><b class="text-pink">Customized tours from 30 euro.</b></p>
			</div>
		


			<div class="well">
				<h3>{$selectedTour->title} timetable</h3>
				
				<p>We offer a discount for a group of 2-5 people!</p>
				
				{foreach $dates as $date}
				<div class="">
					<a class="btn btn-alert pull-right ajax" data-toggle="modal" href="{$this->url([action => 'book-now', id => $selectedTour->id, date => $date.date->format('Y-m-d H:i:s')])}" data-targetmodal="#mainModal">Book Now!</a>
					{$date.text}
				</div>
				{/foreach}
			</div>
			
		</div>

		<div class="span7">
			<div class="well">
				
				<h2>{$selectedTour->title}</h2>
				{if $isAdmin}<a href="{$this->url([action=>'edit-tour', id => $selectedTour->id])}" class="">EDIT</a>{/if}
				
				<p>Approx. {$selectedTour->distance} km</p>
				<p>Meeting point: {$selectedTour->stops.0}</p>
				
				<!-- <button type="button" class="btn btn-danger pull-right" data-toggle="collapse" data-target="#more">Info</button> -->
				
				<div id="more" class="collapse in">
					<p><strong>{$selectedTour->brief}</strong></p>
					<p>{$selectedTour->description|nl2br}</p>
				</div>
				<p class="fb-like" data-send="false"  data-show-faces="false" data-font="lucida grande"></p>

				<div class="map well"  id="route-map" style="height: 200px"></div>
				
				<ul id="points">
					{foreach $selectedTour->stops as $stop}
					<li>{$stop}</li>
					{/foreach}
				</ul>
			
			</div>
			
			<div class="well">
				<ul class="thumbnails"  id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
					{foreach $tour->photos as $photo}
					<li class="span1"><a data-gallery="gallery" href="{$photo->file->filename}" class="thumbnail"><img src="{$photo->file->filename}"></a></li>
					{/foreach}
				</ul>
			</div>
			


			
		</div>
		
	</div>
	
	<div class="row">
		<div class="span12">
			<div class="well" id="customized">
				<h3>Do not wish to accommodate yourself?</h3>
				 
				<p><strong>If you do not wish to accommodate yourself to our timetable or run in a group,</strong>please feel free to <strong>share your preferences with us,</strong> so we can build up a sightseeing running program <strong>customized only for you!</strong></p>
				<p>You only have to state which route are you interested in and indicate the preferred date and time of the run! <a href="{$this->url([action => tours])}">Routes can be picked from our Tours menu</a> or <a href="{$this->url([action => 'customized-tour'])}">defined individually.</a></p>
				<p>We want to focus on your wish entirely, so please make your booking <strong>at least 48 hours prior to the personalized tour </strong>and we will get back to you <strong>within 24 hours with our detailed special offer.</strong></p>
				<a href="{$this->url([action=>'customized-tour'], null, true)}" class="btn btn-info btn-large">Define your tour here!</a>
			</div>

		</div>
	</div>

</div>

