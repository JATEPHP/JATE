<?php
	require_once("jate.php");
	$webApp = new WebApp();
	$webApp->addPages($jConfig->pages);
	$webApp->setDefaultPage($jConfig->pages[0]);
?>
