<?php include("../../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<h2>工作人员信息修改</h2>
<?php
  				     include_once("../../../inc/condata.php");
					 	  srand((double)microtime()*1000000);
  				           $randval = rand(100,999);

  				           if($_FILES['image']['name'] != ""){
  				             $exname1 = explode(".",$_FILES['image']['name']);
  				             end($exname1);
  				             $exname2 = ".".current($exname1);
  				             $puimagesname = date("YmdHis").$randval.$exname2;
  				             $uploadfile = "../../../uploads/".$puimagesname;
  				             move_uploaded_file($_FILES['image'][tmp_name],$uploadfile);
  				           }
						  $puimagesname;
						 $id=$_GET[id];
					
				$sql = "select * from yjs_yjsh where autoid= '$id '";	
				        
								 
 
						$name = $_POST[name];
						$bm=$_POST[bm];	
							$bz=$_POST[bz]; 
						$xb= $_POST[xb];
						$zzmm =$_POST[zzmm];
						$zw = $_POST[zw];
						$zy =$_POST[zy];
						$tel =$_POST[tel];
						$email =$_POST[email];
						$zym=$_POST[zym];
						$beiz=$_POST[beiz];
						
				    $sqlstr ="update `yjs_yjsh` set bm='$bm',bz='$bz',name='$name',image='$puimagesname' ,xb='$xb',zzmm='$zzmm', zw='$zw',zy='$zy', tel='$tel',          email='$email' , zym='$zym', beiz='$beiz' where autoid=$id";
					
				   $result = mysql_query($sqlstr,$db);
				   if ($result){
		          	echo "<p>添加成功!</p>";
			      }
			else
				echo "<script>alert('修改失败');history.go(-1);</script>";
?>




             
</body>
</html>
