<?php
@session_start();
//echo $_SESSION['s_username'];
if($_SESSION["s_username"]==null)
{
echo '<script>window.alert("��û�д�Ȩ�ޣ��������Ա���룡");</script>';
echo '<script>history.go(-1);</script>';
die("Program is denied!");
}
?>