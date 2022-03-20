<?php
$server="localhost";
$user="root";
$pass="";
$db="southdb";
$conn=mysqli_connect('$server','$user','$pass','$db');
if(!$conn)
{
	die("connection failed".mysqli_connect_error();
}	 #get values from the form
$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql="insert into feedback(name,number,email,message) VALUES('$name','$number','$email','$message')";
$message='';
if(mysqli_query($conn,$sql)){
	$message='success';
}
else{
	$message='error:'.mysqli_error($conn);
}
?>