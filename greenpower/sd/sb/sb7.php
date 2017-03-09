<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>Your Website Title</title>
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Kwywords" />
	<style type="text/css" media="all">@import "../../style/style.css";</style>
	<!--[if lt IE 7]>
	<style type="text/css">@import "style/ie.css";</style>
	<script src="script/DD_belatedPNG.js" type="text/javascript"></script>
	<script type="text/javascript">
		DD_belatedPNG.fix('#logo span, #loginarea, #panellogin, .textboxlogin, img');
	</script>
	<![endif]-->
	<!--[if IE 7]><style type="text/css">@import "style/ie7.css";</style><![endif]-->
	<script src="../../script/jquery.js" type="text/javascript"></script>
	<script src="../../script/ui_core.js" type="text/javascript"></script>
	<script src="../../script/ui_tabs.js" type="text/javascript"></script>
	<script src="../../script/lightbox.js" type="text/javascript"></script>
	<script src="../../script/twitter.js" type="text/javascript"></script>
	<script src="../../script/gettwitter.js" type="text/javascript"></script>
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
<?php include("../../inc/header1.php");?>
		<div id="content">

		
		<ul>
						<li><img src="../../images/7.jpg" alt="Images" width="400" height="300" class="imgleft" />
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat, mi eu posuere facilisis, dolor sapien auctor orci, vel posuere velit nibh ac tortor. Donec nunc orci, interdum vel iaculis nec, tincidunt sed diam. Nunc a arcu erat. Integer sed odio tellus, a porta purus. <strong>Proin eu metus nulla, a aliquet ante</strong>.</p>
						</li>
						
		  </ul>
		
		
		
		
		
		  <div class="clear"></div>
</div>
		<?php include("../../inc/footer.php")?>
	</div>
</div>

</body>
</html>