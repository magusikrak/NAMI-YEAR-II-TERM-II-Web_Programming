<?php
echo '<ul>';
foreach ($stmt as $row) {
	echo '<li><a href="person.php?eid=' . $row['id'] . '">' . $row['firstname'] . ' ' . $row['surname'] . '</a> was born on ' . $row['birthday'] .
	 	  ' and their email address is ' . $row['email'] . '</li>'; 
}
echo '</ul>';
?>