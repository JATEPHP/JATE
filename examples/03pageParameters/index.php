<?php
	require_once("jate.php");

	//CLASSES
	$connection = new Connection(
		$GLOBALS["config"]["connection"]["server"],
		$GLOBALS["config"]["connection"]["database"],
		$GLOBALS["config"]["connection"]["user"],
		$GLOBALS["config"]["connection"]["password"]
	);
	$page = new Html();
	$webApp = new webApp();

	//FETCH
	if(!isset($_GET["page"])) $_GET["page"] = "home";
	$webApp->addPages([
		["home","Home"],
		["newPage","Home",[2,"By"]]
	]);
	$page = $webApp->fetchPage($_GET["page"]);
	$page->uniforma();

	//TEMPLATE
	require_once($page->data["template"]);
	$gui = new GUI();
	$gui->init();
	$gui->brand						= $page->data["brand"];
	$gui->menu						= $page->data["menu"];
	$gui->title			 			= $page->data["title"];
	$gui->subtitle				= $page->data["subtitle"];
	$gui->content		 			= $page->data["content"];
	$gui->pagePath				= $page->data["pagePath"];
	$gui->css							= $page->data["css"];
	$gui->js							= $page->data["js"];
	$gui->jsVariables			= $page->data["jsVariables"];
	$gui->footer					= $page->data["footer"];
	$gui->metaDescription	= $page->data["metaDescription"];
	$gui->metaKeywords		= $page->data["metaKeywords"];
	$gui->metaAuthor			= $page->data["metaAuthor"];
	$output = $gui->draw();
	echo minify_output($output);
?>
