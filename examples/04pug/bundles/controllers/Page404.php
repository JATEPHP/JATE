<?php
	class Page404 extends Template {
		public function __construct( $_parameters ) {
			parent::__construct( $_parameters );
			$this->tags["title"]		= "JATE - 404";
			$this->tags["content"] = $this->makePage();
		}
		public function makePage() {
			jBlock();
			?>
			.row(style="margin-top:70px;")
				.col-lg-12
					.well.well-sm
						p 404 Page not found!
			<?php
			$temp = jBlockClose("pug");
			return $temp;
		}
	}
?>