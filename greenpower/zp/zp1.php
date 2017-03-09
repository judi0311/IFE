<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>Your Website Title</title>
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Kwywords" />
	<style type="text/css" media="all">
	@import "../style/style.css";    .STYLE5 {font-size: x-large}
    .STYLE6 {font-size: xx-large}
    .STYLE7 {font-size: large}
    </style>
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
		
		<ul>
						<li class="STYLE5">
						<li><h1 align="center" class="STYLE6">招聘启事</h1>
							
							<p class="STYLE5"> 1.招生招聘：课题组热忱欢迎具有物理、电子、材料、化学、环境等相关专业的学生报考本课题组的博士研究生、直博研究生和硕士研究生。另外课题组长期招聘联合培养研究生、本科毕业设计学生以及访问学者。</p>
							<p class="STYLE5">						    </p>
							<p class="STYLE5">
							2.课题组长年招聘博士后、讲师、副教授、教授。要求具有从事太阳能电池/超级电容器/汽车电子等相关方向研究背景和经验。 </p>
						<p class="STYLE7"><span class="STYLE5">☆☆ 如对本课题组感兴趣，欢迎报考学生和应聘者请将个人详细简历发送至whan@jlu.edu.cn。如有任何问题，欢迎与我们联系咨询。</span></p>
					</li>
		</ul>
		<div class="clear"></div>
</div>
		<?php include("../inc/footer.php")?>
	</div>
</div>

</body>
</html>