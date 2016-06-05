<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	
	
</head>
<body>
	<?php
		$con=mysql_connect("lrahalbdqmxq.rds.sae.sina.com.cn:10106","xuan","xuan95shi02yu04");
		mysql_select_db("qiangpiao",$con);
		$sql1="SELECT * FROM qiang WHERE isok='1'";
		$count1=mysql_num_rows(mysql_query($sql1)); //获得数据库的表的行数判断当前已发出票数
		$count1=200-$count1;
		echo "剩余票数为："."$count1";
		mysql_close($con);
		
	?>

</body>
</html>


