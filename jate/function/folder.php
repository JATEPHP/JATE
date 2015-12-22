<?php
	function subFolder( $_dir = "./" ) {
		$temp = array();
		if (is_dir($_dir)) {
				if ($dh = opendir($_dir)) {
						while (($file = readdir($dh)) !== false) {
								if( ($file !='.')&&($file !='..') ) {
								array_push($temp,$file);
							 }
						}
						closedir($dh);
				}
		}
		return $temp;
	}
	function subFolder_file( $_dir = "./" ) {
		$temp = array();
		if (is_dir($_dir)) {
				if ($dh = opendir($_dir)) {
						while (($file = readdir($dh)) !== false) {
								if( ($file !='.') && ($file !='..') && !is_dir($file) ) {
								array_push($temp,$file);
							 }
						}
						closedir($dh);
				}
		}
		return $temp;
	}
	function subFolder_dir( $_dir = "./" ) {
		$temp = array();
		if (is_dir($_dir)) {
				if ($dh = opendir($_dir)) {
						while (($file = readdir($dh)) !== false) {
								if( ($file !='.') && ($file !='..') && is_dir($file) ) {
								array_push($temp,$file);
							 }
						}
						closedir($dh);
				}
		}
		return $temp;
	}
	function require_subfolder( $_dir = "./" ) {
		$temp = subFolder_file($_dir);
		foreach ($temp as $i) {
			require_once($_dir."/".$i);
		}
	}
	function require_js( $_dir = "./" ) {
		$tempArray = array();
		$temp = subFolder_file($_dir);
		foreach ($temp as $i) {
			array_push($tempArray, $_dir."/".$i);
		}
		return $tempArray;
	}
?>
