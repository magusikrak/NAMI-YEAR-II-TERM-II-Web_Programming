<?php
$message = new DatabaseTable('message'); // create person object
$person = new DatabaseTable('person');

if (isset($_POST['submit'])) {
	$date = new DateTime();
	unset($_POST['submit']);
	$_POST['messageDate'] = $date->format('Y-m-d');
	$message->save($_POST);
	echo '<p>Message posted</p>';
	echo '<a href="index.php?page=listmessages">Return to message list</a>';
}

$title = 'Add a Message';
$content = loadTemplate('../templates/message_add_template.php', ['person'=>$person]);
?>