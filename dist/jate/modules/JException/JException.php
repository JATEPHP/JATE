<?php
  class JException extends Exception {
    public function __construct($_message, $_level = 2, $_code = 0, Exception $_previous = null) {
      parent::__construct($_message, $_code, $_previous);
      if(isset(debug_backtrace()[$_level]) && isset(debug_backtrace()[$_level]["file"]))
        $this->file  = debug_backtrace()[$_level]["file"];
      if(isset(debug_backtrace()[$_level]) && isset(debug_backtrace()[$_level]["line"]))
        $this->line  = debug_backtrace()[$_level]["line"];
      if(isset(debug_backtrace()[$_level]) && isset(debug_backtrace()[$_level]["function"]))
        $this->function = debug_backtrace()[$_level]["function"];
      if(isset(debug_backtrace()[$_level]) && isset(debug_backtrace()[$_level]["class"]))
        $this->class = debug_backtrace()[$_level]["class"];
    }
    public function __toString() {
      return "JATE Exception: {$this->message}";
    }
  }
?>
