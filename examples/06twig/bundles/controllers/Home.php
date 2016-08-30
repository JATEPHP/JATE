<?php
	class Home extends Template {
		public function __construct( $_parameters ) {
			parent::__construct( $_parameters );
			$this->tags["title"]		= "JATE - Home";
			$this->tags["content"] = $this->makePage();
		}
		public function makePage() {
			jBlock();
			?>
			<div class="row" style="margin-top:70px;">
				<div class="col-lg-12">
					<div class="well well-sm">
						{{ temp }}
					</div>
				</div>
			</div>
			<?php
			$temp = jBlockClose("twig", [
				"temp" => "Hello world!"
			]);
			return $temp;
		}
	}
?>
