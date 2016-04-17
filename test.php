<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>抢票成功</title>
		
	
</head>
<body>

<?php 
$con=mysql_connect("lrahalbdqmxq.rds.sae.sina.com.cn:10106","xuan","xuan95shi02yu04");
mysql_select_db("qiangpiao",$con);
$sql1="SELECT * FROM qiang";
$count=mysql_num_rows(mysql_query($sql1));
if($count<100)
{
	$sql="INSERT INTO qiang (name,IDinput,phonenumber)
	VALUES
	('$_POST[name]','$_POST[IDinput]','$_POST[phonenumber]')";
	mysql_query($sql,$con);
	echo "<h1>抢票成功！！！</h1>";
}
else
{
	echo "<h1>亲，你晚了一步票已经抢完了!</h1>";
}
mysql_close($con);
echo "$count";


?>


</body>
</html>