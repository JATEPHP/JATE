<?php
  interface ParserInterface {
    public function drawFile( $_file, $_parameters = [] );
    public function drawText( $_text, $_parameters = [] );
    public function draw( $_text, $_parameters = [] );
  }
?>
