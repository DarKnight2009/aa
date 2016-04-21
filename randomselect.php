<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	
	
</head>
<body>
	<?php
		$con=mysql_connect("lrahalbdqmxq.rds.sae.sina.com.cn:10106","xuan","xuan95shi02yu04");
		mysql_select_db("qiangpiao",$con);
		$sql1="Select * From qiang Order By Rand() Limit 10";//从表中任取10条记录
		mysql_query($sql1);
		mysql_close($con);
		
	?>

</body>
</html>
