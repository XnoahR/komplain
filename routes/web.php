<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\productController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\complainController;

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

//Profile Route
Route::middleware(['needLogin','profileAuth'])->group(function () {
    Route::get('/profile',[UserController::class,'index'])->name('profile');
    Route::patch('/profile/{user}',[UserController::class,'update'])->name('profile_update');
    Route::get('/solved',[complainController::class,'solved'])->name('solved');
});
Route::middleware(['needLogin','userOnly'])->group(function () {
    Route::get('/komplain',[complainController::class,'index'])->name('complaint');
    Route::post('/komplain',[complainController::class,'store'])->name('complaint_store');
    Route::get('/unsolved',[complainController::class,'unsolved'])->name('unsolved');
    Route::get('/unsolved/{complaint}',[complainController::class,'destroy'])->name('unsolved_delete');
    //product
    Route::get('/product',[productController::class,'index'])->name('product');
    Route::get('/product/create',[productController::class,'create'])->name('product_create');
    Route::post('/product',[productController::class,'store'])->name('product_store');
    Route::get('/product/{product}/edit',[productController::class,'edit'])->name('product_edit');
    Route::patch('/product/{product}',[productController::class,'update'])->name('product_update');
    Route::get('/product/{product}',[productController::class,'destroy'])->name('product_delete');
});
Route::middleware(['needLogin','staffOnly'])->group(function () {
    Route::get('/all',[complainController::class,'all'])->name('all_complaint');
    Route::patch('/all/{complaint}',[complainController::class,'update'])->name('all_update');
});

Route::middleware(['needLogin','adminOnly'])->group(function () {
    Route::get('/data',[adminController::class,'index'])->name('data');
    Route::get('/role',[adminController::class,'role'])->name('role_manage');
    Route::patch('/role{user}',[adminController::class,'update'])->name('role_update');
});



//Login Route
Route::middleware(['isLogin'])->group(function () {
Route::get('/login',[sessionController::class,'index'])->name('login_page');
Route::post('/login',[sessionController::class,'authenticate'])->name('loginauth');
Route::get('/register',[sessionController::class,'register'])->name('register');
Route::post('/register/create',[sessionController::class,'create'])->name('create_account');
});
Route::get('/logout',[sessionController::class,'logout'])->name('logout');


Route::resource('/user',UserController::class);
Route::delete('/user/{id_user}',[UserController::class,'destroy']);