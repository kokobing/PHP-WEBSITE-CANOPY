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

<TABLE height=5 cellSpacing=0 cellPadding=0 width=990 align=center border=0>

  <TBODY>

  <TR>

<TD></TD></TR></TBODY></TABLE>

<? require "header.php"; ?>	


<TABLE cellSpacing=0 cellPadding=0 width=990 align=center bgColor=#ffffff 

border=0>

  <TBODY>

  <TR>

    <TD height=3></TD></TR></TBODY></TABLE>



<table height="172" cellspacing="2" cellpadding="0" width="990" align="center" 

bgcolor="#ffffff" border="0">

  <tbody>

    <tr>

      <td valign="top" width="209"><table height="170" cellspacing="0" cellpadding="0" width="218" border="0">

        <tbody>

          <tr>

            <td><table height="101" cellspacing="0" cellpadding="0" width="219" border="0">

              <tbody>

                <tr>

                  <td width="220" height="27" valign="middle" background="inc/pics/imgbeq/classbar.gif" class="left1" style="padding-left:25px;">产品中心</td>

                </tr>

                <tr>

                  <td background="inc/pics/imgbeq/home_25.jpg" height="64" style="padding-top:8px;">

				    

<SCRIPT language=javascript>

function opencat(cat,img){

	if(cat.style.display=="none"){

	cat.style.display="";

	img.src="inc/pics/img/class2.gif";

	}	else {

	cat.style.display="none"; 

	img.src="inc/pics/img/class1.gif";

	}

}

</Script>

<table cellspacing="2" cellpadding="0" width="97%" align="center" border="0">

<? for($i=0;$i<sizeof($pdir1);$i++){
	 $getproductdir2=getproductdir2($pdir1[$i][id_proddir]);//取出当前一级目录下的所有子目录
	?>
	<TR>

		<TD language=javascript onMouseUp="opencat(cat<?=$i;?>,&#13;&#10; img<?=$i;?>);" id=item$pval[catID]) style="CURSOR: hand" width=34 height=25 align=center><IMG id=img<?=$i;?> src="/../inc/pics/img/class1.gif" width=15 height=17></TD>

		<TD align="left" ><a href='/product/product.php?id1=<?=$pdir1[$i][id_proddir];?>'><?=$pdir1[$i][name];?></a></TD>
	</TR>
	<TR>

		<TD id=cat<?=$i;?> style='DISPLAY: <? if($_GET[id1]==$pdir1[$i][id_proddir]){echo 'diaplay';}else{echo 'none';}?>' colspan="2" style=" padding-left:20px;padding-top:5px; padding-bottom:5px;">
        <? for($j=0;$j<sizeof($getproductdir2);$j++){?>
&nbsp;<IMG height=20 src="/../inc/pics/img/class3.gif" width=26 align=absMiddle border=0>&nbsp;<a href="#"><?=$getproductdir2[$j][name]?></a><BR>
		<? }?>
        </TD>
	</TR>
<? }?>    
    


</TABLE>

