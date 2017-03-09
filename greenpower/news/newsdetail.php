<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>Your Website Title</title>
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Kwywords" />
	<style type="text/css" media="all">@import "../style/style.css";</style>
	<!--[if lt IE 7]>
	<style type="text/css">@import "style/ie.css";</style>
	<script src="script/DD_belatedPNG.js" type="text/javascript"></script>
	<script type="text/javascript">
		DD_belatedPNG.fix('#logo span, #loginarea, #panellogin, .textboxlogin, img');
	</script>
	<![endif]-->
	<!--[if IE 7]><style type="text/css">@import "style/ie7.css";</style><![endif]-->
	<script src="../script/jquery.js" type="text/javascript"></script>
	<script src="../script/ui_core.js" type="text/javascript"></script>
	<script src="../script/ui_tabs.js" type="text/javascript"></script>
	<script src="../script/lightbox.js" type="text/javascript"></script>
	<script src="../script/twitter.js" type="text/javascript"></script>
	<script src="../script/gettwitter.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(function() {
		$("#butslide").click(function(){
				$("#panellogin").slideToggle("fast");
				$(this).toggleClass("active"); return false;
		}); 
		$('#tabsnav').tabs({ fx: { opacity: 'toggle' } });
		$('a.popup').lightBox({fixedNavigation:true});
	});
	</script>
</head>
<body>
<p><a class="skiplink" href="#maincontent">Skip over navigation</a></p>
<div id="container">
	<div id="wrapper">
	 <?php include("../inc/header.php"); ?>
		<div id="content">
		
<table width="860" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="860" align="right" valign="top"> 
                  <?php
  				     include("../inc/condata.php");
				     $sql = "select * from yjs_news where ntype='1' order by ntime desc";
				     $result = mysql_query($sql,$db);    
				     if(mysql_num_rows($result) == 0) {
				  ?>
                  <table width="500" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td align="center" valign="bottom"> <table width="150" height="20" border="0" cellpadding="0" cellspacing="0" bgcolor="#0C6AC4">
                          <tr> 
                            <td align="center"><font class="font3">暂时没有任何信息</font></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table>
                  <?php }else{
				        if(isset($_GET[page])) $page = $_GET[page];
				        $num = mysql_num_rows($result);
				        $pagesize = 5;
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
				  	    $sql = "select * from yjs_news where ntype='1' order by ntime desc limit ".$firstline.",".$lastline;
				        $result=mysql_query($sql,$db);
				   ?>
                    
                  <table width="860" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td height="10" colspan="3">&nbsp; </td>
                    </tr>
                    <ul class="news">
                    <?php
                        while($rows = mysql_fetch_array($result)){
					       echo "<img src=\"../images/bullet1.png\" width=\"12\" height=\"12\"> ";
					
	
	          echo "<li><span>$rows[ntime]</span> <a href=shownews.php?id=$rows[autoid] target='_blank'>$rows[ntitle]</a> </li>";}
	                  ?>	
						
                       </ul>
                    <tr> 
                      <td height="10" colspan="3">&nbsp; </td>
                    </tr>
                    <tr bgcolor="#999999"> 
                      <td height="20" colspan="2" bgcolor="#CCCCCC" class="font3"><?php
                        echo "&nbsp;共有信息数: $num 个 共 $pages 页 当前第 $page 页";
                        if ($page > 1)
                            echo " <a href=\"newsdetail.php?page=".intval($page-1)."\" class=\"font3\">上一页</a> ";
							
                        if ($page <> $pages)
                      	  echo " <a href='newsdetail.php?page=".intval($page+1)."' class=\"font3\">下一页</a> ";
						  
                      	echo " 转到页";
                        echo "<select onChange='MM_jumpMenu(this,0)' class=\"link1\">";
                        echo "<option>请选择</option>";
                        for ($i=1;$i<=$pages;$i++) {
                             echo "<option value='newsdetail.php?page=$i'>$i</option>";
                             }
                        echo "</select>";
						?></td>
                      <td width="76" height="20" bgcolor="#CCCCCC">&nbsp;</td>
                    </tr>
                    <tr> 
                      <td width="28" height="30" align="center">&nbsp;</td>
                      <td width="621" height="30">&nbsp; </td>
                      <td height="30">&nbsp;</td>
                    </tr>
                  </table>
                  <?php } ?>                </td>
              </tr>
            </table>
        
        
        
			<div id="maincontent"></div>
			<div class="clear"></div>
		</div>
		
       	</div> 
       <?php include("../inc/footer.php"); ?>	 
        
        

</div>

</body>
</html>