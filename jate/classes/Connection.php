<?php
	class Connection {
		public $connection;
		public $database;
		public function __construct() {
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this,$f='__construct'.$i)) {
				call_user_func_array(array($this,$f),$a);
			}
		}
		public function __construct4( $_srv, $_db, $_usr, $_pass) {
			$this->connection = 'mysql:host='.$_srv.';'.'dbname='.$_db;
			$this->database = new PDO( $this->connection, $_usr, $_pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
		}
	}
?>
