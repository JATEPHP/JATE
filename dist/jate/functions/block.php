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
    try {
      $temp = jBlockFileMan($_path, $extension, $_parameters);
    } catch (Exception $e) {
      throw new JException($e->getMessage());
    }
    return $temp;
  }

  function jBlockFileMan( $_path, $_type, $_parameters = [] ) {
    if(!is_string($_path))
      throw new JException("Path must be a string.");
    if(!file_exists($_path))
      throw new JException("File [$_path] not found.");
    $text = file_get_contents($_path);
    try {
      $temp = Parser::parseText($text, $_parameters, $_type);
    } catch (Exception $e) {
      throw new JException($e->getMessage());
    }
    return $temp;
  }

  function jBlockEnd( $_type = "html", $_parameters = [] ) {
    $text = ob_get_clean();
    try {
      $temp = Parser::parseText($text, $_parameters, $_type);
    } catch (Exception $e) {
      throw new JException($e->getMessage());
    }
    return $temp;
  }

  function minifyOutput($_buffer) {
    $search = array ( '/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s' );
    $replace = array ( '>', '<', '\\1' );
    if (preg_match("/\<html/i",$_buffer) == 1 && preg_match("/\<\/html\>/i",$_buffer) == 1)
      $_buffer = preg_replace($search, $replace, utf8_decode($_buffer));
    return utf8_encode($_buffer);
  }
?>
