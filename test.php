<!DOCTYPE html>
<html>
<body>

<?php 
$con=mysql_connect("lrahalbdqmxq.rds.sae.sina.com.cn:10106","xuan","xuan95shi02yu04");
mysql_select_db("qiangpiao",$con);
$sql="INSERT INTO qiang (name,IDinput,phonenumber)
VALUES
('$_POST[name]','$_POST[IDinput]','$_POST[phonenumber]')";
mysql_query($sql,$con);
mysql_close($con);
echo "$_POST[name]";
echo "$_POST[IDinput]";
echo "$_POST[phonenumber]";
?> 

</body>
</html>