<?php

use App\Http\Controllers\CustomAuthController;
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
});
Route::get('/login', [CustomAuthController::class,'login']);
Route::get('/register', [CustomAuthController::class,'register']);
Route::post('/register', [CustomAuthController::class,'store'])->middleware('IsLoggedout');
Route::post('/login', [CustomAuthController::class,'loginuser'])->middleware('IsLoggedout');
Route::get('/dashboard', [CustomAuthController::class,'dashboard'])->middleware('IsLoggedIn');
Route::get('/logout', [CustomAuthController::class,'logout']);





