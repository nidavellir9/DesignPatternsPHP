<?php
include '../Entity/ChainOfResponsability.php';

writeln("BEGIN TESTING CHAIN OF RESPONSIBILITY PATTERN");
writeln("<br />");

$bookTopic = new BookTopic("PHP 5");
writeln("BookTopic before title is set:");
writeln("Topic: " . $bookTopic->getTopic());
writeln("Title: " . $bookTopic->getTitle());

$bookTopic->setTitle("PHP 5 Recipes by Babin, Good, Kroman, and Stephens");
writeln("BookTopic after title is set: ");
writeln("Topic: " . $bookTopic->getTopic());
writeln("Title: " . $bookTopic->getTitle());
writeln("<br />");

$bookSubTopic = new BookSubTopic("PHP 5 Patterns", $bookTopic);
writeln("BookSubTopic before title is set: ");
writeln("Topic: " . $bookSubTopic->getTopic());
writeln("Title: " . $bookSubTopic->getTitle());
writeln("<br />");

$bookSubTopic->setTitle("PHP 5 Objects Patterns and Practice by Zandstra");
writeln("BookSubTopic after title is set: ");
writeln("Topic: ". $bookSubTopic->getTopic());
writeln("Title: ". $bookSubTopic->getTitle());
writeln("<br />");

$bookSubSubTopic = new BookSubSubTopic("PHP 5 Patterns for Cats", $bookSubTopic);
writeln("BookSubSubTopic with no title set: ");
writeln("Topic: " . $bookSubSubTopic->getTopic());
writeln("Title: " . $bookSubSubTopic->getTitle());
writeln("<br />");

$bookSubTopic->setTitle(NULL);
writeln("BookSubSubTopic with no title for set for bookSubTopic either:");
writeln("Topic: " . $bookSubSubTopic->getTopic());
writeln("Title: " . $bookSubSubTopic->getTitle());
writeln("<br />");

$bookTopic->setTitle(NULL);
writeln("BookSubSubTopic with no title for set for bookTopic either:");
writeln("Topic: " . $bookSubSubTopic->getTopic());
writeln("Title: " . $bookSubSubTopic->getTitle());

writeln("END TESTING CHAIN OF RESPONSIBILITY PATTERN");

function writeln($line_in)
{
    echo $line_in . "<br />";
}
?>