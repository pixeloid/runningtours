<div class="container">
	<div class="well">
		
		{foreach $tours as $tour}
		
		<h3>{$tour->title}</h3>
		
		<ul class="thumbnails"  id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
			{foreach $tour->photos as $photo}
			<li class="span2"><a data-gallery="gallery" href="{$photo->file->filename}" class="thumbnail"><img src="{$photo->file->filename}"></a></li>
			{/foreach}
		</ul>
		
		{/foreach}
		
		
	</div>
</div>



