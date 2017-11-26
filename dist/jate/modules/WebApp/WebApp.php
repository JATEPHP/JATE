<?php
  class WebApp {
    private $router;
    private $gui;
    private $misc;
    public function __construct() {
      $configPath   = "config";
      $this->misc   = new JConfig("$configPath/misc.json");
      $this->router = new Router("$configPath/router.json", $this->misc->urlCaseSensitive);
      $this->gui    = new GUI();
    }
    public function draw() {
      $pageSelected = $this->router->getPage();
      $currentPage = new $pageSelected[0](["app" => $this->misc, "page" => $pageSelected[1]]);
      $currentPage->uniforma();
      $this->gui->init($this->currentPage);
      $this->gui->draw($this->currentPage->data["template"]);
    }
  }
?>
