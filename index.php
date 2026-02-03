<?php

declare(strict_types=1);

// 1. Numerical Operations
$basePrice = 100;
$taxAmount = 15;
$totalPrice = $basePrice + $taxAmount; // Addition

$discount = 10;
$finalPrice = $totalPrice - $discount; // Subtraction

// 2. String Operations; The Dot Operator
// In PHP, we use a period (.) to glue text together.
$greeting = "Total Amount Due: ";
$message = $greeting . "$" . $finalPrice; 

echo $message;

?>