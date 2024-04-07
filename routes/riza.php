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

Route::put('/goodmorning2/{id}', function(){
    return 'Good Morning po';
});

Route::options('/goodmorning3', function(){
    return 'Good Morning po';
});

Route::delete('/goodmorning4', function(){
    return 'Good Morning po';
});

Route::get('/user/{id}', function(string $id){
     return 'User' .$id;
});

Route::get('/post/{post}/comments/{comment}',
 function(string $postid, string $comment){
    
});

Route::get('/users/{id}', function(Request $request, string $id){
    return $request->name . ' - '. $request->email; 
});

Route::get('/userss/{name?}', function(?string $name = null){
    return $name;
});

Route::get('/userss2/{name?}', function(?string $name = 'Riza'){
    return $name;
});

Route::get('/user/{name}', function(string $name){
    return $name;
})->where('name', '[A-Za-z]+');

Route::get('/userId/{id}', function(string $id){
    return $id;
})->where('id', '[0-9]+');

Route::get('/userId/{id}', function(string $id){
        return $id;
});

Route::get('/user/profile', function () {
    
})->name('profile');


