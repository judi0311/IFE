<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
     <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"> 
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
	<script src="script/jquery.js" type="text/javascript"></script>
	<script src="script/ui_core.js" type="text/javascript"></script>
	<script src="script/ui_tabs.js" type="text/javascript"></script>
	<script src="script/lightbox.js" type="text/javascript"></script>
	<script src="script/twitter.js" type="text/javascript"></script>
	<script src="script/gettwitter.js" type="text/javascript"></script>
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

<div id="container">
<div id="wrapper">
   <?php include("../inc/header.php"); ?>
	<div id="content">
    <div class="boxbigcontent">

		
       <table width="765" border="0" cellspacing="0" cellpadding="0">
        <tr>        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row"><table width="750" border="1" cellspacing="5" cellpadding="0">
            <tr>
              <td><?php
  		 include("../inc/condata.php");
		 $sql = "select * from yjs_news where  autoid='$_GET[id]'";
		 $result = mysql_query($sql,$db);  //  
		 if(mysql_num_rows($result) == 0) {
	   ?>
                <table width="500" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td align="center" valign="bottom"><table width="150" height="20" border="0" cellpadding="0" cellspacing="0" bgcolor="#0C6AC4">
                          <tr>
                            <td align="center"><span class="font-12-000000"><font color="#FFFFFF">没有此信息</font></span></td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>
                <?php }else{
			$rows = mysql_fetch_array($result);//将数据表中内容存在数组
	   ?>
                  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td align="left"><div align="center">
                          <table width="500" border="0">
                            <tr>
                              <td align="center" valign="middle"><br />
                                    <?php 
			      echo "<span class=\"STYLE1\">$rows[ntitle]</span><br>";
			      
			   ?>
                                    <br />
                                </span>
                                  <hr /></td>
                            </tr>
                          </table>
                        <br />
                        <span class="STYLE9">提交部门:</span>
                        <?php 
					
			    
			      echo "<span class=\"STYLE1\">$rows[nbumen]</span>";
			   ?>
                            <span class="STYLE9">提交时间：</span>
                            <?php 
			    
			      echo "<span class=\"STYLE1\">$rows[ntime]</span>";
			   ?>
                            <br />
                        </span></div>
                           <br />
                          <?php
			 echo "<span class=\"STYLE9\"> ";
			 if($rows[nimage] != ""){ 
				$imgfile = "../upimages/" . $rows[nimage];
				@$isize = GetImageSize($imgfile);
                echo "<img src=\"".$imgfile."\" width=$isize[0] height=$isize[1] hspace=\"13\" vspace=\"4\" align=\"left\">";
			 } 
			 $ntext = str_replace(chr(13),"<br>",$rows[ntext]);
			 $ntext = str_replace(" ","&nbsp;",$ntext);
			 echo $ntext;
			 echo "</span>";
			 ?>
                        </span></td>
                    </tr>
                  </table>
                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td align=\"left\"><?php
			 echo "<span class=\"STYLE9\"> ";
             echo "<br><br><img src=\"../images/list3.gif\" width=\"8\" align=\"absmiddle\"><font color=\"#000000\"> 相关附件： </font></span>";
			 if($rows[nfj1] != ""){
			    $rowsnfj = explode("*",$rows[nfj1]);
			    echo "<a href='../download/".$rowsnfj[0]."' class=\"STYLE9\" target='_blank'>".$rowsnfj[1]."</a><br>";
			 }
			 if($rows[nfj2] != ""){
			    $rowsnfj = explode("*",$rows[nfj2]);
			    echo "　　　　　<a href='../download/".$rowsnfj[0]."' class=\"STYLE9\" target='_blank'>".$rowsnfj[1]."</a><br>";
			 }
			 if($rows[nfj3] != ""){
			    $rowsnfj = explode("*",$rows[nfj3]);
			    echo "　　　　　<a href='../download/".$rowsnfj[0]."' class=\"STYLE9\" target='_blank'>".$rowsnfj[1]."</a><br>";
			 }
			 ?></td>
                    </tr>
                  </table>
                <?php } ?></td>
            </tr>
            <tr>
              <th scope="row"><p>&nbsp;</p></th>
            </tr>
          </table>
    
    
</div>
				
                     </div>
			

				<?php include("../inc/footer.php"); ?>	
                </div>
                </div>

</body>
</html>