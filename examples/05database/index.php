<?php
	require_once("main.php");
	$router = new Router();
	$webApp->fetchPage($router->getPage());
	$webApp->draw();
?>
