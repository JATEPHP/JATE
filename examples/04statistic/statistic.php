<?php
	$GLOBALS["PRINT"] = false;
	require_once("index.php");
	$statistic = new Statistic($webApp);
	echo $statistic->draw();
?>
