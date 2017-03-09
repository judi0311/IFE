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
					<h1 class="titlebig">研究方向</h1>
					<div class="boxbigcontent">
						<ul id="listnews">
							<li class="noborder">
			
	<ul class="listinfodet">
						  </ul>
								<div class="clear"></div>
						  </li>
						</ul>
						
						
				  </div>
					<div class="boxbigcontentbottom"></div>
				</div>
			</div>
			<div id="nav">
			 
				<div class="boxnav">
					<h3 class="titlenav">研究方向介绍</h3>
					<div class="boxnavcontent">
						<ul class="menunav">
							<li><a href="../sb/sb1.php">超级电容超净间</a></li>
							<li><a href="../sb/sb2.php">复合电源台架实验室</a></li>
							<li><a href="../sb/sb3.php">电解水制氢装置</a></li>
							<li><a href="../sb/sb4.php">燃料电池测试装置一套</a></li>
							<li><a href="../sb/sb5.php">管式炉，箱式炉</a></li>
						    <li><a href="../sb/sb6.php">手套箱</a></li>
						    <li class="last"><a href="../sb/sb7.php">化学实验室</a></li>
						</ul>
						
					</div>
				</div>
		  </div>
			<div class="clear"></div>
		</div>
		<?php include("../inc/footer.php")?>
	</div>
</div>

</body>
</html>