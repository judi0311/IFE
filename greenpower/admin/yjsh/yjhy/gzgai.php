<?php include("../../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<h2>工作人员信息显示/修改</h2>
<script language="javascript">

function chkinput(form)
	{
	 if(form.bm.value=="0")
	   {
	     alert("请选择所属部门!");
	
		 return(false);
	   }
	   

	   
	     if(form.image.value=="")
	   {
	     alert("请添加照片");
		
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
        <td height="22" valign="middle" bgcolor="#ffffff"><div align="center" >所属部门</div></td>
        <td colspan="2"><label>
          <select name="bm" id="bm">
            <option value="0" selected="selected">请选择</option>
            <option value="1">主席</option>
            <option value="2">副主席</option>
            <option value="3">学术部</option>
            <option value="4">体育部</option>
            <option value="5">生活部</option>
			   <option value="6">组织部</option>
          </select>
        </label></td><td>  <select name="bz" id="bz">
            <option value="0" selected="selected">请选择</option>
            <option value="1">部长</option>
            <option value="2">成员</option>
			
			   
          </select> </td>
        <td width="249" rowspan="6" align="middle" valign="top" bgcolor="#ffffff"><label></label>
          
          <label>
          <input type="file" name="image" />
          </label><span class="zhuyi">*请重新添加照片</span></td>
      </tr>
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
      </tr>
     
      <tr>
        <td height="22" valign="top" bgcolor="#FFFFFF"><div align="center" >专业</div></td>
        <td bgcolor="#FFFFFF"><input type="text" name="zy"  value="<?php echo $rows[zy]; ?>"/></td>
        <td bgcolor="#FFFFFF"><div align="center" >职务</div></td>
        <td bgcolor="#FFFFFF"><input name="zw" type="text"  value="<?php echo $rows[zw]; ?>" /></td>
      </tr>
      
      <tr>
        <td height="22" valign="middle" bgcolor="#FFFFFF"><div align="center" >政治面貌</div></td>
        <td bgcolor="#FFFFFF">
        <input name="zzmm" type="text"  value="<?php echo $rows[zzmm]; ?>" />     </td>
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
        <td height="22" valign="middle" bgcolor="#FFFFFF"><div align="center" >座右铭</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><label>
          <input name="zym" type="text"  value="<?php echo $rows[zym]; ?>" />
        </label></td>
      </tr>
	   <tr>
        <td height="22" valign="middle" bgcolor="#FFFFFF"><div align="center" >备注</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><label>
          <input name="beiz" type="text"  value="<?php echo $rows[beiz]; ?>" />
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
