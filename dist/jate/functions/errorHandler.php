<?php
  function jateErrorHandler($number, $message, $file, $line) {
    if (!(error_reporting() & $number)) {
      return false;
    }
    ob_end_clean();
    $message = JException::decode($message);
    echo "
      <div id='error'>
        <header>
        JATE ERROR
        </header>
        <div class='row'>
          <b>Error:</b> $message<br>
        </div>
        <div class='row'>
          <b>Line:</b> $line<br>
        </div>
        <div class='row'>
          <b>File:</b> $file<br>
        </div>
        <div class='row'>
          <b>Php:</b> ".PHP_VERSION." (".PHP_OS.")<br>
        </div>
      </div>
      <style>
        body {
          background-color: #fefefe;
          padding-left: 50%;
        }
        #error {
          width: 600px;
          margin-left: -300px;
          padding: 10px;
          border-radius: 5px;
          box-shadow: rgba(0, 0, 0, 0.3) 0 1px 40px;
          -webkit-box-shadow: rgba(0, 0, 0, 0.3) 0 1px 40px;
          -moz-box-shadow: rgba(0,0,0,0.3) 0 1px 40px;
          font-family: verdana;
          vertical-align: middle;
          word-break: break-all;
        }
        #error header {
          text-align: center;
          display: block;
          font-size: 30px;
          color: rgb(175,0,0);
        }
        .row {
          margin-top: 10px;
        }
      </style>
    ";
    exit(1);
    return true;
  }
  function fatalErrorShutdownHandler() {
    $last_error = error_get_last();
    if ($last_error['type'] === E_ERROR) {
      jateErrorHandler(E_ERROR, $last_error['message'], $last_error['file'], $last_error['line']);
    }
  }
  set_error_handler('jateErrorHandler');
  register_shutdown_function('fatalErrorShutdownHandler');
?>
