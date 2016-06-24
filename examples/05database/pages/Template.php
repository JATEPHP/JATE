<?php
	class Template extends Html {
		public function __construct() {
			parent::__construct();
			$this->tags["brand"]		= "JATE";
			$this->tags["brandImg"] = "";
			$this->tags["title"]		= "JATE";
			$this->data["template"] = "guis/tradictional.html";
			$this->addFilesRequired([
					"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				, "https://code.jquery.com/jquery-1.11.3.min.js"
				, "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
			]);
			$this->tags["metaDescription"] = "Beautiful description .";
			$this->tags["metaKeywords"] = "JATE,PHP,JS,CSS";
			$this->tags["metaAuthor"] = "XaBerr";
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
