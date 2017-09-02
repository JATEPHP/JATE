<?php
  class Home extends Template {
    public function __construct( $_parameters ) {
      parent::__construct( $_parameters );
      $this->tags["title"]  .= "Home";
      $this->tags["content"] = $this->makePage();
    }
    public function makePage() {
      jBlock();
      ?>
      # Hello world!
      <?php
      $temp = jBlockClose("md");
      return $temp;
    }
  }
?>
