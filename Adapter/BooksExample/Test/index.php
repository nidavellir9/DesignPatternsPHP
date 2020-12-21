<?php
include '../Entity/Adapter.php';

writeln('BEGIN TESTING ADAPTER PATTERN');
writeln('');

$book = new SimpleBook("Gamma, Helm, Johnson, and Vlissides", "Design Patterns");
$bookAdapter = new BookAdapter($book);
writeln('Title and Author: ' . $bookAdapter->getTitleAndAuthor());
writeln('');

writeln('END TESTING ADAPTER PATTERN');

function writeln($line_in)
{
    echo $line_in . '<br />';
}
?>