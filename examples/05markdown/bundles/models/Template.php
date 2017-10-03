<?php
  class Template extends Html {
    public function __construct( $_parameters ) {
      parent::__construct( $_parameters );
      $this->makeConnection();
      $this->tags["brand"]    = "JATE";
      $this->tags["brandImg"] = "";
      $this->tags["title"]    = "JATE - ";
      $this->data["template"] = "bundles/views/tradictional.html";
      $this->addFilesRequired([
        "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css",
        "https://code.jquery.com/jquery-1.11.3.min.js",
        "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js",
        "css/main.css"
      ]);
      $this->tags["metaDescription"] = "Beautiful description.";
      $this->tags["metaKeywords"]    = "JATE,PHP,JS,CSS";
      $this->tags["metaAuthor"]      = "XaBerr";
      $this->tags["menu"]            = $this->makeMenu();
    }
    public function makeConnection() {
      $jConfig = $this->parameters["app"];
      $connection = null;
      if( $jConfig != null && $jConfig->connection["enable"])
        $connection = new Connection(
          $jConfig->connection["server"],
          $jConfig->connection["database"],
          $jConfig->connection["user"],
          $jConfig->connection["password"],
          $jConfig->connection["engine"]
        );
      $this->addConnection("base",$connection);
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
