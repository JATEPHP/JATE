<?php
	require_once("settings.php");
	if(!isset($_GET["page"])) $_GET["page"] = "home";
	$webApp->fetchPage($_GET["page"]);
	$webApp->draw();
?>
