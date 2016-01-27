<?php
	class Connection {
		public $connection;
		public $database;
		public function __construct() {
			$args = func_get_args();
			$count = func_num_args();
			if (method_exists($this,$func='__construct'.$count))
				call_user_func_array(array($this,$func),$args);
		}
		public function __construct4( $_srv, $_db, $_usr, $_pass) {
			$this->connection = 'mysql:host='.$_srv.';'.'dbname='.$_db;
			$this->database = new PDO( $this->connection, $_usr, $_pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
		}
	}
?>
