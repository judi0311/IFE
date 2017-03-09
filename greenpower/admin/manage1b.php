<?php include("checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body  >
<h2>新闻添加</h2>
<script language="javascript">
function chkinput(form)
	{
	 if(form.ntype.value=="0")
	   {
	     alert("请选择新闻类别");
		 //form.ntype.select();  
		 return(false);
	   }
	
	  if(form.ntitle.value=="")
	   {
	     alert("请输入新闻题目!");
		 form.ntitle.select();
		 return(false);
	   }
	   
     if(form.ntext.value=="")
	   {
	     alert("请输入新闻内容");
		 form.ntext.select();
		 return(false);
	   }
	   return(true);
	}
    </script>
	<table width="760" border="0" cellpadding="0" cellspacing="1">
	
     <form name="form1" enctype="multipart/form-data" method="post" action="manage1b_save.php" onSubmit="return chkinput(this)">
	 
	  <tr>
        <td width="87" ><div align="center">新闻类别：</div></td>
        <td width="670" ><select name="ntype" id="ntype" >
          <option selected="selected"  value="0">-- 请选择 --</option>
          <option value="1">要闻通知</option>
          <option value="2">管理通知</option>
          <option value="3">导师公告</option>
          <option value="4">工程硕士</option>
          <option value="5">课程安排</option>
          <option value="6">学术活动</option>
          <option value="7">团队活动新闻</option>
          <option value="8">中心活动新闻</option>
        </select>  
        *请选择此处</td>
      </tr>
      <tr>
        <td ><div align="center">发布时间：</div></td>
        <td >
          <input name="ntime" type="text" id="ntime" value="<?php echo date("Y-m-d"); ?>" size="18">        </td>
      </tr>
      <tr>
        <td ><div align="center">新闻题目：</div></td>
        <td >
        <input name="ntitle" type="text" id="ntitle" size="75"></td>
      </tr>
     
      
      <tr>
        <td height="80" ><div align="center">新闻内容：</div></td>
        <td height="80" ><textarea name="ntext" cols="70" rows="10" id="textarea"><?php echo $rows['ntext']; ?></textarea></td>
      </tr>
	 <tr>
        <td ><div align="center">附件1：</div></td>
        <td >
          <input name="nfj1" type="file" id="nfj1" size="50">                          </td>
      </tr>
	  <tr>
        <td ><div align="center">附件2：</div></td>
        <td >
          <input name="nfj2" type="file" id="nfj2" size="50">                         </td>
      </tr>
	  <tr>
        <td ><div align="center">附件3：</div></td>
        <td >
          <input name="nfj3" type="file" id="nfj3" size="50">                        </td>
      </tr>
	  
      <tr>
        <td colspan="2" ><div align="center"><input type="submit" value="添加" class="bt">&nbsp;&nbsp;<input type="reset" value="重写" class="bt"></div></td>
      </tr>
	  </form>
    </table>
</body>
</html>
