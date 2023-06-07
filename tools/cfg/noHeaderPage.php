<?php
/**
 * NO HEADER PAGE
 * @author MineDragonCZ_
 */

session_start();
$footerScript = "";

foreach (glob(dirname(__FILE__)."/options/*.php") as $filename){
    include($filename);
}

include(dirname(__FILE__)."/head.php");
include(dirname(__FILE__)."/nav.php");
if($pageTitle) include(dirname(__FILE__)."/noHeader.php");



function getFooter(){
	global $config;
	include("footer.php");
}
?>