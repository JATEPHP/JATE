<?php
	function q_query( $_db, $_q, $_err ) {
		$query = $_db->prepare($_q);
		$result = $query->execute();
		if(!$result) {
			echo "something wrong: ".$_err;
			exit(0);
		}
		return $query->fetchAll();
	}
	function c_query( $_q, $_err ) {
		global $connection;
		//echo ":".$_q.":<br>";
		$query = $connection->database->prepare($_q);
		$result = $query->execute();
		if(!$result) {
			echo "something wrong: ".$_err;
			var_dump($query->errorInfo());
			var_dump($connection->database->errorInfo());
			exit(0);
		}
    return $query->fetchAll();
	}
	function c_insert( $_q, $_err ) {
		global $connection;
		//echo ":".$_q.":<br>";
		$query = $connection->database->prepare($_q);
		$result = $query->execute();
    return $result;
	}
	
?>
