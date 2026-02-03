<?php

declare(strict_types=1);

$quantity = 8;
$unitPrice = 50.00;
$total = $quantity * $unitPrice;

/**
 * If Statement:
 * Condition: goes in parentheses.
 * Code to run: goes in curly braces.
 */

if ($quantity >= 10) {
    echo "Tier: Gold (20% off)\n";
    $total = $total * 0.80;
} elseif ($quantity >= 5) {
    echo "Tier: Silver (10% off)\n";
    $total = $total * 0.90;
} else {
    echo "Tier: Standard (No discount)\n";
}

echo "Final Total: $" . $total;

?>