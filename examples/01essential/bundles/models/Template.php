<?php
  class Template extends Html {
    public function init() {
      $this->addConnection("config/connection.json");
      $this->addFilesRequired([
        "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css",
        "https://code.jquery.com/jquery-1.11.3.min.js",
        "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
      ]);
      $this->template = "bundles/views/tradictional.jate";
      $this->tags = [
        "title"    => "JATE - ",
        "brand"    => "JATE",
        "brandImg" => "",
        "menu"     => $this->makeMenu(),
        "metaDescription" => "Beautiful description.",
        "metaKeywords"    => "JATE,PHP,JS,CSS",
        "metaAuthor"      => "XaBerr"
      ];
    }
    public function makeMenu() {
      jBlock();
      ?>
        <li>
          <a href="Home">Home</a>
        </li>
        <li>
          <a href="Page1">Page 1</a>
        </li>
      <?php
      $temp = jBlockEnd();
      return $temp;
    }
  }
?>
