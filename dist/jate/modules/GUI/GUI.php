<?php
	class GUI extends Module {
		public function __construct() {
			parent::__construct();
		}
		public function init( $_page ) {
			$this->tags = $_page->tags;
		}
		public function draw( $_template ) {
			$page = file_get_contents($_template);
			$render = $this->overlayTag($page);
			echo minifyOutput($render);
		}
		protected function overlayTag( $_page ) {
			foreach($this->tags as $key => $value)
				if(!is_array($value))
					$_page = str_replace("<_${key}_>", "$value", $_page);
			return $_page;
		}
	}
?>
