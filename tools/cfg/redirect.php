<?php
/**
 * REDIRECT SYSTEM
 * @author MineDragonCZ_
 */


include_once("options/redirect.php");

function checkRedirect(){
	global $config;

	$urlEndFull = $_SERVER['REQUEST_URI'];
	$urlEnd = explode("/", $urlEndFull)[1];
	$urlMain = $_SERVER['HTTP_HOST'];
	$subDomain = explode(".", $urlMain)[0];
	if($subDomain == $config["redirect"]["host"])
		$subDomain = "";

	switch($urlEnd){
		case "?logout=1":
			return;
		default:
			break;
	}

	foreach((array) $config["redirect"]["links"] as $name => $data){
		if($data["type"] == "subdom"){
			if(in_array($subDomain, $data["old"])){
				echo "<script>window.location.href='" . $data["new"] . ($data["options"]["no_end"] ? "" : $urlEnd) . "';</script>";
				exit();
				return;
			}
		}
		if($data["type"] == "end"){
			if(in_array($urlEnd, $data["old"])){
				echo "<script>window.location.href='" . $data["new"] . ($data["options"]["no_end"] ? "" : $urlEnd) . "';</script>";
				exit();
				return;
			}
		}

	}

	if(($subDomain != "" && strtolower($subDomain) != "www" && $subDomain != explode(".", $config["redirect"]["host"])[0]) || ($urlEnd != "" && $urlEnd != "index.php" && $urlEnd != "#" && $urlEnd != "/#" && $urlEnd != "home")){
		echo "<script>window.location.href='http://" . $config["redirect"]["host"] . "/404/?url=" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "';</script>";
		exit();
	}

}
checkRedirect();
?>