<?php
include '../Entity/Decorator.php';

function clientCode(Component $component)
{
    echo 'RESULT: ' . $component->operation();
}

/**
 * This way the client code can support both simple components...
 */
$simple = new ConcreteComponent();
echo "Client: I've got a simple component:\n";
clientCode($simple);
echo "\n\n";

/**
 * ...as well as decorated ones.
 *
 * Note how decorators can wrap not only simple components but the other
 * decorators as well.
 */
$decorator1 = new ConcreteDecoratorA($simple);
$decorator2 = new ConcreteDecoratorB($simple);
echo "Client: Now I've got a decorated component:\n";
clientCode($decorator1);
echo "\n\n";
?>