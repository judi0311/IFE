<?php include("checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>ѧ�ƽ�����վ����</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <h2>�޸�����</h2>
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
	<form name="form" enctype="multipart/form-data" method="post" action="manage1a_view_save.php"  onSubmit="return chkinput(this)">
	
	
	
   
     
	  <?php
  				     include("../inc/condata.php");
				     $sql = "select * from yjs_news where autoid='$_GET[id]'";
				     $result = mysql_query($sql,$db);    
				     if(mysql_num_rows($result) == 0) {
				  ?>
				   <table width="500" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td align="center" ><table width="150" height="20" border="0" cellpadding="0" cellspacing="0" bgcolor="#0C6AC4">
                        <tr>
                          <td align="center">û�д���Ϣ</td>
                        </tr>
                      </table></td>
                    </tr>
                  </table> 
				  <?php }else{
				        $rows = mysql_fetch_array($result);
				   ?>
		 <table width="760" border="1" cellpadding="0" cellspacing="0">
		
	  <tr>
        <td width="96"  ><div align="center">ʱ�䣺</div></td>
        <td width="658" ><div align="left"><select name="ntype"  >
			<option selected="selected"  value="0">-- ��ѡ�� --</option> 
                <option value="1">Ҫ��֪ͨ</option>
		  <option value="2">����֪ͨ</option>
          <option value="3">��ʦ����</option>
          <option value="4">����˶ʿ</option>
          <option value="5">�γ̰���</option>
          <option value="6">ѧ���</option>
          <option value="7">�Ŷӻ����</option>
          <option value="8">���Ļ����</option>
      </select> *��ѡ��˴�  
        </div></td>
      </tr>
      <tr>
        <td  ><div align="center">����ʱ�䣺</div></td>
        <td  ><div align="left">
          <input name="ntime" type="text" value="<?php echo date("Y-m-d"); ?>" size="18">
        </div></td>
      </tr>
      <tr>
        <td  ><div align="center">������Ŀ��</div></td>
        <td  ><div align="left">
        <input name="ntitle" type="text" value="<?php echo $rows[ntitle]; ?>" size="60">  
</div></td>
      </tr>
     
      
      <tr>
        <td  ><div align="center">�������ݣ�</div></td>
        <td><div align="left">
		 <input name="ntext" type="text" value="<?php echo $rows[ntext]; ?>" size="60">  
        </div></td>
      </tr>
	  
	  
      <tr>
        <td  colspan="2" ><div align="center"><input type="submit" name="Submit" class="bt" value="�ύ"> 
                          <input type="reset" name="Submit2"  class="bt" value="����">
                          <input name="id" type="hidden" id="id" value="<?php echo $_GET[id]; ?>"></div></td>
      </tr>
	 </table>
 <?php } ?> </form>  
</body>
</html>
