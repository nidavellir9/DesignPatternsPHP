<?php

include '../Entity/strategy.php';

$exampleData = [
    "name" => "Johhny",
    "surname" => "Maroney",
    "position" => "Senior Engineer"
];

$jsonContext = new Context('json');
echo $jsonContext->formatData($exampleData) . PHP_EOL;

$stringConext = new Context('string');
echo $stringConext->formatData($exampleData) . PHP_EOL;

$xmlContext = new Context('xml');
echo $xmlContext->formatData($exampleData) . PHP_EOL;

?>