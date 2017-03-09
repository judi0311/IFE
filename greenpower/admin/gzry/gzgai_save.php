<?php include("../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<h2>工作人员信息修改</h2>
<?php
  				     include_once("../../inc/condata.php");
					 	  srand((double)microtime()*1000000);
  				           $randval = rand(100,999);

  				           if($_FILES['image']['name'] != ""){
  				             $exname1 = explode(".",$_FILES['image']['name']);
  				             end($exname1);
  				             $exname2 = ".".current($exname1);
  				             $puimagesname = date("YmdHis").$randval.$exname2;
  				             $uploadfile = "../../uploads/".$puimagesname;
  				             move_uploaded_file($_FILES['image'][tmp_name],$uploadfile);
  				           }
						  $puimagesname;
						 $id=$_GET[id];
					
				$sql = "select * from yjs_people where autoid= '$id '";					 
				
			$name = $_POST[name];
						$xb= $_POST[xb];
	                    $type= $_POST[type];
						
						$gzdw = $_POST[gzdw];
						$address= $_POST[address];
						$tel = $_POST[tel];
						$email = $_POST[email];
						$sd = $_POST[sd];										
						$detail = $_POST[detail];
						
				    $sqlstr ="update `yjs_people` set name='$name',image='$puimagesname' ,xb='$xb', type='$type',address='$address', tel='$tel',   gzdw='$gzdw',       email='$email' , sd='$sd', detail='$detail'where autoid=$id";
				 $result = mysql_query($sqlstr,$db);
				   if ($result){
		          	echo "<p>添加成功!</p>";
			      }
			else
				echo "<script>alert('修改失败');history.go(-1);</script>";
?>




             
</body>
</html>
