<?php
	class Html {
		public $data;
		public $modules;
		public function __construct() {
			$this->modules = array();
			$this->data["template"]			= "";
			$this->data["brand"]				= array(" "," ");
			$this->data["menu"]					= "";
			$this->data["title"]				= "";
			$this->data["subtitle"]		 	= "";
			$this->data["content"]		 	= "";
			$this->data["footer"]		 		= "";
			$this->data["pagePath"]		 	= array();
			$this->data["css"]					= array();
			$this->data["js"]					 	= array();
			$this->data["jsVariables"]	= array();
		}
		public function uniforma() {
			$this->addDipendences();
			$this->data["pagePath"] = json_encode($this->data["pagePath"]);
			$tempStr = "";
			for ($i=0; $i < count($this->data["css"]); $i++) {
				$tempStr = $tempStr.'<link rel="stylesheet" href="'.$this->data["css"][$i].'">';
			}
			$this->data["css"] = $tempStr;
			$tempStr = "";
			for ($i=0; $i < count($this->data["js"]); $i++) {
				$tempStr = $tempStr.'<script src="'.$this->data["js"][$i].'"></script>';
			}
			$this->data["js"] = $tempStr;
			$tempStr = "";
			$tempStr = $tempStr.'<script type="text/javascript">';
			for ($i=0; $i < count($this->data["jsVariables"]); $i++) {
				$tempStr = $tempStr." ".$this->data["jsVariables"][$i][0]." = ".$this->data["jsVariables"][$i][1].";\n";
			}
			$tempStr = $tempStr.'</script>';
			$this->data["jsVariables"] = $tempStr;
		}
		public function draw() {

		}
		public function addModule( $_m ) {
			$this->modules[$_m->name] = $_m;
		}
		private function addDipendences() {
			foreach ($this->modules as $i) {
				$this->data["css"] = array_merge($this->data["css"], $i->getCss());
				$this->data["js"] = array_merge($this->data["js"], $i->getJs());
				$this->data["jsVariables"] = array_merge($this->data["jsVariables"], $i->getJsVariables());
			}
		}
	}
?>
