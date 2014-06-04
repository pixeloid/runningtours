<table class="table table-bordered calendar" >
	<tr>
		<th></th>
		<th>7:00</th>
		<th>8:00</th>
		<th>9:00</th>
		<th>10:00</th>
		<th>11:00</th>
		<th>12:00</th>
		<th>13:00</th>
		<th>14:00</th>
		<th>15:00</th>
		<th>16:00</th>
		<th>17:00</th>
		<th>18:00</th>
		<th>19:00</th>
		<th>20:00</th>
		<th>21:00</th>
		<th>22:00</th>
		<th>23:00</th>
	</tr>
	

	
	{$l = 0}
	{foreach $timetable as $hour}
		{if $hour.hour->format('H') eq 7}
		<tr><th>{$hour.hour->format('d-M-Y')}</th>
		{/if}
		
		{if $l} {$l = $l-1}{/if}
		{if !$l}
			{if $hour.reservation}
				{$l = $hour.reservation.hours}
				{$left = $this->config->app->maxpersons - $hour.reservation.num}
				<td colspan="{$l}">
					<a href="{$this->url([action => 'book-now', date => $hour.hour->format('Y-m-d H:i:s'), tour=>$hour.reservation.tourid])}" data-toggle="modal" data-content="{if $left}Click here to join this tour! <br><b>Only {$left}  place{if $left gt 1}s{/if} left!</b>{else}This tour is full, please choose another time!{/if}" class="ajax{if $hour.reservation.onlyinaday} onlyinaday{/if}{if !$left} closed{/if}" data-targetmodal="#mainModal"><b>{$hour.reservation.title}</b></a></td>

			{else}
				<td>
					<a class="empty ajax" data-toggle="modal" data-content="Click here to book a tour:<br><b>{$hour.hour->format('d-M-Y H:i')}</b>"  href="{$this->url([action => 'book-now', date => $hour.hour->format('Y-m-d H:i:s')])}" data-targetmodal="#mainModal">
						&nbsp;
					</a></td>
			{/if}
		{/if}

		{if $hour.hour->format('H') eq 0}
		</tr>
		{/if}
	{/foreach}

	</table>