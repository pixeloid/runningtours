<div class="container">
	<div class="well">
		{if $night}
			<h3>Try any of our routes at 21 PM and check out the city's charming lights after sunset!</h3>
<p>			You only have to state which route are you interested in and indicate the preferred date and time of the run! Routes can be picked from our 'Tour' scroll down bar or defined individually. 
</p>
<p>We want to focus on your wish entirely, so please make your booking at least <b>48 hours prior to the City of Lights Tour</b> and we will get back to you <b>within 24 hours.</b>
</p>
		{else}

		<h3>Do not wish to accommodate yourself?</h3>
		<p><strong>If you do not wish to accommodate yourself to our timetable or run in a group</strong>, please feel free to <strong>share your preferences with us</strong>, so we can build up a sightseeing running program <strong>customized only for you! </strong></p>
		<p>You only have to state which route are you interested in and indicate the preferred date and time of the run! Routes can be picked from our ‘Tours’ menu or defined individually. </p>
		<p>We want to focus on your wish entirely, so please make your booking <strong>at least 48 hours prior to the personalized tour</strong> and we will get back to you <strong>within 24 hours.</strong></p>

		{/if}
		
		{if $complete}
			<div class="well alert alert-success text-center">			<b>Your request has been sent to us succesfully.<br>You have received a confirmation e-mail in your mailbox. <br>(Please check your SPAM folder too!)</b>
			</div>			
			
		{else}
		
			{$form}
		
		{/if}
		
	</div>
</div>


