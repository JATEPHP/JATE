<?php
	session_start();


	//JATE SUFF
	require_once			(end($GLOBALS["JATEPath"])."jate/functions/requirer.php");
	//USER STUFF
	requireComponent	("modules/JConfig/JConfig.php");
	$jConfig	= new JConfig();
	$jConfig->import("config.json");
	//JATE STUFF
	requireComponent	("functions/folder.php");

	//JATE SUFF
	requireComponent	("modules/Module/Module.php");
	requireComponents	("functions");
	requireModules		("modules");

	//USER STUFF
	requireComponent	("config.php",false);
	requireModules		("modules",false);
	requireComponent	("pages/Template.php",false);
	requireComponents	("pages",false);
?>
