<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">	
	<link rel="stylesheet" href="dist/style/weui.css">
	
</head>
<body>
	<?php
		$con=mysql_connect("lrahalbdqmxq.rds.sae.sina.com.cn:10106","xuan","xuan95shi02yu04");
		mysql_select_db("qiangpiao",$con);
		$sql1="SELECT * FROM qiang WHERE IDinput='$_POST[IDinput]'";
		$result=mysql_fetch_array(mysql_query($sql1));
		if(mysql_num_rows(mysql_query($sql1)))
		{
			echo "<p id='p'>".$result[name]."<br>".$result[IDinput]."<br>".$result[phonenumber]."</p>";
			$sql2="DELETE FROM qiang WHERE IDinput='$_POST[IDinput]'";
		}
		else
		{
			echo "查无此人请确认";
		}
		mysql_close($con);

		
	?>
	<a href="lingpiao.php" class="weui_btn weui_btn_primary">领票</a>
	<a href="lingpiao.php" class="weui_btn weui_btn_primary">取消</a>

</body>
</html>
