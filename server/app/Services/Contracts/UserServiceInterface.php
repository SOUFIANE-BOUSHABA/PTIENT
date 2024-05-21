<?php 

namespace App\Services\Contracts;

use App\Models\User;
interface UserServiceInterface
{
    public function login(array $data);
    public function register(array $data);
}