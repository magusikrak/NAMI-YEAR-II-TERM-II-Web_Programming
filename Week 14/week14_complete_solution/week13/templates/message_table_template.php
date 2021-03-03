<?php
echo '<table border="2">';
	echo '<tr>';
		echo '<th>Message Text</th>';
		echo '<th>Sender</th>';
		echo '<th>Sent Date</th>';
		echo '<th>Action</th>';
	echo '</tr>'; 
	foreach ($stmt as $row) {
		$person = new DatabaseTable('person');
		$userQuery = $person->find('id', $row['userId']);
		$user = $userQuery->fetch();
		$date = new DateTime($row['messageDate']);
		echo '<tr>';
			echo '<td>'.$row['messageText'].'</td>'; 
			echo '<td>'.$user['firstname']. ' ' . $user['surname'] . '</td>'; 
			echo '<td>'.$date->format('d/m/Y').'</td>'; 
			echo '<td>
				<a href="messageedit.php?eid='.$row['id'].'">Edit</a> | 
				<a href="listmessages.php?did='.$row['id'].'">Delete</a>
			</td>'; 
		echo '</tr>';
	}
echo '</table>';