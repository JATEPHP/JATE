<?php
	class Html {
		public $data;
		public $modules;
		public function __construct() {
			$this->modules = array();
			$this->data["template"]					= "";
			$this->data["brand"]						= array(" "," ");
			$this->data["menu"]							= "";
			$this->data["title"]						= "";
			$this->data["subtitle"]		 			= "";
			$this->data["content"]				 	= "";
			$this->data["footer"]		 				= "";
			$this->data["pagePath"]				 	= array();
			$this->data["css"]							= array();
			$this->data["js"]					 			= array();
			$this->data["jsVariables"]			= array();
			$this->data["metaDescription"]	= array();
			$this->data["metaKeywords"]			= array();
			$this->data["metaAuthor"]				= array();
		}
		public function uniforma() {
			$this->addDipendences();
			$this->data["css"]			= array_unique($this->data["css"]);
			$this->data["js"]				= array_unique($this->data["js"]);
			$this->data["pagePath"]	= json_encode($this->data["pagePath"]);
			$tempStr = "";
			foreach ($this->data["css"] as $i)
				$tempStr = $tempStr.'<link rel="stylesheet" href="'.$i.'">';
			$this->data["css"] = $tempStr;
			$tempStr = "";
			foreach ($this->data["js"] as $i)
				$tempStr = $tempStr.'<script src="'.$i.'"></script>';
			$this->data["js"] = $tempStr;
			$tempStr = "";
			$tempStr = $tempStr.'<script type="text/javascript">';
			foreach ($this->data["jsVariables"] as $i)
				$tempStr = $tempStr." ".$i[0]." = ".$i[1].";\n";
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
