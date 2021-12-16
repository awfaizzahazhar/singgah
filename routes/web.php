<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\peoplecontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/sell',function(){
	return view('sell');
});

Route::get('/view',function(){
	return view('view');
});



Route::get('/sell', [PostController::class,'sell']);

Route::post('/post',[PostController::class,'store']);

Route::delete('/delete/{id}',[PostController::class,'destroy']);

Route::get('/edit/{id}',[PostController::class,'edit']);


Route::delete('/deleteimage/{id}',[PostController::class,'deleteimage']);
Route::delete('/deletecover/{id}',[PostController::class,'deletecover']);
Route::put('/update/{id}',[PostController::class,'update']);

Route::get('/list',[peoplecontroller::class,'show']);

Route::get('/purchase/{id}',[peoplecontroller::class,'purchase']);

// Route::post('/payment',[peoplecontroller::class,'sum']);

// Route::view("sum","payment");