<?php
require '../db/connect.php'; //database connection code
require '../classes/databasetable.php';
$person = new DatabaseTable('person'); //object of person table
$message = new DatabaseTable('message');

require '../functions/loadtemplate.php';