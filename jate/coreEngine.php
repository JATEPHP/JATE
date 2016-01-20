<?php
	session_start();
	$GLOBALS["DEBUG"] = 1;

	//jateStuff
	require_once($GLOBALS["JATEPath"]."jate/functions/requirer.php");
	requireComponent ($GLOBALS["JATEPath"]."jate/config.php");
	requireComponent ($GLOBALS["JATEPath"]."jate/functions/folder.php");
	requireComponents($GLOBALS["JATEPath"]."jate/functions");
	requireComponents($GLOBALS["JATEPath"]."jate/classes");
	requireComponent("config.php");
	requireComponents("functions");
	requireComponents("classes");
	requireModules("modules");
	requireComponent("pages/Template.php");
	requireComponents("pages");

?>
