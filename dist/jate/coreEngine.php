<?php
	session_start();
	$jConfig["DEBUG"] = 1;

	//jateStuff
	require_once			($jConfig["JATEPath"]."jate/functions/requirer.php");
	requireComponent	($jConfig["JATEPath"]."jate/functions/folder.php");
	requireComponent	($jConfig["JATEPath"]."jate/config.php");
	requireComponent	($jConfig["JATEPath"]."jate/modules/Module/Module.php");
	requireComponents	($jConfig["JATEPath"]."jate/functions");
	requireModules		($jConfig["JATEPath"]."jate/modules");
	requireComponent	("config.php");
	requireModules		("modules");
	requireComponent	("pages/Template.php");
	requireComponents	("pages");

?>
