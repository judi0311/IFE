<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
if($_COOKIE[user_cookie]==null)
{
echo '<script>window.alert("您没有此权限，请向管理员申请！");</script>';
echo '<script>history.go(-1);</script>';
die("Program is denied!");
?>
<body>
</body>
</html>