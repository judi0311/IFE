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
<h2>����ɾ��/�޸�</h2>

                  <?php
  				     include("../../inc/condata.php");
					
					  $zzxm=$_POST["name3"]; 
                      $lwtm=$_POST["timu"]; 
				     $qzym=$_POST["time3"]; 
					
					 
if($zzxm!= null){ 
$a = " and zzxm1 like '%$zzxm%'or zzxm2 like '%$zzxm%'or zzxm3 like '%$zzxm%'or zzxm4 like '%$zzxm%'";} 
if($lwtm != null){ 
$b= " and lwtm like '%$lwtm%'";} 
if($qzym!= null){ 
$c= " and qzym like '%$qzym%'";} 
$q= "SELECT * FROM yjs_lwsj where (1=1)"; 
$q.=$a; 
$q.=$b; 
$q.=$c; 
 $result = mysql_query($q,$db);  

				       
				     if(@mysql_num_rows($result) == 0) {
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
                            <td align="left"><span >û�з��������Ľ��</span></td>
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
						$sql = "select * from yjs_lwsj where (1=1) order by autoid desc limit ".$firstline.",".$lastline;
				  	   // $sql = "select * from yjs_lwsj order by autoid desc limit ".$firstline.",".$lastline;
				       $result=mysql_query($q,$db);
				   ?>
                
                    <table width=100% border="0"  cellpadding="0" cellspacing="0">
                      <tr align="left"> 
					
                       <th width="59" bgcolor="#7F9DB9">�����</th>
                      <th width="257" bgcolor="#7F9DB9" ><div align="center">������Ŀ</div></th>
					    <th width="82"  bgcolor="#7F9DB9"><div align="center">��һ����</div></th>
				      <th width="74" bgcolor="#7F9DB9"><div align="center">�ڶ�����</div></th>
				      <th width="69" bgcolor="#7F9DB9"><div align="center">��������</div></th>
					  <th width="69" bgcolor="#7F9DB9"><div align="center">��������</div></th>
                      <th width="117" bgcolor="#7F9DB9" ><div align="center">�ڿ�����ȫ�ƣ�</div></th>
                      <th width="113" bgcolor="#7F9DB9" ><div align="center">�꣬���ڣ�����ֹҳ��</div></th>
                      <th width="114" bgcolor="#7F9DB9" ><div align="center">��������</div></th>
                      <th width="158" bgcolor="#7F9DB9" ><div align="center">��ע </div></th>
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
                         echo "<tr onMouseOver=\"this.bgColor='#EFEFEF'\" onMouseOut=\"this.bgColor='#FFFFFF'\"><td >";
						
						
						   echo "$tj1 </td><td >";
						 echo "<a href=\"lwsj1a_view.php?id=$rows[autoid]\" >$rows[lwtm]</a>";
						echo "</td><td  >$rows[zzxm1]";
						   if($sf1==1) echo "<div class='zhuyi' >(��ʦ) </div>";
		                  else if($sf1==2)echo "<div class='zhuyi'>(ѧ��) </div>";
						  echo "</td><td  >$rows[zzxm2]";
						  if($sf2==1) echo "<div class='zhuyi' >(��ʦ) </div>";
		                  else if($sf2==2)echo "<div class='zhuyi'>(ѧ��) </div>";
						echo "</td><td  >$rows[zzxm3] ";
						if($sf3==1) echo "<div class='zhuyi' >(��ʦ) </div>";
		                  else if($sf3==2)echo "<div class='zhuyi'>(ѧ��) </div>";
						echo "</td><td  >$rows[zzxm4]";
						if($sf4==1) echo "<div class='zhuyi' >(��ʦ) </div>";
		                  else if($sf4==2)echo "<div class='zhuyi'>(ѧ��) </div>";
					
						  
						   echo "</td><td  >$rows[qkmc]";
						    echo "</td><td  >$rows[qzym]";
							
							    echo "</td><td  >$rows[jslx]";
							 echo "</td><td  >$rows[beiz]</td></tr>";
						 $j ++;
						 }
					   ?>
                     
                      <tr> 
                        <td  >&nbsp;</td>
                        <td  colspan="7"  > 
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
                    
                    </table>
             
				  <?php } ?>
			    <form name="form2" method="post" action="lwsj2a.php">
                          <table width="760" border="1" cellspacing="0" cellpadding="5">
                            
                            
                            <tr bgcolor="#00CC66">
                              <td bgcolor="#7F9DB9">��ѯ</td>
                              <td width="670" colspan="8" bgcolor="#7F9DB9" class="STYLE4">����������
                                <input name="name3" type="text" id="name3"></td>
                            </tr>
                            <tr bgcolor="#00CC66">
                              <td bgcolor="#7F9DB9">&nbsp;</td>
                              <td colspan="8" bgcolor="#7F9DB9" class="STYLE4">������Ŀ��
                              <input name="timu" type="text" id="timu"></td>
                            </tr>
                            <tr bgcolor="#00CC66">
                              <td bgcolor="#7F9DB9">&nbsp;</td>
                              <td colspan="8" bgcolor="#7F9DB9" class="STYLE4">����ʱ�䣺
                              <input name="time3" type="text" id="time3"></td>
                            </tr>
                            <tr bgcolor="#00CC66">
                              <td bgcolor="#7F9DB9">&nbsp;</td>
                              <td colspan="8" bgcolor="#7F9DB9" class="STYLE4">&nbsp;</td>
                            </tr>
                            <tr bgcolor="#00CC66">
                              <td width="64" bgcolor="#7F9DB9">&nbsp;</td>
                              <td colspan="8" bgcolor="#7F9DB9" class="STYLE4"><span class="font2">
                                <input type="submit" name="Submit3" value="ȷ������">
                                <input type="reset" name="Submit22" value="����ѡ��">
                              </span></td>
                            </tr>
                           
                          </table>
                        </form>
             
</body>
</html>
