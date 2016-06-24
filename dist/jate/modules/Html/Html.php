<?php
	requireComponent("../Query/Query.php");
	class Html extends Query {
		public function __construct() {
			parent::__construct();
			$this->data["template"]					= "";
			$this->tags["brand"]						= "";
			$this->tags["brandImg"]					= "";
			$this->tags["menu"]							= "";
			$this->tags["title"]						= "";
			$this->tags["subtitle"]		 			= "";
			$this->tags["content"]				 	= "";
			$this->tags["outContent"]		 		= "";
			$this->tags["footer"]		 				= "";
			$this->tags["pagePath"]				 	= [];
			$this->tags["css"]							= [];
			$this->tags["js"]					 			= [];
			$this->tags["jsVariables"]			= [];
			$this->tags["metaDescription"]	= [];
			$this->tags["metaKeywords"]			= [];
			$this->tags["metaAuthor"]				= [];
		}
		public function uniforma() {
			$this->addDipendences();
			$this->tags["css"]			= array_unique($this->tags["css"]);
			$this->tags["js"]				= array_unique($this->tags["js"]);
			$this->tags["pagePath"]	= json_encode($this->tags["pagePath"]);
			$tempStr = "";
			foreach ($this->tags["css"] as $i)
				$tempStr .= "<link rel='stylesheet' href='$i'>";
			$this->tags["css"] = $tempStr;
			$tempStr = "";
			foreach ($this->tags["js"] as $i)
				$tempStr .= "<script src='$i'></script>";
			$this->tags["js"] = $tempStr;
			$tempStr = "";
			$tempStr .= "<script type='text/javascript'>";
			foreach ($this->tags["jsVariables"] as $i)
				$tempStr .= " $i[0] = $i[1];\n";
			$tempStr .= "</script>";
			$this->tags["jsVariables"] = $tempStr;
		}
	}
?>
