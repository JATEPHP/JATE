<?php
	jRequire("ConnectionInterface.php");
	class ConnectionPdoAdapter implements ConnectionAdapterInterface {
			public $connection;
			public function __construct( $_srv, $_db, $_usr, $_pass ) {
				$connection = "mysql:host=$_srv;dbname=$_db";
				$this->connection = new PDO( $connection, $_usr, $_pass, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"] );
			}
			public function query( $_query ) {
				$this->stdQuery($_query);
				return true;
			}
			public function queryInsert( $_query ) {
				$this->stdQuery($_query);
				return $this->connection->lastInsertId();
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
				$database = $this->connection;
				$error = "Error query [$_query]";
				$query = $database->prepare($_query);
				$result = $query->execute();
				if(!$result) {
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
