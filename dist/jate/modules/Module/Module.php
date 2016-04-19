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
			foreach ($this->files as $i)
				if (is_array($i))
					array_push($temp,$i);
			foreach ($this->modules as $i)
				$temp = array_merge( $temp, $i->getJsVariables() );
			return $temp;
		}
		public function addModules( $_mods ) {
			foreach ($_mods as $value)
				$this->addModule($value);
		}
		public function addModule( $_mod ) {
			$this->modules[$_mod->name] = $_mod;
		}
		public function addFiles( $_files ) {
			foreach ($_files as $value)
				$this->addFile($value);
		}
		public function addFile( $_file ) {
			array_push($this->files, $_file);
		}
		protected function addDipendences() {
			$this->data["css"] = $this->getCss();
			$this->data["js"] = $this->getJs();
			$this->data["jsVariables"] = $this->getJsVariables();
		}
		protected function getRequire( $_function, $_extenction) {
			$temp = [];
			foreach ($this->files as $i)
				if (!is_array($i) && strpos($i, $_extenction) !== FALSE)
					array_push($temp,$i);
			foreach ($this->modules as $i)
				$temp = array_merge( $temp, $i->$_function() );
			return $temp;
		}
	}
?>
