<?php include("checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��̨����</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h2>��ʦ��Ϣ�޸�</h2>
<?php
  				     include_once("../inc/condata.php");
					 	  srand((double)microtime()*1000000);
  				           $randval = rand(100,999);

  				           if($_FILES['image']['name'] != ""){
  				             $exname1 = explode(".",$_FILES['image']['name']);
  				             end($exname1);
  				             $exname2 = ".".current($exname1);
  				             $puimagesname = date("YmdHis").$randval.$exname2;
  				             $uploadfile = "../uploads/".$puimagesname;
  				             move_uploaded_file($_FILES['image'][tmp_name],$uploadfile);
  				           }
						  $puimagesname;
						 $id=$_GET[id];

					
				$sql = "select * from yjs_ds where autoid= '$id '";					 
					$name = $_POST[name];
			
						$xb= $_POST[xb];
						$mz = $_POST[mz];
						
						$xkzy = $_POST[xkzy];
						
						$zc = $_POST[zc];
						$sj1 = $_POST[sj1];
						$bd = $_POST[bd];
						$sj2 = $_POST[sj2];
						
						$tel = $_POST[tel];
						$email = $_POST[email];
						$yjfx = $_POST['content1'];
						$kycg = $_POST['content2'];
						
				    $sqlstr ="update `yjs_ds` set name='$name',image='$puimagesname' ,xb='$xb',mz='$mz',xkzy='$xkzy' , zc='$zc', sj1='$sj1',bd='$bd', 
				sj2='$sj2',tel='$tel', yjfx='$yjfx', kycg='$kycg' where autoid=$id";
					
				   $result = mysql_query($sqlstr,$db);
				   if ($result){
		          	echo "<p>��ӳɹ�!</p>";
			      }
			else
				echo "<script>alert('�޸�ʧ��');history.go(-1);</script>";
?>




             
</body>
</html>
