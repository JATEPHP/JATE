<?php
  // requireComponent("../functions/array.php");
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
    public static function log( $_object ) {
      self::out(["error" => $_object]);
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
        "class" => $debugInfo[1]["class"]
      ];
      self::$stack[] = $debugInfo;
    }
    public static function pop() {
      if(count(self::$stack)>0)
        self::$stack = array_shift(self::$stack);
    }
    public static function emptyStack() {
      self::$stack = [];
    }
  }
?>
