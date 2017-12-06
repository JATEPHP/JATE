<?php
  jRequire("ParserInterface.php");
  jRequire("../../ExternalModules/Parsedown/Parsedown.php");
  use Parsedown as Parsedown;
  class ParsedownAdapter implements ParserInterface {
    public function drawText( $_text, $_parameters = [] ) {
      return $this->draw(trim($_text), $_parameters);
    }
    public function draw( $_text, $_parameters = [] ) {
      $Parsedown = new Parsedown\Parsedown();
      $page = $Parsedown->text($_text);
      $page = preg_replace('/[ ](?=[^>]*(?:<|$))/', "&nbsp", $page);
      return $page;
    }
  }
?>
