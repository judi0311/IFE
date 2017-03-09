<?php include("../checkuser.php"); 

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<h2> 论文数据验收</h2>
 <?php
  				     include("../../inc/condata.php");
				     $sql = "select * from yjs_lwsj  where autoid='$_POST[id]'";
				     $result = mysql_query($sql,$db);    
				     if(mysql_num_rows($result) == 0)
					  {
				  ?>
                  <table width=100% height="100" border="0" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td > <table width="150" height="20" border="0" cellpadding="0" cellspacing="0" >
                          <tr> 
                            <td align="center"><span >没有此信息</span></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table> 
				
				  
                  <?php }
				  else 						
				           { 
					
						 
						   
						   $sql = "update yjs_lwsj set tijiao=1, zzxm1='$_POST[zzxm1]',zzxm2='$_POST[zzxm2]',zzxm3='$_POST[zzxm3]',zzxm4='$_POST[zzxm4]', sf1='$_POST[sf1]', sf2='$_POST[sf2]', sf3='$_POST[sf3]', sf4='$_POST[sf4]',lwtm='$_POST[lwtm]', qkmc='$_POST[qkmc]',jslx='$_POST[jslx]',beiz='$_POST[beiz]'  where autoid='$_POST[id]'";
							mysql_query($sql,$db);
							mysql_close($db);
						
				   ?>
                  
					  <table width=100% height="80" border="0" cellpadding="0" cellspacing="0">
                          <tr> 
                            <td align="center">信息修改成功</td>
                          </tr>
                        </table>  <?php
				         } 
				   ?>
				   
                
				 
                 
              
</body>
</html>
