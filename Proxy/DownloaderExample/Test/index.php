<?php
include '../Entity/Proxy.php';

function clientCode(Downloader $subject)
{
    $result = $subject->download("http://example.com/");

    // Duplicate download requests could be cached for a speed gain.

    $result = $subject->download("http://example.com/");
}

echo "Executing client code with real subject:\n";
$realSubject = new SimpleDownloader();
clientCode($realSubject);

echo "\n";

echo "Executing the same client code with a proxy:\n";
$proxy = new CachingDownloader($realSubject);
clientCode($proxy);

echo "\n\n";
?>