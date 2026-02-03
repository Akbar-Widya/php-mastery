<?php

declare(strict_types=1);

namespace App\Core;

interface Authorizable
{
    public function canAccess(): bool;
}
interface Loggable
{
    public function getLogMessage(): string;
}

class SecurityManager
{
    /**
     * Union Types (|): Accepts multiple different types.
     */
    public function findUser(int|string $id): void {}

    /**
     * Intersection Types (&): Must satisfy ALL listed interfaces/classes.
     */
    public function audit(Authorizable&Loggable $subject): void
    {
        if ($subject->canAccess()) {
            error_log($subject->getLogMessage());
        }
    }

    /**
     * DNF (Disjunctive Normal Form) Types: Allows Intersections within Unions.
     */
    public function process((Authorizable&Loggable) | null $user): void
    {
        $user?->canAccess();
    }
}
