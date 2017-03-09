<?php include("checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
function MM_jumpMenu(selObj,restore){ //v3.0
  eval("parent.location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<body>
<h2>导师信息修改</h2>
<?php
	require_once '../inc/condata.php';
	
?>
<table width="760" border="1"  cellpadding="3" cellspacing="0">
                    <tr>
                   
                      <td width="167"  class="aa"><div align="center"><span >通信与信息系统</span></div></td>
                      <td width="590" colspan="-2"  class="aa"><span >
                        <?php 
				$query=mysql_query("select * from `yjs_ds` where xkzy=1 ");
				while($r11=mysql_fetch_array($query)) {
				echo "<a href=dsgai.php?id=";
				echo $r11[autoid];
				echo ">";
				echo $r11[name];
				echo "</a>";
				echo "&nbsp;";
}
				 ?>
                      </span></td>
                    </tr>
                    <tr>
                      <td valign="middle"><div align="center"><span >信号与信息处理</span></div></td>
                      <td colspan="-2" valign="top" ><?php 
				$query=mysql_query("select * from `yjs_ds` where xkzy=2 ");
				while($r12=mysql_fetch_array($query)) {
				echo "<a href=dsgai.php?id=";
				echo $r12[autoid];
				echo ">";
				echo $r12[name];
				echo "</a>";
				echo "&nbsp;";
}
				 ?>
                      </td>
                    </tr>
                    <tr>
                      <td valign="middle" ><div align="center"><span >控制理论与控制工程</span></div></td>
                      <td colspan="-2" valign="top" ><?php 
				$query=mysql_query("select * from `yjs_ds` where xkzy=3");
				while($r13=mysql_fetch_array($query)) {
				echo "<a href=dsgai.php?id=";
				echo $r13[autoid];
				echo ">";
				echo $r13[name];
				echo "</a>";
				echo "&nbsp;";
}
				 ?>
                      </td>
                    </tr>
                    <tr>
                      <td valign="middle"><div align="center"><span >系统工程</span></div></td>
                      <td colspan="-2" valign="top"><?php 
				$query=mysql_query("select * from `yjs_ds` where xkzy=4");
				while($r14=mysql_fetch_array($query)) {
				echo "<a href=dsgai.php?id=";
				echo $r14[autoid];
				echo ">";
				echo $r14[name];
				echo "</a>";
				echo "&nbsp;";
}
				 ?></td>
                    </tr>
                    <tr>
                      <td align="center" valign="middle" ><div align="center"><span >模式识别</span></div></td>
                      <td colspan="-2" valign="top" ><?php 
				$query=mysql_query("select * from `yjs_ds` where xkzy=5");
				while($r15=mysql_fetch_array($query)) {
				echo "<a href=dsgai.php?id=";
				echo $r15[autoid];
				echo ">";
				echo $r15[name];
				echo "</a>";
				echo "&nbsp;";
}
				 ?></td>
                    </tr>
                   
                   
 </table>
      

             
</body>
</html>
