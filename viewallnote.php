<?php
	require_once("configuration.php");
	$data = new configuration();
	$all = $data->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View ALL NOTE</title>
	<link rel="stylesheet" href="style/viewall.css">
</head>
<body>
<?php
		include("header.html")
?>
	<div class="link">
		<a href="home.php">add a new note</a>
	</div>
	<table>
		<tr>
			<th>Title</th>
			<th>Date and Time</th>
			<th>Action</th>
		</tr>
		<?php
			foreach($all as $key=>$dis) {
				?>
		<tr>
		<td><b><?php echo strtoupper($dis['title']); ?></b></td>
		<td><b><?php echo $dis['date']; ?></b></td>
		<td><button id="height"><a id="a" href="delete.php?id=<?=$dis['id']?>&reg=delete">Delete Note</a></button><button id="color"><a id="a" href="editenote.php?id=<?=$dis['id']?>">Edit Note</a></button></td>
		<?php
			}
		?>
		</tr>
	</table>
</body>
</html>