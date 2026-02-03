<?php

declare(strict_types=1);

$quantity = 6;
$unitPrice = 20.00;
$total = $quantity * $unitPrice;

/**
 * If Statement:
 * Condition: goes in parentheses.
 * Code to run: goes in curly braces.
 */

if ($quantity > 5) {
    echo "Bulk discount applied!\n";
    $total = $total * 0.90;
} else {
    echo "Standard pricing applied.\n";
}

echo "Final Total: $" . $total;

?>