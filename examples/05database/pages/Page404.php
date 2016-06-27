<?php
	class Page404 extends Template {
		public function __construct() {
			parent::__construct();
			$this->tags["title"]		= "JATE - 404";
			$this->tags["content"] = $this->makePage();
		}
		public function makePage() {
			jBlock();
			?>
			<div class="row" style="margin-top:70px;">
				<div class="col-lg-12">
					<div class="well well-sm">
						404 Page not found!
					</div>
				</div>
			</div>
			<?php
			$temp = jBlockClose();
			return $temp;
		}
	}
?>
