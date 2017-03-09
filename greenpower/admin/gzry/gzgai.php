<?php include("../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h2>工作人员信息显示/修改</h2>
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
            <td align="center"><span class="font21">没有此信息</span></td>
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
        <td width="85" height="22" valign="middle" bgcolor="#ffffff"><div align="center" >姓名</div></td>
        <td width="120"><label>
        <label>
        <input type="text" name="name" value="<?php echo $rows[name]; ?>"/>
        </label>
        </label></td>
        <td width="85" valign="middle" bgcolor="#ffffff"><div align="center" >性别</div></td>
        <td width="160"><label>
        <select name="xb" id="select">
          <option value="1" selected="selected">男</option>
          <option value="2">女</option>
          </select>
        </label></td>
        <td width="249" rowspan="6" align="middle" valign="top" bgcolor="#ffffff"><label></label>
        
          <label>
          <input type="file" name="image" />
          </label>
          <span class="zhuyi">*请重新添加照片</span></td>
      </tr>
     
      <tr>
        <td height="22" valign="top" bgcolor="#FFFFFF"><div align="center" >籍贯</div></td>
        <td bgcolor="#FFFFFF"><input type="text" name="ename"  value="<?php echo $rows[ename]; ?>"/></td>
        <td bgcolor="#FFFFFF"><div align="center" >身份</div></td>
        <td width="160"><label>
	      <select name="type" id="select">
            <option selected="selected"  value="0">-- 请选择 --</option>
            <option value="1">博士导师</option>
            <option value="2">硕士导师</option>
            <option value="3">博士生</option>
            <option value="4">硕士生</option>
			 <option value="5">保研生</option>
          </select>
		  </label></td>
      <tr>
        <td height="22" valign="middle" bgcolor="#FFFFFF"><div align="center" >工作单位</div></td>
        <td bgcolor="#FFFFFF">
        <input name="address" type="text"  value="<?php echo $rows[address]; ?>" />     </td>
        <td bgcolor="#FFFFFF"><div align="center" >电话</div></td>
        <td bgcolor="#FFFFFF"><input name="tel" type="text"  value="<?php echo $rows[tel]; ?>" /></td>
      </tr>
    
   
   
      <tr>
        <td height="22" valign="middle" bgcolor="#FFFFFF"><div align="center" >电子信箱</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><label>
          <input name="email" type="text"  value="<?php echo $rows[email]; ?>" />
        </label></td>
      </tr>
      <tr>
        <td height="22" valign="middle" bgcolor="#FFFFFF"><div align="center" >研究方向</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><label>
          <input name="sd" type="text"  value="<?php echo $rows[sd]; ?>" />
        </label></td>
      </tr>
	   <tr>
        <td height="22" valign="middle" bgcolor="#FFFFFF"><div align="center" >科研成果</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><label>
          <input name="detail" type="text"  value="<?php echo $rows[detail]; ?>" />
        </label></td>
      </tr>
	  <tr bgcolor="#eeeeee">
        <td align="center"    colspan="5"><label>
          <input type="submit" name="Submit1" class="bt" value="提交信息" />
        </label>         </td>
      </tr>
    </tbody>
  </table>
</form>
<?php } 
	?>
             
</body>
</html>
