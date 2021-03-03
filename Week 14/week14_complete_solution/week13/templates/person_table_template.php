<?php
echo '<table border="2">';
	echo '<tr>';
		echo '<th>Firstname</th>';
		echo '<th>Surname</th>';
		echo '<th>BirthDate</th>';
		echo '<th>Email</th>';
		echo '<th>Action</th>';
	echo '</tr>'; 
	foreach ($stmt as $row) {
		echo '<tr>';
			echo '<td>'.$row['firstname'].'</td>'; 
			echo '<td>'.$row['surname'].'</td>'; 
			echo '<td>'.$row['birthday'].'</td>'; 
			echo '<td>'.$row['email'].'</td>';
			echo '<td>
				<a href="index.php?page=person&eid='.$row['id'].'">Edit</a> | 
				<a href="list.php?did='.$row['id'].'">Delete</a>
			</td>'; 
		echo '</tr>';
	}
echo '</table>';
?>