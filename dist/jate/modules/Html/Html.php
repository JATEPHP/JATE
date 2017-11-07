<?php
  requireComponent("../Query/Query.php");
  class Html extends Query {
    public $template;
    public $render;
    public $app;
    public $page;
    public $tags;
    public function __construct( $_parameters = [ "app" => null, "page" => null] ) {
      parent::__construct($_parameters);
      $this->template   = "";
      $this->render     = "";
      $this->app        = $_parameters["app"];
      $this->page       = $_parameters["page"];
      $this->tags       = [
        "css"   => [],
        "js"    => [],
        "jsVar" => [],
        "base"  => ""
      ];
    }
    public function draw() {
      $this->addDipendences();
      $this->tags["css"]   = array_unique($this->tags["css"]);
      $this->tags["js"]    = array_unique($this->tags["js"]);
      $this->tags["base"]  = $this->app->server["RELATIVE"]."/";
      $this->stringifyDipendences();
      return $this->render = jBlockFile($this->template, $this->tags);
    }
    protected function stringifyDipendences() {
      $tempStr = "";
      $timeParameter = "?t=".time();
      $time = ($this->app->cache->css == true) ? "" : $timeParameter;
      foreach ($this->tags["css"] as $i)
        $tempStr .= "<link rel='stylesheet' href='$i$time'>";
      $this->tags["css"] = $tempStr;
      $tempStr = "";
      $time = ($this->app->cache->js == true) ? "" : $timeParameter;
      foreach ($this->tags["js"] as $i)
        $tempStr .= "<script src='$i$time'></script>";
      $this->tags["js"] = $tempStr;
      $tempStr = "";
      $tempStr .= "<script type='text/javascript'>";
      foreach ($this->tags["jsVar"] as $i)
        $tempStr .= " $i[0] = $i[1];\n";
      $tempStr .= "</script>";
      $this->tags["jsVar"] = $tempStr;
    }
  }
?>
