<?php
	class Template extends Html {
		public function __construct() {
			parent::__construct();
			$this->data["brand"]		= "JATE";
			$this->data["brandImg"] = "";
			$this->data["title"]		= "JATE";
			$this->data["template"] = "guis/tradictional.html";
			$this->addFilesRequired([
					"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				, "https://code.jquery.com/jquery-1.11.3.min.js"
				, "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
			]);
			$this->data["metaDescription"] = "Beautiful description .";
			$this->data["metaKeywords"] = "JATE,PHP,JS,CSS";
			$this->data["metaAuthor"] = "XaBerr";
			$this->makeConnection();
		}
		public function makeConnection() {
			global $jConfig;
			$connection = null;
			if($jConfig->connection["enable"])
				$connection = new Connection(
						$jConfig->connection["server"]
					, $jConfig->connection["database"]
					, $jConfig->connection["user"]
					, $jConfig->connection["password"]
				);
			$this->addConnection("base",$connection);
		}
	}
?>