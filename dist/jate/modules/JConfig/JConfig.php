<?php
	class JConfig {
		public $connection;
		public $all;
		public $DEBUG;
		public $pages;
		public function __construct() {
			$this->connection["enable"]		= false;
			$this->connection["user"]			= "";
			$this->connection["password"] = "";
			$this->connection["database"] = "";
			$this->connection["server"]		= "";
			$this->all		= "";
			$this->DEBUG	= 0;
			$this->pages	= [];
		}
		public function import( $_path ) {
			$data = file_get_contents($_path);
			$data = json_decode($data);
			$this->overlay($data);
		}
		private function overlay( $_data ) {
			$this->connection["enable"]		= $_data->connection->enable;
			$this->connection["user"]			= $_data->connection->user;
			$this->connection["password"] = $_data->connection->password;
			$this->connection["database"] = $_data->connection->database;
			$this->connection["server"]		= $_data->connection->server;
			$this->all		= $_data->all;
			$this->DEBUG	= $_data->DEBUG;
			$this->pages	= $_data->pages;
		}
	}
?>
