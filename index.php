<?php

declare(stric_types=1);

namespace App\Core;

interface Billable
{
    public function getPrice(): float;
}

interface Emailable
{
    public function getEmailAddress(): string;
}

class User implements Billable, Emailable
{
    public function getPrice(): float
    {
        return 99.00;
    }

    public function getEmailAddress(): string
    {
        return "dev@example.com";
    }
}
?>