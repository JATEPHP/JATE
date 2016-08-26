<?php
	use Pug as Pug;
	jRequire("../Module/Module.php");
	class Pug extends Module {
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
			$pug = new Pug\Pug();
			$page = $pug->render($_template);
			return $page;
		}
	}
?>
