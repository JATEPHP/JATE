<?php
	jRequire("../Module/Module.php");
	jRequire("Parsedown/Parsedown.php");
	use Parsedown as Parsedown;
	class Parsedown extends Module {
		public function __construct() {
			parent::__construct();
		}
		public function drawFile( $_template ) {
			return $this->draw($_template);
		}
		public function drawText( $_template ) {
			return $this->draw(trim($_template));
		}
		public function draw( $_template ) {
			$Parsedown = new Parsedown\Parsedown();
			$page = $Parsedown->text($_template);
			return $page;
		}
	}
?>
