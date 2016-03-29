<?php
	session_start();
	$jConfig["DEBUG"] = 1;

	//JATE SUFF
	require_once			($jConfig["JATEPath"]."jate/functions/requirer.php");
	requireComponent	("functions/folder.php");
	requireComponent	("config.php");
	requireComponent	("modules/Module/Module.php");
	requireComponents	("functions");
	requireModules		("modules");

	//USER STUFF
	requireComponent	("config.php",false);
	requireModules		("modules",false);
	requireComponent	("pages/Template.php",false);
	requireComponents	("pages",false);

?>
