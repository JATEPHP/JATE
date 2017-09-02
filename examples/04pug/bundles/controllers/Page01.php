<?php
  class Page01 extends Template {
    public function __construct( $_parameters ) {
      parent::__construct( $_parameters );
      $this->tags["title"]  .= "Page01";
      $this->tags["content"] = $this->makePage();
    }
    public function makePage() {
      jBlock();
      ?>
      .col-lg-12(style="margin-top:70px;")
        .well.well-sm
          p Page 1!
      <?php
      $temp = jBlockClose("pug");
      return $temp;
    }
  }
?>
