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
<?php include("../inc/header.php");?>
		<div id="content">
		<div id="maincontent">
				<div class="boxbig">
					<h1 class="titlebig">Latest News</h1>
					<div class="boxbigcontent">
                  
                 
  <table width="550" border="0" align="center" cellpadding="1" cellspacing="2">
              <tr>
                <td width="550" align="right" valign="top"> 
                  <?php
  				     include("../inc/condata.php");
				     $sql = "select * from yjs_ras where ratype='5' order by ratime desc";
				     $result = mysql_query($sql,$db);    
				     if(mysql_num_rows($result) == 0) {
				  ?>
                  <table width="500" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td align="center" valign="bottom"> <table width="150" height="20" border="0" cellpadding="0" cellspacing="0" bgcolor="#0C6AC4">
                          <tr> 
                            <td align="center"><font class="font3">��ʱû���κ���Ϣ</font></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table>
                  <?php }else{
				        if(isset($_GET[page])) $page = $_GET[page];
				        $num = mysql_num_rows($result);
				        $pagesize = 10;
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
				  	    $sql = "select * from yjs_ras where ratype='5' order by ratime desc limit ".$firstline.",".$lastline;
				        $result=mysql_query($sql,$db);
				   ?>
                    
                  <table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td height="10" colspan="3">&nbsp; </td>
                    </tr>
                    <ul class="news">
                    <?php
                        while($rows = mysql_fetch_array($result)){
					
	
	          echo "<li> <span >$rows[ratime]</span><a href=showras.php?id=$rows[autoid] target='_blank'>$rows[raname]</a> </li>";}
	                  ?>	
						
                       </ul>
                    <tr> 
                      <td height="10" colspan="3">	
							
							
					
						 </td>
                    </tr>
                    <tr > 
                      <td ><ul id="listpages"><?php
                        echo "<li class=dotted>";
						echo"&#171; &nbsp������Ϣ��";
						echo" $num";
						echo" ����";
						echo"$pages";
						echo" ҳ ��ǰ��";
						echo" $page";
						echo" ҳ</li>";
                        if ($page > 1)
                            echo " <li><a href=\"sd5.php?page=".intval($page-1)."\" class=\"font3\">��һҳ</a></li> ";
							
                        if ($page <> $pages)
                      	  echo " <li><a href='sd5.php?page=".intval($page+1)."' class=\"font3\">��һҳ</li></a> ";
						  
                      	echo " <li class=dotted>ת��ҳ</li>";
                        echo "<li class=active ><select onChange='MM_jumpMenu(this,0)' class=\"link1\">";
                        echo "<option>��ѡ��</option>";
                        for ($i=1;$i<=$pages;$i++) {
                             echo "<option value='sd5.php?page=$i'>$i</option>";
                             }
                        echo "</li></select>";
						?></ul></td>
                        </tr>
                  
                   
                  </table>
                  <?php } ?>                </td>
              </tr>
            </table>
						
	
					</div>
					<div class="boxbigcontentbottom"></div>
				</div>
			</div> 
		  <div id="nav">
			 
				<div class="boxnav">
					<h3 class="titlenav">�о��ɹ�</h3>
					<div class="boxnavcontent">
						<ul class="menunav">
							<li><a href="sd1.php">���������������о�����������</a></li>
							<li><a href="sd2.php">��Ч���̫���ܵ�ص��Ʊ���������Ӧ���з�</a></li>
							<li><a href="sd3.php">���������������о�����������</a></li>
							<li><a href="sd4.php">���͹���ȼ�ϵ�ص�������з�</a></li>
							<li class="last"><a href="sd5.php">����</a></li>
						</ul>
					</div>
				</div>
		  </div>
			<div class="clear"></div>
</div>
		
		
		</div>
		<?php include("../inc/footer.php")?>
	
</div>

</body>
</html>