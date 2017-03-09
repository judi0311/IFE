<?php include("../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>学科建设网站管理</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <h2>论文数据验收</h2>

	<form name="form" enctype="multipart/form-data" method="post" action="lwsj1a_view_save.php"  onSubmit="return chkinput(this)">
	
	
	
   
     
	  <?php
  				     include("../../inc/condata.php");
				     $sql = "select * from yjs_lwsj where autoid='$_GET[id]'";
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
		 <table width=100% border="1" cellpadding="0" cellspacing="0">
		
	 
     
      <tr>
        <td width="146"  ><div align="center">论文题目：</div></td>
        <td colspan="3" ><div align="left">
        <input name="lwtm" type="text" value="<?php echo $rows[lwtm]; ?>" size="60">  
</div></td></tr>
 <tr>
        <td  ><div align="center">第一作者：</div></td>
        <td width="211"  ><div align="left">
          <input name="zzxm1" type="text" value="<?php echo $rows[zzxm1]; ?>" size="18">
      </div></td>
	  <td width="98" valign="middle" ><div align="center" >作者身份</div></td>
        <td width="647"><label>
		
		<select name="sf1" id="sf1">
		 <option value="<?php echo $rows[sf1];  ?>" selected="selected">
		  <?php if($rows[sf1]==1) echo "教师" ; 
		 else if($rows[sf1]==2) echo "学生" ;?></option>
          <option value="1" >教师</option>
          <option value="2">学生</option>
        </select>    
      </label></td>
      </tr>
 <tr>
        <td  ><div align="center">第二作者：</div></td>
        <td  ><div align="left">
          <input name="zzxm2" type="text" value="<?php echo $rows[zzxm2]; ?>" size="18">
        </div></td>
	  <td width="98" valign="middle" ><div align="center" >作者身份</div></td>
        <td width="647"><label>
		
		<select name="sf2" id="sf2">
		 <option value="<?php echo $rows[sf2];  ?>" selected="selected">
		  <?php if($rows[sf2]==1) echo "教师" ; 
		 else if($rows[sf2]==2) echo "学生" ;?></option>
          <option value="1" >教师</option>
          <option value="2">学生</option>
        </select>    
      </label></td>
      </tr>
	   <tr>
        <td  ><div align="center">第三作者：</div></td>
        <td  ><div align="left">
          <input name="zzxm3" type="text" value="<?php echo $rows[zzxm3]; ?>" size="18">
        </div></td>
		 <td width="98" valign="middle" ><div align="center" >作者身份</div></td>
        <td width="647"><label>
		
		<select name="sf3" id="sf3">
		 <option value="<?php echo $rows[sf3];  ?>" selected="selected">
		  <?php if($rows[sf3]==1) echo "教师" ; 
		 else if($rows[sf3]==2) echo "学生" ;?></option>
          <option value="1" >教师</option>
          <option value="2">学生</option>
        </select>    
        </label></td>
		
      </tr>
	   <tr>
        <td  ><div align="center">第四作者：</div></td>
        <td  ><div align="left">
          <input name="zzxm4" type="text" value="<?php echo $rows[zzxm4]; ?>" size="18">
        </div></td>
		 <td width="98" valign="middle" ><div align="center" >作者身份</div></td>
        <td width="647"><label>
		
		<select name="sf4" id="sf4">
		 <option value="<?php echo $rows[sf4];  ?>" selected="selected">
		  <?php if($rows[sf4]==1) echo "教师" ; 
		 else if($rows[sf4]==2) echo "学生" ;?></option>
          <option value="1" >教师</option>
          <option value="2">学生</option>
        </select>    
        </label></td>
      </tr>
	  
      
        <tr>
        <td  ><div align="center">期刊名（全称）：</div></td>
        <td  colspan="3" ><div align="left">
        <input name="qkmc" type="text" value="<?php echo $rows[qkmc]; ?>" size="60">  
</div></td>
      </tr>
        <tr>
        <td  ><div align="center">年，卷（期）起止页码：</div></td>
        <td  colspan="3" ><div align="left">
        <input name="qzym" type="text" value="<?php echo $rows[qzym]; ?>" size="40">  
</div></td>
      </tr>
     
         <tr>
        <td  ><div align="center">检索类型：</div></td>
        <td colspan="3"  ><div align="left">
        <input name="jslx" type="text" value="<?php echo $rows[jslx]; ?>" size="40">&nbsp;&nbsp;填：SCI光盘；SCI网络；EI光盘；EI网络；ISTP；增刊  
</div></td>
      </tr>
        <tr>
        <td  ><div align="center">备注：</div></td>
        <td  colspan="3" ><div align="left">
        <input name="beiz" type="text" value="<?php echo $rows[beiz]; ?>" size="60">  
</div></td>
      </tr>
     
     
	  
	  
      <tr>
        <td  colspan="4" ><div align="center"><input type="submit" name="Submit" class="bt" value="提交"> 
                          <input type="reset" name="Submit2"  class="bt" value="重来">
                          <input name="id" type="hidden" id="id" value="<?php echo $_GET[id]; ?>"></div></td>
      </tr>
	 </table>
 <?php } ?> </form>  
</body>
</html>
