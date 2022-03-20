<!DOCTYPE html>
<html>
<head>
	<title>image upload</title>
</head>
<body>
	<form action="#"method="post"enctype="multipart/form-data">
		<input type="file" name="img"/>
		<input type="submit" name="submit"/>
		</form>
		<?php
		mysql_connect("localhost","root","");
		mysql_select_db("southdb");
		if (isset($_POST['submit'])) {
			$filename=addslashes($_FILES["img"]["name"]);
			$tmpname=addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
			$filetype=addslashes($_FILES["img"]["type"]);
			$array=array('jpg','jpeg','png');
			$ext=pathinfo($filename,PATHINFO_EXTENSION);
			if (!empty($filename)) {
				if(in_array($ext,$array)){
					mysql_query("INSERT into image(name,image) values('$filename','$tmpname')");


				}
				else{
					echo "unsupported file format";

				}
				# code...
			}else{
				echo "please select image";

			}

			# code...
		}
		

		?>

</body>
</html>