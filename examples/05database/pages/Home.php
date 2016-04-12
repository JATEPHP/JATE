<?php
	class Home extends Template {
		public function __construct() {
			parent::__construct();
			$this->data["content"] = $this->makePage();
		}
		public function makePage() {
			$result = c_query("SELECT name FROM test","Error 01");
			$output = $result[0]["name"];
			jBlock();
			?>
			<div class="row" style="margin-top:70px;">
				<div class="col-lg-12">
					<div class="well well-sm">
						<?=$output?>
					</div>
				</div>
			</div>
			<?php
			$temp = jBlockClose();
			return $temp;
		}
	}
?>
