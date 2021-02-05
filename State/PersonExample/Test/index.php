<?php
include '../Entity/state.php';

$steve = new Person(new Neutral(), 'Steve');
$steve->getName();
$steve->insult();
$steve->getName();
$steve->hug();
$steve->getName();
$steve->hug();
$steve->getName();
?>