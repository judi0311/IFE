<?php include("checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��̨����</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body  >
<h2>�������</h2>
<script language="javascript">
function chkinput(form)
	{
	 if(form.ntype.value=="0")
	   {
	     alert("��ѡ���������");
		 //form.ntype.select();  
		 return(false);
	   }
	
	  if(form.ntitle.value=="")
	   {
	     alert("������������Ŀ!");
		 form.ntitle.select();
		 return(false);
	   }
	   
     if(form.ntext.value=="")
	   {
	     alert("��������������");
		 form.ntext.select();
		 return(false);
	   }
	   return(true);
	}
    </script>
	<table width="760" border="0" cellpadding="0" cellspacing="1">
	
     <form name="form1" enctype="multipart/form-data" method="post" action="manage1b_save.php" onSubmit="return chkinput(this)">
	 
	  <tr>
        <td width="87" ><div align="center">�������</div></td>
        <td width="670" ><select name="ntype" id="ntype" >
          <option selected="selected"  value="0">-- ��ѡ�� --</option>
          <option value="1">Ҫ��֪ͨ</option>
          <option value="2">����֪ͨ</option>
          <option value="3">��ʦ����</option>
          <option value="4">����˶ʿ</option>
          <option value="5">�γ̰���</option>
          <option value="6">ѧ���</option>
          <option value="7">�Ŷӻ����</option>
          <option value="8">���Ļ����</option>
        </select>  
        *��ѡ��˴�</td>
      </tr>
      <tr>
        <td ><div align="center">����ʱ�䣺</div></td>
        <td >
          <input name="ntime" type="text" id="ntime" value="<?php echo date("Y-m-d"); ?>" size="18">        </td>
      </tr>
      <tr>
        <td ><div align="center">������Ŀ��</div></td>
        <td >
        <input name="ntitle" type="text" id="ntitle" size="75"></td>
      </tr>
     
      
      <tr>
        <td height="80" ><div align="center">�������ݣ�</div></td>
        <td height="80" ><textarea name="ntext" cols="70" rows="10" id="textarea"><?php echo $rows['ntext']; ?></textarea></td>
      </tr>
	 <tr>
        <td ><div align="center">����1��</div></td>
        <td >
          <input name="nfj1" type="file" id="nfj1" size="50">                          </td>
      </tr>
	  <tr>
        <td ><div align="center">����2��</div></td>
        <td >
          <input name="nfj2" type="file" id="nfj2" size="50">                         </td>
      </tr>
	  <tr>
        <td ><div align="center">����3��</div></td>
        <td >
          <input name="nfj3" type="file" id="nfj3" size="50">                        </td>
      </tr>
	  
      <tr>
        <td colspan="2" ><div align="center"><input type="submit" value="���" class="bt">&nbsp;&nbsp;<input type="reset" value="��д" class="bt"></div></td>
      </tr>
	  </form>
    </table>
</body>
</html>
