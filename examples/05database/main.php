<?php
	require_once("jate.php");
	$connection = null;
	if($jConfig->connection["enable"])
		$connection = new Connection(
				$jConfig->connection["server"]
			, $jConfig->connection["database"]
			, $jConfig->connection["user"]
			, $jConfig->connection["password"]
		);
	$webApp = new WebApp();
	$webApp->addPages($jConfig->pages);
	$webApp->setDefaultPage($jConfig->pages[0]);
?>
