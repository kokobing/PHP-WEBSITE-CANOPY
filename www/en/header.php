<table cellspacing="0" cellpadding="0" width="990" align="center" bgcolor="#ffffff" border="0">

  <tbody>

    <tr>

      <td width="286" rowspan="2"><a href="/en/"><img src="/upload/layout/<?=$logo[opicname];?>" width="459" height="87" border="0" /></a></td>

      <td width="34" rowspan="2"><img height="87" alt="" 

      src="/inc/pics/imgbeq/home_03.jpg" width="34" /></td>

      <td align="middle" height="53"><table cellspacing="0" cellpadding="0" width="230" align="right" border="0">

        <tbody>

          <tr>

            <td align="middle" height="24"><A onclick="var strHref=window.location.href;this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.ty-sh.com');" href="#">Homepage</A> | <A href="javascript:window.external.addFavorite(window.location.href,'上海步瑞起网络科技有限公司')">Favorites</A>  | 

<a href="/" id="based" style="cursor:pointer"><font color="#FF3300">中文</font></a>   | 

<a href="/en/" id="based" style="cursor:pointer"><font color="#FF3300">English</font></a></td>

          </tr>

        </tbody>

      </table></td>

    </tr>

    <tr>

      <td align="middle" background="/inc/pics/imgbeq/home_06.jpg" 

  height="34"><marquee scrollamount=1 scrolldelay=4 width=420

            align="left" onMouseOver="this.stop()" onMouseOut="this.start()">

                                    <font color='#FFffff'><b>Announcement：</b></font>&nbsp;<a href='#' onclick="javascript:window.open('/en/announcement.php', 'newwindow', 'height=600, width=430, toolbar=no, menubar=no, scrollbars=auto, resizable=no, location=no, status=no')" title=''><font color='#FFffff'><?=$benzhangg[intro];?>　</font></a></marquee></td>

    </tr>

  </tbody>

</table>

<table cellspacing="0" cellpadding="0" width="990" align="center" border="0">

  <tbody>

    <tr>

      <td>

 <!--JS脚本1--开始-->
        <script type="text/javascript">
			var imag=new Array();
			var link=new Array();
			var text=new Array();
			
			<?php for($i=0;$i<sizeof($banner_tu);$i++){?>
			
						imag[<?=$i+1;?>]	= "/upload/layout/<?=$banner_tu[$i][opicname]?>";
						link[<?=$i+1;?>]	= escape("<?=$banner_tu[$i][url]?>");
						text[<?=$i+1;?>]	= "";
			<?php }?>


			 var focus_width=990
			 var focus_height=197
			 
			 var text_height=0
			 var swf_height = focus_height+text_height
			 
			 var pics="", links="", texts="";
			 for(var i=1; i<imag.length; i++){
				if (pics != "")
				{
					pics=pics+("|"+imag[i]);
					links=links+("|"+link[i]);
					texts=texts+("|"+text[i]);
				}
				else
				{
					pics=imag[i];
					links=link[i];
					texts=text[i];
				}
			 }
			 
			 document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ focus_width +'" height="'+ swf_height +'">');
			 document.write('<param name="allowScriptAccess" value="sameDomain"><param name="movie" value="/focus.swf"><param name="quality" value="high"><param name="bgcolor" value="ffffff">');
			 document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
			 document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'">');
			 document.write('<embed src="/focus.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="'+ focus_width +'" height="'+ swf_height +'" menu="false" wmode="transparent" flashvars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'"></embed>');
			 document.write('</object>');
			 
			 
			 </script>
            <!--JS脚本1--结束-->


</td>

    </tr>

  </tbody>

</table>


<table cellspacing="0" cellpadding="0" width="990" align="center" border="0">

  <tbody>

    <tr>

      <td align="middle" bgcolor="#750400" height="43"><img height="43" 

      src="/inc/pics/imgbeq/index_04en.jpg" width="979" usemap="#MapMap" 

  border="0" /></td>

    </tr>

  </tbody>

</table>

<map name="MapMap" id="MapMap">

  <area shape="rect" 

  coords="91,4,176,51" href="/en/" />

  <area shape="rect" 

  coords="798,2,887,47" href="/en/about/feedback.php" />

  <area shape="rect" 

  coords="210,3,286,43" href="/en/about/about.php" />

  <area shape="rect" 

  coords="323,3,422,47" href="/en/news/news.php" />

  <area shape="rect" 

  coords="678,3,759,48" href="/en/hr/hr.php" />

  <area shape="rect" 

  coords="565,0,643,45" href="/en/case/case.php" />

  <area shape="rect" 

  coords="437,1,532,47" href="/en/product/product.php" />

</map>