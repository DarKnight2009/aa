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
		$sql="DELETE FROM qiang WHERE IDinput=q";
		mysql_query($sql);
		mysql_close($con);
		
	?>
</body>
</html>