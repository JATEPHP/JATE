<?php
	class Home extends Template {
		public function __construct() {
			parent::__construct();
			$this->tags["title"]		= "JATE - Home";
			$this->tags["content"] = $this->makePage();
		}
		public function makePage() {
			$result = $this->queryFetch("SELECT name FROM test");
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
