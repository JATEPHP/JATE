<?php
  jRequire("../modules/Pug/Pug.php");
  jRequire("../modules/Parsedown/Parsedown.php");
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
    $temp = file_get_contents($_path);
    return jBlockParsing($_type, $temp, $_parameters);
  }

  function jBlockEnd( $_type = "html", $_parameters = [] ) {
    $text = ob_get_clean();
    return jBlockParsing($_type, $text, $_parameters);
  }

  function jBlockParsing( $_type = "html", $_string = "", $_parameters = [] ) {
    switch ($_type) {
      case "pug":
      case "jade":
        $Pug = new Pug();
        $_string = $Pug->drawText($_string, $_parameters);
      break;
      case "md":
      case "markdown":
      case "parsedown":
        $Parsedown = new Parsedown();
        $_string = $Parsedown->drawText($_string);
      break;
      case "twig":
        $Twig = new Twig();
        $_string = $Twig->drawText($_string, $_parameters);
      break;
      default: break;
    }
    return $_string;
  }

  function minifyOutput($_buffer) {
    $search = array ( '/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s' );
    $replace = array ( '>', '<', '\\1' );
    if (preg_match("/\<html/i",$_buffer) == 1 && preg_match("/\<\/html\>/i",$_buffer) == 1)
      $_buffer = preg_replace($search, $replace, utf8_decode($_buffer));
    return utf8_encode($_buffer);
  }
?>
