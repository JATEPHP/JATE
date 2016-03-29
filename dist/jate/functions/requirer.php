<?php
	function requireComponent( $_path, $_local = true, $_stack = null ) {
		$path = getJFolder($_path, $_local, debug_backtrace());
		if(file_exists($path) && isPhp($path))
			jRequire($path, false, 0);
		else
			requireError($_path);
	}
	function requireComponents( $_path, $_local = true, $_stack = null ) {
		$path = getJFolder($_path, $_local, debug_backtrace());
		if(file_exists($path)) {
			$files = subFolder_file($path);
			foreach ($files as $i) {
				if(isPhp($path."/".$i))
					requireComponent($path."/".$i, false, 0);
			}
		} else
			requireError($_path);
	}
	function requireError( $_path ) {
		global $jConfig;
		if( $jConfig->DEBUG == 1 )
			echo "Error load ($_path)<br>";
	}
	function isPhp ( $_file ) {
		if(!is_file($_file)) return false;
		$info = pathinfo($_file);
		return ($info["extension"] == "php") || ($info["extension"] == "PHP");
	}
	function requireModules( $_path, $_local = true, $_stack = null ) {
		$path = getJFolder($_path, $_local, debug_backtrace());
		$subFolders = subFolder_dir($path);
		foreach ($subFolders as $i) {
			requireComponents($path."/".$i, false, 0);
		}
	}
	function jRequire( $_path, $_local = true, $_stack = null ) {
		$path = getJFolder($_path, $_local, debug_backtrace());
		require_once( $path );
	}
	function getJFolder( $_path, $_local, $_stack ) {
		if($_local) {
			$stackInfo = $_stack;
			$folder = dirname($stackInfo[0]["file"]);
			$file = "$folder/$_path";
		} else
			$file = $_path;
		return $file;
	}
?>
