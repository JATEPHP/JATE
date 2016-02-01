<?php
	function q_query( $_db, $_query, $_err ) {
		$query = $_db->prepare($_query);
		$result = $query->execute();
		if(!$result) {
			echo "$_query<br>";
			echo "something wrong: ".$_err;
			var_dump($query->errorInfo());
			var_dump($db->errorInfo());
			exit(0);
		}
		return $query->fetchAll();
	}
	function c_query( $_query, $_err ) {
		global $connection;
		$query = $connection->database->prepare($_query);
		$result = $query->execute();
		if(!$result) {
			echo "$_query<br>";
			echo "something wrong: ".$_err;
			var_dump($query->errorInfo());
			var_dump($connection->database->errorInfo());
			exit(0);
		}
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	function b_query( $_query, $_err ) {
		global $connection;
		$query = $connection->database->prepare($_query);
		$result = $query->execute();
		if(!$result) {
			echo "$_query<br>";
			echo "something wrong: ".$_err;
			var_dump($query->errorInfo());
			var_dump($connection->database->errorInfo());
		}
		return $result;
	}
	function c_insert( $_query, $_err ) {
		return b_query( $_query, $_err );
	}
?>
