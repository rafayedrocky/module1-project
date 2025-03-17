<?php

define("FACTOR", 9/5);
define("OFFSET", 32);

echo "Enter temperature value: ";
$temp = (float) readline();

echo "Convert to (1: Fahrenheit, 2: Celsius): ";
$choice = (int) readline();

switch($choice) {
    case 1:
        $result = ($temp * FACTOR) + OFFSET;
        echo "Temperature in fahrenheit: $result °F. \n";
        break;
    case 2:
        $result = ($temp - OFFSET) / FACTOR;
        echo "Temperature in celsius: $result °C. \n";
        break;
    default:
        echo "Invalid choice. Please enter 1 or 2.\n";
}