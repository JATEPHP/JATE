<?php
	$GLOBALS["JATEPath"] = "";
	$commonLocations = array(
		"bower_components/JATE/",
		""
	);
	foreach ($commonLocations as $i)
		if(file_exists($i."jate/coreEngine.php")) {
			$GLOBALS["JATEPath"] = $i;
			require_once($i."jate/coreEngine.php");
			break;
		}
?>
