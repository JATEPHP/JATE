<?php
	require_once("jate.php");

	//CLASSES
	$connection = new Connection(
		$GLOBALS["config"]["connection"]["server"],
		$GLOBALS["config"]["connection"]["database"],
		$GLOBALS["config"]["connection"]["user"],
		$GLOBALS["config"]["connection"]["password"]
	);
	$webApp	= new WebApp();

	//FETCH
	if(!isset($_GET["page"])) $_GET["page"] = "home";
	$webApp->addPages([
		["home","Home"],
		["newPage","NewPage"]
	]);
	$page = $webApp->fetchPage($_GET["page"]);

	//PRINT
	if( !isset($GLOBALS["PRINT"]) || $GLOBALS["PRINT"] === true ) {
		$page->uniforma();
		require_once($page->data["template"]);
		$gui = new GUI();
		$gui->init();
		$gui->setPage($page);
		$output = $gui->draw();
		echo minify_output($output);
	}
?>
