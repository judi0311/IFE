<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" >
<html>
<head>
<title>研究生办管理入口界面</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel='stylesheet' href='style/admin.css' type='text/css' />

	
</head>
<body class="login">

<div id="login"><h1><a href="http://dce.jlu.edu.cn/yjs/index.php"></a></h1>

<form name="loginform" id="loginform" action="alcheck.php" method="post">
	<p>
		<label>Username:<br />
		<select name="depar" id="depar"  class="input"    tabindex="20"  >
                      <option value="1" selected="selected"> 管理员 </option>
                      <option value="2">研究生会</option> 
					  
					   </select></label>
	</p>
	<p>
		<label>Password:<br />
		<input type="password" name="pwd"  class="input" size="20" tabindex="20" /></label>
	</p>
	<p></p>
	

	<p class="submit">
		<input type="submit" name="submit" id="submit" value="Login &raquo;" tabindex="100" />	
	</p>
</form>
</div>

<ul>
	<li><a href="../index.php" title="Are you back?">Back to index</a></li>
	
</ul>


</body>
</html>
