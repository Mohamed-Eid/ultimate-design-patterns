<?php

namespace Bluex\UltimateDesignPatternsCourse\SOLID\SRP\Refactor;


class UserRepository
{
    public function find($id): User
    {
        return new User();
    }

    public function save(User $user): void
    {
    }
}

/**
 * When we look at the UserRepository class, we can make a determination that retrieving and
 * persisting data to the database are the same responsibility, as a change to one (such as changing
 * where or how the data is stored) requires a change to the other.
 */
