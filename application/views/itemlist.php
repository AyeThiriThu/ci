<!DOCTYPE html>
<html>
<head>
	<title>ItemList</title>
</head>
<body>
<h1>Item List</h1>
<table cellpadding="10" cellspacing="0" border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Codeno</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=1; ?>
		<?php foreach($h->result() as $row):	?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $row->name; ?></td>
			<td><?php echo $row->codeno; ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>