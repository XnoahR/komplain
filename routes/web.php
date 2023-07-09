<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\sessionController;

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

// Route::get('/profile', function () {
//     return view('user.profile',[
//         'title' => 'Profile',
//     ]);
// })->name('profile');

// Route::get('/register', function () {
//     return view('user.session.register',[
//         'title' => 'Register',
//     ]);
// })->name('register');

// Route::get('/login', function () {
//     return view('user.session.index',[
//         'title' => 'Login',
//     ]);
// })->name('login');

// Route::get('/komplain', function () {
//     return view('user.komplain',[
//         'title' => 'komplain',
//     ]);
// })->name('komplain');

// Route::get('/unsolved', function () {
//     return view('user.unsolved',[
//         'title' => 'unsolved',
//     ]);
// })->name('unsolved');

// Route::get('/solved', function () {
//     return view('user.solved',[
//         'title' => 'solved',
//     ]);
// })->name('solved');

// Route::get('/all', function () {
//     return view('user.all',[
//         'title' => 'All Complaint',
//     ]);
// })->name('all');

Route::get('/profile',[UserController::class,'index'])->name('profile');



//Login Route
Route::get('/login',[sessionController::class,'index'])->name('login_page');
Route::post('/login',[sessionController::class,'authenticate'])->name('loginauth');
Route::get('/register',[sessionController::class,'register'])->name('register');
Route::post('/register/create',[sessionController::class,'create'])->name('create_account');
Route::get('/logout',[sessionController::class,'logout'])->name('logout');

Route::resource('/user',UserController::class);
Route::delete('/user/{id_user}',[UserController::class,'destroy']);