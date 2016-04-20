<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">	
	<link rel="stylesheet" href="dist/style/weui.css">
	<script src="js/script1.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	<?php
		$con=mysql_connect("lrahalbdqmxq.rds.sae.sina.com.cn:10106","xuan","xuan95shi02yu04");
		mysql_select_db("qiangpiao",$con);
		$sql1="SELECT * FROM qiang WHERE IDinput='$_POST[IDinput]'";
		$result=mysql_fetch_array(mysql_query($sql1));
		if(mysql_num_rows(mysql_query($sql1))&&$result[isok]=='1')
		{
			echo "<p id='p'>".$result[name]."</p><p id='input'>".$result[IDinput]."</p><p>".$result[phonenumber]."</p>";
			
		}
		else 
		{
			echo "查无此人请确认";
		}
		mysql_close($con);

		
	?>
	<input type="button" name="ling" value="领票" class="weui_btn weui_btn_primary" id="ling" >
	
	<a href="lingpiao.php" class="weui_btn weui_btn_primary">取消</a>

</body>
</html>
