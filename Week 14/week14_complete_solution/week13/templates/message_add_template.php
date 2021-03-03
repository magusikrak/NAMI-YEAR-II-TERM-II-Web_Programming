<form action="index.php?page=addmessage"? method="POST">

	<label>Select user</label>
	<select name="userId">
		<?php
			$stmt = $person->findAll();

			foreach ($stmt as $row) {
				echo '<option value="' . $row['id'] . '">' . $row['firstname'] . ' ' . $row['surname'] . '</option>';
			}
		?>
	</select>

	<label>Message</label>
	<textarea name="messageText"></textarea>

	<input type="submit" name="submit" value="add message" />
</form>