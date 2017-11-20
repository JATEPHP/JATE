<?php
  class Router {
    public function getPage() {
      $request = $this->parameters["app"]->server["REQUEST_URI"];
      $base    = $this->parameters["app"]->server["RELATIVE"];
      $url     = str_replace($base, "", $request);
      $url     = explode("/", $url);
      return $url;
    }
  }
?>
