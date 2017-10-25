<?php
require "../inc/cn_product_core.php";
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

                        style="COLOR: #ffffff"><strong>企业简介</strong></span></td>

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
          <td width="226"  height="30">&nbsp;<a href='#'>产品</a>&nbsp;&gt;&gt;&nbsp;所有产品 </td>
          <td width="227">&nbsp;</td>
          <td width="102">共有 <?=sizeof($arrprods);?> 个产品 </td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" >
    
    
            <? for($i=0;$i<sizeof($arrprods);$i++){?>
                <div id="productlist">
<table align=center width=170 border=0 cellspacing=2 cellpadding=0><tr><td><TABLE  border=0 cellPadding=0 cellSpacing=5><TR><TD align=middle > <TABLE align=center border=0 cellPadding=0 cellSpacing=0><TR><TD  height=10><IMG height=10 src='/inc/pics/img/bg_0ltop.gif' width=10></TD><TD background='/inc/pics/img/bg_01.gif' height=10></TD><TD height=10><IMG height=10 src='/inc/pics/img/bg_0rtop.gif' width=10></TD></TR><TR> <TD background='/inc/pics/img/bg_03.gif' width=10>&nbsp;</TD><td width=130 height=100><div align=center><a href='/product/productinfo.php?pid=<?=$arrprods[$i][id_prodinfo]?>'><img src='/upload/product/<?=getproductpic($arrprods[$i][id_prodinfo]);?>' width='180' height='130' border='0' ></a><br></div></td><TD background='/inc/pics/img/bg_04.gif' width=10>&nbsp;</TD></TR><TR><TD height=10><IMG height=10 src='/inc/pics/img/bg_0lbottom.gif' width=10></TD><TD background=/inc/pics/img/bg_02.gif height=10></TD><TD height=10><IMG height=10 src='/inc/pics/img/bg_0rbottom.gif' width=10></TD></TR></TABLE></TD></TR></TABLE></a></div></td></tr><tr><td align=center ><a href='#'><?=cutstr($arrprods[$i][title],32,0)?></a></td></tr><tr><td></td></tr></table>
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

