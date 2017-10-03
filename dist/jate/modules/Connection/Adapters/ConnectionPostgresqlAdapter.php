<?php
  jRequire("ConnectionInterface.php");
  class ConnectionPostgresqlAdapter implements ConnectionAdapterInterface {
      public $connection;
      public function __construct( $_srv, $_db, $_usr, $_pass ) {
        $this->connection = pg_connect("host=$_srv dbname=$_db user=$_usr password=$_pass")
          or die('Could not connect: '.pg_last_error());
      }
      public function query( $_query ) {
        $this->stdQuery($_query);
        return true;
      }
      public function queryInsert( $_query ) {
        $this->stdQuery($_query);
        return $this->stdQuery("SELECT lastval()");
      }
      public function queryFetch( $_query ) {
        $result = $this->stdQuery($_query);
        $rows = [];
        while($row = pg_fetch_assoc($result))
          $rows[] = $row;
        pg_free_result($result);
        return $rows;
      }
      public function queryArray( $_query ) {
        $result = $this->stdQuery($_query);
        $rows = [];
        while($row = pg_fetch_array($result))
          $rows[] = $row;
        pg_free_result($result);
        return $rows;
      }
      protected function stdQuery( $_query ) {
        $database = $this->connection;
        $error = "Error query [$_query]";
        $result = pg_query($database, $_query);
        if(!$result) {
          echo "$_query<br>";
          echo "Something wrong: $error";
          var_dump(pg_last_error());
          exit();
        }
        return $result;
      }
  }
?>
