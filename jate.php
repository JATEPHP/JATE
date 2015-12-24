<?php
	$commonLocations = array(
		"bower_components/JATE/jate/coreEngine.php",
		"jate/coreEngine.php"
	);
	foreach ($commonLocations as $i)
		if(file_exists($i)) {
			require_once($i);
			break;
		}

?>
