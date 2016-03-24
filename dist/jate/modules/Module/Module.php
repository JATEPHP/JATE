<?php
	class Module {
		public $name;
		public $requires		= [];
		public $dipendence	= [];
		public $data				= [];
		public function __construct(){}
		// abstract public function config();
		// abstract public function init();
		// abstract public function draw();
		public function getCss() {
			return $this->getRequire("getCss",".css");
		}
		public function getJs() {
			return $this->getRequire("getJs",".js");
		}
		public function getJsVariables() {
			$temp = [];
			foreach ($this->requires as $i)
				$temp = array_merge( $temp, $i->getJsVariables() );
			foreach ($this->dipendence as $i)
				if (is_array($i))
					array_push($temp,$i);
			return $temp;
		}
		private function getRequire( $_function, $_extenction) {
			$temp = [];
			foreach ($this->requires as $i)
				$temp = array_merge( $temp, $i->$_function() );
			foreach ($this->dipendence as $i)
				if (!is_array($i) && strpos($i, $_extenction) !== FALSE)
					array_push($temp,$i);
			return $temp;
		}
	}
?>
