<?php
require "../inc/config.php";
require "../inc/function.class.php";




//新闻内容
$strSQL = "select * from newsinfo where id_newsinfo='".$_GET[newsid]."'  " ;
$objDB->Execute($strSQL);
$onenews=$objDB->fields();

//产品一级目录
$strSQL = "select name,id_proddir from productdir where  lang=1 and level=1 order by ordernum desc  " ;
$objDB->Execute($strSQL);
$pdir1=$objDB->getrows();





//页头 页脚调用
require "../inc/cn_header_core.php";

?>