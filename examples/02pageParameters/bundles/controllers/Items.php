<?php
  class Items extends Template {
    public function __construct( $_parameters ) {
      parent::__construct( $_parameters );
      $this->tags["title"]  .= "Items";
      $this->tags["content"] = $this->makePage();
    }
    public function makePage() {
      jBlock();
      ?>
      <div class="col-lg-12" style="margin-top:70px;">
        <div class="well well-sm">
          Item from url!<br>
          <?php
            arrayDump($this->parameters["page"], "PARAMETERS");
          ?>
        </div>
      </div>
      <?php
      $temp = jBlockClose();
      return $temp;
    }
  }
?>
