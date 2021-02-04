<form action="list.php" method="POST">
	<input type="text" name="search" />
	<select name="field">
		<option value="firstname">First name</option>
		<option value="surname">Surname</option>
		<option value="email">Email address</option>
	</select>
	<input type="submit" value="Search" name="submit" />
</form>
<?php
$server = '127.0.0.1';
$username = 'root';
$password = '';

//The name of the schema we created earlier in MySQL workbench
$schema = 'messages_demo';


$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


if (isset($_POST['search'])) {
	//Prevent SQL injection by only allowing specific values for $_POST['field']
	if ($_POST['field'] == 'firstname' || $_POST['field'] == 'email' || $_POST['field'] == 'surname') {
		$stmt = $pdo->prepare('SELECT * FROM person WHERE ' . $_POST['field'] . ' = :search');	

		$criteria = [
			'search' => $_POST['search']
		];

		$stmt->execute($criteria);
	}	
}
else {
	$stmt = $pdo->prepare('SELECT * from person');
	$stmt->execute();
}


echo '<ul>';
foreach ($stmt as $row) {
	echo '<li><a href="edit.php?person=' . $row['email'] . '">' . $row['firstname'] . ' ' . $row['surname'] . '</a> was born on ' . $row['birthday'] .
	 	  ' and their email address is ' . $row['email'] . '</li>'; 
}


echo '</ul>';


?>
