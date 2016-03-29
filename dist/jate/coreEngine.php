<?php
	session_start();
	//USER STUFF
	require_once("config.php");
	$jConfig	= new JConfig();

	//JATE SUFF
	require_once			(end($GLOBALS["JATEPath"])."jate/functions/requirer.php");
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
