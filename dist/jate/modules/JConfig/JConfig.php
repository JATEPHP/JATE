<?php
  class JConfig {
    public $connection;
    public $all;
    public $DEBUG;
    public $pages;
    public $server;
    public function __construct() {
      $this->connection["enable"]    = false;
      $this->connection["user"]      = "";
      $this->connection["password"] = "";
      $this->connection["database"] = "";
      $this->connection["server"]    = "";
      $this->all    = "";
      $this->DEBUG  = 0;
      $this->pages  = [];
      $this->server  = [];
      $this->server["HTTP_HOST"]    = $_SERVER["HTTP_HOST"];
      $this->server["REQUEST_URI"]  = $_SERVER["REQUEST_URI"];
      $this->server["PHP_SELF"]      = $_SERVER["PHP_SELF"];
      $this->server["RELATIVE"]      = str_replace("/index.php", "", $_SERVER["PHP_SELF"]);
    }
    public function import( $_path, $_type = "misc" ) {
      $data = file_get_contents($_path);
      $data = json_decode($data);
      if( $_type == "connection" )
        $this->overlayConnection($data);
      else
        $this->overlayMisc($data);
    }
    protected function overlayConnection( $_data ) {
      $this->connection = $this->obj2array($_data);
    }
    protected function overlayMisc( $_data ) {
      $this->importObject($_data);
    }
    protected function obj2array ( &$_instance ) {
      $clone  = (array) $_instance;
      $return  = [];
      $return['___SOURCE_KEYS_'] = $clone;
      while ( list ($key, $value) = each ($clone) ) {
        $temp    = explode ("\0", $key);
        $newkey  = $temp[count($temp)-1];
        $return[$newkey] = &$return['___SOURCE_KEYS_'][$key];
      }
      return $return;
    }
    protected function importObject( $_object ) {
      foreach (get_object_vars($_object) as $key => $value)
        $this->$key = $value;
    }
  }
?>
