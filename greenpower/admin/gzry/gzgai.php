<?php include("../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��̨����</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h2>������Ա��Ϣ��ʾ/�޸�</h2>
<form action="gzgai_save.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" name="dsgai"  onSubmit="return chkinput(this)">
<?php
  				     include("../../inc/condata.php");
					 $id=$_GET[id];
				     $sql = "select * from yjs_people where autoid=$id";
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
        <td width="249" rowspan="6" align="middle" valign="top" bgcolor="#ffffff"><label></label>
        
          <label>
          <input type="file" name="image" />
          </label>
          <span class="zhuyi">*�����������Ƭ</span></td>
      </tr>
     
      <tr>
        <td height="22" valign="top" bgcolor="#FFFFFF"><div align="center" >����</div></td>
        <td bgcolor="#FFFFFF"><input type="text" name="ename"  value="<?php echo $rows[ename]; ?>"/></td>
        <td bgcolor="#FFFFFF"><div align="center" >���</div></td>
        <td width="160"><label>
	      <select name="type" id="select">
            <option selected="selected"  value="0">-- ��ѡ�� --</option>
            <option value="1">��ʿ��ʦ</option>
            <option value="2">˶ʿ��ʦ</option>
            <option value="3">��ʿ��</option>
            <option value="4">˶ʿ��</option>
			 <option value="5">������</option>
          </select>
		  </label></td>
      <tr>
        <td height="22" valign="middle" bgcolor="#FFFFFF"><div align="center" >������λ</div></td>
        <td bgcolor="#FFFFFF">
        <input name="address" type="text"  value="<?php echo $rows[address]; ?>" />     </td>
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
        <td height="22" valign="middle" bgcolor="#FFFFFF"><div align="center" >�о�����</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><label>
          <input name="sd" type="text"  value="<?php echo $rows[sd]; ?>" />
        </label></td>
      </tr>
	   <tr>
        <td height="22" valign="middle" bgcolor="#FFFFFF"><div align="center" >���гɹ�</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><label>
          <input name="detail" type="text"  value="<?php echo $rows[detail]; ?>" />
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
