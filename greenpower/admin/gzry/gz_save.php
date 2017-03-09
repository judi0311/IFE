<?php include("../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<h2>工作人员信息添加</h2>

<?php 
		
						$herror = 0;
					    if(   $_POST['name'] == "" )
						{
						   $herror = 1;
					 ?>
                  <table width="500" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="center" valign="bottom"><table width="150" height="20" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#0066FF">
                            <tr>
                              <td align="center" >信息不完整</td>
                            </tr>
                          </table>
                            <br>
                            <br>
                            <span><a href="gz.php">—返回重新添加—</a></span></td>
                      </tr>
                    </table>
                  
              
                  <?php }else{
						      if($_FILES['image']['size'] > 204800){
						      $herror = 1;
					 ?>
                  <table width="500" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="center" valign="bottom"><table width="150" height="20" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#0066FF">
                            <tr>
                              <td align="center" >图片大于200K</td>
                            </tr>
                          </table>
                            <br>
                            <br>
                            <span><a href="gz.php">—返回重新添加—</a></span></td>
                      </tr>
</table>
                  <?php 
                      
                        }
                    
					    }
                        if($herror == 0){
  				           include("../../inc/condata.php");						   
  				           srand((double)microtime()*1000000);
  				           $randval = rand(100,999);

  				           if($_FILES['image']['name'] != ""){   
  				             $exname1 = explode(".",$_FILES['image']['name']);
  				             end($exname1);
  				             $exname2 = ".".current($exname1);
  				             $puimagesname = date("YmdHis").$randval.$exname2;
  				             $uploadfile = "../../uploads/".$puimagesname;
  				             move_uploaded_file($_FILES['image']['tmp_name'],$uploadfile);
  				           }
						  $puimagesname;
						  
					
						 
					    $name = $_POST[name];
						$xb= $_POST[xb];
	                    $type= $_POST[type];
						$gzdw= $_POST[gzdw];
					
						$address= $_POST[address];
						$tel = $_POST[tel];
						$email = $_POST[email];
						$sd = $_POST[sd];										
						$detail = $_POST[detail];
				
						
				    $sqlstr = "insert into `yjs_people` (`name`,`image`,`type`,`gzdw`,`address`,`tel`,`email`,`sd`,`detail`,`xb`) VALUES                                        ('$name','$puimagesname','$type','$gzdw','$address','$tel','$email','$sd','$detail','$xb')";
					
				$result = mysql_query($sqlstr,$db);
				if ($result){
		
			}
			else
				echo "<script>alert('添加失败');history.go(-1);</script>";
						  

						   mysql_query($sql,$db);
						   mysql_close($db); 
						  
						  
						   ?>
                    <table width="500" height="100" border="1" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="center" valign="bottom"><table width="150" height="20" border="0" align="center" cellpadding="0" cellspacing="0" >
                            <tr>
                              <td align="center" >信息添加成功
                            </tr>
                          </table>
                            <br>
                            <br>
                            <span><a href="gz.php">—返回—</a></span></td>
                      </tr>
</table>
                  <?php
					} 
				   ?>
           
</body>
</html>