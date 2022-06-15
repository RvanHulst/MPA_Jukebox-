<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PlaylistController;

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

//genre routes
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/{genre}', [GenreController::class, 'getAllSongFromGenre']);

//Song routes
Route::get('/songs', [SongController::class, 'index'])->name('songs');
Route::get('/song/{song}', [SongController::class, 'getSongInformation']);


//Playlist routes
Route::get('/playlist', [PlaylistController::class, 'index']);
Route::get('/playlist/{song}', [PlaylistController::class, 'addPlaylistitems']);

