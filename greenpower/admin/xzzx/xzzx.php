<?php include("../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��̨����</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />
</head>
<body  >
<h2>���</h2>
<script language="javascript">
function chkinput(form)
	{
	 if(form.filetype.value=="0")
	   {
	     alert("��ѡ�����");
		 //form.filetype.select();  
		 return(false);
	   }
	
	  if(form.filename.value=="")
	   {
	     alert("��������Ŀ!");
		 form.filename.select();
		 return(false);
	   }
	   
     if(form.filestext.value=="")
	   {
	     alert("����������");
		 form.filestext.select();
		 return(false);
	   }
	   return(true);
	}
    </script>
	<table width="760" border="0" cellpadding="0" cellspacing="1">
	 <form name="form1" enctype="multipart/form-data" method="post" action="xzzx_save.php" onSubmit="return chkinput(this)">
	 <tr>
        <td width="87" ><div align="center">���</div></td>
        <td width="670" ><select name="filetype" id="filetype" >
         <option selected="selected"  value="0">-- ��ѡ�� --</option>
		  <option value="1">������վ</option>
          <option value="2">������վ</option>
          <option value="3">֪���ڿ���վ</option>
          <option value="4">֪��������</option>
        </select>  
        *��ѡ��˴�</td>
      </tr>
      <tr>
        <td ><div align="center">����ʱ�䣺</div></td>
        <td >
          <input name="filetime" type="text" id="filetime" value="<?php echo date("Y-m-d"); ?>" size="18">        </td>
      </tr>
      <tr>
        <td ><div align="center">��Ŀ��</div></td>
        <td >
        <input name="filename" type="text" id="filename" size="75"></td>
      </tr>
     
      
      <tr>
        <td height="80" ><div align="center">���ݣ�</div></td>
        <td height="80" ><textarea name="filestext" cols="70" rows="10" id="textarea"><?php echo $rows['filestext']; ?></textarea></td>
      </tr>
	  <tr>
        <td ><div align="center">����1��</div></td>
        <td >
          <input name="filefj1" type="file" id="filefj1" size="50">                          </td>
      </tr>
	  <tr>
        <td ><div align="center">����2��</div></td>
        <td >
          <input name="filefj2" type="file" id="filefj2" size="50">                         </td>
      </tr>
	  <tr>
        <td ><div align="center">����3��</div></td>
        <td >
          <input name="filefj3" type="file" id="filefj3" size="50">                        </td>
      </tr>
	 
	  
      <tr>
        <td colspan="2" ><div align="center"><input type="submit" value="���" class="bt">&nbsp;&nbsp;<input type="reset" value="��д" class="bt"></div></td>
      </tr>
	  </form>
    </table>
</body>
</html>
