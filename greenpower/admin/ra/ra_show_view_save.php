<?php include("../checkuser.php"); 

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��̨����</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<h2> �޸ĳɹ�</h2>
 <?php
  				     include("../../inc/condata.php");
				     $sql = "select * from yjs_ras  where autoid='$_POST[id]'";
				     $result = mysql_query($sql,$db);    
				     if(mysql_num_rows($result) == 0)
					  {
				  ?>
                  <table width="500" height="100" border="0" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td > <table width="150" height="20" border="0" cellpadding="0" cellspacing="0" >
                          <tr> 
                            <td align="center"><span >û�д���Ϣ</span></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table> 
				  <?php }
				  else if($_POST[raname] == ""  )
						
						{
				   ?>
                  <table width="500" height="100" border="0" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td > <table width="150" height="20" border="0" cellpadding="0" cellspacing="0" >
                          <tr> 
                            <td align="center"><span >��Ϣ������</span></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table> 
                  <?php }
				  else 						
				           { $sql = "update yjs_ras  set raname='$_POST[raname]',ratype='$_POST[ratype]', rastext='$_POST[rastext]',ratime='$_POST[ratime]' where autoid='$_POST[id]'";
							mysql_query($sql,$db);
							mysql_close($db);
						
				   ?>
                  
					  <table width="760" height="80" border="0" cellpadding="0" cellspacing="0">
                          <tr> 
                            <td align="center">��Ϣ�޸ĳɹ�</td>
                          </tr>
                        </table>  <?php
				         } 
				   ?>
				   
                
				 
                 
              
</body>
</html>
