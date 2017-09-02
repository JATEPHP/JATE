<?php
  function htmlParser( $_str) {
    return htmlentities($_str, ENT_QUOTES | ENT_IGNORE, "UTF-8");
  }
?>
