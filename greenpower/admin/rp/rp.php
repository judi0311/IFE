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
	 if(form.rptype.value=="0")
	   {
	     alert("请选择类别");
		 //form.rptype.select();  
		 return(false);
	   }
	
	  if(form.rpname.value=="")
	   {
	     alert("请输入题目!");
		 form.rpname.select();
		 return(false);
	   }
	   
     if(form.rpstext.value=="")
	   {
	     alert("请输入内容");
		 form.rpstext.select();
		 return(false);
	   }
	   return(true);
	}
    </script>
	<table width="760" border="0" cellpadding="0" cellspacing="1">
	
     <form name="form1" enctype="multipart/form-data" method="post" action="rp_save.php" onSubmit="return chkinput(this)">
	 
	  <tr>
        <td width="87" ><div align="center">类别：</div></td>
        <td width="670" ><select name="rptype" id="rptype" >
        <option selected="selected"  value="0">-- 请选择 --</option>
          <option value="1">文章</option>
          <option value="2">专利</option>
          <option value="3">项目</option>
          <option value="4">获奖与荣誉</option>
		  <option value="5">自主研发设备</option>
      </select>  
        *请选择此处</td>
      </tr>
      <tr>
        <td ><div align="center">发布时间：</div></td>
        <td >
          <input name="rptime" type="text" id="rptime" value="<?php echo date("Y-m-d"); ?>" size="18">        </td>
      </tr>
      <tr>
        <td ><div align="center">题目：</div></td>
        <td >
        <input name="rpname" type="text" id="rpname" size="75"></td>
      </tr>
     
      
      <tr>
        <td height="80" ><div align="center">内容：</div></td>
        <td height="80" ><textarea name="rpstext" cols="70" rows="10" id="textarea"><?php echo $rows['rpstext']; ?></textarea></td>
      </tr>
	   <tr>
        <td ><div align="center">附件1：</div></td>
        <td >
          <input name="rpfj1" type="file" id="rpfj1" size="50">                          </td>
      </tr>
	  <tr>
        <td ><div align="center">附件2：</div></td>
        <td >
          <input name="rpfj2" type="file" id="rpfj2" size="50">                         </td>
      </tr>
	  <tr>
        <td ><div align="center">附件3：</div></td>
        <td >
          <input name="rpfj3" type="file" id="rpfj3" size="50">                        </td>
      </tr>
	 
	 
	  
      <tr>
        <td colspan="2" ><div align="center"><input type="submit" value="添加" class="bt">&nbsp;&nbsp;<input type="reset" value="重写" class="bt"></div></td>
      </tr>
	  </form>
    </table>
</body>
</html>