</td>

                </tr>

                <tr>

                  <td valign="top" height="1"><img height="5" alt="" 

                  src="inc/pics/imgbeq/home_38.jpg" 

          width="220" /></td>

                </tr>

              </tbody>

            </table></td>

          </tr>

          <tr>

            <td background="inc/pics/imgbeq/home_25.jpg"><table width="220" border="0">

              <tbody>

                <tr>

                  <td align="middle"><img height="51" 

                  src="inc/pics/imgbeq/button_02.gif" width="174" /></td>

                </tr>

                <tr>

                  <td><?=$left_contact[content]?></td>

                </tr>

              </tbody>

            </table></td>

          </tr>

        </tbody>

      </table>

  </td>

      <td valign="top" align="middle" width="781"><table cellspacing="0" cellpadding="0" width="755" border="0">

        <tbody>

          <tr>

            <td><table cellspacing="0" cellpadding="0" width="100%" border="0">

              <tbody>

                <tr>

                  <td align="left"><table cellspacing="0" cellpadding="0" 

                  background="inc/pics/imgbeq/home_18.jpg" border="0">

                    <tbody>

                      <tr>

                        <td width="10"><img height="25" alt="" 

                        src="inc/pics/imgbeq/home_17.jpg" width="10" /></td>

                        <td class="fontbigbb" valign="bottom" width="103"><span 

                        style="COLOR: #ffffff"><strong>公司简介</strong></span></td>

                        <td width="36"><img height="25" alt="" 

                        src="inc/pics/imgbeq/home_20.jpg" 

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

          <table cellspacing="0" cellpadding="0" width="100%" border="0">

            <tbody>

              <tr>

                <td valign="top" align="left">&nbsp;</td>

                <td valign="top" align="left"><table cellspacing="0" cellpadding="0" width="100%" border="0">

                    <tbody>

                      <tr>

                        <td valign="top" align="left" background="" height="400"><table height="229" cellspacing="0" cellpadding="0" width="725" 

                  border="0">

                            <tbody>

                              <tr>

                                <td align="middle" width="231" height="141"><img height="118" src="inc/pics/imgbeq/about.jpg" width="214" /></td>

                                <td width="498"><span style="COLOR: #000000"><P><FONT face=Verdana>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;上海步瑞起网络科技有限公司,成立于二零零一年，有多年的无线、有线、系统集成、网络产品维修维护和数据开发经验的综合性的IT服务型公司。我公司是国内最早从事2.4G，5.8G无线产品销售，首先扎根无线网络市场，扩展传统网络、数据及系统集成业务。本公司凭借先进的经营理念，一流的技术服务，几年来专注于网络领域的发展，随着计算机网络领域的不断发展和产品、技术、的不断创新，我们始终走在市场的最前沿......</P>

<P>　本公司的业务己分布华东地区，涉及到政府、军队、学校、银行、医院、水利等不同行业的长期的合作。

               <a href="/about/about.php?pageid=1"><font color="#CC0000">[详细]</font></a></span></td>

                              </tr>

                              <tr>

                                <td colspan="2"><table cellspacing="0" cellpadding="0" align="center" 

border="0">

                                    <tbody>

                                      <tr>

                                        <td><img height="29" alt="" 

                              src="inc/pics/imgbeq/home_48.jpg" width="683" /></td>

                                        <td><a 

                              href="/product/product.php"><img 

                              height="29" alt="" src="inc/pics/imgbeq/home_49.jpg" 

                              width="46" border="0" /></a></td>

                                      </tr>

                                    </tbody>

                                </table></td>

                              </tr>

                              <tr>

                                <td colspan="2"><table style="MARGIN-TOP: 8px" cellspacing="0" 

                        cellpadding="0" width="100%" border="0">

                                    <tbody>

                                      <tr align="middle">

                                        <td width="728" height="212" background="">

										

										<style type="text/css">

<!--



#demo {

	MARGIN: auto; OVERFLOW: hidden; WIDTH: 700px;  TEXT-ALIGN: center

}

-->

</style>

<DIV id=demo>

        <TABLE height=110 cellSpacing=0 cellPadding=0 align=left border=0 

            cellspace="0">

          <TBODY>

            <TR>

              <TD id=demo1 vAlign=top><!--滚动区的高度和宽度-->

                    <TABLE width=170 height="91" 

                  border=0 align=center cellPadding=0 cellSpacing=0 cellspace="0">

                      <TBODY>

                        <TR>

                          <TD id=demo1 vAlign=top>

						  

