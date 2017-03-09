<?php include("checkuser.php"); 
?>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>后台管理</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body >
 <form action="upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1"> 
<h2 >首页图片上传</h2>

  <table width="760" border="1" cellpadding="0" cellspacing="0" align="left">
 
    <tr>
      <td width="119">上传图片：</td>
      <td width="635"><input type="file" size="26" name="imgUrl" /></td>
    </tr>
    <tr>
      <td width="119" > 文件描述：</td>
      <td><input type="text" size="26"  name="imgText" /></td>
    </tr>
    <tr>
      <td  width="119">文件链接：</td>
      <td><input type="text" size="26" name="imgLink" /> <span class="zhuyi"> *下载中心或新闻链接地址 </span></td>
    </tr>
    <tr>
      <td colspan="2">
             <div align="center">
              <input type="submit" name="Submit" class="bt" value="提交" />
            
             <input type="reset" name="Submit2" class="bt" value="重置" />
         </div>    
      </td>
    </tr>
  </table>
</form>
 
</body>
</html>
