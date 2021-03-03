<?php
require 'connect.php'; //database connection code
require 'classes/databasetable.php';
$person = new DatabaseTable('person');

if (isset($_GET['eid'])) {
	$stmt = $person->find('id', $_GET['eid']);
	$row = $stmt->fetch();
	$personsBirthday = new DateTime($row['birthday']);
}

//If the fomr has been submitted
if (isset($_POST['submit'])) {
	$critera = $_POST;
	$critera['birthday'] = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
	unset($critera['day']);
	unset($critera['month']);
	unset($critera['year']);
	unset($critera['submit']);
	
	// echo '<pre>';
	// print_r($critera); die();
	// if(isset($critera['id'])) $pk = 'id';
	// else $pk = '';
	$person->save($critera, 'id');	

	echo '<p>Person Saved Successfully</p>';
}
//The form was not submitted, display the form
else {
?>

	<form action="add.php" method="POST">
		<input type="hidden" name="id" value="<?php if(isset($_GET['eid'])) echo $row['id']; ?>" />
		<label>First name:</label>
		<input type="text" name="firstname" value="<?php if(isset($_GET['eid'])) echo $row['firstname']; ?>"/>

		<label>Surname:</label>
		<input type="text" name="surname" value="<?php if(isset($_GET['eid'])) echo $row['surname']; ?>" />

		<label>Email:</label>
		<input type="text" name="email" value="<?php if(isset($_GET['eid'])) echo $row['email']; ?>" />

		<label>Birthday:</label>
		<select name="day">
		<?php
			for ($i = 1; $i < 32; $i++) {
				if(isset($_GET['eid']) && $personsBirthday->format('d') == $i) {
					echo '<option selected="selected" value="' . $i . '">' . $i  . '</option>';
				}
				else {
					echo '<option value="' . $i . '">' . $i  . '</option>';
				}			
			}
		?>
		</select>

		
		<select name="month">
		<?php
			$months = ['', 'January', 'Feburary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
			for ($i = 1; $i < 13; $i++) {
				if(isset($_GET['eid']) && $personsBirthday->format('m') == $i) {
					$selected = 'selected="selected"';
				}
				else {
					$selected = '';
				}

				if ($i < 10) {
					echo '<option ' . $selected . ' value="0' . $i . '">' . $months[$i]  . '</option>';	
				}
				else {
					echo '<option ' . $selected  . ' value="' . $i . '">' . $months[$i]  . '</option>';
				}			
			}
		?>
		</select>

		<select name="year">
		<?php
			for ($i = 1900; $i < 2016; $i++) {
				if (isset($_GET['eid']) && $personsBirthday->format('Y') == $i) {
					echo '<option selected="selected" value="' . $i . '">' . $i  . '</option>';
				}
				else {
					echo '<option value="' . $i . '">' . $i  . '</option>';

				}
			}
		?>
		</select>

		<input type="submit" value="Add" name="submit" />


	</form>

<?php
}
?>
