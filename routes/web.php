<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

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

Route::get("/", [PageController::class, 'homepage'])->name('homepage');

Route::resource("comics", ComicController::class);

Route::get('/characters', [PageController::class, 'characters']) ->name('characters');

Route::get('/movies', [PageController::class, 'movies']) ->name('movies');


Route::get('/tv', [PageController::class, 'tv']) ->name('tv');


Route::get('/games', [PageController::class, 'games']) ->name('games');


Route::get('/collectibles', [PageController::class, 'collectibles']) ->name('collectibles');

Route::get('/videos', [PageController::class, 'videos']) ->name('videos');

Route::get('/fans', [PageController::class, 'fans']) ->name('fans');

Route::get('/news', [PageController::class, 'news']) ->name('news');

Route::get('/shop', [PageController::class, 'shop']) ->name('shop');

