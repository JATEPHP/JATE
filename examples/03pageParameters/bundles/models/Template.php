<?php
	class Template extends Html {
		public function __construct( $_parameters ) {
			parent::__construct( $_parameters );
			$this->addModule(new Menu());
			$this->makeConnection();
			$this->tags["brand"]		= "JATE";
			$this->tags["brandImg"] = "";
			$this->tags["title"]		= "JATE - 06items";
			$this->data["template"] = "bundles/views/tradictional.html";
			$this->addFilesRequired([
					"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				, "https://code.jquery.com/jquery-1.11.3.min.js"
				, "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
			]);
			$this->tags["metaDescription"]	= "Beautiful description .";
			$this->tags["metaKeywords"]			= "JATE,PHP,JS,CSS";
			$this->tags["metaAuthor"]				= "XaBerr";
			$this->tags["menu"]							= $this->makeMenu();
		}
		public function makeConnection() {
			$jConfig = $this->parameters["app"];
			$connection = null;
			if( $jConfig != null && $jConfig->connection["enable"])
				$connection = new Connection(
						$jConfig->connection["server"]
					, $jConfig->connection["database"]
					, $jConfig->connection["user"]
					, $jConfig->connection["password"]
				);
			$this->addConnection("base",$connection);
		}
		public function makeMenu() {
			$this->modules["Menu"]->tags["menu"] = [
					["label"=>"Home", 		"link"=>"/Home",		"submenu"=>[], "relative"=>true]
				, ["label"=>"Items 1",	"link"=>"/Items/1",	"submenu"=>[], "relative"=>true]
				, ["label"=>"Items 2",	"link"=>"/Items/2",	"submenu"=>[], "relative"=>true]
				, ["label"=>"Items 3",	"link"=>"/Items/3",	"submenu"=>[], "relative"=>true]
			];
			$temp = $this->modules["Menu"]->draw();
			return $temp;
		}
	}
?>
