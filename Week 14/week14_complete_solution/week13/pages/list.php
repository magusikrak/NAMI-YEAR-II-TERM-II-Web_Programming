<?php
$person = new DatabaseTable('person'); // create person object

$stmt = $person->findAll();
$title = 'Person List Page';
$content = loadTemplate('../templates/person_table_template.php', ['stmt'=>$stmt]);