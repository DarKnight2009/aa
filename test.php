<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>抢票成功</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">	
	<link rel="stylesheet" href="dist/style/weui.css">
</head>
<body>

<?php 
$con=mysql_connect("lrahalbdqmxq.rds.sae.sina.com.cn:10106","xuan","xuan95shi02yu04");
mysql_select_db("qiangpiao",$con);
$sql1="SELECT * FROM qiang";
$count=mysql_num_rows(mysql_query($sql1));
$sql2="SELECT * FROM qiang WHERE phonenumber='$_POST[phonenumber]'";
$sql3="SELECT * FROM qiang WHERE IDinput='$_POST[IDinput]'";
if(mysql_num_rows(mysql_query($sql2))||mysql_num_rows(mysql_query($sql3)))//判断是否重复决定是否写入数据库
{
	echo "<div class='page'>".
    		"<div class='weui_msg'>".
        	"<div class='weui_icon_area'>"."<i class='weui_icon_warn weui_icon_msg'></i></div>".
        	"<div class='weui_text_area'>".
            "<h2 class='weui_msg_title'>抢票失败</h2>".
            "<p class='weui_msg_desc'>一个人只能抢一张票哟！</p>
        </div>";
}
else
{
	if($count<100)//设置抢票人数
	{
		$sql="INSERT INTO qiang (name,IDinput,phonenumber,major,isok)
		VALUES
		('$_POST[name]','$_POST[IDinput]','$_POST[phonenumber]','$_POST[major]','1')";
		mysql_query($sql,$con);
		echo 
		"<div class='page'>".
    		"<div class='weui_msg'>".
        	"<div class='weui_icon_area'>"."<i class='weui_icon_success weui_icon_msg'></i></div>".
        	"<div class='weui_text_area'>".
            "<h2 class='weui_msg_title'>抢票成功</h2>".
            "<p class='weui_msg_desc'>请于某年某月某日来领票！</p>
        </div>";
	}
	else
	{
		echo "<div class='page'>".
    		"<div class='weui_msg'>".
        	"<div class='weui_icon_area'>"."<i class='weui_icon_warn weui_icon_msg'></i></div>".
        	"<div class='weui_text_area'>".
            "<h2 class='weui_msg_title'>抢票失败</h2>".
            "<p class='weui_msg_desc'>亲，很遗憾票已经抢完！</p>
        </div>";
	}
}	
mysql_close($con);



?>


</body>
</html>