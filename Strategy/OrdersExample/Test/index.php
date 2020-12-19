<?php
include '../Entity/Strategy.php';

$controller = new OrderController();

echo "Client: Let's create some orders"."<br />";

$controller->post("/orders", [
    "email" => "eze@eze.com",
    "product" => "ABC Doggy food (XL)",
    "total" => 9//9.95
]);

$controller->post("/orders", [
    "email" => "pepe@as.com",
    "product" => "XYZ Fish litter (S)",
    "total" => 19//19.95
]);

echo "Client: List my orders, please"."<br />";

$controller->get("/orders");

echo "Client: I'd like to pay for the second, show me the payment form"."<br />";

$controller->get("/order/1/payment/cc");

echo "Client: ...pushes the Pay button..."."<br />";
echo "Client: Oh, I'm redirected to the PayPal."."<br />";
echo "Client: ...pays on the PayPal..."."<br />";
echo "Client: Alright, I'm back with you, guys."."<br />";

$controller->get("/order/1/payment/cc/return?key=c55a3964833a4b0fa4469ea94a057152&success=true&total=19.95");

?>