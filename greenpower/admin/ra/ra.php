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
	 if(form.ratype.value=="0")
	   {
	     alert("请选择类别");
		 //form.ratype.select();  
		 return(false);
	   }
	
	  if(form.raname.value=="")
	   {
	     alert("请输入题目!");
		 form.raname.select();
		 return(false);
	   }
	   
     if(form.rastext.value=="")
	   {
	     alert("请输入内容");
		 form.rastext.select();
		 return(false);
	   }
	   return(true);
	}
    </script>
	<table width="760" border="0" cellpadding="0" cellspacing="1">
	
     <form name="form1" enctype="multipart/form-data" method="post" action="ra_save.php" onSubmit="return chkinput(this)">
	 
	  <tr>
        <td width="87" ><div align="center">类别：</div></td>
        <td width="670" ><select name="ratype" id="ratype" >
        <option selected="selected"  value="0">-- 请选择 --</option>
          <option value="1">超级电容器基础研究与器件开发</option>
          <option value="2">高效硅基太阳能电池的制备、改性与应用研发</option>
          <option value="3">超级电容器基础研究与器件开发</option>
          <option value="4">新型固体燃料电池的设计与研发</option>
		  <option value="5">其他</option>
      </select>  
        *请选择此处</td>
      </tr>
      <tr>
        <td ><div align="center">发布时间：</div></td>
        <td >
          <input name="ratime" type="text" id="ratime" value="<?php echo date("Y-m-d"); ?>" size="18">        </td>
      </tr>
      <tr>
        <td ><div align="center">题目：</div></td>
        <td >
        <input name="raname" type="text" id="raname" size="75"></td>
      </tr>
     
      
      <tr>
        <td height="80" ><div align="center">内容：</div></td>
        <td height="80" ><textarea name="rastext" cols="70" rows="10" id="textarea"><?php echo $rows['rastext']; ?></textarea></td>
      </tr>
	   <tr>
        <td ><div align="center">附件1：</div></td>
        <td >
          <input name="rafj1" type="file" id="rafj1" size="50">                          </td>
      </tr>
	  <tr>
        <td ><div align="center">附件2：</div></td>
        <td >
          <input name="rafj2" type="file" id="rafj2" size="50">                         </td>
      </tr>
	  <tr>
        <td ><div align="center">附件3：</div></td>
        <td >
          <input name="rafj3" type="file" id="rafj3" size="50">                        </td>
      </tr>
	 
	 
	  
      <tr>
        <td colspan="2" ><div align="center"><input type="submit" value="添加" class="bt">&nbsp;&nbsp;<input type="reset" value="重写" class="bt"></div></td>
      </tr>
	  </form>
    </table>
</body>
</html>
