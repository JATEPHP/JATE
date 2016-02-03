<?php
	function subFolder( $_dir = "./" ) {
		$temp = fetchInSubFolder($_dir, function( $_file ) {
			return true;
		});
		return $temp;
	}
	function subFolder_file( $_dir = "./" ) {
		$temp = fetchInSubFolder($_dir, function( $_file ) {
			return !is_dir($_file);
		});
		return $temp;
	}
	function subFolder_dir( $_dir = "./" ) {
		$temp = fetchInSubFolder($_dir, function( $_file ) {
			return !is_file($_file);
		});
		return $temp;
	}
	function fetchInSubFolder( $_dir = "./", $_function) {
		$temp = array();
		if (is_dir($_dir)) {
				if ($dirOpened = opendir($_dir)) {
						while (($file = readdir($dirOpened)) !== false)
								if( ($file !='.')&&($file !='..') )
									if($_function($file))
										array_push($temp,$file);
						closedir($dirOpened);
				}
		}
		return $temp;
	}
	function require_subfolder( $_dir = "./" ) {
		$temp = subFolder_file($_dir);
		foreach ($temp as $i)
			require_once($_dir."/".$i);
	}
	function require_js( $_dir = "./" ) {
		$tempArray = array();
		$temp = subFolder_file($_dir);
		foreach ($temp as $i)
			array_push($tempArray, $_dir."/".$i);
		return $tempArray;
	}
?>
