<?php
require "../inc/cn_case_core.php";
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

      <td valign="top" width="209">
      
      <? require "leftmenu.php"; ?>	

      </td>

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

                        style="COLOR: #ffffff"><strong>行业应用</strong></span></td>

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
      
      <table height="97" width="100%" align="center" border="0" style="margin-top:10px; margin-bottom:10px;">

  <tr>
    <td align="left" ><table width="100%" border="0">
        <tr>
          <td width="226"  height="30">&nbsp;<a href='#'>案例</a>&nbsp;&gt;&gt;&nbsp;所有行业应用 </td>
          <td width="227">&nbsp;</td>
          <td width="102">共有 <?=sizeof($arrnews);?> 个行业应用</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" >
    
    
            <? for($i=0;$i<sizeof($arrnews);$i++){?>
                <div id="applist">
<table cellspacing="0" cellpadding="0" width="130" align="center" 

                  border="0">

                            <tbody>

                              <tr>

                                <td><a href="/case/casepage.php?newsid=<?=$arrnews[$i][id_newsinfo];?>"><img src="/upload/news/<?=getnewspic($arrnews[$i][id_newsinfo]);?>" width="150" height="100" border=0 /></a></td>

                              </tr>

                              <tr>

                                <td valign="center" align="middle" 

                      background="/inc/pics/imgbeq/caseBottom02.gif" 

                        height="22"><a href="/case/casepage.php?newsid=<?=$arrnews[$i][id_newsinfo];?>"><font color="#ffffff"><?=$arrnews[$i][title];?></font></a></td>

                              </tr>

                            </tbody>

                        </table>
                </div>
                <? }?>
    
    
    
    </td>
  </tr>
  <tr>
    <td align="center" ><?php if(substr(trim($strNavigate),-46)!='#494949"><strong>1</strong></font>&nbsp;&nbsp;'){echo $strNavigate;}?></td>
  </tr>
</table>

      </td>

    </tr>

  </tbody>

</table>

<? require "../footer.php"; ?></body>

</html>

