<table border="2">
	<tr>
		<th>Firstname</th>
		<th>Surname</th>
		<th>Email</th>
		<th>Birth Date</th>
		<th>Action</th>
	</tr>
	<?php
	foreach ($stmt as $row) {?>
		<tr>
			<td><?php echo $row['firstname'];?></td>
			<td><?php echo $row['surname'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['birthday'];?></td>
			<td>
				<a href="">Edit</a> | 
				<a href="">Delete</a>
			</td>
		</tr>
	<?php }
	?>
</table>