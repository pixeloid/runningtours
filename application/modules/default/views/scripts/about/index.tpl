
<div class="container">
	
	<h2>About us</h2>
	<div class="well">
	<p>City running is a unique and exciting way to see a city. Whether you are trying to squeeze in some marathon training on a business trip or simply would like some unique tourist fun, Running Tours Budapest offers an experience like no other. The convenience of combining a sightseeing tour with a regular workout is attractive for many ambitious runners who are on vacation or travelling on business. </p>
	<p>Bound through the streets of one of Europe’s crown jewel cities with an experienced runner and guide. </p>
	<p>Each tour features incredible architectural sights, breath-taking vistas of Buda and Pest, and some offers an optional restaurant or ruin pub experience at the end of the running tour. Each restaurant experience gives visitors a chance to try the famous Hungarian and Romani cuisine from the some of the best eating establishments in the city. </p>
	<p>Learn some of the rich myths and stories of Budapest—Jewish tales of the 8th district, Hungarian heroes of centuries past, artists and musicians who haunted the many fine coffee houses, and the wonders of hilly Buda—all while getting a terrific workout and burning off those calories! </p>
	<p>For more details on the running tours provided, <a href="{$this->url([action=>tours])}">please go to our Tours.</a> </p>
	<p><strong>Running Tours Budapest</strong> was founded by young and enthusiastic Hungarian locals who have a passion for running and would like to share it. They wanted to develop a tourist experience that gets visitors out of the traffic jams and large tour groups and into the streets to see a more intimate and thriving Budapest. Who needs a beastly tour bus that can barely fit through narrow streets when we have our legs for transportation? And you do not even have to mind CO emission either! <strong>So put on your sneakers and let’s go for a run!</strong></p>
	</div>	
	
	{if $isAdmin}<a href="{$this->url([action=>'add'])}" class="">Add new member</a>{/if}
	
	
	<div class="well">


		{foreach $teamMembers as $index => $member}
		
		<div class="leader row">
			{if $index % 2 ne 0}<div class="span3"><span class="thumbnail"><img src="{$member->photos.0->file->filename}"  alt="Agi"></a></div>{/if}
			<div class="span8">
				
				<h3{if $index % 2 eq 0} class="text-right"{/if}>{$member->name}</h3>
				<hr />
				<p class="text-right">{$member->description|nl2br}</p>
		
				{if $isAdmin}<a href="{$this->url([action=>'edit', id => $member->id])}" class="">EDIT</a> | <a href="{$this->url([action=>'delete', id => $member->id])}" class="">REMOVE</a>{/if}
		
			</div>
			{if $index % 2 eq 0}<div class="span3"><span class="thumbnail"><img src="{$member->photos.0->file->filename}" alt="Agi"></a></div>{/if}
		</div>

	{/foreach}

	
</div>

</div>