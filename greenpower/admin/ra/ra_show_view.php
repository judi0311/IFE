<?php include("../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>学科建设网站管理</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <h2>修改</h2>
	<script language="javascript">

function chkinput(form)
	{

	if(form.ratype.value=="0")
	   {
	     alert("请选择新闻类别");
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
	<form name="form" enctype="multipart/form-data" method="post" action="ra_show_view_save.php"  onSubmit="return chkinput(this)">
	
	
	
   
     
	  <?php
  				     include("../../inc/condata.php");
				     $sql = "select * from yjs_ras where autoid='$_GET[id]'";
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
        <td width="658" ><div align="left"><select name="ratype"  >
			  <option selected="selected"  value="0">-- 请选择 --</option>
          <option value="1">超级电容器基础研究与器件开发</option>
          <option value="2">高效硅基太阳能电池的制备、改性与应用研发</option>
          <option value="3">超级电容器基础研究与器件开发</option>
          <option value="4">新型固体燃料电池的设计与研发</option>
		  <option value="5">其他</option>
     </select> *请选择此处  
        </div></td>
      </tr>
      <tr>
        <td  ><div align="center">发布时间：</div></td>
        <td  ><div align="left">
          <input name="ratime" type="text" value="<?php echo date("Y-m-d"); ?>" size="18">
        </div></td>
      </tr>
      <tr>
        <td  ><div align="center">题目：</div></td>
        <td  ><div align="left">
        <input name="raname" type="text" value="<?php echo $rows[raname]; ?>" size="60">  
</div></td>
      </tr>
     
      
      <tr>
        <td  ><div align="center">内容：</div></td>
        <td><div align="left">
		 <input name="rastext" type="text" value="<?php echo $rows[rastext]; ?>" size="60">  
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
