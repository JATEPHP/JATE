<?php
  declare( strict_types = 1 );
  // backward compatibility
  if (!class_exists('\PHPUnit\Framework\TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
  }
  use PHPUnit\Framework\TestCase;

  final class ConnectionTest extends TestCase {
    public function testAddFileWrongTypeInput() {
      $this->expectException(JException::class);
      $connection = new Connection("Error");
    }
    public function testAddFileCorrectTypeInput() {
      $jConfig = new JConfig("tests/jate/modules/Connection/file/connection.json");
      $this->assertInstanceOf(Connection::class, new Connection($jConfig));
    }
    public function testQuery() {
      $jConfig = new JConfig("tests/jate/modules/Connection/file/connection.json");
      $connection = new Connection($jConfig);
      $connection->database->newTable(
        "CREATE TABLE IF NOT EXISTS tests (
          id INTEGER PRIMARY KEY,
          test TEXT
          time INTEGER
        )"
      );
      $connection->database->query(
        "INSERT INTO tests
        (test)
        VALUES
        ('message1'),
        ('message2')
        "
      );
      $this->assertEquals(['message1', 'message2'], $connection->database->queryArray("SELECT test FROM tests"));
    }
  }
?>
