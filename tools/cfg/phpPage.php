<?php
/**
 * NORMAL PAGE
 * @author MineDragonCZ_
 */

$start = microtime();
session_start();
$footerScript = "";

foreach (glob(dirname(__FILE__)."/options/*.php") as $filename){
    include($filename);
}

if($isHomePage){
	include(dirname(__FILE__)."/redirect.php");
}

include(dirname(__FILE__)."/head.php");
include(dirname(__FILE__)."/nav.php");
include(dirname(__FILE__)."/header.php");


function getFooter(){
	global $config;
	include("footer.php");
}
?>