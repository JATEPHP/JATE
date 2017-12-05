<?php
  // use Twig as Twig;
  jRequire("ParserInterface.php");
  class TwigAdapter implements ParserInterface {
    public function drawText( $_text, $_parameters = [] ) {
      return $this->draw(trim($_text), $_parameters);
    }
    public function draw( $_text, $_parameters = [] ) {
      $loader = new Twig_Loader_Array([
        'index' => $_text
      ]);
      $twig = new Twig_Environment($loader);
      $page = $twig->render('index', $_parameters);
      return $page;
    }
  }
?>
