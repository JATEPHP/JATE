<?php
  class Home extends Template {
    public function init() {
      parent::init();
      $this->tags["title"]  .= "Home";
      $this->tags["content"] = $this->makePage();
      $this->addModule(new Test());
      $this->modules["Test"]->init();
    }
    public function makePage() {
      jBlock();
      ?>
      <div class="col-lg-12" style="margin-top:70px">
        <div class="well well-sm">
          Hello World!
        </div>
      </div>
      <?php
      $temp = jBlockClose();
      return $temp;
    }
  }
?>
