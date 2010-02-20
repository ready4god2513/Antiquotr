<table>
	<tr>
		<th>Quote</th>
		<th>Approve</th>
		<th>Delete</th>
	</tr>
	<?php foreach($quotes as $quote) { ?>
		<tr>
			<td><?=$quote->quote?></td>
			<td><?=html::anchor('admin/activate_quote/' . $quote->id, 'Approve Quote')?></td>
			<td><?=html::anchor('admin/destroy_quote/' . $quote->id, 'Delete Quote')?></td>
		</tr>
	<?php } ?>
</table>