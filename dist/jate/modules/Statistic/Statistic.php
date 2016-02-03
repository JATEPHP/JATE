<?php
	require_once($GLOBALS["JATEPath"]."jate/classes/Module.php");
	class Statistic extends ExternalModule {
		public $name;
		public $data;
		public function __construct( $_webApp ) {
			$pages = [];
			$pages = $_webApp->pages;
			$stats = [];
			foreach ( $pages as $k => $v ) {
				$temp = new $v[0]($v[1]);
				$temp->addDipendences();
				$stats[$k] = [];
				$stats[$k] = array_merge($stats[$k], $temp->data["css"]);
				$stats[$k] = array_merge($stats[$k], $temp->data["js"]);
			}
		}
	}
?>
