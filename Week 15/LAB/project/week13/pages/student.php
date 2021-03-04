<?php
$student = new DatabaseTable('tbl_student');
$title = 'Manage a Student';

if(isset($_POST['save'])){
	$student->save($_POST['student'], 'id');
	header('Location:studentlist');
}
else{
	if(isset($_GET['id'])){
		$student = $student->find('id', $_GET['id']);
		$sData = $student->fetch();
	}
	else{
		$sData = [];
	}
}
$content = loadTemplate('../templates/student_template.php', ['student'=>$sData]);