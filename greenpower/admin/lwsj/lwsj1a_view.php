<?php include("../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>ѧ�ƽ�����վ����</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <h2>������������</h2>

	<form name="form" enctype="multipart/form-data" method="post" action="lwsj1a_view_save.php"  onSubmit="return chkinput(this)">
	
	
	
   
     
	  <?php
  				     include("../../inc/condata.php");
				     $sql = "select * from yjs_lwsj where autoid='$_GET[id]'";
				     $result = mysql_query($sql,$db);    
				     if(mysql_num_rows($result) == 0) {
				  ?>
				   <table width="500" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td align="center" ><table width="150" height="20" border="0" cellpadding="0" cellspacing="0" bgcolor="#0C6AC4">
                        <tr>
                          <td align="center">û�д���Ϣ</td>
                        </tr>
                      </table></td>
                    </tr>
                  </table> 
				  <?php }else{
				        $rows = mysql_fetch_array($result);
				   ?>
		 <table width=100% border="1" cellpadding="0" cellspacing="0">
		
	 
     
      <tr>
        <td width="146"  ><div align="center">������Ŀ��</div></td>
        <td colspan="3" ><div align="left">
        <input name="lwtm" type="text" value="<?php echo $rows[lwtm]; ?>" size="60">  
</div></td></tr>
 <tr>
        <td  ><div align="center">��һ���ߣ�</div></td>
        <td width="211"  ><div align="left">
          <input name="zzxm1" type="text" value="<?php echo $rows[zzxm1]; ?>" size="18">
      </div></td>
	  <td width="98" valign="middle" ><div align="center" >�������</div></td>
        <td width="647"><label>
		
		<select name="sf1" id="sf1">
		 <option value="<?php echo $rows[sf1];  ?>" selected="selected">
		  <?php if($rows[sf1]==1) echo "��ʦ" ; 
		 else if($rows[sf1]==2) echo "ѧ��" ;?></option>
          <option value="1" >��ʦ</option>
          <option value="2">ѧ��</option>
        </select>    
      </label></td>
      </tr>
 <tr>
        <td  ><div align="center">�ڶ����ߣ�</div></td>
        <td  ><div align="left">
          <input name="zzxm2" type="text" value="<?php echo $rows[zzxm2]; ?>" size="18">
        </div></td>
	  <td width="98" valign="middle" ><div align="center" >�������</div></td>
        <td width="647"><label>
		
		<select name="sf2" id="sf2">
		 <option value="<?php echo $rows[sf2];  ?>" selected="selected">
		  <?php if($rows[sf2]==1) echo "��ʦ" ; 
		 else if($rows[sf2]==2) echo "ѧ��" ;?></option>
          <option value="1" >��ʦ</option>
          <option value="2">ѧ��</option>
        </select>    
      </label></td>
      </tr>
	   <tr>
        <td  ><div align="center">�������ߣ�</div></td>
        <td  ><div align="left">
          <input name="zzxm3" type="text" value="<?php echo $rows[zzxm3]; ?>" size="18">
        </div></td>
		 <td width="98" valign="middle" ><div align="center" >�������</div></td>
        <td width="647"><label>
		
		<select name="sf3" id="sf3">
		 <option value="<?php echo $rows[sf3];  ?>" selected="selected">
		  <?php if($rows[sf3]==1) echo "��ʦ" ; 
		 else if($rows[sf3]==2) echo "ѧ��" ;?></option>
          <option value="1" >��ʦ</option>
          <option value="2">ѧ��</option>
        </select>    
        </label></td>
		
      </tr>
	   <tr>
        <td  ><div align="center">�������ߣ�</div></td>
        <td  ><div align="left">
          <input name="zzxm4" type="text" value="<?php echo $rows[zzxm4]; ?>" size="18">
        </div></td>
		 <td width="98" valign="middle" ><div align="center" >�������</div></td>
        <td width="647"><label>
		
		<select name="sf4" id="sf4">
		 <option value="<?php echo $rows[sf4];  ?>" selected="selected">
		  <?php if($rows[sf4]==1) echo "��ʦ" ; 
		 else if($rows[sf4]==2) echo "ѧ��" ;?></option>
          <option value="1" >��ʦ</option>
          <option value="2">ѧ��</option>
        </select>    
        </label></td>
      </tr>
	  
      
        <tr>
        <td  ><div align="center">�ڿ�����ȫ�ƣ���</div></td>
        <td  colspan="3" ><div align="left">
        <input name="qkmc" type="text" value="<?php echo $rows[qkmc]; ?>" size="60">  
</div></td>
      </tr>
        <tr>
        <td  ><div align="center">�꣬���ڣ���ֹҳ�룺</div></td>
        <td  colspan="3" ><div align="left">
        <input name="qzym" type="text" value="<?php echo $rows[qzym]; ?>" size="40">  
</div></td>
      </tr>
     
         <tr>
        <td  ><div align="center">�������ͣ�</div></td>
        <td colspan="3"  ><div align="left">
        <input name="jslx" type="text" value="<?php echo $rows[jslx]; ?>" size="40">&nbsp;&nbsp;�SCI���̣�SCI���磻EI���̣�EI���磻ISTP������  
</div></td>
      </tr>
        <tr>
        <td  ><div align="center">��ע��</div></td>
        <td  colspan="3" ><div align="left">
        <input name="beiz" type="text" value="<?php echo $rows[beiz]; ?>" size="60">  
</div></td>
      </tr>
     
     
	  
	  
      <tr>
        <td  colspan="4" ><div align="center"><input type="submit" name="Submit" class="bt" value="�ύ"> 
                          <input type="reset" name="Submit2"  class="bt" value="����">
                          <input name="id" type="hidden" id="id" value="<?php echo $_GET[id]; ?>"></div></td>
      </tr>
	 </table>
 <?php } ?> </form>  
</body>
</html>
