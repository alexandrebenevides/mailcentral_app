<?php

namespace App\Services\Contracts;

interface UserServiceInterface
{
    public function createUser(array $userData);
}