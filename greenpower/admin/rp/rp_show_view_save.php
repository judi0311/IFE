<?php include("../checkuser.php"); 

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<h2> 修改成功</h2>
 <?php
  				     include("../../inc/condata.php");
				     $sql = "select * from yjs_rps  where autoid='$_POST[id]'";
				     $result = mysql_query($sql,$db);    
				     if(mysql_num_rows($result) == 0)
					  {
				  ?>
                  <table width="500" height="100" border="0" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td > <table width="150" height="20" border="0" cellpadding="0" cellspacing="0" >
                          <tr> 
                            <td align="center"><span >没有此信息</span></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table> 
				  <?php }
				  else if($_POST[rpname] == ""  )
						
						{
				   ?>
                  <table width="500" height="100" border="0" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td > <table width="150" height="20" border="0" cellpadding="0" cellspacing="0" >
                          <tr> 
                            <td align="center"><span >信息不完整</span></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table> 
                  <?php }
				  else 						
				           { $sql = "update yjs_rps  set rpname='$_POST[rpname]',rptype='$_POST[rptype]', rpstext='$_POST[rpstext]',rptime='$_POST[rptime]' where autoid='$_POST[id]'";
							mysql_query($sql,$db);
							mysql_close($db);
						
				   ?>
                  
					  <table width="760" height="80" border="0" cellpadding="0" cellspacing="0">
                          <tr> 
                            <td align="center">信息修改成功</td>
                          </tr>
                        </table>  <?php
				         } 
				   ?>
				   
                
				 
                 
              
</body>
</html>
