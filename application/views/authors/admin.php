<table>
	<tr>
		<th>Author</th>
		<th>Approve</th>
		<th>Delete</th>
	</tr>
	<?php foreach($authors as $author) { ?>
		<tr>
			<td><?=$author->name?></td>
			<td><?=html::anchor('admin/activate_author/' . $author->id, 'Approve Author')?></td>
			<td><?=html::anchor('admin/activate_quote/' . $author->id, 'Delete Author')?></td>
		</tr>
	<?php } ?>
</table>