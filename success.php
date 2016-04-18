<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	
	
</head>
<body>
	<?php
		$con=mysql_connect("lrahalbdqmxq.rds.sae.sina.com.cn:10106","xuan","xuan95shi02yu04");
		mysql_select_db("qiangpiao",$con);
		$sql1="SELECT * FROM qiang";
		$count1=mysql_num_rows(mysql_query($sql1)); 
		$count1=300-$count1;
		echo "<h2>剩余票数为："."$count1"."</h2>";
		mysql_close($con);
		
	?>

</body>
</html>


