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
	time = "&nbsp;欢迎光临吉林大学物理学院绿色能源研究中心!&nbsp;&nbsp;&nbsp;今天是"+year+"年"+month+"月"+date+"日"+" "+hour+":"+minu+":"+sec+" "+week+"&nbsp;";
	document.getElementById("clock").innerHTML="["+time+"]";
	var timer = setTimeout("clockon()",200);            
}

var nowspace = 0;

function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      oldonload();
      func();
    }
  }
}

function slideMouse(imgname,imgpath) {
	var banner_title = document.getElementById("banner_title");
	var imgurl = document.getElementById("imgurl");
	for(var im=0; im<imgname.length; im++) {
		imgname[im] = imgpath + imgname[im];
	}
	var links = banner_title.getElementsByTagName("a");
	for(var i=0; i<links.length; i++) {
		links[i].name = i;
		links[i].onmouseover = function() {
			clearClassName();
			this.className = "slidenow";
			imgurl.href = this.href;
			imgurl.firstChild.src = imgname[this.name];
		}
	}
}

function clearClassName() {
	var banner_title = document.getElementById("banner_title");
	var links = banner_title.getElementsByTagName("a");
	for(var j=0; j<links.length; j++) {
		links[j].className = "";
	}
}

function slideLoop() {
	var banner_title = document.getElementById("banner_title");
	var imgurl = document.getElementById("imgurl");
	var links = banner_title.getElementsByTagName("a");
	if(nowspace == links.length -1) {
		nowspace = 0;
	} else {
		nowspace += 1;
	}
	clearClassName();
	imgurl.href = links[nowspace].href;
	links[nowspace].className = "slideNow";
	imgurl.firstChild.src = arguments[0][nowspace];
}