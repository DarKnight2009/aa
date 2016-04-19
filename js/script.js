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
	var input=document.getElementsByTagName("input");
	var ID=input[1].value;
	var number=input[2].value;
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
}
function settime(){
	window.setInterval(xmlreq,1000);
}
window.onload=function(){
	xmlreq();
	settime();
	click();
};