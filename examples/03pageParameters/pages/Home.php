<?php
	class Home extends Template {
		public function __construct() {
			parent::__construct();
			$args = func_get_args();
			$args = $args[0];
			$count = count($args);
			if (method_exists($this,$func='__construct'.$count))
				call_user_func_array(array($this,$func),$args);
		}
		public function __construct0() {
			jBlock();
			?>
			<div class="row" style="margin-top:70px;">
				<div class="col-lg-12">
					<div class="well well-sm">
						Hello World!
					</div>
				</div>
			</div>
			<?php
			$temp = jBlockClose();
			$this->data["content"] = $temp;
		}
		public function __construct1( $_par1 ) {
			jBlock();
			?>
			<div class="row" style="margin-top:70px;">
				<div class="col-lg-12">
					<div class="well well-sm">
						Hello World!
						<?=$_par1?>
					</div>
				</div>
			</div>
			<?php
			$temp = jBlockClose();
			$this->data["content"] = $temp;
		}
		public function __construct2( $_par1, $_par2 ) {
			jBlock();
			?>
			<div class="row" style="margin-top:70px;">
				<div class="col-lg-12">
					<div class="well well-sm">
						Hello World!<br>
						<?=$_par1?><br>
						<?=$_par2?>
					</div>
				</div>
			</div>
			<?php
			$temp = jBlockClose();
			$this->data["content"] = $temp;
		}
	}
?>
