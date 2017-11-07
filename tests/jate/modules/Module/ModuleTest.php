<?php
  declare( strict_types = 1 );
  // backward compatibility
  if (!class_exists('\PHPUnit\Framework\TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
  }
  use PHPUnit\Framework\TestCase;

  final class ModuleTest extends TestCase {
    public function testAddFile() {
      $this->expectException(InvalidArgumentException::class);
      $module = new Module();
      $module->addFile(123);
    }
    public function testAddFileRequired() {
      $this->expectException(InvalidArgumentException::class);
      $module = new Module();
      $module->addFileRequired(123);
    }
    public function testAddFiles() {
      $this->expectException(InvalidArgumentException::class);
      $module = new Module();
      $module->addFiles("/file.php");
    }
    public function testAddFilesRequired() {
      $this->expectException(InvalidArgumentException::class);
      $module = new Module();
      $module->addFilesRequired("/file.php");
    }
    public function testAddModuleClass() {
      $this->expectException(InvalidArgumentException::class);
      $module = new Module();
      $module->addModule(123);
    }
    public function testAddModuleNoModule() {
      $this->expectException(InvalidArgumentException::class);
      $module = new Module();
      $module->addModule((object)[1,2,3]);
    }
    public function testAddModules() {
      $this->expectException(InvalidArgumentException::class);
      $module = new Module();
      $module->addModules("Module");
    }
    public function testGetCss() {
      $module = new Module();
      $module->addFiles(["1.css","2.js","3.css","4.js"]);
      $this->assertEquals(["1.css","3.css"], $module->getCss());
    }
    public function testGetJs() {
      $module = new Module();
      $module->addFiles(["1.css","2.js","3.css","4.js"]);
      $this->assertEquals(["2.js","4.js"], $module->getJs());
    }
    public function testGetJsVar() {
      $module = new Module();
      $module->addFiles(["1.css",["variable","2"],"3.css","4.js"]);
      $this->assertEquals([["variable","2"]], $module->getJsVar());
    }
  }
?>
