<?php
require "../inc/cn_about_core.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META http-equiv=Content-Type content="text/html; charset=utf-8"> 
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>
<LINK href="../inc/css/index.css" type=text/css rel=stylesheet>
<SCRIPT type=text/javascript src="/inc/js/jquery.js"></SCRIPT>

<?php if($setinfo[iscopy]=='1'){?>
<script language="JavaScript">
document.oncontextmenu=new Function("event.returnValue=false;");
document.onselectstart=new Function("event.returnValue=false;");
</script>
<?php }?>
<?php if($setinfo[otherheader]!=''){echo $setinfo[otherheader];}?>

</head>

<BODY>

<TABLE height=5 cellSpacing=0 cellPadding=0 width=990 align=center border=0>

  <TBODY>

  <TR>

<TD></TD></TR></TBODY></TABLE>

<? require "../header.php"; ?>	


<TABLE cellSpacing=0 cellPadding=0 width=990 align=center bgColor=#ffffff 

border=0>

  <TBODY>

  <TR>

    <TD height=3></TD></TR></TBODY></TABLE>



<table height="172" cellspacing="2" cellpadding="0" width="990" align="center" 

bgcolor="#ffffff" border="0">

  <tbody>

    <tr>

      <td valign="top" width="209"> <? require "leftmenu.php"; ?>	</td>

      <td valign="top" align="middle" width="781"><table cellspacing="0" cellpadding="0" width="755" border="0">

        <tbody>

          <tr>

            <td><table cellspacing="0" cellpadding="0" width="100%" border="0">

              <tbody>

                <tr>

                  <td align="left"><table cellspacing="0" cellpadding="0" 

                  background="/inc/pics/imgbeq/home_18.jpg" border="0">

                    <tbody>

                      <tr>

                        <td width="10"><img height="25" alt="" 

                        src="/inc/pics/imgbeq/home_17.jpg" width="10" /></td>

                        <td class="fontbigbb" valign="bottom" width="103"><span 

                        style="COLOR: #ffffff"><strong>在线留言</strong></span></td>

                        <td width="36"><img height="25" alt="" 

                        src="/inc/pics/imgbeq/home_20.jpg" 

                  width="36" /></td>

                      </tr>

                    </tbody>

                  </table></td>

                  <td align="right" width="100"></td>

                </tr>

              </tbody>

            </table></td>

          </tr>

          <tr>

            <td bgcolor="#dc1500" height="1"></td>

          </tr>

          <tr>

            <td bgcolor="#fceae8" height="5"></td>

          </tr>

        </tbody>

      </table>
      
      <table height="30" width="90%" align="center" border="0">

            <tbody>

              <tr>

                <td align="left" class="about1">&nbsp;</td>

              </tr>

            </tbody>

        </table>
        
        <table width="95%" height="409"
border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#E3E3E3">
              <tr>

                <td height="25" align="right" bgcolor="#FFFFFF">主题： </td>
                <td height="25" align="left" bgcolor="#FFFFFF"><input type="text" name="title" size="42" maxlength="36" style="font-size: 14px" id="title" />
                *</td>
              </tr>
              <tr>
                <td height="25" align="right" bgcolor="#FFFFFF">内容 *：</td>
                <td height="25" align="left" bgcolor="#FFFFFF"><textarea rows="10" name="content" cols="45" style="font-size: 14px" id="content" ></textarea></td>
              </tr>
              <tr>
                <td width="23%" height="25" align="right" bgcolor="#FFFFFF">公司名称：</td>
                <td width="77%" height="-6" align="left" bgcolor="#FFFFFF"><font>
                  <input name="companyname" type="text" id="companyname" style="font-size: 14px" size="30" maxlength="36" />
                </font>* </td>
              </tr>
              <tr>
                <td height="25" align="right" bgcolor="#FFFFFF">公司地址：</td>
                <td height="-2" align="left" bgcolor="#FFFFFF"><font>
                  <input name="add" type="text"  id="add" style="font-size: 14px" size="40" maxlength="60" />
                </font></td>
              </tr>
              <tr>
                <td height="25" align="right" bgcolor="#FFFFFF">邮编：</td>
                <td height="-2" align="left" bgcolor="#FFFFFF"><font>
                  <input name="postcode" type="text"  id="postcode" style="font-size: 14px" size="12" maxlength="6" />
                </font></td>
              </tr>
              <tr>
                <td height="25" align="right" bgcolor="#FFFFFF">联系人：</td>
                <td width="77%" height="-2" align="left" bgcolor="#FFFFFF"><font>
                  <input name="receiver" type="text" id="receiver" style="font-size: 14px" size="12" maxlength="30" />
                </font> * </td>
              </tr>
              <tr>
                <td height="25" align="right" bgcolor="#FFFFFF">联系电话：</td>
                <td width="77%" height="-1" align="left" bgcolor="#FFFFFF"><font>
                  <input name="phone" type="text" id="phone" style="font-size: 14px" size="24" maxlength="36" />
                </font>* </td>
              </tr>
              <tr>
                <td height="25" align="right" bgcolor="#FFFFFF">手机：</td>
                <td height="11" align="left" bgcolor="#FFFFFF"><font>
                  <input name="mobile" type="text" id="mobile" style="font-size: 14px" size="24" maxlength="36" />
                </font></td>
              </tr>
              <tr>
                <td height="25" align="right" bgcolor="#FFFFFF">联系传真：</td>
                <td width="77%" height="11" align="left" bgcolor="#FFFFFF"><font>
                  <input name="fax" type="text" id="fax" style="font-size: 14px" size="18" maxlength="36" />
                </font></td>
              </tr>
              <tr>
                <td height="25" align="right" bgcolor="#FFFFFF">E-mail：</td>
                <td height="11" align="left" bgcolor="#FFFFFF"><font>
                  <input name="email" type="text" id="email" style="font-size: 14px" size="18" maxlength="36" />
                </font></td>
              </tr>
              <tr>
                <td width="23%" height="0" valign="top" bgcolor="#FFFFFF"></td>
                <td width="77%" height="0" valign="top" bgcolor="#FFFFFF"><input type="submit" value="提交留言"
name="cmdOk" onclick="mailsend();" />
                    <input type="reset" value="重写" name="cmdReset" />
                </td>
              </tr>
            </table>
        
      </td>

    </tr>

  </tbody>

</table>
<script language="JavaScript">
function mailsend() {
						if($.trim($("#title").val())==''){alert('请输入主题');return false;}	
						if($.trim($("#content").val())==''){alert('请输入内容');return false;}	
						if($.trim($("#companyname").val())==''){alert('请输入联系电话');return false;}	
						if($.trim($("#receiver").val())==''){alert('请输入您的姓名');return false;}
						if($.trim($("#phone").val())==''){alert('请输入您的联系电话');return false;}	
						$.post('/ajax_sendmessage.php',{title:$("#title").val(),content:$("#content").val(),companyname:$("#companyname").val(),add:$("#add").val(),postcode:$("#postcode").val(),receiver:$("#receiver").val(),phone:$("#phone").val(),mobile:$("#mobile").val(),fax:$("#fax").val(),email:$("#email").val()},function(data) {
                               var myjson = '';eval('myjson=' + data + ';');
                               alert(myjson.info);
							   window.location.href='/';
                         });

}
</script>
<? require "../footer.php"; ?></body>

</html>

