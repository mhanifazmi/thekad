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

Route::group(['prefix' => '{card:name}'], function () {
    Route::get('', [HomeController::class, 'card'])
        ->name('card.index');

    Route::post('doa', [HomeController::class, 'doa'])
        ->name('card.doa');

    Route::post('make-a-wish', [HomeController::class, 'wish'])
        ->name('card.make-a-wish');

    Route::post('rsvp', [HomeController::class, 'rsvpStore'])
        ->name('card.rsvp.store');

    Route::get('rsvp/export', [HomeController::class, 'rsvpExport2'])
        ->name('card.rsvp.export');
});
