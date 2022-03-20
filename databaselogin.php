<?php
$connection=mysqli_connect("localhost","root","");
$db=mysql_select_db("southdb",$connection);
$username=$_POST['username'];
$password=$_POST['password'];
$result=mysql_query("SELECT * FROM southuserreg WHERE username='$username' AND password='$password'");
$data=mysql_num_rows($result);
$message='';
if($data==1){
	//echo"log in successful";
	$message='log in successfull!';
}
 else{
	echo"enter correct username or password";
}
$resp=array('message'=>$message);
echo json_encode($resp);
mysql_close($connection);
?>