<?php
  trait File {
    private $files;
    public function __construct() {
      $this->files = [
        "required" => [],
        "attached" => []
      ];
    }
    public function addFile( $_file ) {
      $this->isCorrectPath($_file);
      $this->files["attached"][] = $_file;
    }
    public function addFileRequired( $_file ) {
      $this->isCorrectPath($_file);
      $this->files["required"][] = $_file;
    }
    public function addFiles( $_files ) {
      if(!is_array($_files))
        throw new InvalidArgumentException("Parameter must be an array.");
      foreach ($_files as $value)
        $this->addFile($value);
    }
    public function addFilesRequired( $_files ) {
      if(!is_array($_files))
        throw new InvalidArgumentException("Parameter must be an array.");
      foreach ($_files as $value)
        $this->addFileRequired($value);
    }
    public function getFiles() {
      return $this->files["attached"];
    }
    public function getFilesRequired() {
      return $this->files["required"];
    }
    protected function isCorrectPath( $_file ) {
      if(!is_string($_file))
        throw new InvalidArgumentException("Path must be a string.");
      if(!file_exists($_file))
        throw new InvalidArgumentException("File [$_file] not found.");
    }
  }
?>
