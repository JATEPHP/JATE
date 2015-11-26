<?php
	require_once("jate.php");

	//CLASSI
	$connection = new Connection(
		$_GLOBAL["config"]["connection"]["server"],
		$_GLOBAL["config"]["connection"]["database"],
		$_GLOBAL["config"]["connection"]["user"],
		$_GLOBAL["config"]["connection"]["password"]
	);
	$page = new Html();

	//FETCH
	if(!isset($_GET["page"])) $_GET["page"] = "home";
	switch ($_GET["page"]) {
    case 'home': 						$page = new Home(); 					break;
    default: 								$page = new Page404();				break;
  }

	$page->uniforma();
	//TEMPLATE
	$brand    		= $page->data["brand"];
	$menu  				= $page->data["menu"];
	$title        = $page->data["title"];
	$subtitle     = $page->data["subtitle"];
	$content     	= $page->data["content"];
	$pagePath     = $page->data["pagePath"];
	$css					= $page->data["css"];
	$js						= $page->data["js"];
	$jsVariables	= $page->data["jsVariables"];
	$footer				= $page->data["footer"];
	require_once($page->data["template"]);
?>
