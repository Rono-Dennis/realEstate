<?php
//session_start();
$host="localhost";
$user="root";
$pass="";
$dbname="southdb";
//create connection
$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn){ die("connection failed".mysqli_connect_error());
}
//get post date
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$location=$_POST['location'];
//insert statement
$sql="insert into southuserreg(firstname,lastname,email,username,password,location) VALUES('$firstname','$lastname','$email','$username','$password','$location')";
$message='';
if (mysqli_query($conn,$sql)){
	$message='Your details have been saved successfully!';
	//$_SESSION['email']=$email;
	//$_SESSION['registed']=true;
	//$_SESSION['name']=$fname;
}
else{
	$message='Error:'.mysqli_error($conn);
}
$resp=array('message'=>$message);
echo json_encode($resp);?>