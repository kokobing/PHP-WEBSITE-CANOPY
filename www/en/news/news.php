<?php
require "../../inc/en_news_core.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META http-equiv=Content-Type content="text/html; charset=utf-8"> 
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>
<LINK href="../../inc/css/index.css" type=text/css rel=stylesheet>
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

      <td valign="top" width="209"><? require "leftmenu.php"; ?></td>

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

                        style="COLOR: #ffffff"><strong>News</strong></span></td>

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
      
      <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:10px; margin-top:10px;">

              <?php for($i=0;$i<sizeof($arrnews);$i++){?>

            <tr>

              <td width="6%" height="35" align="center" style="BORDER-bottom: #E7E7E7 1px dashed"><img src="/inc/pics/img/arrow_6.gif" width="11" height="11" /></td>

              <td width="83%" height="24" align="left" style="BORDER-bottom: #E7E7E7 1px dashed"><a href="/en/news/newspage.php?newsid=<?=$arrnews[$i][id_newsinfo];?>&ndir=<?=$arrnews[$i][id_newsdir];?>"><?=$arrnews[$i][title];?></a>　</td>

              <td width="11%" align="center" style="BORDER-bottom: #E7E7E7 1px dashed"><font color="#999999">[<?=$arrnews[$i][newsdate];?>]</font></td>

            </tr>

               <?php }?>

            <tr valign="bottom">

              <td height="50" colspan="3" align="center" ><?php if(substr(trim($strNavigate),-46)!='#494949"><strong>1</strong></font>&nbsp;&nbsp;'){echo $strNavigate;}?></td>

            </tr>

            

          </table>
      </td>

    </tr>

  </tbody>

</table>

<? require "../footer.php"; ?></body>

</html>

