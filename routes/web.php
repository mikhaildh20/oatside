<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/index', [HomeController::class, 'index']);
Route::prefix('/city')->group(function(){
    Route::get('/index', [CityController::class, 'index']);
    Route::get('/create', [CityController::class, 'create']);
    Route::post('/store', [CityController::class, 'store']);
    Route::get('/edit/{city}', [CityController::class, 'edit']);
    Route::post('/update/{city}', [CityController::class, 'update']);
    Route::get('/destroy/{city}', [CityController::class, 'destroy']);
});
Route::prefix('/location')->group(function(){
    Route::get('/index', [LocationController::class, 'index']);
    Route::get('/create', [LocationController::class, 'create']);
    Route::post('/store', [LocationController::class, 'store']);
    Route::get('/edit/{location}', [LocationController::class, 'edit']);
    Route::post('/update/{location}', [LocationController::class, 'update']);
    Route::get('/destroy/{location}', [LocationController::class, 'destroy']);
});
Route::get('/player', [PlayerController::class, 'index']);

require __DIR__.'/auth.php';