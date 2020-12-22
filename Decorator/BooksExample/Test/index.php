<?php
include '../Entity/Decorator.php';

writeln('BEGIN TESTING DECORATOR PATTERN');
writeln('');

$patterBook = new Book('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');

$decorator = new BookTitleDecorator($patterBook);
$starDecorator = new BookTitleStarDecorator($decorator);
$exclaimDecorator = new BookTitleExclaimDecorator($decorator);

writeln('Showing title : ');
writeln($decorator->showTitle());
writeln('');

writeln('Showing title after two exclaims added : ');
$exclaimDecorator->exclaimTitle();
$exclaimDecorator->exclaimTitle();
writeln($decorator->showTitle());
writeln('');

writeln('Showing title after star added : ');
$starDecorator->starTitle();
writeln($decorator->showTitle());
writeln('');

writeln('Showing title after reset: ');
writeln($decorator->resetTitle());
writeln($decorator->showTitle());
writeln('');

writeln('END TESTING DECORATOR PATTERN');

function writeln($line_in)
{
    echo $line_in . "<br />";
}
?>