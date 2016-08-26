<?php
	jRequire("../modules/Pug/Pug.php");
	jRequire("../modules/Parsedown/Parsedown.php");
	function jBlock() {
		return ob_start();
	}

	function jBlockClose( $_parameter = "html" ) {
		return jBlockEnd($_parameter);
	}

	function jBlockFile( $_path ) {
		$extension = explode(".", $_path);
		$extension = $extension[count($extension)-1];
		$extension = strtolower($extension);
		$temp = file_get_contents($_path);
		return jBlockParsing($extension, $temp);
	}

	function jBlockEnd( $_parameter = "html" ) {
		$temp = ob_get_clean();
		return jBlockParsing($_parameter, $temp);
	}

	function jBlockParsing( $_parameter = "html", $_string = "" ) {
		switch ($_parameter) {
			case "pug":
			case "jade":
				$Pug = new Pug();
				$_string = $Pug->drawText($_string);
			break;
			case "md":
			case "markdown":
			case "parsedown":
				$Parsedown = new Parsedown();
				$_string = $Parsedown->drawText($_string);
			break;
			default: break;
		}
		return $_string;
	}

	function minifyOutput($_buffer) {
		$search = array ( '/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s' );
		$replace = array ( '>', '<', '\\1' );
		if (preg_match("/\<html/i",$_buffer) == 1 && preg_match("/\<\/html\>/i",$_buffer) == 1)
			$_buffer = preg_replace($search, $replace, utf8_decode($_buffer));
		return utf8_encode($_buffer);
	}
?>
