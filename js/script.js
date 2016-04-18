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
function settime(){
	window.setInterval(xmlreq,1000);
}
window.onload=settime;