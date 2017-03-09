<?php include("checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
<h2>新闻删除</h2>
<table width="760" border="0"  cellpadding="0" cellspacing="0">
 
              <tr>
                <td> 
                  <?php
					  include("../inc/condata.php");
					  for($i=0;$i<20;$i++){
					      $infdel = "infdel".$i;
					      if($_POST[$infdel] != ""){
					  	     $sql = "delete from yjs_news where autoid='".$_POST[$infdel]."'";
						     mysql_query($sql,$db);
						  }
						  }
					  mysql_close($db);
				  ?>
                  <table width="500" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td align="center" valign="bottom"> <table width="200" height="20" border="0" cellpadding="0" cellspacing="0" bgcolor="#7FBF00">
                          <tr> 
                            <td align="center"><span class="font2">信息成功删除</span></td>
                          </tr>
                        </table>
                        
      <input name="Submit" type="button" class="bt" value="返回" onClick="history.go(-1);"/>
   </td>
                    </tr>
                  </table>
                </td>
              </tr>
          </table>
</body>
</html>
