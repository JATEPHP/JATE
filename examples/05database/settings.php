<?php
	require_once("jate.php");

	$connection = new Connection(
			"127.0.0.1"
		, "db-test"
		, "root"
		, ""
	);
	
	$webApp	= new WebApp();
	$webApp->addPages([
		["home","Home"]
	]);
	$webApp->setDefaultPage(["home","Home"]);
?>