<span id="tb_A101">

              <!--------------------显示最新产品的子程序开始--------------------->

                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

                              

                              <tr align="center">

                                

                                <td><table width="1%"  border="0" cellspacing="0" cellpadding="0">

                                  <tr>

                                    <td><table width="100%"  border="0" cellpadding="3" cellspacing="1" bgcolor="#E9E9E9">

                                        <tr>

                                          <td width="130" bgcolor="#FFFFFF"><table width="130"  border="0" cellpadding="0" cellspacing="0" bgcolor="#E9E9E9">

                                              <tr>

                                                <td width="130" height="110" align="center" valign="middle" bgcolor="#FFFFFF"><a href="/product/productinfo.php?pid=<?=$arrprods[0][id_prodinfo]?>"><img src='/upload/product/<?=getproductpic($arrprods[0][id_prodinfo]);?>' width="170" height="140" border=0 ></a></td>

                                              </tr>

                                          </table></td>

                                        </tr>

                                    </table></td>

                                    <td valign="top"><img src="inc/pics/img/yyri2.gif" width="7" height="112" /></td>

                                  </tr>

                                  <tr>

                                    <td colspan="2"><table width="100%"  border="0" cellspacing="2" cellpadding="0">

                                        <tr>

                                          <td height="30" align="center"><a href="/product/productinfo.php?pid=<?=$arrprods[0][id_prodinfo]?>"><?=$arrprods[0][title]?></a></td>

                                        </tr>

                                    </table></td>

                                  </tr>

                                </table></td>

                                

                                <td><table width="1%"  border="0" cellspacing="0" cellpadding="0">

                                  <tr>

                                    <td><table width="100%"  border="0" cellpadding="3" cellspacing="1" bgcolor="#E9E9E9">

                                        <tr>

                                          <td width="130" bgcolor="#FFFFFF"><table width="130"  border="0" cellpadding="0" cellspacing="0" bgcolor="#E9E9E9">

                                              <tr>

                                                <td width="130" height="110" align="center" valign="middle" bgcolor="#FFFFFF"><a href="/product/productinfo.php?pid=<?=$arrprods[1][id_prodinfo]?>"><img src='/upload/product/<?=getproductpic($arrprods[1][id_prodinfo]);?>' width="170" height="140" border=0 ></a></td>

                                              </tr>

                                          </table></td>

                                        </tr>

                                    </table></td>

                                    <td valign="top"><img src="inc/pics/img/yyri2.gif" width="7" height="112" /></td>

                                  </tr>

                                  <tr>

                                    <td colspan="2"><table width="100%"  border="0" cellspacing="2" cellpadding="0">

                                        <tr>

                                          <td height="30" align="center"><a href="/product/productinfo.php?pid=<?=$arrprods[1][id_prodinfo]?>"><?=$arrprods[1][title]?></a></td>

                                        </tr>

                                    </table></td>

                                  </tr>

                                </table></td>

                                

                                <td><table width="1%"  border="0" cellspacing="0" cellpadding="0">

                                  <tr>

                                    <td><table width="100%"  border="0" cellpadding="3" cellspacing="1" bgcolor="#E9E9E9">

                                        <tr>

                                          <td width="130" bgcolor="#FFFFFF"><table width="130"  border="0" cellpadding="0" cellspacing="0" bgcolor="#E9E9E9">

                                              <tr>

                                                <td width="130" height="110" align="center" valign="middle" bgcolor="#FFFFFF"><a href="/product/productinfo.php?pid=<?=$arrprods[2][id_prodinfo]?>"><img src='/upload/product/<?=getproductpic($arrprods[2][id_prodinfo]);?>' width="170" height="140" border=0 ></a></td>

                                              </tr>

                                          </table></td>

                                        </tr>

                                    </table></td>

                                    <td valign="top"><img src="inc/pics/img/yyri2.gif" width="7" height="112" /></td>

                                  </tr>

                                  <tr>

                                    <td colspan="2"><table width="100%"  border="0" cellspacing="2" cellpadding="0">

                                        <tr>

                                          <td height="30" align="center"><a href="/product/productinfo.php?pid=<?=$arrprods[2][id_prodinfo]?>"><?=$arrprods[2][title]?></a></td>

                                        </tr>

                                    </table></td>

                                  </tr>

                                </table></td>

                                

                                <td><table width="1%"  border="0" cellspacing="0" cellpadding="0">

                                  <tr>

                                    <td><table width="100%"  border="0" cellpadding="3" cellspacing="1" bgcolor="#E9E9E9">

                                        <tr>

                                          <td width="130" bgcolor="#FFFFFF"><table width="130"  border="0" cellpadding="0" cellspacing="0" bgcolor="#E9E9E9">

                                              <tr>

                                                <td width="130" height="110" align="center" valign="middle" bgcolor="#FFFFFF"><a href="/product/productinfo.php?pid=<?=$arrprods[3][id_prodinfo]?>"><img src='/upload/product/<?=getproductpic($arrprods[3][id_prodinfo]);?>' width="170" height="140" border=0 ></a></td>

                                              </tr>

                                          </table></td>

                                        </tr>

                                    </table></td>

                                    <td valign="top"><img src="inc/pics/img/yyri2.gif" width="7" height="112" /></td>

                                  </tr>

                                  <tr>

                                    <td colspan="2"><table width="100%"  border="0" cellspacing="2" cellpadding="0">

                                        <tr>

                                          <td height="30" align="center"><a href="/product/productinfo.php?pid=<?=$arrprods[3][id_prodinfo]?>"><?=$arrprods[3][title]?></a></td>

                                        </tr>

                                    </table></td>

                                  </tr>

                                </table></td>

                                

                                <td><table width="1%"  border="0" cellspacing="0" cellpadding="0">

                                  <tr>

                                    <td><table width="100%"  border="0" cellpadding="3" cellspacing="1" bgcolor="#E9E9E9">

                                        <tr>

                                          <td width="130" bgcolor="#FFFFFF"><table width="130"  border="0" cellpadding="0" cellspacing="0" bgcolor="#E9E9E9">

                                              <tr>

                                                <td width="130" height="110" align="center" valign="middle" bgcolor="#FFFFFF"><a href="/product/productinfo.php?pid=<?=$arrprods[4][id_prodinfo]?>"><img src='/upload/product/<?=getproductpic($arrprods[4][id_prodinfo]);?>' width="170" height="140" border=0 ></a></td>

                                              </tr>

                                          </table></td>

                                        </tr>

                                    </table></td>

                                    <td valign="top"><img src="inc/pics/img/yyri2.gif" width="7" height="112" /></td>

                                  </tr>

                                  <tr>

                                    <td colspan="2"><table width="100%"  border="0" cellspacing="2" cellpadding="0">

                                        <tr>

                                          <td height="30" align="center"><a href="/product/productinfo.php?pid=<?=$arrprods[4][id_prodinfo]?>"><?=$arrprods[4][title]?></a></td>

                                        </tr>

                                    </table></td>

                                  </tr>

                                </table></td>

                                

                                <td><table width="1%"  border="0" cellspacing="0" cellpadding="0">

                                  <tr>

                                    <td><table width="100%"  border="0" cellpadding="3" cellspacing="1" bgcolor="#E9E9E9">

                                        <tr>

                                          <td width="130" bgcolor="#FFFFFF"><table width="130"  border="0" cellpadding="0" cellspacing="0" bgcolor="#E9E9E9">

                                              <tr>

                                                <td width="130" height="110" align="center" valign="middle" bgcolor="#FFFFFF"><a href="/product/productinfo.php?pid=<?=$arrprods[5][id_prodinfo]?>"><img src='/upload/product/<?=getproductpic($arrprods[5][id_prodinfo]);?>' width="170" height="140" border=0 ></a></td>

                                              </tr>

                                          </table></td>

                                        </tr>

                                    </table></td>

                                    <td valign="top"><img src="inc/pics/img/yyri2.gif" width="7" height="112" /></td>

                                  </tr>

                                  <tr>

                                    <td colspan="2"><table width="100%"  border="0" cellspacing="2" cellpadding="0">

                                        <tr>

                                          <td height="30" align="center"><a href="/product/productinfo.php?pid=<?=$arrprods[5][id_prodinfo]?>"><?=$arrprods[5][title]?></a></td>

                                        </tr>

                                    </table></td>

                                  </tr>

                                </table></td>

                                

                                

                              </tr>

                          </table><!--------------------显示最新产品的子程序结束--------------------->

              </span>						  

						  </TD>

                          <TD id=demo2 vAlign=top width=2></TD>

                        </TR>

                      </TBODY>

                  </TABLE>

                <!--最新图文代码结束--></TD>

              <TD id=demo2 vAlign=top></TD>

            </TR>

          </TBODY>

        </TABLE>

      </DIV>

