
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<script> 
function clockon()
{
	var now = new Date();
	var year = now.getFullYear(); //getFullYear getYear
	var month = now.getMonth();
	var date = now.getDate();
	var day = now.getDay();
	var hour = now.getHours();
	var minu = now.getMinutes();
	var sec = now.getSeconds();
	var week;
	month = month+1;
	if(month<10)month="0"+month;
	if(date<10)date="0"+date;
	if(hour<10)hour="0"+hour;
	if(minu<10)minu="0"+minu;
	if(sec<10)sec="0"+sec;
	var arr_week = new Array("������","����һ","���ڶ�","������","������","������","������");
	week = arr_week[day];
	var time = "";
	time = "������"+year+"��"+month+"��"+date+"��"+" "+hour+":"+minu+":"+sec+" "+week+"&nbsp;";
	document.getElementById("clock").innerHTML="["+time+"]";
	var timer = setTimeout("clockon()",200);            
}</script>
</HEAD>
<BODY onload=clockon()  id="index"  >

<h3 ><h6 > ����ѧԺ---- </h6> <br />���������о����칫��</h3>
<div id="userInfo">

<div id="clock" >  </div>

</div>

</BODY></HTML>
