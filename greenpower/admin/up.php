<?php include("checkuser.php"); 
?>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��̨����</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body >
 <form action="upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1"> 
<h2 >��ҳͼƬ�ϴ�</h2>

  <table width="760" border="1" cellpadding="0" cellspacing="0" align="left">
 
    <tr>
      <td width="119">�ϴ�ͼƬ��</td>
      <td width="635"><input type="file" size="26" name="imgUrl" /></td>
    </tr>
    <tr>
      <td width="119" > �ļ�������</td>
      <td><input type="text" size="26"  name="imgText" /></td>
    </tr>
    <tr>
      <td  width="119">�ļ����ӣ�</td>
      <td><input type="text" size="26" name="imgLink" /> <span class="zhuyi"> *�������Ļ��������ӵ�ַ </span></td>
    </tr>
    <tr>
      <td colspan="2">
             <div align="center">
              <input type="submit" name="Submit" class="bt" value="�ύ" />
            
             <input type="reset" name="Submit2" class="bt" value="����" />
         </div>    
      </td>
    </tr>
  </table>
</form>
 
</body>
</html>
