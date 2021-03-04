<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<header>
		<div class="logo">this is logo block</div>
		<div class="contact">this is contact block</div>
	</header>
	<section>
		<div class="leftbar">
			<ul>
				<li><a href="home">Homepage</a></li>
				<li><a href="list">List Users</a></li>
				<li><a href="addmessage">Add Message</a></li>
				<li><a href="listmessages">List Messages</a></li>
				<li><a href="student">Add a Student</a></li>
				<li><a href="studentlist">Student List</a></li>
			</ul>
		</div>
		<div class="mainbar">
			<?php echo $content;?>
		</div>
		<div class="rightbar">This is right bar</div>
	</section>
	<footer>
		This is footer
	</footer>
</body>
</html>