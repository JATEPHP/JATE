<?php
	class Query extends Module {
		public $connection;
		public $currentConnection;
		public function __construct() {
			parent::__construct();
			$this->connection = [];
			$this->currentConnection = null;
		}
		public function addConnection( $_name, $_connection ) {
			$this->connection["$_name"] = $_connection;
			$this->currentConnection = $_connection;
		}
		public function setConnection( $_name ) {
			$this->currentConnection = $this->connection["$_name"];
		}
		public function query( $_query ) {
			$this->stdQuery($_query);
			return true;
		}
		public function queryInsert( $_query ) {
			$temp = $this->stdQuery($_query);
			return $this->currentConnection->database->lastInsertId();
		}

		public function queryFetch( $_query ) {
			$temp = $this->stdQuery($_query);
			return $temp->fetchAll(PDO::FETCH_ASSOC);
		}

		public function queryArray( $_query ) {
			$temp = $this->stdQuery($_query);
			return $temp->fetchAll(PDO::FETCH_COLUMN, 0);
		}

		protected function stdQuery( $_query ) {
			$database = $this->currentConnection->database;
			$error = "Error query [$_query]";
			$query = $database->prepare($_query);
			$_result = $query->execute();
			if(!$_result) {
				echo "$_query<br>";
				echo "Something wrong: $error";
				var_dump($query->errorInfo());
				var_dump($database->errorInfo());
				exit();
			}
			return $query;
		}
	}
?>
