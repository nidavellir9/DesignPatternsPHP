<?php
include '../Entity/Decorator.php';

writeln('BEGIN TESTING DECORATOR PATTERN');
writeln('');


$booking = new DoubleRoomBooking();

writeln('Basic Double Room');
writeln('Price:');
writeln($booking->calculatePrice());
writeln('Description:');
echo $booking->getDescription();

$bookingExtraBed = new ExtraBed($booking);

writeln('');
writeln('');
writeln('Basic Double Room + Extra bed');
writeln('Price:');
writeln($bookingExtraBed->calculatePrice());
writeln('Description:');
writeln($bookingExtraBed->getDescription());

$bookingWiFi = new WiFi($bookingExtraBed);

writeln('');
writeln('');
writeln('Basic Double Room + Extra bed + WiFi');
writeln('Price:');
writeln($bookingWiFi->calculatePrice());
writeln('Description:');
writeln($bookingWiFi->getDescription());

function writeln($line_in)
{
    echo $line_in . "<br />";
}
?>