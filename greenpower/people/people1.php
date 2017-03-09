<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>团队成员</title>
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
			
			<div id="maincontent">
				<div class="boxbig">
					<h1 class="titlebig">团队成员</h1>
					<div class="boxbigcontent">
                  
                    <?php
	require_once '../inc/condata.php';?>
     <?php  $id=$_GET[id];
	$query = mysql_query("select * from yjs_people where type=1 ");
	 
	 while($result = @mysql_fetch_array($query) )
	{
	$id[]=$result[autoid];
	$name[]=$result[name];
	$xb[]=$result[xb];
   	$ename[]=$result[ename];
	$sd[]=$result[sd];
	$image[]=$result[image];
	$pos[]=$result[pos];
	$address[]=$result[address];
	$tel[]=$result[tel];
	$email[]=$result[email];
	$detail[]=$result[detail];
	$num=count($name);
	}
	?>
	<?php 	for($i=0;$i<$num;$i++)
	
	{?>

<ul id="listcomment">
<li>
 <?php 

		           		          
				  
			       echo "<img " ;
				   echo"width=120 height=145 ";
				   echo "src=";
				   echo "../uploads/";
				   echo "$image[$i]";
				   echo ">";
				  
				   echo "</a>";
				?>
				
		
        <div   class="placecomment">
		<h3><strong>姓&nbsp&nbsp名</strong>&nbsp&nbsp<?php 
				echo $name[$i];
				echo "</a>";
			?>  </h3>
        <h3><strong>性别</strong>
		<?php
		  $xb1=$xb[$i];
		  if($xb1==1) echo "男";
		  else if($xb1==2)echo "女";
		  ?> </h3>
        <h3><strong>身&nbsp&nbsp份&nbsp&nbsp </strong> <?php echo 博士导师?> </h3> 
		<h3><strong>电话&nbsp</strong><?php echo $tel[$i]; ?> </h3> 
		<h3><strong>电子邮箱&nbsp</strong><?php echo $email[$i]; ?> </h3> 
		<h3><strong>工作单位&nbsp</strong><?php echo $address[$i]; ?> </h3>    
        <h3><strong>研究方向&nbsp</strong><?php echo $sd[$i]; ?> </h3>
        <h3><strong>科研成果&nbsp</strong><?php echo $detail[$i]; ?> </h3>
        
        
  
   </div>
   </li>	
   <div class="clear"></div>
   </ul>

	<?php  } ?>
    
						
						
	
					</div>
					<div class="boxbigcontentbottom"></div>
				</div>
			</div>
			<div id="nav">
				
				
				
				
				<div class="boxnav">
					<h3 class="titlenav"> 团队成员</h3>
					<div class="boxnavcontent">
						<ul class="menunav">
							<li><a href="people1.php">博士导师</a></li>
							<li><a href="people2.php">硕士导师</a></li>
							<li><a href="people3.php">博士生</a></li>
							<li><a href="people4.php">硕士生</a></li>
							<li class="last"><a href="people5.php">保研生</a></li>
						</ul>
					</div>
				</div>
				
			</div>
			<div class="clear"></div>
		

        
           
    
	</div>
	   <?php include("../inc/footer.php"); ?>	 
</div>

</body>
</html>