<?php
  jRequire("../Debug/Debug.php");
  jRequire("../JConfig/JConfig.php");
  jRequire("../Connection/Connection.php");
  trait Query {
    public $connection;
    public $currentConnection;
    public function __construct() {
      $this->connection = [];
      $this->currentConnection = null;
    }
    public function addConnection( $_path, $_name = "default" ) {
      Debug::push();
      if(!is_string($_path))
        throw new InvalidArgumentException("Parameter must be a string.");
      $jConfig = new JConfig($_path);
      if($jConfig->enable) {
        $connection = new Connection($jConfig);
        $this->connection["$_name"] = $connection;
        $this->currentConnection = $_path;
        foreach ($this->modules as &$module)
          if(isset($module->currentConnection))
            $module->addConnection($_path, $_name);
      }
      Debug::pop();
    }
    public function setConnection( $_name = "default" ) {
      if(!isset($this->connection["$_name"]))
        throw new InvalidArgumentException("This connection name does not exist.");
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
