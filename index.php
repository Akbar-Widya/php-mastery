<?php

declare(strict_types=1);

function greet(string $name): string {
  return "Backend Session Started: " . $name;
}

echo greet("Developer")
?>