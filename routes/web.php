<?php


use App\Http\Controllers\AuthManager;
use App\Http\Controllers\forgetPasswordManager;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login',[AuthManager::class, 'login'])->name('login');
Route::post('/login',[AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class,'logout'])->name('logout');

route::get('/forget-password', [forgetPasswordManager::class,'forgetPassword'])
->name('forget-password');
route::post('/forget-password', [forgetPasswordManager::class,'forgetPasswordPost'])
->name('forgert-password.post');
Route::get('/reset-password/{token}',[forgetPasswordManager::class, 'resetPassword'])
->name('reset.password');
Route::post('/reset-password', [forgetPasswordManager::class,'resetPasswordPost'])
->name('reset-password.post');



