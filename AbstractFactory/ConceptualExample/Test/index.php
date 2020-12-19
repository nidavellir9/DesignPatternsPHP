<?php
include '../Entity/AbstractFactory.php';

function clientCode(AbstractFactory $factory)
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productB->usefulFunctionB();
    echo "<br />";
    echo $productB->anotherUsefulFunctionB($productA);
    echo "<br />";
}

echo "Client: Testing client code with the first factory type:";
echo "<br />";
clientCode(new concreteFactory1());

echo "<br />";
echo "<br />";

echo "Client: Testing client code with the second factory type:";
echo "<br />";
clientCode(new concreteFactory2());

?>