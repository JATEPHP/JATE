<?php
	class Statistic extends Module {
		public function __construct( $_webApp ) {
			parent::__construct();
			$pages = [];
			$stats = [];
			$pages = $_webApp->pages;
			foreach ( $pages as $k => $v ) {
				$temp = new $v[0]($v[1]);
				$temp->addDipendences();
				$stats[$k] = [];
				$stats[$k]["page"]	= $v[0];
				$stats[$k]["css"]		= $temp->data["css"];
				$stats[$k]["js"]		= $temp->data["js"];
			}
			$this->data = $stats;
		}
		public function draw() {
			jBlock();
			foreach ($this->data as $i) {
			?>
				<div class="row">
					<div class="col-lg-12">
						Page: <?=$i["page"]?><br>
						CSS[<?=count($i["css"])?>]<br>
						JS[<?=count($i["js"])?>]<br>
					</div>
				</div>
			<?php
			}
			return jBlockEnd();
		}
	}
?>
