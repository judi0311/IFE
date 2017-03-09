<?php include("checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<h2>修改管理员密码</h2>
<table width="760" height="100" border="0" cellpadding="0" cellspacing="0" >
      
        <tr> 
       
          <td align="center" >
		
		  <?php if($_REQUEST[pwd1] != $_REQUEST[pwd2]){ 
  		            echo "两次输入密码不一致<br><br><a href=\"manage_chpwd.php\">- 返回 - </a>";
		           }else{
				     include("../inc/condata.php");							
				     $sql = "update yjs_adpwd set pwd='$_POST[pwd1]'where sort='1'";
				 	 mysql_query($sql,$db);
					 mysql_close($db);
					
               echo " 管理员密码修改成功,请牢记!";
					 session_unregister("adminlogin");
					}
		   ?>
            </td>
        
        </tr>
        
      </table></div>

             
</body>
</html>
