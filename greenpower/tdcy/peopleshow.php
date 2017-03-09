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
		 
		
      <table width="730" >
    <!--DWLayoutTable-->
    <tbody>
      <tr class="rowlight">
	    <td width="137" rowspan="5"  align="center"  ><ul id="listgallery"  ><img width="140" height="160" src="../uploads/<?php echo $result[image]; ?>"  alt="Photo" /></li></ul>
       </td>
        <td width="87" height="18" ><div  >姓名</div></td>
        <td width="164">
		
		<?php 
		echo" $result[name]";
				?> 
             </td>
        <td width="66" ><div  > 英文名字</div></td>
        <td width="216">
		<label>
		<?php
		echo " $result[ename]";
		  ?>
        </label></td>
      </tr>
     
      <ul><tr  class="rowdark">
        <td height="18" ><div  >职称</div></td>
        <td><?php echo " $result[pos]";  ?></td>
        <td><div  > 电话</div></td>
        <td><?php echo "$result[tel]"; ?></td>
      </tr>
      </ul>
      
      <tr class="rowlight">
        <td height="18" ><div  >办公地点</div></td>
        <td>
        <?php echo " $result[address]"; ?>    </td>
        <td><div  >办公电话</div></td>
        <td><?php echo " $result[tel]"; ?></td>
      </tr>
    
   
   
      <tr class="rowdark" >
        <td height="18" ><div  >电子信箱</div></td>
        <td colspan="3"><label>
		<?php echo $result[email] ?>
        </label></td>
      </tr>
      
   
    
     
      <tr class="rowlight">
        <td height="28" >办公电话</td>
        <td ><?php echo"$result[tel]";?></td>
        <td ><!--DWLayoutEmptyCell-->&nbsp;</td>
        <td ><!--DWLayoutEmptyCell-->&nbsp;</td>
      </tr>
      <tr class="rowdark">
        <td >电子信箱</td>
        <td colspan="3" >
         <?php echo"$result[email]";?>"       </td>
      </tr>
	   <tr class="rowlight">
        <td height="25" colspan="7" >
         研究方向简介：        </td>
      </tr>
	  <tr class="rowdark">
        <td colspan="7" ><?php echo"$result[sd]";?></td>
      </tr>
	  <tr class="rowlight">
        <td colspan="7">
       科研成果（近3年发表的论文、获奖情况等）：        </td>
      </tr>
	  
	  <tr class="rowdark">
        <td  colspan="7"><?php echo"$result[detail]";?></td>
      </tr>
    </tbody>
  </table>	
    

    

                     </div>
			

				<?php include("../inc/footer.php"); ?>	
                </div>
                </div>

</body>
</html>