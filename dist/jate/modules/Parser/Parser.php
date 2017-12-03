<?php
  requireComponents("Adapters");
  class Parser {
    private $parser;
    public function __construct() {
      $this->parser = null;
    }
    protected function setParser ( $_type ) {
      switch ($_type) {
        case "twig":
          $this->parser = new TwigAdapter();
        break;
        case "pug":
          $this->parser = new PugAdapter();
        break;
        case "md":
        default:
          $this->parser = new ParsedownAdapter();
        break;
      }
    }
  }
?>
