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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('extract.token')->group(function(){
    Route::get('/users', [UserController::class, 'Index']);
    Route::patch('/users/{user}', [UserController::class, 'update']);
    Route::post('/userPost', [PostController::class, 'store']);
    Route::put('/userUpdate/{post}', [PostController::class, 'update']);
    Route::delete('/userDeleter/{post}', [PostController::class, 'destroy']);
});


