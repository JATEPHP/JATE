<?php
	class JConfig {
		public $connection;
		public $all;
		public $DEBUG;
		public function __construct() {
			$this->connection["user"]			= "";
			$this->connection["password"] = "";
			$this->connection["database"] = "";
			$this->connection["server"]		= "";
			$this->all		= "";
			$this->DEBUG	= 0;
		}
	}
?>
