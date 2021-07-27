<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home',[App\Http\Controllers\PersonalController::class,'form_submit']);
// Route::view('company', 'company');
Route::get('/company', [PersonController::class, 'company']);
Route::post('/company', [App\Http\Controllers\ComDetailController::class,'addData']);
Route::get('/document', [PersonController::class, 'document']);
Route::post('/document', [App\Http\Controllers\DocDetailController::class, 'save_Auction_Register']);
