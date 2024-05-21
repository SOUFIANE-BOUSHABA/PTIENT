<?php

namespace App\Repositories\Contracts;

interface UserRepositoryInterface
{
    public function findByUsername(string $username);
    public function create(array $data);
}
