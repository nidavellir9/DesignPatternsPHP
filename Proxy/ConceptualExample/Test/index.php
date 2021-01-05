<?php
include '../Entity/Proxy.php';

function clientCode(Subject $subject)
{
    $subject->request();
}

echo "Client: Executing the client code with a real subject:\n";
$realSubject = new RealSubject();
clientCode($realSubject);

echo "\n";

echo "Client: Executing the same client code with a proxy:\n";
$proxy = new Proxy($realSubject);
clientCode($proxy);

echo "\n\n";
?>