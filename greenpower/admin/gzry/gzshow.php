<?php include("../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��̨����</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<h2>�Ŷ���Ա��Ϣ�޸�</h2>
<?php
	require_once '../../inc/condata.php';
	
?>

   <?php
  				     include("../../inc/condata.php");
				     $sql = "select * from yjs_people  order by autoid desc";
				     $result = mysql_query($sql,$db);    
				     if(mysql_num_rows($result) == 0) {
				  ?>
                  <table width="760" border="0" cellpadding="0" cellspacing="0">
                    <tr>
	    <td height="25" colspan="2"></td>
       </tr>
	  <tr>  
					<tr> 
                      <td align="center" valign="bottom">
<table width="150"  border="0" cellpadding="0" cellspacing="0" bgcolor="#0C6AC4">
                          <tr> 
                            <td align="left"><span >û���κ���Ϣ</span></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table> 
				  <?php }else{
				        if(isset($_GET[page])) $page = $_GET[page];
				        $num = mysql_num_rows($result);
				        $pagesize = 15;
				        $pages = $num % $pagesize == 0 ? $num / $pagesize : floor($num / $pagesize) + 1; 
				        if(isset($page)) {  
				          $page = $page < 1 ? 1 : $page;
				          $page = $page > $pages ? $pages : $page;
				          } else {
				              $page = 1;
				     	}	   
				        $firstline = ($page - 1) * $pagesize;               
				  	    $lastline = $page * $pagesize > $num ? $num - ($page - 1) * $pagesize : $pagesize;
				  	    mysql_free_result($result);
				  	    $sql = "select * from yjs_people order by autoid desc limit ".$firstline.",".$lastline;
				        $result=mysql_query($sql,$db);
				   ?>
                  <form name="form1" method="post" action="gzry_del.php">
                    <table width="760" border="0"  cellpadding="0" cellspacing="0">
                      <tr align="left"> 
                        <th width="60" >&nbsp;</th>
                        <th width="150"   >����</th>
						 <th width="550"  >���</th>
                       
                      </tr>
                      
					  <?php
					    $j = 1;
                        while($rows = mysql_fetch_array($result)){	 $type=$rows[type] ;
                         echo "<tr onMouseOver=\"this.bgColor='#EFEFEF'\" onMouseOut=\"this.bgColor='#FFFFFF'\"><td >";
						 echo "<input name=\"infdel".$j."\" type=\"checkbox\" value=\"".$rows[autoid]."\">";
						 echo "</td><td >";
						 //if($rows[ntype] == "s") echo "<b class=\"link1\">[������Ϣ]</b>";
						 
						echo "<a href=\"gzgai.php?id=$rows[autoid]\" >$rows[name]</a>";
						 echo "</td><td  >  ";
						
						 
						 
						 
						
						 if ($type==1)
						 echo "��ʿ��ʦ";
						 else if ($type==2)
						 echo "˶ʿ��ʦ";
						 else if($type==3)
						 echo "��ʿ��";
						  else if($type==4)
						 echo "˶ʿ��";
						  else if($type==5)
						 echo "�ѱ�ҵѧ��";
						 
                        
						 $j ++;
						 }
					   ?>
                     
                      <tr> 
                        <td  >&nbsp;</td>
                        <td  colspan="3"  > 
                          <?php
                        echo "������Ϣ��: $num �� �� $pages ҳ ��ǰ�� $page ҳ";
                        if ($page > 1)
                            echo " <a href=\"gzshow.php?page=".intval($page-1)."\" class=\"font2\">��һҳ</a> ";
							
                        if ($page <> $pages)
                      	  echo " <a href='gzshow.php?page=".intval($page+1)."' class=\"font2\">��һҳ</a> ";
						  
                      	echo " ת��ҳ";
                        echo "<select onChange='MM_jumpMenu(this,0)' class=\"link1\">";
                        echo "<option>��ѡ��</option>";
                        for ($i=1;$i<=$pages;$i++) {
                             echo "<option value='gzshow.php?page=$i'>$i</option>";
                             }
                        echo "</select>";
						?>                        </td> 
                      </tr>
                      <tr> 
                        <td align="center">&nbsp;</td>
                        <td colspan="3"> <input type="submit" name="Submit" class="bt"value="ȷ��ɾ��"> 
                          <input type="reset" name="Submit2" value="����ѡ��" class="bt">
                          <input name="page" type="hidden" id="item" value="<?php echo $_REQUEST[page]; ?>"></td>
                      </tr>
                    </table>
                  </form>
				  <?php } ?>
             



</body>
</html>
