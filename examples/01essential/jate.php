<?php
	if(!isset($GLOBALS["JATEPath"]))
		$GLOBALS["JATEPath"] = [];
	$commonLocations = array(
		"bower_components/JATE/dist/",
		"vendor/xaberr/jate/dist/",
		"../../dist/"
	);
	foreach ($commonLocations as $i)
		if(file_exists($i."jate/coreEngine.php")) {
			array_push($GLOBALS["JATEPath"], $i);
			require_once($i."jate/coreEngine.php");
			break;
		}
?>
