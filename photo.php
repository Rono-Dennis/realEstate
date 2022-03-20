<?php
$host="localhost";
$user="root";
$pass="";
$db="southdb";
$conn=mysqli_connect($host,$user,$pass,$db);
$destination=$_FILES['image']['name'];
$filename=$_FILES['image']['tmp_name'];
move_uploaded_file($filename, $destination);
$query="insert into photo(photo) values('$photo')";
$ret=mysqli_query($conn,$query);
?>
