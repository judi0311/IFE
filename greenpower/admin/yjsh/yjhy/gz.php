<?php include("../../checkuser.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>后台管理</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<h2>工作人员信息添加</h2>
<form action="gz_save.php" method="post" enctype="multipart/form-data" name="gz">

<table width="760" border="1"  cellpadding="2" cellspacing="1" >
    <!--DWLayoutTable-->
    <tbody>
	
          <tr >
             <td height="22" valign="middle" bgcolor="#ffffff"><div align="center" >所属部门</div></td>
        <td colspan="2"><label>
          <select name="bm" id="bm">
            <option value="0" selected="selected">请选择</option>
            <option value="1">主席</option>
            <option value="2">副主席</option>
			<option value="8">秘书长</option>
            <option value="3">学术部</option>
            <option value="4">体育部</option>
            <option value="5">生活部</option>
			   <option value="6">组织部</option>
			   
          </select>
        </label></td>
		<td>  <select name="bz" id="bz">
            <option value="0" selected="selected">请选择</option>
            <option value="1">部长</option>
            <option value="2">成员</option>
			
			   
          </select> </td>
            <td width="249" rowspan="6" align="middle" valign="top" ><label></label>
              
              <label>
              <input type="file" name="image" />
              </label><span class="zhuyi">*添加照片</span></td>
          </tr>
      <tr >
	  
        <td width="85" height="22" valign="middle" ><div align="center" >姓名</div></td>
        <td width="120"><label>
        <input type="text" name="name" />
        </label></td>
        <td width="85" valign="middle" ><div align="center" >性别</div></td>
        <td width="160"><label>
        <select name="xb" id="select">
          <option value="1" selected="selected">男</option>
          <option value="2">女</option>
          </select>
        </label></td>
      </tr>
     
      <tr>
        <td height="22" valign="top" ><div align="center" >专业</div></td>
        <td ><input type="text" name="zy" /></td>
        <td ><div align="center" >职务</div></td>
        <td ><input name="zw" type="text" size="25" /></td>
      </tr>
      
      <tr>
        <td height="22" valign="middle" ><div align="center" >政治面貌</div></td>
        <td >
        <input name="zzmm" type="text" size="25" />     </td>
        <td ><div align="center" >电话</div></td>
        <td ><input name="tel" type="text" size="25" /></td>
      </tr>
    
   
   
      <tr>
        <td height="22" valign="middle" ><div align="center" >电子信箱</div></td>
        <td colspan="3" ><label>
          <input name="email" type="text" size="40" />
        </label></td>
      </tr>
      <tr>
        <td height="22" valign="middle" ><div align="center" >座右铭</div></td>
        <td colspan="3" ><label>
          <input name="zym" type="text" size="60" />
        </label></td>
      </tr>
	    <tr>
        <td height="22" valign="middle" ><div align="center" >备注</div></td>
        <td colspan="3" ><label>
          <input name="beiz" type="text" size="60" />
        </label></td>
      </tr>
	  
	  <tr bgcolor="#eeeeee">
        <td align="center"    colspan="5"><label>
          <input type="submit" name="Submit" value="提交信息" />
        </label>
          <label>
          <input type="reset" name="Submit2" value="重新添加" />
        </label></td>
      </tr>
    </tbody>
  </table>
  
 
</form>

             
</body>
</html>
