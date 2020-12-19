<?php
include '../Entity/factoryMethod.php';

/**
 * The client code can work with any subclass of SocialNetworkPoster since it
 * doesn't depend on concrete classes.
 */
function clientCode(SocialNetworkPoster $creator)
{
    $creator->post("Hello World!");
    $creator->post("go go go");
}

/**
 * During the initialization phase, the app can decide which social network it
 * wants to work with, create an object of the proper subclass, and pass it to
 * the client code.
 */
echo "Testing ConcreteCreator1:"."<br />";
clientCode(new FacebookPoster("Eze", "0okmnji9"));
echo "<br />";

echo "Testing ConcreteCreator2:"."<br />";
clientCode(new LinkedInPoster("eze@example.com", "banana10"));
echo "<br />";
?>