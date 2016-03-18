<?php
	// require_once($GLOBALS["JATEPath"]."jate/classes/Module.php");
	class GUI {// extends Module
		private $data;
		public function __construct() {
			$this->data = [];
		}
		public function init( $_page ) {
			$this->data = $_page->data;
		}
		public function draw( $_template ) {
			$page = file_get_contents($_template);
			$render = $this->overlayTag($page);
			echo minify_output($render);
		}
		private function overlayTag( $_page ) {
			foreach($this->data as $key => $value) {
				$_page = str_replace("<_".$key."_>", "$value", $_page);
			}
			return $_page;
		}
	}
?>
