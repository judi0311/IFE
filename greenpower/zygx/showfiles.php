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
			<div class="boxbig">
				<h1 class="titlebig1"></h1>
					<div class="boxbigcontent">
						<ul id="listnews">
							<li class="noborder">
  <?php
  		 include("../inc/condata.php");
		 $sql = "select * from yjs_files where autoid='$_GET[id]'";
		 $result = mysql_query($sql,$db);    
		 if(mysql_num_rows($result) == 0) {
	   ?>

     <table width="500" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <td align="center" valign="bottom"> <table width="150" height="20" border="0" cellpadding="0" cellspacing="0" bgcolor="#0C6AC4">
              <tr> 
                <td align="center"><span class="font1"><font color="#FFFFFF">没有此信息</font></span></td>
              </tr>
            </table></td>
        </tr>
      </table>
      <?php }else{
			$rows = mysql_fetch_array($result);
	   ?> 

<ul id="listnews">
						
	<li><h2><a href="#"><?php 
			      echo "$rows[filename]";?></a></h2>						
             
			 <ul class="listinfo">
							<li><a href="#"><?php 
			                    echo "$rows[filetime] ";
			                         ?></a></li>
			</ul>
                                
                                <?php  if($rows[filesimage] != ""){ 
				$imgfile = "../download/" . $rows[filesimage];
				@$isize = GetImageSize($imgfile);
                echo "<img src=\"".$imgfile."\" width=$isize[0] height=$isize[1] hspace=\"13\" vspace=\"4\" align=\"left\">";
			 } 
			 $filestext = str_replace(chr(13),"<br>",$rows[filestext]);
			 $filestext = str_replace(" ","&nbsp;",$filestext);
			
			 ?>
			<p class="posted"><?php echo $filestext;?></p>
								<p>  <?php
			 echo "<span class=\"font1\"> ";
             echo "<br><img src=\"../images/icon_comment.png\" width=\"16\" align=\"absmiddle\">相关附件:</span><br>";
			 if($rows[filefj1] != ""){
			    $rowsfilefj = explode("*",$rows[filefj1]);
			    echo "<a href='../download/".$rowsfilefj[0]."' class=\"font1\" target='_blank'>".$rowsfilefj[1]."</a><br>";
			 }
			 if($rows[filefj2] != ""){
			    $rowsfilefj = explode("*",$rows[filefj2]);
			    echo "<a href='../download/".$rowsfilefj[0]."' class=\"font1\" target='_blank'>".$rowsfilefj[1]."</a><br>";
			 }
			 if($rows[filefj3] != ""){
			    $rowsfilefj = explode("*",$rows[filefj3]);
			    echo "<a href='../download/".$rowsfilefj[0]."' class=\"font1\" target='_blank'>".$rowsfilefj[1]."</a><br>";
			 }
		   ?></p>
   </li>
</ul>
     <?php } ?>			
				</div>
					<div class="boxbigcontentbottom"></div>
				</div>
			</div>
			<div class="clear"></div>
	 </div> 
     <?php include("../inc/footer.php"); ?>	 
	</div>
</body>
</html>