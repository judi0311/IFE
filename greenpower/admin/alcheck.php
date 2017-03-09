<?php
@session_start(); 
include("../inc/condata.php");
$sql = "select * from yjs_adpwd where sort=".$_POST["depar"]." and pwd=".$_POST["pwd"]; 
$login=@mysql_query($sql) or die("出错:".mysql_error());

$user_array=mysql_fetch_array($login);

if($user_array)
{

session_register("s_username");
$_SESSION["s_username"]=$user_array["pwd"];
 //echo $_SESSION['s_username'];
 if($_POST["depar"]==1) {
              
			  echo "登录成功，<a href=\"default.php\">进入研究生办公室管理页面</a>";
			  echo "<meta http-equiv=\"refresh\" content=\"1;URL=default.php\">";
		         }
else if($_POST["depar"]==2){
			  echo "登录成功，<a href=\"default.php\">进入管理页面</a>";
			  echo "<meta http-equiv=\"refresh\" content=\"1;URL=yjsh/default.php\">";
			  }
													 
}
else
{
echo '<script>window.alert("用户名不正确或密码错误,请确认后输入！");</script>';
echo '<script>history.go(-1);</script>';
}
?>