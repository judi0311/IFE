<?php include("../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��̨����</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />

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
				     $sql = "select * from yjs_news where ntype=7  order by autoid desc";
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
				  	    $sql = "select * from yjs_news where ntype=7 order by autoid desc limit ".$firstline.",".$lastline;
				        $result=mysql_query($sql,$db);
				   ?>
                  <form name="form1" method="post" action="manage1a_del.php">
                    <table width="760" border="0"  cellpadding="0" cellspacing="0">
                      <tr align="left"> 
                        <th width="49" >&nbsp;</th>
                        <th width="413"   >����</th>
						 <th width="113"  >�������</th>
                        <th width="185" >����ʱ��</th>
                      </tr>
                      
					  <?php
					    $j = 1;
                        while($rows = mysql_fetch_array($result)){	 $ntype=$rows[ntype] ;
                         echo "<tr onMouseOver=\"this.bgColor='#EFEFEF'\" onMouseOut=\"this.bgColor='#FFFFFF'\"><td >";
						 echo "<input name=\"infdel".$j."\" type=\"checkbox\" value=\"".$rows[autoid]."\">";
						 echo "</td><td >";
						 //if($rows[ntype] == "s") echo "<b class=\"link1\">[������Ϣ]</b>";
						 
						 echo "<a href=\"manage1a_view.php?id=$rows[autoid]\" >$rows[ntitle]</a>";
						 echo "</td><td  >  ";
					
						 if ($ntype==1)
						 echo "Ҫ��֪ͨ";
						 else if ($ntype==2)
						 echo "����֪ͨ";
						 else if($ntype==3)
						 echo "��ʦ����";
						  else if($ntype==4)
						 echo "����˶ʿ";
						 else if($ntype==5)
						 echo "�γ̰���";
						  else if($ntype==7)
						 echo "�о�����";
                         echo "</td><td height=\"20\">$rows[ntime]</td></tr>";
						 $j ++;
						 }
					   ?>
                     
                      <tr> 
                        <td  >&nbsp;</td>
                        <td  colspan="3"  > 
                          <?php
                        echo "������Ϣ��: $num �� �� $pages ҳ ��ǰ�� $page ҳ";
                        if ($page > 1)
                            echo " <a href=\"manage1a.php?page=".intval($page-1)."\" class=\"font2\">��һҳ</a> ";
							
                        if ($page <> $pages)
                      	  echo " <a href='manage1a.php?page=".intval($page+1)."' class=\"font2\">��һҳ</a> ";
						  
                      	echo " ת��ҳ";
                        echo "<select onChange='MM_jumpMenu(this,0)' class=\"link1\">";
                        echo "<option>��ѡ��</option>";
                        for ($i=1;$i<=$pages;$i++) {
                             echo "<option value='manage1a.php?page=$i'>$i</option>";
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
