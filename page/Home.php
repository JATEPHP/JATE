<?php
	class Home extends Template {
		public function __construct() {
			parent::__construct();
			$this->data["content"] = $this->makePage();
		}
		public function makePage() {
			jBlock();
			?>
			<div class="row">
			  <div class="col-lg-12">
			    <div class="well well-sm">
			      Hello World!
			    </div>
			  </div>
			</div>
			<?php
			$temp = jBlockClose();
			return $temp;
		}
	}
?>
