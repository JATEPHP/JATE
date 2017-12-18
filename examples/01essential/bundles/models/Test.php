<?php
  class Test extends Html {
    public function init() {
      return $this->query("SELECT * FROM test");
    }
  }
?>
