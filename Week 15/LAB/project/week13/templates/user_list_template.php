<?php
echo '<ul>';
foreach ($stmt as $row) {
	echo '<li><a href="add.php?eid=' . $row['id'] . '">' . $row['firstname'] . ' ' . $row['surname'] . '</a> was born on ' . $row['birthday'] .
	 	  ' and their email address is ' . $row['email'] . ' <a href="list.php?did='.$row['id'].'">Delete</a></li>'; 
}
echo '</ul>';