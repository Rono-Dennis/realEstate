<?php
#get values from the form
$username=$_POST['username'];
$password=$_POST['password'];
 #to prevent mysql injection
 $username=stripcslashes($username);
 $password=stripcslashes($password);
 $username=mysqli_real_string($username);
 $password=mysqli_real_string($password);
  #connect to database and access from table
 mysqli_connect('localhost','root','');
 mysqli_select_db('southdb');
 #query database for admin
 $result=mysqli_query("select * from southuserreg where username='$username' and password='$password'")
 or die("Failed to query database".mysqli_error());
 $row=mysqli_fetch_array($result);
 if($row['username']==$username && $row['password']==$password)
 {
 	echo "addfile.php".$row['username'];
 }
 else
 {
 	echo "wrong details";
 	echo "admin.php";
 }
