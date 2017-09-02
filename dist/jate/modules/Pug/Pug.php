<?php
  use Pug as Pug;
  jRequire("../Module/Module.php");
  class Pug extends Module {
    public function __construct() {
      parent::__construct();
    }
    public function drawFile( $_file, $_parameters = [] ) {
      return $this->draw($_file, $_parameters);
    }
    public function drawText( $_text, $_parameters = [] ) {
      return $this->draw(trim($_text), $_parameters);
    }
    public function draw( $_text, $_parameters = [] ) {
      $pug = new Pug\Pug();
      $page = $pug->render($_text, $_parameters);
      return $page;
    }
  }
?>
