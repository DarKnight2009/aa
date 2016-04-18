<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<title>抢票系统</title>
		
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="dist/style/weui.css">
	<script src="js/script.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	<h1>抢票系统</h1>
	<h2 id="title"></h2>
	<br><br><br>
	<form action="test.php" method="post" accept-charset="utf-8" >

		
	
    <div class="weui_cells_title">个人信息</div>
        <div class="weui_cells weui_cells_form">
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="weui_label">姓名  </label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text"  placeholder="请输入姓名"  name="name"/>
                </div>
            </div>
          
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="weui_label">证件号  </label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="IDinput" placeholder="学生输入学生证号教职工输入教职工号"/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="weui_label">电话  </label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="phonenumber" placeholder="请输入电话号码"/>
                </div>
            </div>
         </div>
     </div>  
     <input type="button" name="ok" value="抢票"  id="sure" class="weui_btn weui_btn_primary" >
     </form>  
    
</div>
</body>
</html>