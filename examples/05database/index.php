<?php
	require_once("main.php");
	if(!isset($_GET["page"])) $_GET["page"] = "home";
	$webApp->fetchPage($_GET["page"]);
	$webApp->draw();
?>
