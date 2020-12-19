<?php
include '../Entity/strategy.php';

writeln('BEGIN TESTING STRATEGY PATTERN');
writeln('');

$book = new Book('PHP for Cats', 'Larry Garfield');

$strategyContextC = new StrategyContext('C');
$strategyContextE = new StrategyContext('E');
$strategyContextS = new StrategyContext('S');

writeln('Test 1 - show name context C');
writeln($strategyContextC->showBookTitle($book));
writeln('');

writeln('Test 2 - show name context E');
writeln($strategyContextE->showBookTitle($book));
writeln('');

writeln('Test 3 - show name context S');
writeln($strategyContextS->showBookTitle($book));
writeln('');

writeln('END TESTING STRATEGY PATTERN');

function writeln($line)
{
    echo $line . "<br />";
}
?>