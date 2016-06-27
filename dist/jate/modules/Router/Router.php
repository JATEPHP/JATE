<?php
	class Router extends Module {
		public function __construct() {
			parent::__construct();
		}
		public function getPage() {
			$base			= $_SERVER["REDIRECT_BASE"];
			$request	= $_SERVER["REQUEST_URI"];
			$url			= str_replace($base, "", $request);
			$url			= explode("/",$url);
			return $url[1];
		}
	}
?>
