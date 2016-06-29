<?php
	require_once("jate.php");
	$webApp = new WebApp();
	$webApp->newConfig();
	$webApp->addPages($webApp->jConfig->pages);
	$webApp->setDefaultPage($webApp->jConfig->pages[0]);
?>
