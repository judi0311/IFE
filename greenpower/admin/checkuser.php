<?php
@session_start();
//echo $_SESSION['s_username'];
if($_SESSION["s_username"]==null)
{
echo '<script>window.alert("您没有此权限，请向管理员申请！");</script>';
echo '<script>history.go(-1);</script>';
die("Program is denied!");
}
?>