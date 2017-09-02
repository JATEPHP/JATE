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
      .col-lg-12(style="margin-top:70px;")
        .well.well-sm
          p= pageText
      <?php
      $temp = jBlockClose( "pug" , [
        "pageText" => "Hello World!"
      ]);
      return $temp;
    }
  }
?>
