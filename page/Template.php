<?php
	class Template extends Html {
		public function __construct() {
			parent::__construct();
			$this->data["template"] = "gui/template.php";
		}
	}
?>
