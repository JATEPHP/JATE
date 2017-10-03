<?php
  jRequire("../Module/Module.php");
  requireComponents("Adapters");
  class Connection extends Module {
    public $database;
    public $info;
    public function __construct() {
      parent::__construct();
      $args = func_get_args();
      $count = func_num_args();
      if (method_exists($this,$func='__construct'.$count))
        call_user_func_array(array($this,$func),$args);
    }
    public function __construct0() {
      $this->database = null;
    }
    public function __construct4 ( $_srv, $_db, $_usr, $_pass ) {
      $this->setConnection($_srv, $_db, $_usr, $_pass, "pdo");
    }
    public function __construct5 ( $_srv, $_db, $_usr, $_pass, $_type ) {
      $type = $this->getConnectionType($_type);
      $this->setConnection($_srv, $_db, $_usr, $_pass, $type);
    }
    protected function setConnection ( $_srv, $_db, $_usr, $_pass, $_type ) {
      switch ($_type) {
        case "mysqli":
          $this->database = new ConnectionMysqliAdapter($_srv, $_db, $_usr, $_pass);
        break;
        case "postgresql":
          $this->database = new ConnectionPostgresqlAdapter($_srv, $_db, $_usr, $_pass);
        break;
        default:
          $this->database = new ConnectionPdoAdapter($_srv, $_db, $_usr, $_pass);
        break;
      }
      $this->setConnectionParameters( $_srv, $_db, $_usr, $_pass);
    }
    protected function getConnectionType( $_type ) {
      foreach ($_type as $key => $value)
        if($value)
          return $key;
      return "pdo";
    }
    protected function setConnectionParameters( $_srv, $_db, $_usr, $_pass) {
      $this->info = [];
      $this->info["server"]    = $_srv;
      $this->info["database"]  = $_db;
      $this->info["user"]      = $_usr;
      $this->info["password"]  = $_pass;
    }
  }
?>
