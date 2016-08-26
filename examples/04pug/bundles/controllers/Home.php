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
			.row(style="margin-top:70px;")
				.col-lg-12
					.well.well-sm
						p Hello World!
			<?php
			$temp = jBlockClose("pug");
			return $temp;
		}
	}
?>
