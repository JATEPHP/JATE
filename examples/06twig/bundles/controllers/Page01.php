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
      <div class="col-lg-12" style="margin-top:70px;">
        <div class="well well-sm">
          Page 1!
        </div>
      </div>
      <?php
      $temp = jBlockClose();
      return $temp;
    }
  }
?>
