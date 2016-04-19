function xmlreq(){
	var xmlhttp;
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","success.php",true);
	xmlhttp.send();
	xmlhttp.onreadystatechange=function()
  	{
  	if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    	document.getElementById("title").innerHTML=xmlhttp.responseText;
    }
  	}
}
function test(){
	var input=document.getElementById("number");
	
	var number=input.value;
	if(number.length==11)
		{
			return true;
		}
	else 
	{
		alert("请输入正确的个人信息");
		return false;
	}
}
function click(){
	var ok=document.getElementById("sure");
	ok.onclick=test;
	ok.touchend=test;
}
function settime(){
	window.setInterval(xmlreq,1000);
}
window.onload=function(){
	xmlreq();
	settime();
	click();
};