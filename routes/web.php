<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ProductController;
use  App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::middleware(['isAdmin','Auth'])->group(function(){
//     Route::post('/product_create',[App\Http\Controllers\ProductController::class,'addItem']);
//     Route::post('/UpdateItem/{id}',[App\Http\Controllers\ProductController::class,'update']);
//      Route::get('editing/{id}', [ProductController::class , 'edit'])->name('edit');
// Route::get('delete/{id}', [ProductController::class , 'destroy'])->name('delete');
                
// });





Route::get('/', function () {
    return view('welcome');
});

Route::get('/addItem', function () {
    return view('addItem');
});



Route::get('/profile',[App\Http\Controllers\UserController::class,'index'])->name('Profile');


Route::get('editing/{id}', [ProductController::class , 'edit'])->name('edit');
Route::get('delete/{id}', [ProductController::class , 'destroy'])->name('delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/product_create',[App\Http\Controllers\ProductController::class,'addItem']);
Route::post('/UpdateItem/{id}',[App\Http\Controllers\ProductController::class,'update']);


Route::get('/dashboard',[App\Http\Controllers\ProductController::class,'DisplayItems'])->name('dashboard');
Route::get('/User',[App\Http\Controllers\ProductController::class,'DisplayItems'])->name('User');




