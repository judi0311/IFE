<?php include("checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��̨����</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<h2>�޸Ĺ���Ա����</h2>
<table width="760" height="120" border="0" cellpadding="0" cellspacing="0" >
       
        <tr> 
      
          <td   align="center" >
		  <form name="form1" method="post" action="chpwd_save.php">
              <span >������</span> 
              <input name="pwd1" type="password"  id="pwd1" size="20" maxlength="15">
              <br>
              ��ȷ�� 
              <input name="pwd2" type="password"  id="pwd2" size="20" maxlength="15">
              <br />
             
              <input name="Submit" type="submit" class="bt"  value="�ύ">
              <input name="Submit2" type="reset" class="bt"   value="����">
            </form></td>
       
        </tr>
       
      </table>
             
</body>
</html>
