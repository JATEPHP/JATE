<?php
  jRequire("../Module/Module.php");
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

      foreach ($this->modules as &$module)
        if(isset($module->currentConnection))
          $module->addConnection($_name, $_connection);
    }
    public function setConnection( $_name ) {
      $this->currentConnection = $this->connection["$_name"];
    }
    public function query( $_query ) {
      return $this->currentConnection->database->query($_query);
    }
    public function queryInsert( $_query ) {
      return $this->currentConnection->database->queryInsert($_query);
    }
    public function queryFetch( $_query ) {
      return $this->currentConnection->database->queryFetch($_query);
    }
    public function queryArray( $_query ) {
      return $this->currentConnection->database->queryArray($_query);
    }
  }
?>
