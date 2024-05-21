<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Services\Implementations\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }





    public function login(LoginRequest  $request)
    {
        $token = $this->userService->login($request->all());

        if (!$token) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json(['token' => $token], 200);
    }





    public function register(RegistrationRequest $request)
    {
        $user = $this->userService->register($request->all());

        return response()->json($user, 201);
    }




    public function getUser()
    {
        return $this->userService->getUser();
    }



    
    public function logout()
    {
        return $this->userService->logout();
    }
}
