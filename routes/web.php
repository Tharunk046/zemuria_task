<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
// index page route
Route::get('/', function () {
    return view('welcome');
})->middleware('guest');
// login page route
Route::get('/login', function () {
    return view('login');
})->middleware('guest')->name('login');

// register page route
Route::get('/register', function () {
    return view('register');
})->middleware('guest');

// home route for users with Auth middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
});

// home route for admin with Auth and admin middleware
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', [UserController::class, 'index']);
    Route::get('/usersList', [UserController::class, 'usersList']);
});
//route to UsersController for storing user details  
Route::post('/user', [UserController::class, 'store']);

//route to LoginController for user and admin login  
Route::post('/loginValidate', [LoginController::class, 'loginValidate']);

//route to LoginController for user and admin logout  
Route::get('/logout', [LoginController::class, 'logout']);

// route for viewing users

