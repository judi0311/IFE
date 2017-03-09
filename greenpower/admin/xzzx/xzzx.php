<?php include("../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />
</head>
<body  >
<h2>添加</h2>
<script language="javascript">
function chkinput(form)
	{
	 if(form.filetype.value=="0")
	   {
	     alert("请选择类别");
		 //form.filetype.select();  
		 return(false);
	   }
	
	  if(form.filename.value=="")
	   {
	     alert("请输入题目!");
		 form.filename.select();
		 return(false);
	   }
	   
     if(form.filestext.value=="")
	   {
	     alert("请输入内容");
		 form.filestext.select();
		 return(false);
	   }
	   return(true);
	}
    </script>
	<table width="760" border="0" cellpadding="0" cellspacing="1">
	 <form name="form1" enctype="multipart/form-data" method="post" action="xzzx_save.php" onSubmit="return chkinput(this)">
	 <tr>
        <td width="87" ><div align="center">类别：</div></td>
        <td width="670" ><select name="filetype" id="filetype" >
         <option selected="selected"  value="0">-- 请选择 --</option>
		  <option value="1">常用网站</option>
          <option value="2">科研网站</option>
          <option value="3">知名期刊网站</option>
          <option value="4">知名课题组</option>
        </select>  
        *请选择此处</td>
      </tr>
      <tr>
        <td ><div align="center">发布时间：</div></td>
        <td >
          <input name="filetime" type="text" id="filetime" value="<?php echo date("Y-m-d"); ?>" size="18">        </td>
      </tr>
      <tr>
        <td ><div align="center">题目：</div></td>
        <td >
        <input name="filename" type="text" id="filename" size="75"></td>
      </tr>
     
      
      <tr>
        <td height="80" ><div align="center">内容：</div></td>
        <td height="80" ><textarea name="filestext" cols="70" rows="10" id="textarea"><?php echo $rows['filestext']; ?></textarea></td>
      </tr>
	  <tr>
        <td ><div align="center">附件1：</div></td>
        <td >
          <input name="filefj1" type="file" id="filefj1" size="50">                          </td>
      </tr>
	  <tr>
        <td ><div align="center">附件2：</div></td>
        <td >
          <input name="filefj2" type="file" id="filefj2" size="50">                         </td>
      </tr>
	  <tr>
        <td ><div align="center">附件3：</div></td>
        <td >
          <input name="filefj3" type="file" id="filefj3" size="50">                        </td>
      </tr>
	 
	  
      <tr>
        <td colspan="2" ><div align="center"><input type="submit" value="添加" class="bt">&nbsp;&nbsp;<input type="reset" value="重写" class="bt"></div></td>
      </tr>
	  </form>
    </table>
</body>
</html>
