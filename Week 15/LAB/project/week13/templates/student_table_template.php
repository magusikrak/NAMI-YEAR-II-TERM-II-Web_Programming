<table border="2">
	<tr>
		<th>Full Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Action</th>
	</tr>
	<?php
	foreach ($stmt as $row) {?>
		<tr>
			<td><?php echo $row['fullName'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['address'];?></td>
			<td>
				<a href="index.php?page=student&id=<?php echo $row['id'];?>">Edit</a> | 
				<a href="">Delete</a>
			</td>
		</tr>
	<?php }
	?>
</table>