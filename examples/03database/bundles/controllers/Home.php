<?php
  class Home extends Template {
    public function __construct( $_parameters ) {
      parent::__construct( $_parameters );
      $this->tags["title"]  .= "Home";
      $this->tags["content"] = $this->makePage();
    }
    public function makePage() {
      $result = $this->queryFetch("SELECT name FROM test");
      $output = $result[0]["name"];
      jBlock();
      ?>
      <div class="col-lg-12" style="margin-top:70px;">
        <div class="well well-sm">
          <?=$output?>
        </div>
      </div>
      <?php
      $temp = jBlockClose();
      return $temp;
    }
  }
?>
