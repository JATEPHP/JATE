<?php
	function utf8ize($_array) {
		if (is_array($_array)) {
			foreach ($_array as $k => $v) {
				$_array[$k] = utf8ize($v);
			}
		} else if (is_string ($_array)) {
			return utf8_encode($_array);
		}
		return $_array;
	}
	function unutf8ize($_array) {
		if (is_array($_array)) {
			foreach ($_array as $k => $v) {
				$_array[$k] = unutf8ize($v);
			}
		} else if (is_string ($_array)) {
			return utf8_decode($_array);
		}
		return $_array;
	}
	function array_depth( $_array ) {
		$max_depth = 1;
		foreach ($_array as $value) {
			if (is_array($value)) {
				$depth = array_depth($value) + 1;
				if ($depth > $max_depth) {
					$max_depth = $depth;
				}
			}
		}
		return $max_depth;
	}
	function array_slash($_array) {
		if (is_array($_array)) {
			foreach ($_array as $k => $v) {
				$_array[$k] = array_slash($v);
			}
		} else if (is_string ($_array)) {
			return addslashes($_array);
		}
		return $_array;
	}
?>
