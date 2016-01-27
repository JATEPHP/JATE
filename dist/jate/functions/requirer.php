<?php
//FUNCTIONS
function requireComponent($_path) {
	if(file_exists($_path) && isPhp($_path))
		require_once($_path);
	else
		requireError($_path);
}
function requireComponents($_path) {
	if(file_exists($_path)) {
		$files = subFolder_file($_path);
		foreach ($files as $i) {
			requireComponent($_path."/".$i);
		}
	} else
		requireError($_path);
}
function requireError( $_p ) {
	if( $GLOBALS["DEBUG"] == 1 )
		echo "Error load ($_p)<br>";
}
function isPhp ( $_file ) {
	if(!is_file($_file)) return false;
	$info = pathinfo($_file);
	return ($info["extension"] == "php") || ($info["extension"] == "PHP");
}
function requireModules( $_path ) {
	$subFolders = subFolder_dir($_path);
	foreach ($subFolders as $i) {
		requireComponents($_path."/".$i);
	}
}
?>
