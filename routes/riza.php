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


Route::get('/hello', function(){
    return 'hEllo PO!';
});

Route::get('/user', [UserController::class, 'index']);

Route::match(['put', 'patch', 'post'], '/updateUserInfo' , function(){
    return 'Hello World';
});


Route::any('updateUserInfo', function(){
      return 'This route accepts any http verb';
});

Route::post('/heeelllo', function(){
    return 'hEllo PO!';
});

Route::get('/user', function(Request $request){
     return $request->name . ' - '. $request->email; 
});

Route::patch('/goodmorning', function(){
      return 'Good Morning po';
});

Route::put('/goodmorning2', function(){
    return 'Good Morning po';
});

Route::options('/goodmorning3', function(){
    return 'Good Morning po';
});

Route::delete('/goodmorning4', function(){
    return 'Good Morning po';
});




Route::middleware('extract.token')->group(function(){
    Route::get('/users', [UserController::class, 'Index']);
    Route::patch('/users/{user}', [UserController::class, 'update']);
    Route::post('/userPost', [PostController::class, 'store']);
    Route::put('/userUpdate/{post}', [PostController::class, 'update']);
    Route::delete('/userDeleter/{post}', [PostController::class, 'destroy']);
});
