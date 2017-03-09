<?php include("../checkuser.php"); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<h2>提交</h2>
<table width="760" border="1"  cellpadding="0" cellspacing="0">
 
              <tr> 
                <td>
                   
					<?php 
					

  				           include("../../inc/condata.php");						   
  				           srand((double)microtime()*1000000);
  				           $randval = rand(100,999);

                           
						  if($_FILES[rpfj1][name] != "") { 
						      $downloadname1a = $_FILES[rpfj1][name]; 
						      srand((double)microtime()*1000000);
						      $randval = rand(100,999);
						      $exname1 = explode(".",$_FILES[rpfj1][name]); 
						      end($exname1);
						      $downloadname1b = date("YmdHis").$randval.".".current($exname1); 
						      move_uploaded_file($_FILES[rpfj1][tmp_name],"../../download/".$downloadname1b); 
						 	  $downloadname1 = $downloadname1b."*".$downloadname1a; 
						 	 }
						   if($_FILES[rpfj2][name] != "") { 
						      $downloadname2a = $_FILES[rpfj2][name]; 
						      srand((double)microtime()*1000000);
						      $randval = rand(100,999);
						      $exname1 = explode(".",$_FILES[rpfj2][name]); 
						      end($exname1);
						      $downloadname2b = date("YmdHis").$randval.".".current($exname1); 
						      move_uploaded_file($_FILES[rpfj2][tmp_name],"../download/".$downloadname2b); 
						 	  $downloadname2 = $downloadname2b."*".$downloadname2a; 
						 	 }
						   if($_FILES[rpfj3][name] != "") { 
						      $downloadname3a = $_FILES[rpfj3][name]; 
						      srand((double)microtime()*1000000);
						      $randval = rand(100,999);
						      $exname1 = explode(".",$_FILES[rpfj3][name]); 
						      end($exname1);
						      $downloadname3b = date("YmdHis").$randval.".".current($exname1); 
						      move_uploaded_file($_FILES[rpfj3][tmp_name],"../download/".$downloadname3b); 
						 	  $downloadname3 = $downloadname3b."*".$downloadname3a; 
						 	 } 
							 
							 
						   $rpname = $_POST[rpname];
						   $rpstext  = $_POST[rpstext];
						   $rptime  = $_POST[rptime];
						   $rptype = $_POST[rptype];
							
									
  				  $sql = "insert into yjs_rps(rpname,rpstext,rpfj1,rpfj2,rpfj3,rptime,rptype)  values ('$rpname','$rpstext','$downloadname1','$downloadname2','$downloadname3','$rptime',' $rptype')";
					


						   mysql_query($sql,$db);
						   mysql_close($db);
						   ?>
                <div align="center">
      <input name="Submit" type="button" class="bt" value="添加成功，返回！" onClick="history.go(-1);"/>
    </div>
                
               
                </td>
              </tr>
          </table>
</body>
</html>
