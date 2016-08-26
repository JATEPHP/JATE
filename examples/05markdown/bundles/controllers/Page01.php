<?php
	class Page01 extends Template {
		public function __construct( $_parameters ) {
			parent::__construct( $_parameters );
			$this->tags["title"]		= "JATE - Page01";
			$this->tags["content"] = $this->makePage();
		}
		public function makePage() {
			$temp = jBlockFile("bundles/views/Page01.md");
			return $temp;
		}
	}
?>
