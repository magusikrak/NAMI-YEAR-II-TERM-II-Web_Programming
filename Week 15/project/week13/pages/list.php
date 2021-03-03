<?php
require '../templates/delete_user.php';

$title = 'User List Page';

$stmt = $person->findAll();
$content = loadTemplate('../templates/user_table_template.php', ['stmt' => $stmt]);

