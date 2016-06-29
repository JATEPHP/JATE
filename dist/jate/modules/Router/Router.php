<?php
	class Router extends Module {
		public function __construct() {
			parent::__construct();
		}
		public function getPage() {
			$request	= $_SERVER["REQUEST_URI"];
			$base			= $_SERVER["PHP_SELF"];
			$base			= str_replace("/index.php", "", $base);
			$url			= str_replace($base, "", $request);
			$url			= explode("/", $url);
			return $url;
		}
	}
?>
