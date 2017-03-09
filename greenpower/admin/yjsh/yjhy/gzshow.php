<?php include("../../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<h2>工作人员信息修改</h2>
<?php
	require_once '../../../inc/condata.php';
	
?>
<table width="760" border="1"  cellpadding="3" cellspacing="0">
                    <tr>
                   
                      <td width="167" bgcolor="C3C5DA" class="aa"><div align="center">工作人员</div></td>
                      <td width="590" colspan="-2" bgcolor="C3C5DA" class="aa"><span class="STYLE19">
                        <?php 
				$query=mysql_query("select * from `yjs_yjsh` ");
				while($r11=mysql_fetch_array($query)) {
				echo "<a href=gzgai.php?id=";
				echo $r11[autoid];
				echo ">";
				echo $r11[name];
				echo "</a>";
				echo "&nbsp;";
}
				 ?>
                      </span></td>
                    </tr>            
                   </table>
 
             
</body>
</html>
