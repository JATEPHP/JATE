<?php
	jRequire("../Module/Module.php");
	class Router extends Module {
		public function __construct() {
			parent::__construct();
		}
		public function getPage() {
			$request	= $this->parameters["app"]->server["REQUEST_URI"];
			$base			= $this->parameters["app"]->server["RELATIVE"];
			$url			= str_replace($base, "", $request);
			$url			= explode("/", $url);
			return $url;
		}
	}
?>
