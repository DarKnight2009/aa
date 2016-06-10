<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<link rel="stylesheet" href="dist/style/weui.css">
	<title>领票</title>
</head>
<body>
	<form action="submit.php" method="post" accept-charset="utf-8">
		
	
	<div class="weui_cells weui_cells_form">
			<div class="weui_cell">
                <div class="weui_cell_hd"><label class="weui_label">手机号码</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="phonenumber" placeholder="请输入手机号码"/>
                </div>
            </div>
    </div>
    <input type="submit" name="select" value="查询"  id="selected" class="weui_btn weui_btn_primary" >
    </form>

</body>
</html>

