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
	requireComponent("jate/config.php");
	requireComponent("jate/function/folder.php");
	requireComponents("jate/function");
	requireComponents("jate/class");
	//common
	requireComponent("config.php");
	requireComponent("function/folder.php");
	requireComponents("function");
	requireComponents("class");
	requireComponent("page/Template.php");
	requireComponents("page");
?>
