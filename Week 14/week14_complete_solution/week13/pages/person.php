<?php
$person = new DatabaseTable('person'); // create person object

//If a person to edit is specified, display the form and load the persons's information into it
if (isset($_GET['eid'])) {
	$stmt = $person->find('id', $_GET['eid']);
	$row = $stmt->fetch();
	$personsBirthday = new DateTime($row['birthday']);
}
else{ $row = []; }
if(isset($_POST['submit'])){
	$criteria = [
		'firstname' => $_POST['firstname'],
		'surname' => $_POST['surname'],
		'email' => $_POST['email'],
		'birthday' => $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'],
		'id' => $_POST['id']
	];
	$person->save($criteria, 'id');
	header('Location:index.php?page=list&msg=Record Saved');
}
$title = 'Manage Person';
$content = loadTemplate('../templates/person_template.php', ['row'=>$row]);

?>
