<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{ PopularController, DashboardController};
use App\Http\Controllers\{
    PopularController as LandingPopularController, PlayingController as LandingPlayingController,
    HomeController, TopController as LandingRatedController
};

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
Route::get('/', HomeController::class)->name('welcome');
Route::resource('/playing', LandingPlayingController::class)->only('index', 'show');
Route::resource('/popular', LandingPopularController::class)->only('index', 'show');
Route::resource('/rated', LandingRatedController::class)->only('index', 'show');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']],function(){
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('/popular', PopularController::class);
});
