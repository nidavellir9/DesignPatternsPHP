<?php
include '../Entity/factoryMethod.php';

function clientCode(Creator $creator)
{
    echo "Client: I'm not aware of the creator's class, but it still works"."<br />".$creator->someOperation();
}

echo "App: Launched with the ConcreteCreator1.";
echo "<br />";
clientCode(new ConcreteCreator1());
echo "<br />";

echo "App: Launched with the ConcreteCreator2.";
echo "<br />";
clientCode(new ConcreteCreator2());
echo "<br />";
?>