<?php include("../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
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
<h2>删除/修改</h2>

                  <?php
  				     include("../../inc/condata.php");
				     $sql = "select * from yjs_files   order by autoid desc";
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
                            <td align="left"><span >没有任何信息</span></td>
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
				  	    $sql = "select * from yjs_files order by autoid desc limit ".$firstline.",".$lastline;
				        $result=mysql_query($sql,$db);
				   ?>
                  <form name="form1" method="post" action="xzzx_del.php">
                    <table width="760" border="0"  cellpadding="0" cellspacing="0">
                      <tr align="left"> 
                        <th width="49" >&nbsp;</th>
                        <th width="413"   >题目</th>
						 <th width="113"  >时间</th>
                       
                      </tr>
                      
					  <?php
					    $j = 1;
                        while($rows = mysql_fetch_array($result)){	 $filetype=$rows[filetype] ;
                         echo "<tr onMouseOver=\"this.bgColor='#EFEFEF'\" onMouseOut=\"this.bgColor='#FFFFFF'\"><td >";
						 echo "<input name=\"infdel".$j."\" type=\"checkbox\" value=\"".$rows[autoid]."\">";
						 echo "</td><td >";
						 //if($rows[filetype] == "s") echo "<b class=\"link1\">[滚动信息]</b>";
						 
						 echo "<a href=\"xzzx_show_view.php?id=$rows[autoid]\" >$rows[filename]</a>";
						 echo "</td><td  >  ";
					
						 if ($filetype==1)
						 echo "常用网站";
						 else if ($filetype==2)
						 echo "科研网站";
						 else if($filetype==3)
						 echo "知名期刊网站";
						  else if($filetype==4)
						 echo "知名课题组";
						 echo "</td><td height=\"20\">$rows[filetime]</td></tr>";
						 $j ++;
						 }
					   ?>
                     
                      <tr> 
                        <td  >&nbsp;</td>
                        <td  colspan="3"  > 
                          <?php
                        echo "共有信息数: $num 个 共 $pages 页 当前第 $page 页";
                        if ($page > 1)
                            echo " <a href=\"xzzx_show.php?page=".intval($page-1)."\" class=\"font2\">上一页</a> ";
							
                        if ($page <> $pages)
                      	  echo " <a href='xzzx_show.php?page=".intval($page+1)."' class=\"font2\">下一页</a> ";
						  
                      	echo " 转到页";
                        echo "<select onChange='MM_jumpMenu(this,0)' class=\"link1\">";
                        echo "<option>请选择</option>";
                        for ($i=1;$i<=$pages;$i++) {
                             echo "<option value='xzzx_show.php?page=$i'>$i</option>";
                             }
                        echo "</select>";
						?>                        </td> 
                      </tr>
                      <tr> 
                        <td align="center">&nbsp;</td>
                        <td colspan="3"> <input type="submit" name="Submit" class="bt"value="确认删除"> 
                          <input type="reset" name="Submit2" value="重新选择" class="bt">
                          <input name="page" type="hidden" id="item" value="<?php echo $_REQUEST[page]; ?>"></td>
                      </tr>
                    </table>
                  </form>
				  <?php } ?>
             
</body>
</html>
