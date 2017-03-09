<?php include("checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<h2>导师信息添加</h2>

<table width="760" border="0"  cellpadding="0" cellspacing="0">
              <tr>
                <td><?php 
		
						$herror = 0;
					    if(   $_POST['name'] == "" || $_POST['mz'] == ""|| 
						   $_POST['email'] == ""    )
						{
						   $herror = 1;
					 ?>
                  <table width="500" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="center" valign="bottom"><table width="150" height="20" border="0" align="center" cellpadding="0" cellspacing="0" >
                            <tr>
                              <td align="center" >信息不完整(姓名，民族，email)</td>
                            </tr>
                          </table>
                           
                            <input name="Submit" type="button" class="bt" value="返回重填！" onClick="history.go(-1);"/></td>
                      </tr>
                    </table>
                  <?php }else {
						if($_FILES['image']['name'] != ""){						
						   if($_FILES['image']['type'] != "image/pjpeg"){
						      $herror = 1;
					?>
                  <table width="500" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="center" valign="bottom"><table width="150" height="20" border="1" align="center" cellpadding="0" cellspacing="0" >
                            <tr>
                              <td align="center" >图片格式不对</td>
                            </tr>
                          </table>
                            <br>
                            <br>
                            <input name="Submit" type="button" class="bt" value="返回重填！" onClick="history.go(-1);"/></td>
                      </tr>
                    </table>
                  <?php }else{
						      if($_FILES['image']['size'] > 204800){
						      $herror = 1;
					 ?>
                  <table width="500" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="center" valign="bottom"><table width="150" height="20" border="0" align="center" cellpadding="0" cellspacing="0" >
                            <tr>
                              <td align="center" >图片大于200K</td>
                            </tr>
                          </table>
                 
                          <input name="Submit" type="button" class="bt" value="返回重填！" onClick="history.go(-1);"/></td>
                      </tr>
                    </table>
                  <?php 
                        }
                        }
                        }
					    }
                        if($herror == 0){
  				           include("../inc/condata.php");						   
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
						
				    $sqlstr = "insert into `yjs_ds`(`name`,`image`,`xb`,`mz`,`xkzy`,`zc`,`sj1`,`bd`,`sj2`,`tel`,`email`,`yjfx`,`kycg`) VALUES                                           ('$name','$puimagesname','$xb','$mz','$xkzy','$zc','$sj1','$bd','$sj2','$tel','$email','$yjfx','$kycg')";
					
				$result = mysql_query($sqlstr,$db);
				if ($result){
		
			}
			else
				echo "<script>alert('添加失败');history.go(-1);</script>";
						  

						   mysql_query($sql,$db);
						   mysql_close($db); 
						  
						  
						   ?>
                    <table width="500"   align="center" height="100" border="0"  cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="center" valign="bottom"><table width="150" height="20"  align="center"border="0" cellpadding="0" cellspacing="0" >
                            <tr>
                              <td align="center" >信息添加成功！</td>
                            </tr>
                          </table>
                           
                     <input name="Submit" type="button" class="bt" value="返回！" onClick="history.go(-1);"/></td>
                      </tr>
                    </table>
                  <?php
					  }
				   ?>
                </td>
              </tr>
            </table>

             
</body>
</html>
