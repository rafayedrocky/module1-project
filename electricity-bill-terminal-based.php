<?php

// Define slabs for billing using if-else (e.g., 1–100 units = $5, 101–200 units = $10, etc.).
// Calculate and display the total bill based on the entered units.

echo "Enter units consumed: ";
$units = (float) readline();

if($units <= 100) {
    $bill = $units * 5;
}elseif ($units <= 200) {
    $bill = 100 * 5 + ($units - 100) * 10;
}elseif ($units <= 1000) {
    $bill = 100 * 5 + 100 * 10 + ($units - 200) * 15; 
}

echo "Total bills: $bill. \n";
