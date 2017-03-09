<?php include("../checkuser.php"); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>后台管理系统</title>
</head>
<frameset rows="80,*" frameborder="no" border="0" framespacing="0">

 <frame src="head.php" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />


<frameset rows="*" cols="10,220,*" frameborder="no" border="0" framespacing="0">

<frame src="bian1.html" name="left1Frame" scrolling="auto" noresize="noresize" id="left1Frame" title="left1Frame" />
  <frame src="left.php" name="leftFrame" scrolling="auto" noresize="noresize" id="leftFrame" title="leftFrame" />
    <frame src="manage1b.php" name="mainFrame" id="mainFrame" title="mainFrame" />

  </frameset>
</frameset>
<noframes>
<body>
<p>你的浏览器不支持框架，请升级你的浏览器</p>
</body>
</noframes>
</html>
