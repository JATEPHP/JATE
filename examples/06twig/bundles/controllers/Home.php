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
      <div class="col-lg-12" style="margin-top:70px;">
        <div class="well well-sm">
          {{ temp }}
        </div>
      </div>
      <?php
      $temp = jBlockClose("twig", [
        "temp" => "Hello world!"
      ]);
      return $temp;
    }
  }
?>
