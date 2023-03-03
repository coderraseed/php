<?php
//The null coalescing operator
$default_lat = 23.9;
$default_lon = 90.9;

$user_lat = 12.3;

//using Normal condition
if ( isset( $user_lat ) ) {
    $lat = $user_lat;
} else {
    $lat = $default_lat;
}
echo $lat . "\n";
//using ternary operator
$lat = isset( $user_lat ) ? $user_lat : $default_lat;
echo $lat . "\n";
/*
The null coalescing operator in PHP is represented by "??". It is used to check if a variable or expression exists and is not null.
 */
//$variableName = $valueToCheck ?? $defaultValue;

//using null coalescing operator
$lat = $user_lat ?? $default_lat;
echo $lat . "\n";
