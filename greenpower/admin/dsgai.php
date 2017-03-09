<?php include("checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<h2>导师信息显示/修改</h2>

  <script language="javascript">

function chkinput(form)
	{
	
	 if(form.xb.value=="0")
	   {
	     alert("请选择性别");
	  
		 return(false);
	   }
	   if(form.xkzy.value=="0")
	   {
	     alert("请选择学科专业");
	  
		 return(false);
	   }
	
	  if(form.zc.value=="0")
	   {
	     alert("请选择职称!");
	
		 return(false);
	   }
	   
	   
	     if(form.image.value=="")
	   {
	     alert("请添加照片");
		
		 return(false);
	   }
	   
	    if(form.bd.value=="")
	   {
	     alert("请确认是否为博导");
		
		 return(false);
	   }
	   return(true);
	}
    </script>

<form action="dsgai_save.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" name="dsgai" onSubmit="return chkinput(this)">

<?php
  				     include("../inc/condata.php");
					 $id=$_GET[id];
				     $sql = "select * from yjs_ds where autoid=$id";
				     $result = mysql_query($sql,$db);    
				     if(mysql_num_rows($result) == 0) {
				  ?>
				 <table width="500" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" valign="bottom"><table width="150" height="20" border="1" cellpadding="0" cellspacing="0" bgcolor="#0C6AC4">
          <tr>
            <td align="center">没有此信息</td>
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
      <tr >
        <td width="85" ><div align="center" >姓名</div></td>
        <td width="120"><label>
        <input type="text" name="name" value="<?php echo $rows[name]; ?>"/>
        </label></td>
        <td width="85" ><div align="center" >性别</div></td>
        <td width="160"><label>
        <select name="xb" id="xb">
		   <option value="0"selected="selected">请选择</option>
          <option value="1" >男</option>
          <option value="2">女</option>
          </select>
        </label></td>
        <td width="249" colspan="3" rowspan="6" align="middle"  >
          <input type="file" name="image" /><span class="zhuyi">注意:请重新添加照片和其它可选项!</span>
         </td>
      </tr>
     
      <tr>
        <td valign="top" ><div align="center" >民族</div></td>
        <td ><input type="text" name="mz"  value="<?php echo $rows[mz]; ?>"/></td>
        <td ><div align="center" >学科专业</div></td>
        <td ><select name="xkzy" id="xkzy">
		 <option value="0" selected="selected">请选择</option>
            <option value="1">通信与信息系统</option>
            <option value="2"> 信号与信息处理</option>
          <option value="3">控制理论与工程</option>
		  <option value="4">系统工程</option>
           <option value="5">模式识别</option>
		 
          </select> </td>
      </tr>
      
      <tr>
        <td ><div align="center" >职称</div></td>
        <td >
          <select name="zc" id="select2">
             <option value="0" selected="selected">请选择</option>
			<option value="1" >教授</option>
            <option value="2">副教授</option>
          
          </select>        </td>
        <td ><div align="center" >任职时间</div></td>
        <td ><input type="text" name="sj1" value="<?php echo $rows[sj1]; ?>"/></td>
      </tr>
      <tr>
        <td ><div align="center" >是否博导</div></td>
        <td >
       <input type="radio" name="bd" value="1" />
        <span >是</span>
        <input  type="radio" name="bd" value="0" />
        <span >否</span><span class="zhuyi">*请重新选择</span></td>
        <td ><div align="center" >聘任时间</div></td>
        <td ><input type="text" name="sj2" value="<?php echo $rows[sj2]; ?>"/></td>
      </tr>
    <tr>
        <td ><div align="center" >联系电话</div></td>
        <td colspan="3" ><label>
        <input name="tel" type="text" size="40" value="<?php echo $rows[tel]; ?>"/>
        </label></td>
      </tr>
   
      <tr>
        <td ><div align="center" >电子信箱</div></td>
        <td colspan="3" ><label>
          
        <input name="email" type="text" size="40" value="<?php echo $rows[email]; ?>"/>
        
        </label></td>
      </tr>
	 <tr>
        <td colspan="7" valign="middle"><div align="left">
         研究方向简介：
        </div></td>
      </tr>
      <tr >
        <td colspan="7" align="middle" valign="top" ><?php
					//引用FCKeditor.php这个文件，基本的类和数据结构都在这里
					include_once("../include/FCKeditor/fckeditor.php");
					//创建FCKeditor对象的实例。myFCKeditor即提交后，接收数据页面 $_POST['content']使用
					$fckeditor=new FCKeditor('content1');
					//FCKeditor所在的位置，这里它的位置就是'FCKeditor' 文件夹
					$fckeditor->BasePath='../include/FCKeditor/';
					//工具按钮设置
					$fckeditor->ToolbarSet='Default';
					//设置它的宽度
					$fckeditor->Width='730';
					//设置它的高度
					$fckeditor->Height='350px';
					//初始化
					$fckeditor->Value  = $rows[yjfx] ;
					//生成
					$fckeditor->Create();
				?></td>
      </tr>  
	 <tr>
        <td colspan="7" ><div align="left">
        科研成果（近3年发表的论文、获奖情况等）：
        </div></td>
      </tr>
      <tr >
        <td colspan="7"><?php
					//引用FCKeditor.php这个文件，基本的类和数据结构都在这里
					include_once("../include/FCKeditor/fckeditor.php");
					//创建FCKeditor对象的实例。myFCKeditor即提交后，接收数据页面 $_POST['content']使用
					$fckeditor=new FCKeditor('content2');
					//FCKeditor所在的位置，这里它的位置就是'FCKeditor' 文件夹
					$fckeditor->BasePath='../include/FCKeditor/';
					//工具按钮设置
					$fckeditor->ToolbarSet='Default';
					//设置它的宽度
					$fckeditor->Width='730';
					//设置它的高度
					$fckeditor->Height='350px';
					//初始化
					$fckeditor->Value  = $rows[kycg] ;
					//生成
					$fckeditor->Create();
				?></td>
      </tr> 
	  
	   <tr>
        <td colspan="7"   align="center">
         <input type="submit" name="Submit" class="bt" value="提交信息" />
	   </tr>	  
    </tbody>
  </table>
  
  
</form>
<?php } 
	?>
             
</body>
</html>