<script language="JavaScript" type="text/javascript">

// JavaScript Document



var speed=20;

document.getElementById("demo2").innerHTML=document.getElementById("demo1").innerHTML

function Marquee(){

if(document.getElementById("demo2").offsetWidth-document.getElementById("demo").scrollLeft<=0)

document.getElementById("demo").scrollLeft-=document.getElementById("demo1").offsetWidth

else{

document.getElementById("demo").scrollLeft++;

}

}

var MyMar=setInterval(Marquee,speed)

document.getElementById("demo").onmouseover=function() {clearInterval(MyMar)}

document.getElementById("demo").onmouseout=function() {MyMar=setInterval(Marquee,speed)}

</script>    

										

										

                                        </td>

                                      </tr>

                                    </tbody>

                                </table></td>

                              </tr>

                            </tbody>

                        </table></td>

                        <td valign="top" align="left" width="9" 

              background="">&nbsp;</td>

                      </tr>

                    </tbody>

                </table></td>

              </tr>

            </tbody>

          </table>

        <table width="752" border="0">

            <tbody>

              <tr>

                <td align="left"><img src="inc/pics/imgbeq/middle_bt02.gif" 

        width="750" height="28" border="0" usemap="#Map" /></td>

              </tr>

              <tr>

                <td><table width="98%" height="45" border="0" align="center" cellspacing="5">

                    <tbody>

					                                



                      <tr>

					  

                                  

                        <td width="163" align="middle"><table cellspacing="0" cellpadding="0" width="130" align="center" 

                  border="0">

                            <tbody>

                              <tr>

                                <td><a href="/case/casepage.php?newsid=<?=$arrnews[0][id_newsinfo];?>"><img src="/upload/news/<?=getnewspic($arrnews[0][id_newsinfo]);?>" width="150" height="100" border=0 /></a></td>

                              </tr>

                              <tr>

                                <td valign="center" align="middle" 

                      background="inc/pics/imgbeq/caseBottom02.gif" 

                        height="22"><a href="/case/casepage.php?newsid=<?=$arrnews[0][id_newsinfo];?>"><font color="#ffffff"><?=$arrnews[0][title];?></font></a></td>

                              </tr>

                            </tbody>

                        </table></td>

                                  

                        <td width="163" align="middle"><table cellspacing="0" cellpadding="0" width="130" align="center" 

                  border="0">

