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
	 if(form.ratype.value=="0")
	   {
	     alert("��ѡ�����");
		 //form.ratype.select();  
		 return(false);
	   }
	
	  if(form.raname.value=="")
	   {
	     alert("��������Ŀ!");
		 form.raname.select();
		 return(false);
	   }
	   
     if(form.rastext.value=="")
	   {
	     alert("����������");
		 form.rastext.select();
		 return(false);
	   }
	   return(true);
	}
    </script>
	<table width="760" border="0" cellpadding="0" cellspacing="1">
	
     <form name="form1" enctype="multipart/form-data" method="post" action="ra_save.php" onSubmit="return chkinput(this)">
	 
	  <tr>
        <td width="87" ><div align="center">���</div></td>
        <td width="670" ><select name="ratype" id="ratype" >
        <option selected="selected"  value="0">-- ��ѡ�� --</option>
          <option value="1">���������������о�����������</option>
          <option value="2">��Ч���̫���ܵ�ص��Ʊ���������Ӧ���з�</option>
          <option value="3">���������������о�����������</option>
          <option value="4">���͹���ȼ�ϵ�ص�������з�</option>
		  <option value="5">����</option>
      </select>  
        *��ѡ��˴�</td>
      </tr>
      <tr>
        <td ><div align="center">����ʱ�䣺</div></td>
        <td >
          <input name="ratime" type="text" id="ratime" value="<?php echo date("Y-m-d"); ?>" size="18">        </td>
      </tr>
      <tr>
        <td ><div align="center">��Ŀ��</div></td>
        <td >
        <input name="raname" type="text" id="raname" size="75"></td>
      </tr>
     
      
      <tr>
        <td height="80" ><div align="center">���ݣ�</div></td>
        <td height="80" ><textarea name="rastext" cols="70" rows="10" id="textarea"><?php echo $rows['rastext']; ?></textarea></td>
      </tr>
	   <tr>
        <td ><div align="center">����1��</div></td>
        <td >
          <input name="rafj1" type="file" id="rafj1" size="50">                          </td>
      </tr>
	  <tr>
        <td ><div align="center">����2��</div></td>
        <td >
          <input name="rafj2" type="file" id="rafj2" size="50">                         </td>
      </tr>
	  <tr>
        <td ><div align="center">����3��</div></td>
        <td >
          <input name="rafj3" type="file" id="rafj3" size="50">                        </td>
      </tr>
	 
	 
	  
      <tr>
        <td colspan="2" ><div align="center"><input type="submit" value="���" class="bt">&nbsp;&nbsp;<input type="reset" value="��д" class="bt"></div></td>
      </tr>
	  </form>
    </table>
</body>
</html>
