<?php
$title = 'Message List';

$stmt = $message->findAll();
$content = loadTemplate('../templates/message_list_template.php', ['stmt' => $stmt, 'person' => $person]);