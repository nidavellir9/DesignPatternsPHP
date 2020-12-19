<?php
include '../Entity/strategy.php';

$context = new Context(new ConcreteStrategyA());
echo "Client: Strategy is set to normal sorting."."<br />";
$context->doSomeBusinessLogic();

echo "<br />";

echo "Client: Strategy is set to reverse sorting."."<br />";
$context->setStrategy(new ConcreteStrategyB());
$context->doSomeBusinessLogic();

?>