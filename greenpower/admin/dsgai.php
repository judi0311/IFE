<?php include("checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��̨����</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<h2>��ʦ��Ϣ��ʾ/�޸�</h2>

  <script language="javascript">

function chkinput(form)
	{
	
	 if(form.xb.value=="0")
	   {
	     alert("��ѡ���Ա�");
	  
		 return(false);
	   }
	   if(form.xkzy.value=="0")
	   {
	     alert("��ѡ��ѧ��רҵ");
	  
		 return(false);
	   }
	
	  if(form.zc.value=="0")
	   {
	     alert("��ѡ��ְ��!");
	
		 return(false);
	   }
	   
	   
	     if(form.image.value=="")
	   {
	     alert("�������Ƭ");
		
		 return(false);
	   }
	   
	    if(form.bd.value=="")
	   {
	     alert("��ȷ���Ƿ�Ϊ����");
		
		 return(false);
	   }
	   return(true);
	}
    </script>

<form action="dsgai_save.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" name="dsgai" onSubmit="return chkinput(this)">

<?php
  				     include("../inc/condata.php");
					 $id=$_GET[id];
				     $sql = "select * from yjs_ds where autoid=$id";
				     $result = mysql_query($sql,$db);    
				     if(mysql_num_rows($result) == 0) {
				  ?>
				 <table width="500" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" valign="bottom"><table width="150" height="20" border="1" cellpadding="0" cellspacing="0" bgcolor="#0C6AC4">
          <tr>
            <td align="center">û�д���Ϣ</td>
          </tr>
      </table></td>
    </tr>
  </table>
    <?php }else{
				   $rows = mysql_fetch_array($result);
				   ?>

<table width="760" border="1" cellpadding="2" cellspacing="1">
    <!--DWLayoutTable-->
    <tbody>
      <tr >
        <td width="85" ><div align="center" >����</div></td>
        <td width="120"><label>
        <input type="text" name="name" value="<?php echo $rows[name]; ?>"/>
        </label></td>
        <td width="85" ><div align="center" >�Ա�</div></td>
        <td width="160"><label>
        <select name="xb" id="xb">
		   <option value="0"selected="selected">��ѡ��</option>
          <option value="1" >��</option>
          <option value="2">Ů</option>
          </select>
        </label></td>
        <td width="249" colspan="3" rowspan="6" align="middle"  >
          <input type="file" name="image" /><span class="zhuyi">ע��:�����������Ƭ��������ѡ��!</span>
         </td>
      </tr>
     
      <tr>
        <td valign="top" ><div align="center" >����</div></td>
        <td ><input type="text" name="mz"  value="<?php echo $rows[mz]; ?>"/></td>
        <td ><div align="center" >ѧ��רҵ</div></td>
        <td ><select name="xkzy" id="xkzy">
		 <option value="0" selected="selected">��ѡ��</option>
            <option value="1">ͨ������Ϣϵͳ</option>
            <option value="2"> �ź�����Ϣ����</option>
          <option value="3">���������빤��</option>
		  <option value="4">ϵͳ����</option>
           <option value="5">ģʽʶ��</option>
		 
          </select> </td>
      </tr>
      
      <tr>
        <td ><div align="center" >ְ��</div></td>
        <td >
          <select name="zc" id="select2">
             <option value="0" selected="selected">��ѡ��</option>
			<option value="1" >����</option>
            <option value="2">������</option>
          
          </select>        </td>
        <td ><div align="center" >��ְʱ��</div></td>
        <td ><input type="text" name="sj1" value="<?php echo $rows[sj1]; ?>"/></td>
      </tr>
      <tr>
        <td ><div align="center" >�Ƿ񲩵�</div></td>
        <td >
       <input type="radio" name="bd" value="1" />
        <span >��</span>
        <input  type="radio" name="bd" value="0" />
        <span >��</span><span class="zhuyi">*������ѡ��</span></td>
        <td ><div align="center" >Ƹ��ʱ��</div></td>
        <td ><input type="text" name="sj2" value="<?php echo $rows[sj2]; ?>"/></td>
      </tr>
    <tr>
        <td ><div align="center" >��ϵ�绰</div></td>
        <td colspan="3" ><label>
        <input name="tel" type="text" size="40" value="<?php echo $rows[tel]; ?>"/>
        </label></td>
      </tr>
   
      <tr>
        <td ><div align="center" >��������</div></td>
        <td colspan="3" ><label>
          
        <input name="email" type="text" size="40" value="<?php echo $rows[email]; ?>"/>
        
        </label></td>
      </tr>
	 <tr>
        <td colspan="7" valign="middle"><div align="left">
         �о������飺
        </div></td>
      </tr>
      <tr >
        <td colspan="7" align="middle" valign="top" ><?php
					//����FCKeditor.php����ļ���������������ݽṹ��������
					include_once("../include/FCKeditor/fckeditor.php");
					//����FCKeditor�����ʵ����myFCKeditor���ύ�󣬽�������ҳ�� $_POST['content']ʹ��
					$fckeditor=new FCKeditor('content1');
					//FCKeditor���ڵ�λ�ã���������λ�þ���'FCKeditor' �ļ���
					$fckeditor->BasePath='../include/FCKeditor/';
					//���߰�ť����
					$fckeditor->ToolbarSet='Default';
					//�������Ŀ��
					$fckeditor->Width='730';
					//�������ĸ߶�
					$fckeditor->Height='350px';
					//��ʼ��
					$fckeditor->Value  = $rows[yjfx] ;
					//����
					$fckeditor->Create();
				?></td>
      </tr>  
	 <tr>
        <td colspan="7" ><div align="left">
        ���гɹ�����3�귢������ġ�������ȣ���
        </div></td>
      </tr>
      <tr >
        <td colspan="7"><?php
					//����FCKeditor.php����ļ���������������ݽṹ��������
					include_once("../include/FCKeditor/fckeditor.php");
					//����FCKeditor�����ʵ����myFCKeditor���ύ�󣬽�������ҳ�� $_POST['content']ʹ��
					$fckeditor=new FCKeditor('content2');
					//FCKeditor���ڵ�λ�ã���������λ�þ���'FCKeditor' �ļ���
					$fckeditor->BasePath='../include/FCKeditor/';
					//���߰�ť����
					$fckeditor->ToolbarSet='Default';
					//�������Ŀ��
					$fckeditor->Width='730';
					//�������ĸ߶�
					$fckeditor->Height='350px';
					//��ʼ��
					$fckeditor->Value  = $rows[kycg] ;
					//����
					$fckeditor->Create();
				?></td>
      </tr> 
	  
	   <tr>
        <td colspan="7"   align="center">
         <input type="submit" name="Submit" class="bt" value="�ύ��Ϣ" />
	   </tr>	  
    </tbody>
  </table>
  
  
</form>
<?php } 
	?>
             
</body>
</html>
