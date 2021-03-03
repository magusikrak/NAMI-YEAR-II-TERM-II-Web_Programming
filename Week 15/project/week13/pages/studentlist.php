<?php
$student = new DatabaseTable('tbl_student');
$title = 'Student List Page';

$stmt = $student->findAll();
$content = loadTemplate('../templates/student_table_template.php', ['stmt' => $stmt]);
?>