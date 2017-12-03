<?php
  class JException extends Exception {
    public function __construct($message, $code = 0, Exception $previous = null) {
      parent::__construct($message, $code, $previous);
      if(isset(debug_backtrace()[2]) && isset(debug_backtrace()[2]["file"]))
        $this->file  = debug_backtrace()[2]["file"];
      if(isset(debug_backtrace()[2]) && isset(debug_backtrace()[2]["line"]))
        $this->line  = debug_backtrace()[2]["line"];
    }
    public function __toString() {
      return "JATE Exception: [{$this->code}]: {$this->message}";
    }
  }
?>
