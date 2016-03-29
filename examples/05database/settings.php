<?php
	require_once("jate.php");

	$connection = new Connection(
			$jConfig->connection["server"]
		, $jConfig->connection["database"]
		, $jConfig->connection["user"]
		, $jConfig->connection["password"]
	);

	$webApp	= new WebApp();
	$webApp->addPages([
		["home","Home"]
	]);
	$webApp->setDefaultPage(["home","Home"]);
?>
