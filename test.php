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
$sql2="SELECT * FROM qiang WHERE phonenumber='$_POST[phonenumber]'";
$sql3="SELECT * FROM qiang WHERE IDinput='$_POST[IDinput]'";
if(mysql_num_rows(mysql_query($sql2))&&mysql_num_rows(mysql_query($sql3)))
{
	echo "<h1>请勿使用相同手机号或学生证号抢票!</h1>";
}
else
{
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
}	
mysql_close($con);



?>


</body>
</html>