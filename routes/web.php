<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SpotifyController;
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

Route::get('/spotify', [SpotifyController::class, 'index']);
Route::get('/spotify-callback', [SpotifyController::class, 'callback']);

Route::get('', [HomeController::class, 'index'])
    ->name('index');

Route::get('form/create', [HomeController::class, 'create'])
    ->name('form.create');

Route::post('form/store', [HomeController::class, 'store'])
    ->name('form.store');

Route::get('{card:name}', [HomeController::class, 'card'])
    ->name('card.index');

Route::post('{card:name}/doa', [HomeController::class, 'doa'])
    ->name('card.doa');

Route::post('{card:name}/make-a-wish', [HomeController::class, 'wish'])
    ->name('card.make-a-wish');
