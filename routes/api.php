<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

//Get user by id
Route::get('user/{id}', [UserController::class, 'getUserById']);

//GET all user
Route::get('users', [UserController::class, 'getAllUsers']);

//Create user
Route::post('users', [UserController::class, 'createUser' ]);

//Update user
Route::put('user/{id}', [UserController::class, 'updateUser']);

// Delete user
Route::delete('user/{id}', [UserController::class, 'deleteUser']);

