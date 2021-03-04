<?php
// delete a person
if(isset($_GET['did'])){
	$person->delete('id', $_GET['did']);
	echo 'Person Deleted';
}