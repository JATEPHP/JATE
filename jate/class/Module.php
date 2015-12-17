<?php
	class Module {
		public $name;
		public $requires		= array();
		public $dipendence	= array();
		public $data				= array();
		public function __construct(){}
		// abstract public function init();
		// abstract public function draw();
		public function getCss() {
			$temp = array();
			foreach ($this->requires as $i)
				$temp = array_merge( $temp, $i->getCss() );
			foreach ($this->dipendence as $i)
				if (!is_array($i) && strpos($i, '.css') !== FALSE)
					array_push($temp,$i);
			return $temp;
		}
		public function getJs() {
			$temp = array();
			foreach ($this->requires as $i)
				$temp = array_merge( $temp, $i->getJs() );
			foreach ($this->dipendence as $i)
				if (!is_array($i) && strpos($i, '.js') !== FALSE)
					array_push($temp,$i);
			return $temp;
		}
		public function getJsVariables() {
			$temp = array();
			foreach ($this->requires as $i)
				$temp = array_merge( $temp, $i->getJsVariables() );
			foreach ($this->dipendence as $i)
				if (is_array($i))
					array_push($temp,$i);
			return $temp;
		}
	}
?>
