
<div class="container">
<div class="row">
	
	<div class="span8">
		<div class="well">
			<h2>Edit team member</h2>
			{$form}
		</div>
	</div>

	<div class="span4">
		<div class="well">
			<div id="uploadContainer">
				<p class="clearfix">
					<a href="#" class="btn" id="pickfiles"><span>Válaszd ki a képeket!</span></a>
				</p>		

				<div id="filelist"></div>
				<a href="#" class="btn btn-large btn-success" id="uploadfiles">Képek feltöltése »</a>
			</div>
		</div>
	
	
		<div class="imageList">
			<ul class="thumbnails">
			{foreach $teamMember->photos as $photo}
			<li class=" span2">
					<img src="{$photo->file->filename}" alt="" />
					<small><a href="#" data-id="{$photo->file->id}" class="text-error delete">Kép törlése</a></small>
			</li>
			{/foreach}
			</ul>
		</div>
	</div>


</div>
</div>
