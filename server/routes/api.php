<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout']);
Route::middleware('auth:sanctum')->get('user', [AuthController::class, 'getUser']);
Route::post('createProfile', [ProfileController::class, 'create']);
Route::put('/profiles/{id}', [ProfileController::class, 'update']);
Route::delete('/delete/{id}', [ProfileController::class, 'destroy']);
Route::get('profiles', [ProfileController::class, 'getAll']);