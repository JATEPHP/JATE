<?php
	function utf8ize($_array) {
		return travelStringArray($_array,"utf8_encode");
	}
	function unutf8ize($_array) {
		return travelStringArray($_array,"utf8_decode");
	}
	function arraySlash($_array) {
		return travelStringArray($_array,"addslashes");
	}
	function travelStringArray ( $_array, $_function ) {
		if (is_array($_array)) {
			foreach ($_array as $k => $v) {
				$_array[$k] = travelStringArray($v, $_function);
			}
		} else if (is_string ($_array)) {
			return call_user_func($_function,$_array);
		}
		return $_array;
	}
	function array_depth( $_array ) {
		$maxDepth = 1;
		foreach ($_array as $value) {
			if (is_array($value)) {
				$depth = array_depth($value) + 1;
				if ($depth > $maxDepth) {
					$maxDepth = $depth;
				}
			}
		}
		return $maxDepth;
	}
?>
