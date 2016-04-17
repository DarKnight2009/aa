<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>抢票系统</title>
		
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>抢票系统</h1>
	<?php
		$con=mysql_connect("lrahalbdqmxq.rds.sae.sina.com.cn:10106","xuan","xuan95shi02yu04");
		mysql_select_db("qiangpiao",$con);
		$sql1="SELECT * FROM qiang";
		$count1=mysql_num_rows(mysql_query($sql1)); 
		$count1=300-$count1;
		echo "<h2>"."当前剩余票数:".$count1."</h2> ";
		
	?>
	<form action="test.php" method="post" accept-charset="utf-8" class="former">
		
			<label>姓名:</label>
			<br><br>
			<input type="text" name="name"  class="b">
			<br><br>
			<label>证件号:</label><br><br>
			<input type="text" name="IDinput" class="b" placeholder="学生输入学生证号老师输入教师证号"><br><br>
			<label >电话</label>
			<br><br>
			<input type="text" name="phonenumber" class="b">	
			<br><br><br><br>	
		
		<input type="submit" name="ok" value="抢票" class="a" >
	</form>
	
</body>
</html>