<tbody>

                              <tr>

                                <td><a href="/case/casepage.php?newsid=<?=$arrnews[1][id_newsinfo];?>"><img src="/upload/news/<?=getnewspic($arrnews[1][id_newsinfo]);?>" width="150" height="100" border=0 /></a></td>

                              </tr>

                              <tr>

                                <td valign="center" align="middle" 

                      background="inc/pics/imgbeq/caseBottom02.gif" 

                        height="22"><a href="/case/casepage.php?newsid=<?=$arrnews[1][id_newsinfo];?>"><font color="#ffffff"><?=$arrnews[1][title];?></font></a></td>

                              </tr>

                            </tbody>

                        </table></td>

                                  

                        <td width="163" align="middle"><table cellspacing="0" cellpadding="0" width="130" align="center" 

                  border="0">

                            <tbody>

                              <tr>

                                <td><a href="CompVisualizeBig.asp?ID=3"><img src="/upload/news/<?=getnewspic($arrnews[2][id_newsinfo]);?>" width="150" height="100" border=0 /></a></td>

                              </tr>

                              <tr>

                                <td valign="center" align="middle" 

                      background="inc/pics/imgbeq/caseBottom02.gif" 

                        height="22"><a href="CompVisualizeBig.asp?ID=3"><font 

                  color="#ffffff">案例展示</font></a></td>

                              </tr>

                            </tbody>

                        </table></td>

                                  

                        <td width="163" align="middle"><table cellspacing="0" cellpadding="0" width="130" align="center" 

                  border="0">

                            <tbody>

                              <tr>

                                <td><a href="CompVisualizeBig.asp?ID=2"><img src="/upload/news/<?=getnewspic($arrnews[3][id_newsinfo]);?>" width="150" height="100" border=0 /></a></td>

                              </tr>

                              <tr>

                                <td valign="center" align="middle" 

                      background="inc/pics/imgbeq/caseBottom02.gif" 

                        height="22"><a href="CompVisualizeBig.asp?ID=2"><font 

                  color="#ffffff">案例展示</font></a></td>

                              </tr>

                            </tbody>

                        </table></td>

                                  

                      </tr>

                                <tr>

                                  

                                </tr>

                        

                    </tbody>

                </table></td>

              </tr>

            </tbody>

        </table></td>

    </tr>

  </tbody>

</table>

<? require "footer.php"; ?>	

<map name="Map" id="Map"><area shape="rect" coords="665,3,734,25" href="/case/case.php" />

</map></body>

</html>

