<?php include("../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��̨����</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h2>������Ա��Ϣ���</h2>
<form action="gz_save.php" method="post" enctype="multipart/form-data" name="gz">
  <table width="760" border="1"  cellpadding="2" cellspacing="1" >
    <!--DWLayoutTable-->
    <tbody>
      <tr >
        <td width="85" height="22" valign="middle" ><div align="center" >����</div></td>
        <td width="120"><label>
          <input type="text" name="name" />
        </label></td>
        <td width="85" valign="middle" ><div align="center" >�Ա�</div></td>
        <td width="160"><label>
          <select name="xb" id="select">
            <option value="1" selected="selected">��</option>
            <option value="2">Ů</option>
          </select>
        </label></td>
        <td width="249" rowspan="5" align="middle" valign="top" ><label></label>
            <label>
            <input type="file" name="image" />
            </label>
          <span class="zhuyi">*�����Ƭ</span></td>
      </tr>
      <tr>
        <td height="22" valign="top" ><div align="center" >�绰</div></td>
        <td ><input type="text" name="tel" /></td>
        <td ><div align="center" >���</div></td>
        <td width="160"><label>
          <select name="type" id="select">
            <option selected="selected"  value="0">-- ��ѡ�� --</option>
            <option value="1">��ʿ��ʦ</option>
            <option value="2">˶ʿ��ʦ</option>
            <option value="3">��ʿ��</option>
            <option value="4">˶ʿ��</option>
			 <option value="5">������</option>
           
          </select>
          *��ѡ�� </label></td>
      </tr>
      <tr>
        <td height="22" valign="middle" ><div align="center" >����</div></td>
        <td ><input name="address" type="text" size="25" />
        </td>
      <tr>
        <td height="22" valign="middle" ><div align="center" >E-mail</div></td>
        <td colspan="3" ><label>
          <input name="email" type="text" size="40" />
        </label></td>
      </tr>
      <tr>
        <td height="22" valign="middle" ><div align="center" >������λ</div></td>
        <td colspan="3" ><label>
          <input name="gzdw" type="text" size="60" />
        </label></td>
      </tr>
      <tr>
        <td height="22" valign="middle" ><div align="center" >�о�����</div></td>
        <td colspan="3" ><label>
          <input name="sd" type="text" size="60" />
        </label></td>
      </tr>
      <tr>
        <td height="22" valign="middle" ><div align="center" >���гɹ�</div></td>
        <td colspan="3" ><label>
          <textarea name="detail" cols="70" rows="10" id="textarea"><?php echo $rows['ntext']; ?></textarea>
        </label></td>
      </tr>
      <tr bgcolor="#eeeeee">
        <td align="center"    colspan="5"><label>
          <input type="submit" name="Submit" value="�ύ��Ϣ" />
          </label>
            <label>
            <input type="reset" name="Submit2" value="�������" />
          </label></td>
      </tr>
    </tbody>
  </table>
</form>

             
</body>
</html>
