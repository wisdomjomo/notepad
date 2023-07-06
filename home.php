<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jomo Online Note</title>
	<link rel="stylesheet" href="style/design.css">
</head>
<body>
	<?php
		include("header.html")
	?>
	<form action="procressnote.php" method="post">
		<label>Title</label> <br> 
		<input type="text" name="title" placeholder="Enter Title" required> <br> <br>
		<h4>Start Your Note</h4> <br>
		<textarea placeholder="Note Content" name="content" required></textarea> <br> <br>
		<button name="create">Create Note</button>
		<a href="viewallnote.php" id="space">View All Note</a>
	</form>
	</body>
</html>