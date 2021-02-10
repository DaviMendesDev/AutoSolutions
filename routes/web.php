<?php

use App\Http\Controllers\AutoModelController;
use App\Http\Controllers\AutoBrandController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\AutoPartController;

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

Route::get('/', [MainController::class, 'home'])
     ->name('home');


Route::prefix('/auto-part')->group(function () {
    Route::post('/buy/{autopart_id}', [AutoPartController::class, 'buyAutoPart'])
         ->name('buyAutoPart');

    Route::get('/get/{autopart_id}', [AutoPartController::class, 'getAutoPart'])
        ->name('getAutoPart');

    Route::get('/search', [AutoPartController::class, 'searchForAutoParts'])
         ->name('search');
});

Route::prefix('/auto-model')->group(function () {
    Route::get('/get/{automodel_id}', [AutoModelController::class, 'getAutoModel'])
         ->name('getAutoModel');
});

Route::prefix('/auto-brand')->group(function () {
    Route::get('/get/{autobrand_id}', [AutoBrandController::class, 'getAutoBrand'])
         ->name('getAutoBrand');
});
