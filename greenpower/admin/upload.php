<?php include("checkuser.php"); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="���ִ�ѧ,ͨ�Ź���ѧԺ,�������о���" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
  <title>��̨����</title>
</head>
<body>
<h2>��ҳͼƬ�ϴ�</h2>
<table width="760" border="1"  cellpadding="0" cellspacing="0">
 
              <tr> 
                <td>
<?php
	$url_this =  "http://".$_SERVER ['HTTP_HOST'].$_SERVER['PHP_SELF'];
	$result=basename($url_this);
	$url=str_replace($result,'',$url_this);
  if ($_FILES['imgUrl']['error'] > 0)
  {
    echo '����: ';
    switch ($_FILES['imgUrl']['error'])
    {
      case 1:  echo '�ļ���������ϴ���С';  break;
      case 2:  echo '�ļ�̫��';  break;
      case 3:  echo '�ļ����ϴ��ɹ�';  break;
      case 4:  echo '��û��ѡ���ϴ��ļ�';  break;
    }
    exit;
  }

  // put the file where we'd like it
  $upfile = '../uploads/'.$_FILES['imgUrl']['name'];

  if (is_uploaded_file($_FILES['imgUrl']['tmp_name'])) 
  {
     if (!move_uploaded_file($_FILES['imgUrl']['tmp_name'], $upfile))
     {
        echo '����: �ϴ��ļ�ʧ��......';
        exit;
     }
  } 
  else 
  {
    echo '����: �ϴ��ļ�ʧ��...... ';
    echo $_FILES['imgUrl']['name'];
    exit;
  }


  echo '�ļ��ϴ��ɹ�......<br><br>';
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
 <input name="Submit" type="button" class="bt" value="ͼƬ��ӳɹ������أ�" onClick="history.go(-1);"/>
 </div>
  
                </td>
              </tr>
          </table>
</body>
</html>
