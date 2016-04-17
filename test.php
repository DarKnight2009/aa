<!DOCTYPE html>
<html>
<body>

<?php 
$con=mysql_connect("lrahalbdqmxq.rds.sae.sina.com.cn 10106","xuan","xuan95shi02yu04");
mysql_select_db("qiangpiao",$con);
$sql="insert into qiang(name.IDinput,phonenumber)
values('$_POST[name]','$_POST[IDinput]',$_POST[phonenumber])";
mysql_query($sql);
mysql_close($con);
?> 

</body>
</html>