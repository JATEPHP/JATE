<?php
	session_start();
	$GLOBALS["DEBUG"] = 1;

	//jateStuff
	require_once($GLOBALS["JATEPath"]."jate/function/requirer.php");
	requireComponent ($GLOBALS["JATEPath"]."jate/config.php");
	requireComponent ($GLOBALS["JATEPath"]."jate/function/folder.php");
	requireComponents($GLOBALS["JATEPath"]."jate/function");
	requireComponents($GLOBALS["JATEPath"]."jate/class");
	//common
	requireComponent("config.php");
	requireComponents("function");
	requireModules("class");
	requireComponent("page/Template.php");
	requireComponents("page");

?>
