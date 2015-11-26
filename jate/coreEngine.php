<?php
	session_start();
	//REQUIRE
	//jateStuff
	require_once("jate/config.php");
	require_once("jate/function/folder.php");
	require_subfolder("jate/function");
	require_subfolder("jate/class");
	//common
	require_once("config.php");
	require_once("function/folder.php");
	require_subfolder("function");
	require_subfolder("class");
	require_once("page/Template.php");
	require_subfolder("page");

?>
