<?php
	class Module {
		public $name;
		public $modules;
		public $files;
		public $required;
		public $data;
		public $tags;
		public $connection;
		public $parameters;
		public function __construct() {
			$this->name				= get_class($this);
			$this->modules		= [];
			$this->files			= [];
			$this->required		= [];
			$this->data				= [];
			$this->tags				= [];
			$this->connection	= null;
			$this->parameters = null;
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
			foreach ($this->required as $i)
				if (is_array($i))
					array_push($temp,$i);
			foreach ($this->modules as $i)
				$temp = array_merge( $temp, $i->getJsVariables() );
			foreach ($this->files as $i)
				if (is_array($i))
					array_push($temp,$i);
			return $temp;
		}
		public function addModules( $_mods ) {
			if(!is_array($_mods))
				throw new InvalidArgumentException("Parameter must be an array.");
			foreach ($_mods as $value)
				$this->addModule($value);
		}
		public function addModule( $_mod ) {
			if(!is_object($_mod))
				throw new InvalidArgumentException("Parameter must be a class.");
			if(! is_subclass_of ($_mod, "Module"))
				throw new InvalidArgumentException("Parameter must be a class.");
			$this->modules[$_mod->name] = $_mod;
			$this->modules[$_mod->name]->parameters = &$this->parameters;
		}
		public function addFiles( $_files ) {
			if(!is_array($_files))
				throw new InvalidArgumentException("Parameter must be an array.");
			foreach ($_files as $value)
				$this->addFile($value);
		}
		public function addFile( $_file ) {
			if(!is_string($_file))
				throw new InvalidArgumentException("Parameter must be a string.");
			array_push($this->files, $_file);
		}
		public function addFilesRequired( $_files ) {
			if(!is_array($_files))
				throw new InvalidArgumentException("Parameter must be an array.");
			foreach ($_files as $value)
				$this->addFileRequired($value);
		}
		public function addFileRequired( $_file ) {
			if(!is_string($_file))
				throw new InvalidArgumentException("Parameter must be a string.");
			array_push($this->required, $_file);
		}
		protected function addDipendences() {
			$this->tags["css"] = $this->getCss();
			$this->tags["js"] = $this->getJs();
			$this->tags["jsVariables"] = $this->getJsVariables();
		}
		protected function getRequire( $_function, $_extenction) {
			$temp = [];
			foreach ($this->required as $i)
				if (!is_array($i) && strpos($i, $_extenction) !== FALSE)
					array_push($temp,$i);
			foreach ($this->modules as $i)
				$temp = array_merge( $temp, $i->$_function() );
			foreach ($this->files as $i)
				if (!is_array($i) && strpos($i, $_extenction) !== FALSE)
					array_push($temp,$i);
			return $temp;
		}
	}
?>
