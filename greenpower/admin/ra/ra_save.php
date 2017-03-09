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

                           
						  if($_FILES[rafj1][name] != "") { 
						      $downloadname1a = $_FILES[rafj1][name]; 
						      srand((double)microtime()*1000000);
						      $randval = rand(100,999);
						      $exname1 = explode(".",$_FILES[rafj1][name]); 
						      end($exname1);
						      $downloadname1b = date("YmdHis").$randval.".".current($exname1); 
						      move_uploaded_file($_FILES[rafj1][tmp_name],"../../download/".$downloadname1b); 
						 	  $downloadname1 = $downloadname1b."*".$downloadname1a; 
						 	 }
						   if($_FILES[rafj2][name] != "") { 
						      $downloadname2a = $_FILES[rafj2][name]; 
						      srand((double)microtime()*1000000);
						      $randval = rand(100,999);
						      $exname1 = explode(".",$_FILES[rafj2][name]); 
						      end($exname1);
						      $downloadname2b = date("YmdHis").$randval.".".current($exname1); 
						      move_uploaded_file($_FILES[rafj2][tmp_name],"../download/".$downloadname2b); 
						 	  $downloadname2 = $downloadname2b."*".$downloadname2a; 
						 	 }
						   if($_FILES[rafj3][name] != "") { 
						      $downloadname3a = $_FILES[rafj3][name]; 
						      srand((double)microtime()*1000000);
						      $randval = rand(100,999);
						      $exname1 = explode(".",$_FILES[rafj3][name]); 
						      end($exname1);
						      $downloadname3b = date("YmdHis").$randval.".".current($exname1); 
						      move_uploaded_file($_FILES[rafj3][tmp_name],"../download/".$downloadname3b); 
						 	  $downloadname3 = $downloadname3b."*".$downloadname3a; 
						 	 } 
							 
							 
						   $raname = $_POST[raname];
						   $rastext  = $_POST[rastext];
						   $ratime  = $_POST[ratime];
						   $ratype = $_POST[ratype];
							
									
  				  $sql = "insert into yjs_ras(raname,rastext,rafj1,rafj2,rafj3,ratime,ratype)  values ('$raname','$rastext','$downloadname1','$downloadname2','$downloadname3','$ratime',' $ratype')";
					


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
