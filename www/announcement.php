<?php
require "./inc/cn_index_core.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META http-equiv=Content-Type content="text/html; charset=utf-8"> 
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>
<script src="inc/js/jquery.js" type="text/javascript"></script>
<LINK href="inc/css/index.css" type=text/css rel=stylesheet>

<?php if($setinfo[iscopy]=='1'){?>
<script language="JavaScript">
document.oncontextmenu=new Function("event.returnValue=false;");
document.onselectstart=new Function("event.returnValue=false;");
</script>
<?php }?>
<?php if($setinfo[otherheader]!=''){echo $setinfo[otherheader];}?>
</head>

<BODY>

<style type="text/css">
a:active { text-decoration: none; color: #0000FF}
a:hover { text-decoration: none; color: #FF0000}
a:link { text-decoration: none; color: #0000FF}
a:visited { text-decoration: none; color: #990000}
BODY { text-decoration: none; font-size: 12px}
TABLE { text-decoration: none; font-size: 12px}
</style>
<TABLE cellSpacing=0 cellPadding=0 width=400 border=0>
  <TBODY>
    <TR background="/inc/pics/images/annouce_r7_c1.gif"> 
      <TD colSpan=4 background="/inc/pics/images/annouce_r7_c1.gif"> <div align="right"><img src="/inc/pics/images/annouce_r1_c1.gif" width="90" height="25">&nbsp;&nbsp;</div></TD>
    </TR>
    <TR> 
      <TD colSpan=4 background="/inc/pics/images/annouce_r2_c1.gif"><IMG height=43 alt=""   width=2 border=0 name=Annouce_r2_c1></TD>
    </TR>
    <TR> 
      <TD vAlign=top width=16 background=/inc/pics/images/annouce_r4_c1.gif>&nbsp;</TD>
      <TD width=89 vAlign=top><img src="/inc/pics/images/annouce_r3_c1.gif" width="87" height="112"></TD>
      <TD vAlign=top width=279 background=/inc/pics/images/annouce_r3_c2.gif 
    rowSpan=2> <TABLE cellSpacing=5 cellPadding=0 width="100%" border=0>
          <TBODY>
            <TR> 
              <TD height="68"><?=$benzhangg[content];?></TD>
            </TR>
          </TBODY>
        </TABLE></TD>
      <TD vAlign=top width=16 bgColor=#fedfbe><IMG height=112 alt=""   src="/inc/pics/images/annouce_r3_c3.gif" width=16 border=0   name=annouce_r3_c3></TD>
    </TR>
    <TR> 
      <TD colspan="2" background=/inc/pics/images/annouce_r4_c1.gif>&nbsp;</TD>
      <TD bgColor=#fedfbe>&nbsp;</TD>
    </TR>
    <TR> 
      <TD colSpan=4><IMG height=24 alt="" src="/inc/pics/images/annouce_r5_c1.gif"    width=400 border=0 name=Annouce_r5_c1></TD>
    </TR>
    <TR> 
      <TD colSpan=4><IMG src="/inc/pics/images/annouce_r6_c1.gif" alt=""   width=400 height=39 border=0 useMap=#Annouce_r6_c1Map></TD>
    </TR>
  </TBODY>
</TABLE>

<map name="Annouce_r6_c1Map">
  <area shape="rect" coords="170,13,230,27" href="javascript:window.close();">
</map>


</body>

</html>