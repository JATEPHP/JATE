<?php
	class Module {
		public $name;
		public $requires		= [];
		public $dipendence	= [];
		public $data				= [];
		public function __construct(){}
		// abstract public function init();
		// abstract public function draw();
		public function getCss() {
			$temp = [];
			foreach ($this->requires as $i)
				$temp = array_merge( $temp, $i->getCss() );
			foreach ($this->dipendence as $i)
				if (!is_array($i) && strpos($i, '.css') !== FALSE)
					array_push($temp,$i);
			return $temp;
		}
		public function getJs() {
			$temp = [];
			foreach ($this->requires as $i)
				$temp = array_merge( $temp, $i->getJs() );
			foreach ($this->dipendence as $i)
				if (!is_array($i) && strpos($i, '.js') !== FALSE)
					array_push($temp,$i);
			return $temp;
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
	}
?>
