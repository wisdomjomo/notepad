<!DOCTYPE html>
<?php
require_once("configuration.php");
$data = new configuration();
$id = $_GET['id'];
$data->setid($id);

if(isset($_POST['update'])){
	$data->settitle($_POST['title']);
	$data->setcontent($_POST['content']);

	echo $data->update();
	echo "<script>alert('Your Note has been updated successfully');document.location='viewallnote.php'</script>";
}
$record = $data->fetchOne();
$dis = $record[0];
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style/design.css">
	<title>Edit/Update Your Note</title>
</head>
<body>
<?php
	include("header.html")
?>
	<form action="" method="post">
		<label>Update Title</label> <br>
		<input type="text" name="title" value="<?php echo $dis['title'];?>">
		<br> <br>
		<h4>Update Your Note</h4> <br>
		<textarea name="content" value=""><?php echo $dis['content'];?></textarea>
		<br> <br>
		<button name="update">Update Note</button>
	</form>
</body>
</html>