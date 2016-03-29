<?php
	class JConfig {
		public $connection;
		public $all;
		public $DEBUG;
		public function __construct() {
			$this->connection["user"]			= "root";
			$this->connection["password"] = "";
			$this->connection["database"] = "db-test";
			$this->connection["server"]		= "127.0.0.1";
			$this->all		= "";
			$this->DEBUG	= 0;
		}
	}
?>
