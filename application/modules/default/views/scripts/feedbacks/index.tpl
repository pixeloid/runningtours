<div class="container">
	<h2>Feedbacks</h2>

	<div class="well">
		
		{if $isAdmin}<a href="{$this->url([action=>'add'])}" class="">Add new feedback</a>{/if}
		
		{foreach $feedbacks as $fb}
		<blockquote>{$fb->description|nl2br}<br><strong><em>{$fb->author}</em></strong>
		
			{if $isAdmin}<a href="{$this->url([action=>'edit', id => $fb->id])}" class="">EDIT</a> | <a href="{$this->url([action=>'delete', id => $fb->id])}" class="">REMOVE</a>{/if}
		
		</blockquote> 
		{/foreach}
		
	</div>
</div>