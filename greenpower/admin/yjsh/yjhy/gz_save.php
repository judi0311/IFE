<?php include("../../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��̨����</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<h2>������Ա��Ϣ���</h2>

<?php 
		
						$herror = 0;
					    if(   $_POST['name'] == "" || $_POST['xb'] == ""|| 
						   $_POST['email'] == ""    )
						{
						   $herror = 1;
					 ?>
                  <table width="500" height="100" border="0"  cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="center" valign="bottom"><table width="150" height="20" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#0066FF">
                            <tr>
                              <td align="center" >��Ϣ������</td>
                            </tr>
                          </table>
                            <br>
                            <br>
                            <span><a href="new1b.php">������������ӡ�</a></span></td>
                      </tr>
                    </table>
                  <?php }else {
						if($_FILES['image']['name'] != ""){						
						   if($_FILES['image']['type'] != "image/pjpeg"){
						      $herror = 1;
					?>
                  <table width="500" height="100" border="0"  cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="center" valign="bottom"><table width="150" height="20" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#0066FF">
                            <tr>
                              <td align="center" >ͼƬ��ʽ����</td>
                            </tr>
                          </table>
                            <br>
                            <br>
                            <span><a href="new1b.php">������������ӡ�</a></span></td>
                      </tr>
                    </table>
                  <?php }else{
						      if($_FILES['image']['size'] > 204800){
						      $herror = 1;
					 ?>
                  <table width="500" height="100" border="0"  cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="center" valign="bottom"><table width="150" height="20" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#0066FF">
                            <tr>
                              <td align="center" >ͼƬ����200K</td>
                            </tr>
                          </table>
                            <br>
                            <br>
                            <span><a href="new1b.php">������������ӡ�</a></span></td>
                      </tr>
                    </table>
                  <?php 
                        }
                        }
                        }
					    }
                        if($herror == 0){
  				           include("../../../inc/condata.php");						   
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
					
						$bm=$_POST[bm]; 
						$bz=$_POST[bz]; 
						$name = $_POST[name];
						$xb= $_POST[xb];
						$zzmm = $_POST[zzmm];
						$zw = $_POST[zw];
						$zy = $_POST[zy];
						$tel = $_POST[tel];
						$email = $_POST[email];
						$zym= $_POST[zym];
						$beiz= $_POST[beiz];
						
				    $sqlstr = "insert into `yjs_yjsh` (`bm`,`bz`,`name`,`image`,`xb`,`zzmm`,`zw`,`zy`,`tel`,`email`,`zym`,`beiz`) VALUES                                           ('$bm','$bz','$name','$puimagesname','$xb','$zzmm','$zw','$zy','$tel','$email','$zym','$beiz')";
					
				$result = mysql_query($sqlstr,$db);
				if ($result){
		
			}
			else
				echo "<script>alert('���ʧ��');history.go(-1);</script>";
						  

						   mysql_query($sql,$db);
						   mysql_close($db); 
						  
						  
						   ?>
                    <table width="500" height="100" border="1"  cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="center" valign="bottom"><table width="150" height="20" border="0" align="center" cellpadding="0" cellspacing="0" >
                            <tr>
                              <td align="center" >��Ϣ��ӳɹ�!</td>
                            </tr>
                          </table>
                           </td>
                      </tr>
                    </table>
                  <?php
					  }
				   ?>
           

             
</body>
</html>
