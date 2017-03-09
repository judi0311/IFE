<?php include("../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />

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
<h2>新闻删除/修改</h2>

			    <form name="form2" method="post" action="lwsj2a.php">
                          <table width="760" border="1" cellspacing="0" cellpadding="5">
                            
                            
                            <tr bgcolor="#00CC66">
                              <td bgcolor="#7F9DB9">查询</td>
                              <td width="670" colspan="8" bgcolor="#7F9DB9" class="STYLE4">作者姓名：
                                <input name="name3" type="text" id="name3"></td>
                            </tr>
                            <tr bgcolor="#00CC66">
                              <td bgcolor="#7F9DB9">&nbsp;</td>
                              <td colspan="8" bgcolor="#7F9DB9" class="STYLE4">论文题目：
                              <input name="timu" type="text" id="timu"></td>
                            </tr>
                            <tr bgcolor="#00CC66">
                              <td bgcolor="#7F9DB9">&nbsp;</td>
                              <td colspan="8" bgcolor="#7F9DB9" class="STYLE4">发表时间：
                              <input name="time3" type="text" id="time3"></td>
                            </tr>
                            <tr bgcolor="#00CC66">
                              <td bgcolor="#7F9DB9">&nbsp;</td>
                              <td colspan="8" bgcolor="#7F9DB9" class="STYLE4">&nbsp;</td>
                            </tr>
                            <tr bgcolor="#00CC66">
                              <td width="64" bgcolor="#7F9DB9">&nbsp;</td>
                              <td colspan="8" bgcolor="#7F9DB9" class="STYLE4"><span class="font2">
                                <input type="submit" name="Submit3" value="确定查找">
                                <input type="reset" name="Submit22" value="重新选择">
                              </span></td>
                            </tr>
                           
                          </table>
                        </form>
             
</body>
</html>
