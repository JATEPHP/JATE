<?php
  class Debug {
    public static $stack;
    private static $initialized = false;
    private function __construct() {}
    private static function initialize() {
      if (self::$initialized)
        return;
      self::$stack = [];
      self::$initialized = true;
    }
    private static function out( $_object ) {
      if(is_object($_object)) {
        echo "isObject";
      } else if(is_array($_object)) {
        arrayDump($_object, "Debug");
      } else {
        echo $_object;
      }
    }
    public static function error( $_object ) {
      self::out(["Error" => $_object]);
    }
    public static function warning( $_object ) {
      self::out(["Warning" => $_object]);
    }
    public static function fatal( $_object ) {
      self::out(["Fatal error" => $_object]);
      exit(1);
    }
    public static function logln( $_object ) {
      self::log($_object);
      self::out("<br>");
    }
    public static function logStack( $_object ) {
      self::out([
        "position" => self::$stack,
        "error" => $_object
      ]);
      self::out("<br>");
    }
    public static function push() {
      $debugInfo = debug_backtrace();
      $debugInfo = [
        "file" => $debugInfo[1]["file"],
        "line" => $debugInfo[1]["line"],
        "function" => $debugInfo[1]["function"],
        "class" => isset($debugInfo[1]["class"]) ? $debugInfo[1]["class"] : ""
      ];
      self::$stack[] = $debugInfo;
    }
    public static function pop() {
      if(count(self::$stack)>0)
        array_shift(self::$stack);
    }
    public static function emptyStack() {
      self::$stack = [];
    }
  }
?>
