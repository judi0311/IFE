<?php
@session_start(); 
include("../inc/condata.php");
$sql = "select * from yjs_adpwd where sort=".$_POST["depar"]." and pwd=".$_POST["pwd"]; 
$login=@mysql_query($sql) or die("����:".mysql_error());

$user_array=mysql_fetch_array($login);

if($user_array)
{

session_register("s_username");
$_SESSION["s_username"]=$user_array["pwd"];
 //echo $_SESSION['s_username'];
 if($_POST["depar"]==1) {
              
			  echo "��¼�ɹ���<a href=\"default.php\">�����о����칫�ҹ���ҳ��</a>";
			  echo "<meta http-equiv=\"refresh\" content=\"1;URL=default.php\">";
		         }
else if($_POST["depar"]==2){
			  echo "��¼�ɹ���<a href=\"default.php\">�������ҳ��</a>";
			  echo "<meta http-equiv=\"refresh\" content=\"1;URL=yjsh/default.php\">";
			  }
													 
}
else
{
echo '<script>window.alert("�û�������ȷ���������,��ȷ�Ϻ����룡");</script>';
echo '<script>history.go(-1);</script>';
}
?>