<?php include("../../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��̨����</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<h2>������Ա��Ϣ��ʾ/�޸�</h2>
<script language="javascript">

function chkinput(form)
	{
	 if(form.bm.value=="0")
	   {
	     alert("��ѡ����������!");
	
		 return(false);
	   }
	   

	   
	     if(form.image.value=="")
	   {
	     alert("�������Ƭ");
		
		 return(false);
	   }
	   
	 
	   return(true);
	}
    </script>
<form action="gzgai_save.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" name="dsgai"  onSubmit="return chkinput(this)">

<?php
  				     include("../../../inc/condata.php");
					 $id=$_GET[id];
				     $sql = "select * from yjs_yjsh where autoid=$id";
				     $result = mysql_query($sql,$db);    
				     if(mysql_num_rows($result) == 0) {
				  ?>
				 <table width="500" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" valign="bottom"><table width="150" height="20" border="0" cellpadding="0" cellspacing="0" bgcolor="#0C6AC4">
          <tr>
            <td align="center"><span class="font21">û�д���Ϣ</span></td>
          </tr>
      </table></td>
    </tr>
  </table>
    <?php }else{
				   $rows = mysql_fetch_array($result);
				   ?>

<table width="760" border="1" cellpadding="2" cellspacing="1">
    <!--DWLayoutTable-->
    <tbody>
	  
      <tr bgcolor="#ffffff">
        <td height="22" valign="middle" bgcolor="#ffffff"><div align="center" >��������</div></td>
        <td colspan="2"><label>
          <select name="bm" id="bm">
            <option value="0" selected="selected">��ѡ��</option>
            <option value="1">��ϯ</option>
            <option value="2">����ϯ</option>
            <option value="3">ѧ����</option>
            <option value="4">������</option>
            <option value="5">���</option>
			   <option value="6">��֯��</option>
          </select>
        </label></td><td>  <select name="bz" id="bz">
            <option value="0" selected="selected">��ѡ��</option>
            <option value="1">����</option>
            <option value="2">��Ա</option>
			
			   
          </select> </td>
        <td width="249" rowspan="6" align="middle" valign="top" bgcolor="#ffffff"><label></label>
          
          <label>
          <input type="file" name="image" />
          </label><span class="zhuyi">*�����������Ƭ</span></td>
      </tr>
      <tr bgcolor="#ffffff">
        <td width="85" height="22" valign="middle" bgcolor="#ffffff"><div align="center" >����</div></td>
        <td width="120"><label>
        <label>
        <input type="text" name="name" value="<?php echo $rows[name]; ?>"/>
        </label>
        </label></td>
        <td width="85" valign="middle" bgcolor="#ffffff"><div align="center" >�Ա�</div></td>
        <td width="160"><label>
        <select name="xb" id="select">
          <option value="1" selected="selected">��</option>
          <option value="2">Ů</option>
          </select>
        </label></td>
      </tr>
     
      <tr>
        <td height="22" valign="top" bgcolor="#FFFFFF"><div align="center" >רҵ</div></td>
        <td bgcolor="#FFFFFF"><input type="text" name="zy"  value="<?php echo $rows[zy]; ?>"/></td>
        <td bgcolor="#FFFFFF"><div align="center" >ְ��</div></td>
        <td bgcolor="#FFFFFF"><input name="zw" type="text"  value="<?php echo $rows[zw]; ?>" /></td>
      </tr>
      
      <tr>
        <td height="22" valign="middle" bgcolor="#FFFFFF"><div align="center" >������ò</div></td>
        <td bgcolor="#FFFFFF">
        <input name="zzmm" type="text"  value="<?php echo $rows[zzmm]; ?>" />     </td>
        <td bgcolor="#FFFFFF"><div align="center" >�绰</div></td>
        <td bgcolor="#FFFFFF"><input name="tel" type="text"  value="<?php echo $rows[tel]; ?>" /></td>
      </tr>
    
   
   
      <tr>
        <td height="22" valign="middle" bgcolor="#FFFFFF"><div align="center" >��������</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><label>
          <input name="email" type="text"  value="<?php echo $rows[email]; ?>" />
        </label></td>
      </tr>
     
	  <tr>
        <td height="22" valign="middle" bgcolor="#FFFFFF"><div align="center" >������</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><label>
          <input name="zym" type="text"  value="<?php echo $rows[zym]; ?>" />
        </label></td>
      </tr>
	   <tr>
        <td height="22" valign="middle" bgcolor="#FFFFFF"><div align="center" >��ע</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><label>
          <input name="beiz" type="text"  value="<?php echo $rows[beiz]; ?>" />
        </label></td>
      </tr>
	  <tr bgcolor="#eeeeee">
        <td align="center"    colspan="5"><label>
          <input type="submit" name="Submit1" class="bt" value="�ύ��Ϣ" />
        </label>         </td>
      </tr>
    </tbody>
  </table>
</form>
<?php } 
	?>
             
</body>
</html>
