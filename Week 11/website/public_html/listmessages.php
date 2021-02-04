<?php
$server = '127.0.0.1';
$username = 'root';
$password = '';

//The name of the schema we created earlier in MySQL workbench
$schema = 'messages_demo';


$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


$stmt = $pdo->prepare('SELECT * FROM message');

$userQuery = $pdo->prepare('SELECT * FROM person WHERE id = :id');

$stmt->execute();

echo '<ul>';
foreach ($stmt as $row) {
	$criteria = [
		'id' => $row['userId']
	];

	$userQuery->execute($criteria);

	$user = $userQuery->fetch();

	$date = new DateTime($row['messageDate']);

	echo '<li>' . $row['messageText'] . ' posted by 
		<strong>' . $user['firstname'] . ' ' . $user['surname'] . '</strong> 
		on <em>' . $date->format('d/m/Y') . '</em>';

}
echo '</ul>';

echo '<a href="addmessage.php">Add a new message</a>';
?>
