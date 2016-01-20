<?php

	function jBlock() {
		return ob_start();
	}

	function jBlockClose() {
		return ob_get_clean();
	}

	function jBlockEnd() {
		return ob_get_clean();
	}

	function minify_output($_buffer) {
		$search = array ( '/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s' );
		$replace = array ( '>', '<', '\\1' );
		if (preg_match("/\<html/i",$_buffer) == 1 && preg_match("/\<\/html\>/i",$_buffer) == 1)
			$_buffer = preg_replace($search, $replace, utf8_decode($_buffer));
		return utf8_encode($_buffer);
	}
?>
