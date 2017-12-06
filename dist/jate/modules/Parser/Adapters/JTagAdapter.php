<?php
  jRequire("ParserInterface.php");
  class JTagAdapter implements ParserInterface {
    public function drawText( $_text, $_parameters = [] ) {
      return $this->draw(trim($_text), $_parameters);
    }
    public function draw( $_text, $_parameters = [] ) {
      foreach($_parameters as $key => $value)
        if(!is_array($value))
          $_text = str_replace("<_${key}_>", "$value", $_text);
      $_text = preg_replace('~<_[^_]+_>~', '', $_text);
      return $_text;
    }
  }
?>
