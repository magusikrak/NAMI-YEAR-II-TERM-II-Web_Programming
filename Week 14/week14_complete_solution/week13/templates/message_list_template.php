<?php
echo '<ul>';
foreach ($stmt as $row) {
	$person = new DatabaseTable('person');
	$userQuery = $person->find('id', $row['userId']);
	$user = $userQuery->fetch();

	$date = new DateTime($row['messageDate']);

	echo '<li>' . $row['messageText'] . ' posted by 
		<strong>' . $user['firstname'] . ' ' . $user['surname'] . '</strong> 
		on <em>' . $date->format('d/m/Y') . '</em>';

}
echo '</ul>';
?>