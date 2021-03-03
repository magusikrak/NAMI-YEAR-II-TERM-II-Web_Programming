<?php
	require '../db/connect.php';
	require '../functions/load_template.php';
	require '../classes/databasetable.php'; // include database table class

	if(isset($_GET['msg'])){ //  display the message
		echo $_GET['msg'];
	}

	if(isset($_GET['page'])){
		require '../pages/' . $_GET['page'] . '.php';
	}
	else{
		require '../pages/home.php';
	}

	$tempVars = [
		'title' => $title,
		'content' => $content
	];
	echo loadTemplate('../templates/layout.php', $tempVars);
?>