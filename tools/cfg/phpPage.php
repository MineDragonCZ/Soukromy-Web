<?php
/**
 * NORMAL PAGE
 * @author MineDragonCZ_
 */
 
session_start();
$footerScript = "";
 
foreach (glob(dirname(__FILE__)."/options/*.php") as $filename){
    include($filename);
}
 
include(dirname(__FILE__)."/mysql.php");
include(dirname(__FILE__)."/main.php");
include(dirname(__FILE__)."/head.php");
include(dirname(__FILE__)."/nav.php");
include(dirname(__FILE__)."/header.php");
 
 
function getFooter(){
	global $config;
	include(dirname(__FILE__) . "/footer.php");
}
?>