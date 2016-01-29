<?php
	class NewPage extends Template {
		public function __construct() {
			parent::__construct();
			$this->data["template"] = "guis/noWidePage.php";
			$this->data["content"] = $this->makePage();
		}
		public function makePage() {
			jBlock();
			?>
			<div class="row" style="margin-top:70px;">
				<div class="col-lg-12">
					<div class="well well-sm">
						Hello New Page!
					</div>
				</div>
			</div>
			<?php
			$temp = jBlockClose();
			return $temp;
		}
	}
?>
