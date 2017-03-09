<?php include("../checkuser.php"); ?>
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
		<option selected="selected"  value="7">研究生会</option> 
                      <option value="7">研究生会</option>
                      
     
					  
      </select>  *请选择此处</td>
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
        <td height="80" ><?php
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
					$fckeditor->Height='300px';
					//初始化
					$fckeditor->Value  = "请您在此处添加信息！" ;
					//生成
					$fckeditor->Create();
				?></td>
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
