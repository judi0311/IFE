<?php include("checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��̨����</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />

</head>
<body>

  <h2>��ʦ��Ϣ���</h2>
  
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

<form action="ds_save.php" method="post" enctype="multipart/form-data" name="ds"   onSubmit="return chkinput(this)">
<table width="760" border="0" cellpadding="2" cellspacing="1" bgcolor="#666666">
    <!--DWLayoutTable-->
    <tbody>
      <tr >
        <td width="85"valign="middle" ><div align="center" >����</div></td>
        <td width="120"><label>
        <input type="text" name="name" />
        </label></td>
        <td width="85" valign="middle" ><div align="center" >�Ա�</div></td>
        <td width="160"><label>
        <select name="xb" id="xb">
		 <option value="0" selected="selected">��ѡ��</option>
          <option value="1" >��</option>
          <option value="2">Ů</option>
          </select>
        </label></td>
        <td width="249" colspan="2" rowspan="6" align="middle" valign="top" ><label></label>
          
          <label>
          <input type="file" name="image" />
          </label></td>
      </tr>
     
      <tr>
        <td valign="top" ><div align="center" >����</div></td>
        <td ><input type="text" name="mz" /></td>
        <td ><div align="center" >ѧ��רҵ</div></td>
        <td > <select name="xkzy" id="xkzy">
		      <option value="0" selected="selected">��ѡ��</option>
            <option value="1" >ͨ������Ϣϵͳ</option>
            <option value="2"> �ź�����Ϣ����</option>
          <option value="3">���������빤��</option>
		  <option value="4">ϵͳ����</option>
		  <option value="5">ģʽʶ��</option>
		 
          </select> </td>
      </tr>
      
      <tr>
        <td valign="middle" ><div align="center" >ְ��</div></td>
        <td >
          <select name="zc" id="select2">
		  
            <option value="0" selected="selected">��ѡ��</option>
            <option value="1" >����</option>
            <option value="2">������</option>
          </select>        </td>
        <td ><div align="center" >��ְʱ��</div></td>
        <td ><input type="text" name="sj1" /></td>
      </tr>
      <tr>
        <td valign="middle" ><div align="center" >�Ƿ񲩵�</div></td>
        <td >
        <input type="radio" name="bd" value="1" />
        <span >��</span>
        <input  type="radio" name="bd" value="0" />
        <span >��</span></td>
        <td ><div align="center" >Ƹ��ʱ��</div></td>
        <td ><input type="text" name="sj2" /></td>
      </tr>
    <tr>
        <td valign="middle" ><div align="center" >��ϵ�绰</div></td>
        <td colspan="3" ><label>
        <input name="tel" type="text" size="40" />
        </label></td>
      </tr>
   
      <tr>
        <td valign="middle" ><div align="center" >��������</div></td>
        <td colspan="3" ><label>
          <input name="email" type="text" size="40" />
        </label></td>
      </tr>
	  
	    <tr >
        <td colspan="6" valign="middle" ><div align="left">
         �о������飺
        </div></td>
      </tr>
      <tr >
        <td colspan="6" valign="top" ><?php
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
					$fckeditor->Height='300px';
					//��ʼ��
					$fckeditor->Value  = "�����ڴ˴������Ϣ��" ;
					//����
					$fckeditor->Create();
				?></td>
      </tr>
	  
	  <tr >
        <td colspan="6">���гɹ�����3�귢������ġ�������ȣ���</td>
      </tr>
	  <tr >
        <td valign="top" colspan="6"><?php
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
					$fckeditor->Value  = "�����ڴ˴������Ϣ��" ;
					//����
					$fckeditor->Create();
				?></td>
      </tr>
      <tr >
        <td align="middle" colspan="6"><label>
          <input type="submit" name="Submit" class="bt" value="�ύ��Ϣ" />
        </label>
          <label>
          <input type="reset" name="Submit2"  class="bt" value="�������" />
        </label></td>
      </tr>
    </tbody>
  </table>

 
</form>

             
</body>
</html>
