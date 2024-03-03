<?php

namespace Bluex\UltimateDesignPatternsCourse\SOLID\SRP\Refactor;

class User
{
    public function getName(): string
    {
        return "user name";
    }

    public function getEmail(): string
    {
        return "email@email.com";
    }
}

/**
 * The User class continues to manage the state of the user data, but now the UserRepository class
 * is responsible for managing the retrieval and persistence to the database. These two concepts are
 * now decoupled, and the two classes conform to SRP.
 */
