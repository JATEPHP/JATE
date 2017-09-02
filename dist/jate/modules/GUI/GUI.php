<?php
  jRequire("../Module/Module.php");
  jRequire("../Pug/Pug.php");
  jRequire("../Twig/Twig.php");
  class GUI extends Module {
    public function __construct() {
      parent::__construct();
    }
    public function init( $_page ) {
      $this->tags = $_page->tags;
    }
    public function draw( $_template ) {
      $page = "";
      $extension = explode(".",$_template);
      $extension = $extension[count($extension)-1];
      $page = $this->parsingFile($_template, $extension);
      $render = $this->overlayTag($page);
      echo minifyOutput($render);
    }
    protected function overlayTag( $_page ) {
      foreach($this->tags as $key => $value)
        if(!is_array($value))
          $_page = str_replace("<_${key}_>", "$value", $_page);
      return $_page;
    }
    protected function parsingFile( $_file, $_type = "html" ) {
      switch ($_type) {
        case 'pug':
        case 'jade':
          $pug = new Pug();
          $page = $pug->drawFile($_file);
        break;
        case "md":
        case "markdown":
        case "parsedown":
          $Parsedown = new Parsedown();
          $page = $Parsedown->drawFile($_file);
        break;
        case 'twig':
          $twig = new Twig();
          $page = $twig->drawFile($_file);
        break;
        default:
          $page = file_get_contents($_file);
        break;
      }
      return $page;
    }
  }
?>
