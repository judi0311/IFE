<?php include("checkuser.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>后台管理系统</title>
</head>
<frameset rows="80,*" frameborder="no" border="0" framespacing="0">

 <frame src="head.php" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />


<frameset rows="*" cols="100,220,*,100" frameborder="no" border="0" framespacing="0">

<frame src="bian1.html" name="left1Frame" scrolling="auto" noresize="noresize" id="leftFrame" title="leftFrame" />
  <frame src="Left.php" name="leftFrame" scrolling="auto" noresize="noresize" id="leftFrame" title="leftFrame" />
    <frame src="manage1b" name="mainFrame" id="mainFrame" title="mainFrame" />
<frame src="bian2.html" name="left2Frame" scrolling="auto" noresize="noresize" id="leftFrame" title="leftFrame" />
  </frameset>
</frameset>
<noframes>
<body>
<p>你的浏览器不支持框架，请升级你的浏览器</p>
</body>
</noframes>
</html>
