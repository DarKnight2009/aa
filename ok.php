<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$q=$_GET['id'];
		$con=mysql_connect("lrahalbdqmxq.rds.sae.sina.com.cn:10106","xuan","xuan95shi02yu04");
		mysql_select_db("qiangpiao",$con);
		$sql="UPDATE qiang SET isok='0' WHERE phonenumber='$q'";
		mysql_query($sql);
		mysql_close($con);
		
	?>
</body>
</html>