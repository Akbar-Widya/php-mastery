<?php

declare(strict_types=1);

namespace App\Core;

class PriceCalculator 
{
  public function calculateTotal(int $quantity, float $unitPrice): float
  {
    return $quantity * $unitPrice;
  }

  public function formatCurrency(float $amount, string $symbol): string
  {
    return $symbol . number_format($amount, 2);
  }

  public function toggleStatus(bool $isActive): bool
  {
    return !$isActive;
  }
}

$transactionOne = new PriceCalculator();
$totalOne = $transactionOne->calculateTotal(3, 19.99) . "\n";
echo "Programming syntax. Topic: Static Typing. \n";
echo $totalOne;
?>