<?php include("checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>学科建设网站管理</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <h2>修改新闻</h2>
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
                          <td align="center">没有此信息</td>
                        </tr>
                      </table></td>
                    </tr>
                  </table> 
				  <?php }else{
				        $rows = mysql_fetch_array($result);
				   ?>
		 <table width="760" border="1" cellpadding="0" cellspacing="0">
		
	  <tr>
        <td width="96"  ><div align="center">时间：</div></td>
        <td width="658" ><div align="left"><select name="ntype"  >
			<option selected="selected"  value="0">-- 请选择 --</option> 
                <option value="1">要闻通知</option>
		  <option value="2">管理通知</option>
          <option value="3">导师公告</option>
          <option value="4">工程硕士</option>
          <option value="5">课程安排</option>
          <option value="6">学术活动</option>
          <option value="7">团队活动新闻</option>
          <option value="8">中心活动新闻</option>
      </select> *请选择此处  
        </div></td>
      </tr>
      <tr>
        <td  ><div align="center">发布时间：</div></td>
        <td  ><div align="left">
          <input name="ntime" type="text" value="<?php echo date("Y-m-d"); ?>" size="18">
        </div></td>
      </tr>
      <tr>
        <td  ><div align="center">新闻题目：</div></td>
        <td  ><div align="left">
        <input name="ntitle" type="text" value="<?php echo $rows[ntitle]; ?>" size="60">  
</div></td>
      </tr>
     
      
      <tr>
        <td  ><div align="center">新闻内容：</div></td>
        <td><div align="left">
		 <input name="ntext" type="text" value="<?php echo $rows[ntext]; ?>" size="60">  
        </div></td>
      </tr>
	  
	  
      <tr>
        <td  colspan="2" ><div align="center"><input type="submit" name="Submit" class="bt" value="提交"> 
                          <input type="reset" name="Submit2"  class="bt" value="重来">
                          <input name="id" type="hidden" id="id" value="<?php echo $_GET[id]; ?>"></div></td>
      </tr>
	 </table>
 <?php } ?> </form>  
</body>
</html>
