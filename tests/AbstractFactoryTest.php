<?php

use PHPUnit\Framework\TestCase;
use AbstractFactory\AbstractFactory;

class AbstractFactoryTest extends TestCase
{
    public function testPHPOReillyBookFactory()
    {
        $bookFactoryInstance = new OReillyBookFactory();
        $phpBook = $bookFactoryInstance->makePHPBook();
        $this->assertStringContainsString('PHP', $phpBook->getTitle());
    }

    public function testMySQLOReillyBookFactory()
    {
        $bookFactoryInstance = new OReillyBookFactory();
        $mySqlBook = $bookFactoryInstance->makeMySQLBook();
        $this->assertStringContainsString('SQL', $mySqlBook->getTitle());
    }

    public function testPHPSamsBookFactory()
    {
        $bookFactoryInstance = new SamsBookFactory();
        $phpBook = $bookFactoryInstance->makePHPBook();
        $this->assertStringContainsString('PHP', $phpBook->getTitle());
    }

    public function testMySQLSamsBookFactory()
    {
        $bookFactoryInstance = new SamsBookFactory();
        $mySqlBook = $bookFactoryInstance->makeMySQLBook();
        $this->assertStringContainsString('SQL', $mySqlBook->getTitle());
    }
}
?>