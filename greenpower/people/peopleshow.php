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
	<script src="../news/script/jquery.js" type="text/javascript"></script>
	<script src="../news/script/ui_core.js" type="text/javascript"></script>
	<script src="../news/script/ui_tabs.js" type="text/javascript"></script>
	<script src="../news/script/lightbox.js" type="text/javascript"></script>
	<script src="../news/script/twitter.js" type="text/javascript"></script>
	<script src="../news/script/gettwitter.js" type="text/javascript"></script>
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

		 <?php
	require_once '../inc/condata.php';
	$id=$_GET[id];
	$query = mysql_query("select * from yjs_people where autoid = $id");
	$result = mysql_fetch_array($query);
?>
		 
		
      <div id="colTwo">	
	
	<?php
	require_once '../inc/condata.php';?>
	
	
	 <?php  $id=$_GET[id];
	$query = mysql_query("select * from yjs_gzry  ");
	 
	while($result = @mysql_fetch_array($query) )
	{
	$name[]=$result[name];
   	$xb[]=$result[xb];
	$image[]=$result[image];
	$type[]=$result[type];
	$gzdw[]=$result[gzdw];
	$address[]=$result[address];
	$tel[]=$result[tel];
	$email[]=$result[email];
	$sd[]=$result[sd];
	$detail[]=$result[detail];
	$num=count($name);
	}
	?>
	<?php 	for($i=0;$i<$num;$i++)
	
	{?>

	<div>
	  <div>
        <table width="730" border="0"  cellpadding="2" cellspacing="1">
          <tr class="rowlight">
            <td width="137" rowspan="5"  align="center"  ><input name="image" id="img" type="image" width="140" height="160"  align="middle" src="../uploads/<?php echo $image[$i]; ?>" /></td>
            <td width="87" height="18" ><div  >姓名</div></td>
            <td width="164"><?php echo $name[$i]; ?> </td>
            <td width="66" ><div  >性别</div></td>
            <td width="216"><label>
              <?php
		  $xb1=$xb[$i];
		  if($xb1==1) echo "男";
		  else if($xb1==2)echo "女";
		  ?>
            </label></td>
          </tr>
          <tr  class="rowdark">
            <td height="18" ><div  >籍贯</div></td>
            <td><?php echo $address[$i]; ?></td>
            <td><div  >电话</div></td>
            <td><?php echo $tel[$i]; ?></td>
          </tr>
          <tr class="rowlight">
            <td height="18" ><div  >E-mail</div></td>
            <td><?php echo $email[$i]; ?> </td>
            
          </tr>
          <tr class="rowdark" >
            <td height="18" ><div  >工作单位</div></td>
            <td colspan="3"><label> <a href="mailto:<?php echo $gzdw[$i]; ?>"><?php echo $gzdw[$i]; ?></a> </label></td>
          </tr>
          <tr class="rowlight">
            <td height="18" ><div  >研究方向</div></td>
            <td colspan="3"><label> <?php echo $sd[$i]; ?> </label></td>
          </tr>
        </table>
	    </div>
	</div>
	<?php  } ?>
	

	
	</div>	
    

    

                     </div>
			

				
                </div>
				<?php include("../inc/footer.php"); ?>	
                </div>

</body>
</html>