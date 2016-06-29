<?php
	class Home extends Template {
		public function __construct( $_parameters ) {
			parent::__construct( $_parameters );
			$this->tags["title"]		= "JATE - Home";
			$this->tags["content"]	= $this->makePage();
		}
		public function makePage() {
			jBlock();
			?>
			<div class="row" style="margin-top:70px;">
				<div class="col-lg-12">
					<div class="well well-sm">
						Home!<br>
						<?php
							var_dump($this->parameters["page"]);
						?>
					</div>
				</div>
			</div>
			<?php
			$temp = jBlockClose();
			return $temp;
		}
	}
?>