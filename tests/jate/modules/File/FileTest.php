<?php
  declare( strict_types = 1 );
  // backward compatibility
  if (!class_exists('\PHPUnit\Framework\TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
  }
  use PHPUnit\Framework\TestCase;

  final class FileTest extends TestCase {
    public function testAddFileWrongTypeInput() {
      $this->expectException(InvalidArgumentException::class);
      $module = new File();
      $module->addFile(123);
    }
    public function testAddFileRequiredWrongTypeInput() {
      $this->expectException(InvalidArgumentException::class);
      $module = new File();
      $module->addFileRequired(123);
    }
    public function testAddFilesWrongTypeInput() {
      $this->expectException(InvalidArgumentException::class);
      $module = new File();
      $module->addFiles("/file.php");
    }
    public function testAddFilesRequiredWrongTypeInput() {
      $this->expectException(InvalidArgumentException::class);
      $module = new File();
      $module->addFilesRequired("/file.php");
    }
    public function testAddFileBadPathInput() {
      $this->expectException(InvalidArgumentException::class);
      $module = new File();
      $module->addFile("tests/jate/modules/File/file/test2.js");
    }
    public function testAddFileRequiredBadPathInput() {
      $this->expectException(InvalidArgumentException::class);
      $module = new File();
      $module->addFileRequired("tests/jate/modules/File/file/test2.js");
    }
    public function testAddFilesBadPathInput() {
      $this->expectException(InvalidArgumentException::class);
      $module = new File();
      $module->addFiles(["tests/jate/modules/File/file/test2.js"]);
    }
    public function testAddFilesRequiredBadPathInput() {
      $this->expectException(InvalidArgumentException::class);
      $module = new File();
      $module->addFilesRequired(["tests/jate/modules/File/file/test2.js"]);
    }
    public function testAddFileCorrectPathInput() {
      $module = new File();
      $module->addFile("tests/jate/modules/File/file/test.js");
      $this->assertEquals(["tests/jate/modules/File/file/test.js"], $module->getFiles());
    }
    public function testAddFileRequiredCorrectPathInput() {
      $module = new File();
      $module->addFileRequired("tests/jate/modules/File/file/test.js");
      $this->assertEquals(["tests/jate/modules/File/file/test.js"], $module->getFilesRequired());
    }
    public function testAddFilesCorrectPathInput() {
      $module = new File();
      $module->addFiles(["tests/jate/modules/File/file/test.js"]);
      $this->assertEquals(["tests/jate/modules/File/file/test.js"], $module->getFiles());
    }
    public function testAddFilesRequiredCorrectPathInput() {
      $module = new File();
      $module->addFilesRequired(["tests/jate/modules/File/file/test.js"]);
      $this->assertEquals(["tests/jate/modules/File/file/test.js"], $module->getFilesRequired());
    }
  }
?>
