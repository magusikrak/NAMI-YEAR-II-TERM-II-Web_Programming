<h2>Manage a Student</h2>

<form action="student" method="POST">

	<input type="hidden" name="student[id]" value="<?php if(isset($student['id'])) echo $student['id'];?>">

	<label>Full Name</label>
	<input type="text" name="student[fullName]" value="<?php if(isset($student['fullName'])) echo $student['fullName'];?>"><br><br>

	<label>Email</label>
	<input type="text" name="student[email]" value="<?php if(isset($student['email'])) echo $student['email'];?>"><br><br>

	<label>Address</label>
	<input type="text" name="student[address]" value="<?php if(isset($student['address'])) echo $student['address'];?>"><br><br>

	<input type="submit" name="save" value="Save">

</form>