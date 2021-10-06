<?php

use App\Http\Controllers\RegionController;
use App\Http\Controllers\Territorycontroller;
use App\Http\Controllers\ZoneController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('zones', ZoneController::class);
    Route::resource('regions', RegionController::class);
    Route::resource('territorys', Territorycontroller::class);
    Route::get('/sku', [App\Http\Controllers\SkuController::class, 'index'])->name('sku');
});




