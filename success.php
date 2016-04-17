<!DOCTYPE html>
<html>

<body>
	<?php
$con = mysql_connect("lrahalbdqmxq.rs.sae.sina.com.cn:10106","xuan","xuan95shi02yu04");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

// some code
mysql_select_db("qiangpiao",$con);
$sql="INSERT INTO qiang (name,IDinput,phonenumber)
VALUES
('$_POST[name]','$_POST[IDinput]','$_POST[phonenumber]')";
mysql_query($sql);
mysql_close($con);
echo "<h1>大姨妈</h1>";
?>

</body>
</html>


