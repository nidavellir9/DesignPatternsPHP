<?php
include '../Entity/Adapter.php';

/**
 * The client code can work with any class that follows the Target interface.
 */
function clientCode(Notification $notification)
{
    echo $notification->send("Website is down!",
    "<strong style='color:red;font-size: 50px;'>Alert!</strong> " .
    "Our website is not responding. Call admins and bring it up!");
}

echo "Client code is designed correctly and works with email notifications:"."<br />";
$notification = new EmailNotification('developers@example.com');
clientCode($notification);
echo "\n\n";

echo "The same client code can work with other classes via adapter:"."<br />";
$slackApi = new SlackApi("example.com", "XXXXXXXX");
$notification = new SlackNotification($slackApi, "Example.com Developers");
clientCode($notification);
?>