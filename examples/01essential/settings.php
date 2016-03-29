<?php
	require_once("jate.php");

	$webApp = new WebApp();
	$webApp->addPages([
		["home","Home"]
	]);
	$webApp->setDefaultPage(["home","Home"]);
?>
