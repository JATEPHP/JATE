<?php
  requireComponent("../ServerVars/ServerVars.php");
  class Router {
    protected $url;
    protected $pages;
    protected $defaultPage;
    protected $urlCaseSensitive;
    public function __construct( $_path, $_urlCaseSensitive = false ) {
      if(!is_string($_path))
        throw new InvalidArgumentException("Parameter must be a string.");
      $jConfig   = new JConfig($_path);
      $server    = new ServerVars();
      $request   = $server->server["REQUEST_URI"];
      $base      = $server->server["RELATIVE"];
      $url       = str_replace($base, "", $request);
      $this->url = explode("/", $url);
      $this->pages       = $jConfig->pages;
      $this->defaultPage = $jConfig->defaultPage;
      $this->urlCaseSensitive = $_urlCaseSensitive;
    }
    public function getPage() {
      $parameters = [];
      $pageSelected = null;
      foreach ($this->pages as $page) {
        $urlParameters = $this->pathSeeker(explode("/", $page[0]), $this->url);
        if(is_array($urlParameters)) {
          $pageSelected = $page[1];
          $parameters = $urlParameters;
          break;
        }
      }
      if( isset($pageSelected[1]) && is_array($pageSelected[1]) )
        $pageSelected[1] = array_merge($pageSelected[1], $parameters);
      else
        $pageSelected[1] = $parameters;
      if( $pageSelected !== null )
        return $pageSelected;
      else
        return $this->currentPage;
    }
    protected function pathSeeker( $_path, $_url ) {
      $urlLength = count($_url);
      $cont = 0;
      $variables = [];
      $pathLength = count($_path);
      if($urlLength == $pathLength) {
        while($cont < $urlLength) {
          if(
            ($this->urlCaseSensitive && $_path[$cont] == $_url[$cont]) ||
            (!$this->urlCaseSensitive && strtolower($_path[$cont]) == strtolower($_url[$cont])) )
            $cont++;
          else if( strpos($_path[$cont], "\$") !== false ) {
            $variables[str_replace('$', "", $_path[$cont])] = $_url[$cont];
            $cont++;
          } else break;
        }
        if($cont == $urlLength)
          return $variables;
      }
      return null;
    }
  }
?>
