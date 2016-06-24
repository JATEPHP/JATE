<?php
	class Page404 extends Template {
		public function __construct() {
			parent::__construct();
			$this->tags["content"] = '404<br>PAGE NOT FOUND.';
		}
	}
?>
