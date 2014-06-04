

<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Date: {$date->format('d-M-Y H:i')}</h3>
</div>
<div class="modal-body">
	{if !isset($fbUserInfo)}
    	<fb:login-button scope="email">Fill the form with your Facebook info!</fb:login-button>
	{/if}
	{$form}
</div>

