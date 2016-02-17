<?php
	function q_query( $_database, $_query, $_error ) {
		return std_query( $_database, $_query, $_error, $temp );
	}
	function c_query( $_query, $_error ) {
		global $connection;
		return q_query( $connection->database, $_query, $_error );
	}
	function b_query( $_query, $_error ) {
		global $connection;
		$temp = 0;
		std_query( $connection->database, $_query, $_error, $temp );
		return $temp;
	}
	function c_insert( $_query, $_error ) {
		return b_query( $_query, $_error );
	}
	function std_query( $_database, $_query, $_error, &$_result ) {
		$query = $_database->prepare($_query);
		$_result = $query->execute();
		if(!$_result) {
			echo "$_query<br>";
			echo "something wrong: ".$_error;
			var_dump($query->errorInfo());
			var_dump($db->errorInfo());
			exit();
		}
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
?>
