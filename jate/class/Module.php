<?php
	class Module {
		public $name;
		public $require;
		public $dipendence;
		public $data;
		public function __construct(){}
		public function getCss() {
			$temp = array();
			foreach ($this->dipendence as $i)
				if (strpos($i, '.css') !== FALSE)
					array_push($temp,$i);
			return $temp;
		}
		public function getJs() {
			$temp = array();
			foreach ($this->dipendence as $i)
				if (strpos($i, '.js') !== FALSE)
					array_push($temp,$i);
			return $temp;
		}
	}
?>
