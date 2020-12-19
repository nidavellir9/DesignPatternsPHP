<?php

/**
 * Initialization
 */

include '../Entity/AbstractFactory.php';

echo 'BEGIN TESTING ABSTRACT FACTORY PATTERN';
echo '<br />';

echo 'Testing OReillyBookFactory';
echo '<br />';
$bookFactoryInstance = new OReillyBookFactory;
testConcreteFactory($bookFactoryInstance);
echo '<br />';

echo 'Testing SamsBookFactory';
echo '<br />';
$bookFactoryInstance = new SamsBookFactory;
testConcreteFactory($bookFactoryInstance);

echo "END TESTING ABSTRACT FACTORY PATTERN";
echo '<br />';

function testConcreteFactory($bookFactoryInstance)
{
    $phpBookOne = $bookFactoryInstance->makePHPBook();
    echo 'First PHP Author: '.$phpBookOne->getAuthor();
    echo '<br />';
    echo 'First PHP Title: '.$phpBookOne->getTitle();
    echo '<br />';

    $phpBookTwo = $bookFactoryInstance->makePHPBook();
    echo 'second PHP Author: '.$phpBookTwo->getAuthor();
    echo '<br />';
    echo 'second PHP Title: '.$phpBookTwo->getTitle();
    echo '<br />';

    $mySqlBook = $bookFactoryInstance->makeMySQLBook();
    echo 'MySQL Author: '.$mySqlBook->getAuthor();
    echo '<br />';
    echo 'MySQL Title: '.$mySqlBook->getTitle();
    echo '<br />';
}
?>