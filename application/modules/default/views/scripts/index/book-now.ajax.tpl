

<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Tour: {$selectedTour->title}<br>Date: {$date->format('Y-m-d H:i')}</h3>
</div>
<div class="modal-body">
	{if !isset($fbUserInfo)}
    	<fb:login-button scope="email">Fill the form from your Facebook info!</fb:login-button>
	{/if}
	
	{$form}
</div>

