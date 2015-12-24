<?php
	session_start();
	//FUNCTIONS
	function requireComponent($_path) {
		if(file_exists($_path))
			require_once($_path);
	}
	function requireComponents($_path) {
		if(file_exists($_path))
			require_subfolder($_path);
	}
	//REQUIRE
	//jateStuff
	requireComponent ($GLOBALS["JATEPath"]."jate/config.php");
	requireComponent ($GLOBALS["JATEPath"]."jate/function/folder.php");
	requireComponents($GLOBALS["JATEPath"]."jate/function");
	requireComponents($GLOBALS["JATEPath"]."jate/class");
	//common
	requireComponent("config.php");
	requireComponent("function/folder.php");
	requireComponents("function");
	requireComponents("class");
	requireComponent("page/Template.php");
	requireComponents("page");
?>
