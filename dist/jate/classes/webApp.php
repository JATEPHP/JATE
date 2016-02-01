<?php
	class webApp {
		public $pages;
		public $defaultPage;
		public function __construct() {
			$this->pages = [];
			$this->defaultPage = ["Page404",[]];
		}
		public function addPage( $_page ) {
			$label = "";
			$class = "";
			$param = [];
			if(is_array($_page)) {
				$label = $_page[0];
				$class = $_page[1];
				if(isset($_page[2]))
					$param = $_page[2];
			} else {
				$label = $_page;
				$class = $_page;
			}
			$this->pages[$label] = [$class,$param];
		}
		public function addPages( $_pages ) {
			foreach ($_pages as $i)
				$this->addPage($i);
		}
		public function fetchPage( $_label ) {
			$temp = $this->defaultPage;
			if(isset($this->pages[$_label]))
				$temp = $this->pages[$_label];
			return new $temp[0]($temp[1]);
		}
		public function setDefaultPage( $_page ) {
			$this->defaultPage = $_page;
		}
	}
?>
