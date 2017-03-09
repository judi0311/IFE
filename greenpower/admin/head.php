
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
	var arr_week = new Array("星期日","星期一","星期二","星期三","星期四","星期五","星期六");
	week = arr_week[day];
	var time = "";
	time = "今天是"+year+"年"+month+"月"+date+"日"+" "+hour+":"+minu+":"+sec+" "+week+"&nbsp;";
	document.getElementById("clock").innerHTML="["+time+"]";
	var timer = setTimeout("clockon()",200);            
}</script>
</HEAD>
<BODY onload=clockon()  id="index"  >

<h3 ><h6 > 物理学院---- </h6> <br />科研与与研究生办公室</h3>
<div id="userInfo">

<div id="clock" >  </div>

</div>

</BODY></HTML>
