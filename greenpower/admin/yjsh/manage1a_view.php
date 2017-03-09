<?php include("../checkuser.php"); ?>
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
  				     include("../../inc/condata.php");
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
        <td width="96"  ><div align="center">新闻类别：</div></td>
        <td width="658" ><div align="left"><select name="ntype"  >
			<option selected="selected"  value="7">研究生会</option> 
                
      </select>  
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
		<?php
					//引用FCKeditor.php这个文件，基本的类和数据结构都在这里
					include_once("../../include/FCKeditor/fckeditor.php");
					//创建FCKeditor对象的实例。myFCKeditor即提交后，接收数据页面 $_POST['content']使用
					$fckeditor=new FCKeditor('content');
					//FCKeditor所在的位置，这里它的位置就是'FCKeditor' 文件夹
					$fckeditor->BasePath='../../include/FCKeditor/';
					//工具按钮设置
					$fckeditor->ToolbarSet='Default';
					//设置它的宽度
					$fckeditor->Width='670';
					//设置它的高度
					$fckeditor->Height='450px';
					//初始化内容 这里是$rows[ntext] 
					$fckeditor->Value  =$rows[ntext] ;
					//生成
					$fckeditor->Create();
				?>
   
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
