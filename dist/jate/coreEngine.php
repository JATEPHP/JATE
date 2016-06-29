<?php
	session_start();
	$DEBUG = false;

	//JATE SUFF
	require_once			(end($GLOBALS["JATEPath"])."jate/functions/requirer.php");
	requireComponent	("functions/folder.php");
	requireComponent	("modules/JConfig/JConfig.php");
	requireComponent	("modules/Module/Module.php");
	requireComponents	("functions");
	requireModules		("modules");

	//USER STUFF
	requireComponent	("config.php",false);
	requireModules		("modules",false);
	requireComponents	("bundles/models",false);
	requireComponents	("bundles/controllers",false);
?>
