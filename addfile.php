<!DOCTYPE html>
<html>
<head>
	<title>Image upload</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="properties.php" method="post" enctype="multipart/form-data">
		<input type="file" name="img">
		<input type="submit" name="submit">
	</form>
	<?php
	$img="";
$host="localhost";
$user="root";
$pass="";
$db="southdb";
$conn=mysqli_connect($host,$user,$pass,$db);
$destination=basename($_FILES["img"]["name"]);
$filename=basename($_FILES["img"]["tmp_name"]);
move_uploaded_file($filename, $destination);
$query="insert into photo(photo) values('$destination')";
$ret=mysqli_query($conn,$query);
?>

</body>
</html>