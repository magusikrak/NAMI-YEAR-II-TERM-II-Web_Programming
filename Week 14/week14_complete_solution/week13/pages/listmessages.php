<?php
require '../pages/data_message.php';

$title = 'Message List Page';
$content = loadTemplate('../templates/message_table_template.php', ['stmt'=>$stmt]);
?>
