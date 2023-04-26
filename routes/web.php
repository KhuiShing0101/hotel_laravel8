<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\HeaderController;
use App\Http\Middleware\TestMiddleware;

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


// Auth Login Section

Route::get('/backend/login',[AuthController::class,'getLogin']);

Route::post('/backend/login',[AuthController::class,'postLogin'])->name('login');

Route::middleware([TestMiddleware::class])->group(function(){

    Route::get('/backend/index',[HomeController::class,'index']);

 });

//View Section

Route::get('/backend/view',[HomeController::class,'getView'])->name('viewListing');

Route::get('/backend/view/edit/{id}',[HomeController::class,'viewEdit']);

Route::post('/backend/view/update',[HomeController::class,'viewUpdate'])->name('viewUpdate');

Route::get('/backend/view/delete/{id}',[HomeController::class,'viewDelete']);

Route::get('/backend/view/create',[HomeController::class,'viewCreate'])->name('viewCreate');

Route::post('/backend/view/store',[HomeController::class,'viewStore'])->name('viewStore');

//Testing Section

Route::get('/backend/test/test',[HomeController::class,'test']);

Route::get('/backend/test',[HomeController::class,'test']);
