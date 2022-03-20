<?php
$host='localhost';
$user='root';
$pass='';
$dbname='southdb';
$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn){
	echo 'connection error!'.mysqli_connect_error();

}
?>
