<?php

namespace Bluex\UltimateDesignPatternsCourse\SOLID\SRP\Violation;

class User
{
    public function getName(): string
    {
        return "";
    }

    public function getEmail(): string
    {
        return "";
    }

    public function getfind(int $id): User
    {
        return new User();
    }

    public function save(): void
    {
    }
}

/**
 * This User class has two responsibilities: it manages the state of the user, and it manages the
 * retrieval from and persistence to the database. This violates SRP. Instead, we could refactor this
 * into two classes like in refactor folder
 */
