<?php include("../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��̨����</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
function MM_jumpMenu(selObj,restore){ //v3.0
  eval("parent.location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<body>
<h2 width=100% >�����������</h2>

                  <?php
  				     include("../../inc/condata.php");
				     $sql = "select * from yjs_lwsj   order by autoid desc";
				     $result = mysql_query($sql,$db);    
				     if(mysql_num_rows($result) == 0) {
				  ?>
                  <table width=100% border="0" cellpadding="0" cellspacing="0">
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
				  	    $sql = "select * from yjs_lwsj order by autoid desc limit ".$firstline.",".$lastline;
				        $result=mysql_query($sql,$db);
				   ?>
                  <form name="form1" method="post" action="lwsj1a_del.php">
                    <table width=100% border="0"  cellpadding="0" cellspacing="0">
                      <tr align="left"> 
					  <th width="32" bgcolor="#7F9DB9">&nbsp;</th>
                       <th width="59" bgcolor="#7F9DB9">�����</th>
                      <th width="283" bgcolor="#7F9DB9" ><div align="center">������Ŀ</div></th>
					    <th width="64"  bgcolor="#7F9DB9"><div align="center">��һ����</div></th>
				      <th width="73" bgcolor="#7F9DB9"><div align="center">�ڶ�����</div></th>
				      <th width="72" bgcolor="#7F9DB9"><div align="center">��������</div></th>
					  <th width="67" bgcolor="#7F9DB9"><div align="center">��������</div></th>
                      <th width="166" bgcolor="#7F9DB9" ><div align="center">�ڿ�����ȫ�ƣ�</div></th>
                      <th width="126" bgcolor="#7F9DB9" ><div align="center">�꣬���ڣ�</div></th>
                      <th width="89" bgcolor="#7F9DB9" ><div align="center">��������</div></th>
                      <th width="98" bgcolor="#7F9DB9" ><div align="center">��ע </div></th>
                      </tr>
                      
					  <?php
					      $j = 1;
						
                        while($rows = mysql_fetch_array($result)){
							 $sf1=$rows[sf1];
						 $sf2=$rows[sf2];
						 $sf3=$rows[sf3];
						 $sf4=$rows[sf4];
						  $tj1=$rows[tijiao];
						  if($tj1==0) $tj1="δ���";
						  else if($tj1==1)$tj1= "�����";
                         echo "<tr onMouseOver=\"this.bgColor='#EFEFEF'\" onMouseOut=\"this.bgColor='#FFFFFF'\"><td height=\"20\" align=\"center\">";
						 echo "<input name=\"infdel".$j."\" type=\"checkbox\" value=\"".$rows[autoid]."\">";
						  echo "</td><td height=\"20\" >$tj1
		  ;";
						   echo "</td><td >";
						 echo "<a href=\"lwsj1a_view.php?id=$rows[autoid]\" >$rows[lwtm]</a>";
						 echo "</td><td height=\"20\" >$rows[zzxm1]";
						   if($sf1==1) echo "<div class='zhuyi' >(��ʦ) </div>";
		                  else if($sf1==2)echo "<div class='zhuyi'>(ѧ��) </div>";
						  echo "</td><td height=\"20\" >$rows[zzxm2]";
						  if($sf2==1) echo "<div class='zhuyi' >(��ʦ) </div>";
		                  else if($sf2==2)echo "<div class='zhuyi'>(ѧ��) </div>";
						echo "</td><td height=\"20\" >$rows[zzxm3] ";
						if($sf3==1) echo "<div class='zhuyi' >(��ʦ) </div>";
		                  else if($sf3==2)echo "<div class='zhuyi'>(ѧ��) </div>";
						echo "</td><td height=\"20\" >$rows[zzxm4]";
						if($sf4==1) echo "<div class='zhuyi' >(��ʦ) </div>";
		                  else if($sf4==2)echo "<div class='zhuyi'>(ѧ��) </div>";
					
						   echo "</td><td height=\"20\" >$rows[qkmc]";
						    echo "</td><td height=\"20\" >$rows[qzym]";
							
							    echo "</td><td height=\"20\" >$rows[jslx]";
							 echo "</td><td height=\"20\" >$rows[beiz]</td></tr>";
						 $j ++;
						 }
					   ?>
                     
                      <tr> 
                        <td  >&nbsp;</td>
                        <td  colspan="10"  > 
                          <?php
                        echo "������Ϣ��: $num �� �� $pages ҳ ��ǰ�� $page ҳ";
                        if ($page > 1)
                            echo " <a href=\"lwsj1a.php?page=".intval($page-1)."\" class=\"font2\">��һҳ</a> ";
							
                        if ($page <> $pages)
                      	  echo " <a href='lwsj1a.php?page=".intval($page+1)."' class=\"font2\">��һҳ</a> ";
						  
                      	echo " ת��ҳ";
                        echo "<select onChange='MM_jumpMenu(this,0)' class=\"link1\">";
                        echo "<option>��ѡ��</option>";
                        for ($i=1;$i<=$pages;$i++) {
                             echo "<option value='lwsj1a.php?page=$i'>$i</option>";
                             }
                        echo "</select>";
						?>                        </td> 
						
                      </tr>
                      <tr> 
                        <td align="center">&nbsp;</td>
                        <td colspan="10"> <input type="submit" name="Submit" class="bt"value="ȷ��ɾ��"> 
                          <input type="reset" name="Submit2" value="����ѡ��" class="bt">
                          <input name="page" type="hidden" id="item" value="<?php echo $_REQUEST[page]; ?>"></td>
                      </tr>
                    </table>
                  </form>
				  <?php } ?>
             
</body>
</html>
