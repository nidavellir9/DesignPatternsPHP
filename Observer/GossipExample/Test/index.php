<?php
include '../Entity/Observer.php';

writeln('BEGIN TESTING OBSERVER PATTERN');
writeln('');

$patternGossiper = new PatternSubject();
$patternGossipFan = new PatternObserver();

$patternGossiper->attach($patternGossipFan);
$patternGossiper->updateFavorites('abstract factory, decorator, visitor');
$patternGossiper->updateFavorites('abstract factory, observer, decorator');
$patternGossiper->detach($patternGossipFan);
$patternGossiper->updateFavorites('abstract factory, observer, paisley');

writeln('END TESTING OBSERVER PATTERN');

?>