<?php include("checkuser.php"); ?>

<HTML><HEAD>
<TITLE>��̨����ҳ��</TITLE>
<STYLE type=text/css>
BODY {
	MARGIN: 0px; FONT: 12px ����;
}
h2 {
	background:url(style/images/h2Bg.gif) repeat-x top left;
	font-size:12px;
	padding:10px;
	color:#333;
}
TABLE {
	BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px
}
TD {
	FONT: 12px ����
}
IMG {
	BORDER-RIGHT: 0px; BORDER-TOP: 0px; VERTICAL-ALIGN: bottom; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px
}
A {
	FONT: 12px ����; COLOR: #666666; TEXT-DECORATION: none
}
A:hover {
	COLOR: #FF9834; TEXT-DECORATION: underline
}
.sec_menu {
	BORDER-RIGHT: white 1px solid; BACKGROUND: #d6dff7; OVERFLOW: hidden; BORDER-LEFT: white 1px solid; BORDER-BOTTOM: white 1px solid
}
.menu_title {
	
}
.menu_title SPAN {
	FONT-WEIGHT: bold; LEFT: 7px; COLOR: #215dc6; POSITION: relative; TOP: 2px
}
.menu_title2 {
	
}
.menu_title2 SPAN {
	FONT-WEIGHT: bold; LEFT: 8px; COLOR: #428eff; POSITION: relative; TOP: 2px
}

.tui{ }
.tui a {color:#FFFFFF;}

</STYLE>

<SCRIPT language=javascript1.2>
function showsubmenu(sid)
{
whichEl = eval("submenu" + sid);
if (whichEl.style.display == "none")
{
eval("submenu" + sid + ".style.display=\"\";");
}
else
{
eval("submenu" + sid + ".style.display=\"none\";");
}
}
</SCRIPT>

<META http-equiv=Content-Type content="text/html; charset=gb2312">
<META content="MSHTML 6.00.2900.2180" name=GENERATOR>
</HEAD>
<BODY leftMargin=0 topMargin=0 marginwidth="0" marginheight="0">
<TABLE cellSpacing=0 cellPadding=0 width="100%"  height="100%" align=right border=0> <TBODY> <TR><TD vAlign=top bgColor=#17a7db>
	
      <TABLE width=210 height="37" align=center cellPadding=0 cellSpacing=0 >
        <TBODY>
        <TR>
  <TD  align=center  height=37  class="tui">	
  <A href="../index.php"  target=_parent><B>������ҳ</B></A>| <a href="login.php" target=_parent><B>��ȫ�˳�
</B></a></TD> 

        </TR>
	
		  </TBODY>
	    </TABLE>
	
  
	  <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR>
          <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(0) 
          onmouseout="this.className='menu_title';" 
          background=style/images/admin_left_1.gif 
            height=25><span><B>> ����Ա��Ϣ</B></span></TD>
        </TR>
        <TR>
          <TD id=submenu0>
            <DIV class=sec_menu style="WIDTH: 158px ">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                <TD height=20><A href="chpwd.php" 
                  target=mainFrame>�޸Ĺ���Ա����&nbsp;</A></TD>
              </TR>
			  
              
              </TBODY></TABLE>
            </DIV>
            <DIV style="WIDTH: 158px">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                <TD height=20></TD></TR></TBODY></TABLE></DIV>
				
</TD></TR></TBODY></TABLE>
   
	  

      <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
          <TR>
            <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(2) 
          onmouseout="this.className='menu_title';" 
          background=style/images/admin_left_2.gif height=25><SPAN>���Ź���</SPAN> </TD>
          </TR>
          <TR>
            <TD id=submenu2><DIV class=sec_menu style="WIDTH: 158px">
                <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
                  <TBODY>
                    <TR>
                      <TD height=20><a href="manage1b.php" target=mainFrame>�������</a></TD>
                    </TR>
                    <TR>
                      <TD height=20><a href="manage1.php" target="mainFrame">�����޸�|ɾ��</a></TD>
                    </TR>
                    
					
                  </TBODY>
                </TABLE>
            </DIV>
                <DIV style="WIDTH: 158px">
                  <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
                    <TBODY>
                      <TR>
                        <TD 
      height=20></TD>
                      </TR>
                    </TBODY>
                  </TABLE>
                </DIV></TD>
          </TR>
        </TBODY>
      </TABLE>
	  <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR>
          <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(1) 
          onmouseout="this.className='menu_title';" 
          background=style/images/admin_left_2.gif height=25><SPAN>��Ա��Ϣ����</SPAN> 
          </TD>
        </TR>
        <TR>
          <TD id=submenu1>
            <DIV class=sec_menu style="WIDTH: 158px">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                 <TD height=20><a href="gzry/gz.php" target="mainFrame"> ��Ա��Ϣ��� </a></TD>
              </TR>
              <TR>
                <TD height=20><a href="gzry/gzshow.php" target="mainFrame"> ��Ա��Ϣ�޸�|ɾ�� </a></TD>
              </TR>
              </TBODY></TABLE>
            </DIV>
            <DIV style="WIDTH: 158px">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                <TD 
      height=20></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
	<TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR>
          <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(1) 
          onmouseout="this.className='menu_title';" 
          background=style/images/admin_left_2.gif height=25><SPAN>��Դ�������</SPAN> 
          </TD>
        </TR>
        <TR>
          <TD id=submenu1>
            <DIV class=sec_menu style="WIDTH: 158px">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                 <TD height=20><a href="xzzx/xzzx.php" target="mainFrame"> ��Դ������� </a></TD>
              </TR>
              <TR>
                <TD height=20><a href="xzzx/xzzx_show.php" target="mainFrame"> ��Դ�����޸�|ɾ�� </a></TD>
              </TR>
              </TBODY></TABLE>
            </DIV>
            <DIV style="WIDTH: 158px">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                <TD 
      height=20></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
	  
	  <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR>
          <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(1) 
          onmouseout="this.className='menu_title';" 
          background=style/images/admin_left_2.gif height=25><SPAN>�о��ɹ�����</SPAN> 
          </TD>
        </TR>
        <TR>
          <TD id=submenu1>
            <DIV class=sec_menu style="WIDTH: 158px">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                 <TD height=20><a href="rp/rp.php" target="mainFrame"> �о��ɹ���� </a></TD>
              </TR>
              <TR>
                <TD height=20><a href="rp/rp_show.php" target="mainFrame"> �о��ɹ��޸�|ɾ�� </a></TD>
              </TR>
              </TBODY></TABLE>
            </DIV>
            <DIV style="WIDTH: 158px">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                <TD 
      height=20></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
	  
	  <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR>
          <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(1) 
          onmouseout="this.className='menu_title';" 
          background=style/images/admin_left_2.gif height=25><SPAN>�о��������</SPAN> 
          </TD>
        </TR>
        <TR>
          <TD id=submenu1>
            <DIV class=sec_menu style="WIDTH: 158px">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                 <TD height=20><a href="ra/ra.php" target="mainFrame"> �о�������� </a></TD>
              </TR>
              <TR>
                <TD height=20><a href="ra/ra_show.php" target="mainFrame"> �о������޸�|ɾ�� </a></TD>
              </TR>
              </TBODY></TABLE>
            </DIV>
            <DIV style="WIDTH: 158px">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                <TD 
      height=20></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
	  
	  </TR></TBODY></TABLE></BODY></HTML>
