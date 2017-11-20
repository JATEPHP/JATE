<?php
  requireComponents("Adapters");
  class Connection {
    public $database;
    public $info;
    public function __construct( $_object ) {
      if(!is_object($_object))
        throw new InvalidArgumentException("Parameter must be an object.");
      $this->setConnection(
        $_object->server,
        $_object->database,
        $_object->user,
        $_object->password,
        $this->getConnectionType($_object->engine)
      );
    }
    protected function setConnection ( $_srv, $_db, $_usr, $_pass, $_type ) {
      switch ($_type) {
        case "mysqli":
          $this->database = new ConnectionMysqliAdapter($_srv, $_db, $_usr, $_pass);
        break;
        case "postgresql":
          $this->database = new ConnectionPostgresqlAdapter($_srv, $_db, $_usr, $_pass);
        break;
        case "pdo":
        default:
          $this->database = new ConnectionPdoAdapter($_srv, $_db, $_usr, $_pass);
        break;
      }
      $this->setConnectionParameters( $_srv, $_db, $_usr, $_pass);
    }
    protected function getConnectionType( $_type ) {
      $array = (array)$_type;
      foreach ($array as $key => $value)
        if($value)
          return $key;
      return "pdo";
    }
  }
?>
