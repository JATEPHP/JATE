<?php
	function utf8ize($_d) {
		if (is_array($_d)) {
			foreach ($_d as $k => $v) {
				$_d[$k] = utf8ize($v);
			}
		} else if (is_string ($_d)) {
			return utf8_encode($_d);
		}
		return $_d;
	}
	function unutf8ize($_d) {
		if (is_array($_d)) {
			foreach ($_d as $k => $v) {
				$_d[$k] = unutf8ize($v);
			}
		} else if (is_string ($_d)) {
			return utf8_decode($_d);
		}
		return $_d;
	}
	function array_depth( $_a ) {
		$max_depth = 1;
		foreach ($_a as $value) {
			if (is_array($value)) {
				$depth = array_depth($value) + 1;

				if ($depth > $max_depth) {
					$max_depth = $depth;
				}
			}
		}
		return $max_depth;
	}
	function array_slash($_d) {
		if (is_array($_d)) {
			foreach ($_d as $k => $v) {
				$_d[$k] = array_slash($v);
			}
		} else if (is_string ($_d)) {
			return addslashes($_d);
		}
		return $_d;
	}
?>
