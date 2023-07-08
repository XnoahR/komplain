<?php

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
    return view('user.index',[
        'title' => 'Home',
    ]);
})->name('home');
Route::get('/profile', function () {
    return view('user.profile',[
        'title' => 'Profile',
    ]);
})->name('profile');
Route::get('/register', function () {
    return view('user.session.register',[
        'title' => 'Register',
    ]);
})->name('register');
Route::get('/login', function () {
    return view('user.session.index',[
        'title' => 'Login',
    ]);
})->name('login');
Route::get('/komplain', function () {
    return view('user.komplain',[
        'title' => 'komplain',
    ]);
})->name('komplain');

Route::resource('/user',UserController::class);
Route::delete('/user/{id_user}',[UserController::class,'destroy']);