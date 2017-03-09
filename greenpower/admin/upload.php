<?php include("checkuser.php"); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="吉林大学,通信工程学院,科研与研究生" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
  <title>后台管理</title>
</head>
<body>
<h2>首页图片上传</h2>
<table width="760" border="1"  cellpadding="0" cellspacing="0">
 
              <tr> 
                <td>
<?php
	$url_this =  "http://".$_SERVER ['HTTP_HOST'].$_SERVER['PHP_SELF'];
	$result=basename($url_this);
	$url=str_replace($result,'',$url_this);
  if ($_FILES['imgUrl']['error'] > 0)
  {
    echo '错误: ';
    switch ($_FILES['imgUrl']['error'])
    {
      case 1:  echo '文件超过最大上传大小';  break;
      case 2:  echo '文件太大';  break;
      case 3:  echo '文件不上传成功';  break;
      case 4:  echo '你没有选择上传文件';  break;
    }
    exit;
  }

  // put the file where we'd like it
  $upfile = '../uploads/'.$_FILES['imgUrl']['name'];

  if (is_uploaded_file($_FILES['imgUrl']['tmp_name'])) 
  {
     if (!move_uploaded_file($_FILES['imgUrl']['tmp_name'], $upfile))
     {
        echo '错误: 上传文件失败......';
        exit;
     }
  } 
  else 
  {
    echo '错误: 上传文件失败...... ';
    echo $_FILES['imgUrl']['name'];
    exit;
  }


  echo '文件上传成功......<br><br>';
  $url1='http://dce.jlu.edu.cn/master/'; 
   $upfile1 = 'uploads/'.$_FILES['imgUrl']['name'];

  $realUrl=$url1.$upfile1;
  $imgText=$_POST["imgText"];
  $imgLink=$_POST["imgLink"];
   include("../inc/condata.php");
//$handle=new mysqli('localhost','dce','690302ygq','dce');
  	
  $sql="insert into yjs_image(imgUrl,imgText,imgLink) values('$realUrl','$imgText','$imgLink')";
 
				
 mysql_query($sql,$db);
  mysql_close($db);
 
?>
 <div align="center">
 <input name="Submit" type="button" class="bt" value="图片添加成功，返回！" onClick="history.go(-1);"/>
 </div>
  
                </td>
              </tr>
          </table>
</body>
</html>
