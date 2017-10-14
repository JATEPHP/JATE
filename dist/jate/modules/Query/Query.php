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
      Debug::push();
      $this->connection["$_name"] = $_connection;
      $this->currentConnection = $_connection;
      foreach ($this->modules as &$module)
        if(isset($module->currentConnection))
          $module->addConnection($_name, $_connection);
      Debug::pop();
    }
    public function setConnection( $_name ) {
      $this->currentConnection = $this->connection["$_name"];
    }
    public function query( $_query ) {
      Debug::push();
      $temp = $this->currentConnection->database->query($_query);
      Debug::pop();
      return $temp;
    }
    public function queryInsert( $_query ) {
      Debug::push();
      $temp = $this->currentConnection->database->queryInsert($_query);
      Debug::pop();
      return $temp;
    }
    public function queryFetch( $_query ) {
      Debug::push();
      $temp = $this->currentConnection->database->queryFetch($_query);
      Debug::pop();
      return $temp;
    }
    public function queryArray( $_query ) {
      Debug::push();
      $temp = $this->currentConnection->database->queryArray($_query);
      Debug::pop();
      return $temp;
    }
  }
?>
