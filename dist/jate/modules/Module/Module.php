<?php
	class Module {
		public $name;
		public $modules;
		public $files;
		public $data;
		public function __construct() {
			$this->name			= get_class($this);
			$this->modules	= [];
			$this->files		= [];
			$this->data			= [];
		}
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
			foreach ($this->modules as $i)
				$temp = array_merge( $temp, $i->getJsVariables() );
			foreach ($this->files as $i)
				if (is_array($i))
					array_push($temp,$i);
			return $temp;
		}
		public function addModule( $_mod ) {
			$this->modules[$_mod->name] = $_mod;
		}
		protected function addDipendences() {
			foreach ($this->modules as $i) {
				$this->data["css"] = array_merge($this->data["css"], $i->getCss());
				$this->data["js"] = array_merge($this->data["js"], $i->getJs());
				$this->data["jsVariables"] = array_merge($this->data["jsVariables"], $i->getJsVariables());
			}
		}
		protected function getRequire( $_function, $_extenction) {
			$temp = [];
			foreach ($this->modules as $i)
				$temp = array_merge( $temp, $i->$_function() );
			foreach ($this->files as $i)
				if (!is_array($i) && strpos($i, $_extenction) !== FALSE)
					array_push($temp,$i);
			return $temp;
		}
	}
?>
