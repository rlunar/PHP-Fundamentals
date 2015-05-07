<?php

$name = "Paty";
$age = 32;

//$greeting = "My name is $name and I am $age";

$greeting = sprintf("My name is %s and I am %d", $name, $age);

//echo $greeting;

//printf("Today is %s %s, %d", 'June', '7th', '2012');

//list($month, $day, $year) = sscanf("June 7th, 2012", "%s %[^,], %d");

sscanf("June 7th, 2012", "%s %[^,], %d", $month, $day, $year);

echo $day;
echo "\n";
echo $month;
echo "\n";
echo $year;