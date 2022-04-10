<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicationController;
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


Route::get('/dashboard',  [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('publication')->group(function () {
    Route::get('/',  [PublicationController::class, 'index'])->name('publication');
    Route::get('/new',  [PublicationController::class, 'new'])->name('newPublication');

    // ENDPOINTS
    Route::post('/store',  [PublicationController::class, 'store'])->name('storePublication');
});

Route::get('/',  [HomeController::class, 'index'])->name('home');
Route::get('/blog',  [BlogController::class, 'index'])->name('blog');

Route::get('/{slug}',  [BlogController::class, 'new'])->where('slug', '^[a-z-0-9-]+$')->name('new');
