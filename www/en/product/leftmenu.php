<table height="170" cellspacing="0" cellpadding="0" width="218" border="0">

        <tbody>

          <tr>

            <td><table height="101" cellspacing="0" cellpadding="0" width="219" border="0">

              <tbody>

                <tr>

                  <td width="220" height="27" valign="middle" background="/inc/pics/imgbeq/classbar.gif" class="left1" style="padding-left:25px;">Products</td>

                </tr>

                <tr>

                  <td background="/inc/pics/imgbeq/home_25.jpg" height="64" style="padding-top:8px;">

				    
<SCRIPT language=javascript>

function opencat(cat,img){

	if(cat.style.display=="none"){

	cat.style.display="";

	img.src="/inc/pics/img/class2.gif";

	}	else {

	cat.style.display="none"; 

	img.src="/inc/pics/img/class1.gif";

	}

}

</Script>

<table cellspacing="2" cellpadding="0" width="97%" align="center" border="0">

<? for($i=0;$i<sizeof($pdir1);$i++){
	 $getproductdir2=getproductdir2($pdir1[$i][id_proddir]);//取出当前一级目录下的所有子目录
	?>
	<TR>

		<TD language=javascript onMouseUp="opencat(cat<?=$i;?>,&#13;&#10; img<?=$i;?>);" id=item$pval[catID]) style="CURSOR: hand" width=34 height=25 align=center><IMG id=img<?=$i;?> src="/inc/pics/img/class1.gif" width=15 height=17></TD>

		<TD align="left" ><a href='/en/product/product.php?id1=<?=$pdir1[$i][id_proddir];?>'><?=$pdir1[$i][name];?></a></TD>
	</TR>
	<TR>

		<TD id=cat<?=$i;?> style='DISPLAY: <? if($_GET[id1]==$pdir1[$i][id_proddir]){echo 'diaplay';}else{echo 'none';}?>' colspan="2" style=" padding-left:20px;padding-top:5px; padding-bottom:5px;">
        <? for($j=0;$j<sizeof($getproductdir2);$j++){?>
&nbsp;<IMG height=20 src="/inc/pics/img/class3.gif" width=26 align=absMiddle border=0>&nbsp;<a href="/en/product/product.php?id2=<?=$getproductdir2[$j][id_proddir];?>&id1=<?=$pdir1[$i][id_proddir];?>"><?=$getproductdir2[$j][name]?></a><BR>
		<? }?>
        </TD>
	</TR>
<? }?>    
    


</TABLE>
</td>

                </tr>

                <tr>

                  <td valign="top" height="1"><img height="5" alt="" 

                  src="/inc/pics/imgbeq/home_38.jpg" 

          width="220" /></td>

                </tr>

              </tbody>

            </table></td>

          </tr>

          <tr>

            <td background="/inc/pics/imgbeq/home_25.jpg"><table width="220" border="0">

              <tbody>

                <tr>

                  <td align="middle"><img height="51" 

                  src="/inc/pics/imgbeq/button_02en.gif" width="174" /></td>

                </tr>

                <tr>

                  <td><?=$left_contact[content]?>

    </td>

                </tr>

              </tbody>

            </table></td>

          </tr>

        </tbody>

      </table>

  