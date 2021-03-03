<?php
if (isset($_POST['submit'])) {
	$date = new DateTime();

	unset($_POST['submit']);
	$_POST['messageDate'] = $date->format('Y-m-d');

	$message->save($_POST);
	header('Location:listmessages');
}

$title = 'Message Add';
$content = loadTemplate('../templates/message_add_template.php', ['person' => $person]);