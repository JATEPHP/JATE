<?php
  jRequire("../modules/Parser/Parser.php");
  jRequire("../modules/JException/JException.php");
  function jBlock() {
    return ob_start();
  }

  function jBlockClose( $_type = "html", $_parameters = [] ) {
    return jBlockEnd($_type, $_parameters);
  }

  function jBlockFile( $_path, $_parameters = [] ) {
    $extension = explode(".", $_path);
    $extension = $extension[count($extension)-1];
    $extension = strtolower($extension);
    return jBlockFileMan($_path, $extension, $_parameters);
  }

  function jBlockFileMan( $_path, $_type, $_parameters = [] ) {
    if(!is_string($_path))
      throw new InvalidArgumentException("Path must be a string.");
    if(!file_exists($_path))
      throw new InvalidArgumentException("File [$_path] not found.");
    $temp = file_get_contents($_path);
    return Parser::parseText($temp, $_parameters, $_type);
  }

  function jBlockEnd( $_type = "html", $_parameters = [] ) {
    $text = ob_get_clean();
    return Parser::parseText($text, $_parameters, $_type);
  }

  function minifyOutput($_buffer) {
    $search = array ( '/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s' );
    $replace = array ( '>', '<', '\\1' );
    if (preg_match("/\<html/i",$_buffer) == 1 && preg_match("/\<\/html\>/i",$_buffer) == 1)
      $_buffer = preg_replace($search, $replace, utf8_decode($_buffer));
    return utf8_encode($_buffer);
  }
?>
