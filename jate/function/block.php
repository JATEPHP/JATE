<?php

	function jBlock() {
		return ob_start();
	}

	function jBlockClose() {
		return ob_get_clean();
	}

?>
