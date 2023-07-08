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
    return view('session.index',[
        'title' => 'login',
    ]);
});
Route::get('/home', function () {
    return view('user.index',[
        'title' => 'Home',
    ]);
});
Route::get('/register', function () {
    return view('session.register',[
        'title' => 'Register',
    ]);
});
Route::get('/dashboard', function () {
    return view('admin.index',[
        'title' => 'login',
    ]);
});

Route::resource('/user',UserController::class);
Route::delete('/user/{id_user}',[UserController::class,'destroy']);