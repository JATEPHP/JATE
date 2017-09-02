<?php
  function getGitLog( $_dir = "./" ) {
    if(!file_exists($_dir))
      return [];
    $currentDir = getcwd();
    chdir($_dir);
    $gitHistory  = [];
    $gitLogs    = [];
    $gitPath    = str_replace('\\', '/', exec("git rev-parse --show-toplevel"));
    $rootPath    = str_replace('\\', '/', getcwd ());
    $lastHash    = null;
    if( $gitPath != $rootPath ) {
      chdir($currentDir);
      return [];
    }
    exec("git log --decorate=full --tags", $gitLogs);
    foreach ($gitLogs as $line) {
      $line = trim($line);
      if (!empty($line)) {
        if (strpos($line, 'commit') === 0) {
          $hash = explode(' ', $line);
          $hash = trim(end($hash));
          $gitHistory[$hash] = [
            'tag'      => '-1.0.0',
            'author'  => '',
            'date'    => '',
            'message'  => ''
          ];
          $lastHash = $hash;
          if (strpos($line, 'tag') !== false) {
            $tag = explode(':', $line);
            $tag = explode('/', $tag[1]);
            $tag = explode(',', $tag[2]);
            $tag = explode(')', $tag[0]);
            $tag = trim($tag[0]);
            $gitHistory[$lastHash]['tag'] = $tag;
          }
        }
        else if (strpos($line, 'Author') === 0) {
          $author = explode(':', $line);
          $author = trim(end($author));
          $gitHistory[$lastHash]['author'] = $author;
        }
        else if (strpos($line, 'Date') === 0) {
          $date = explode(':', $line, 2);
          $date = trim(end($date));
          $gitHistory[$lastHash]['date'] = date('d/m/Y H:i:s A', strtotime($date));
        }
        else
          $gitHistory[$lastHash]['message'] .= "$line<br>";
      }
    }
    chdir($currentDir);
    return $gitHistory;
  }
?>
