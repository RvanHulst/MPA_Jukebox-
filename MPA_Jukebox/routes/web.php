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
    return redirect()->route('songs');
});

//genre routes
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/{genre}', [GenreController::class, 'getAllSongFromGenre']);

//Song routes
Route::get('/songs', [SongController::class, 'index'])->name('songs');
Route::get('/song/{song}', [SongController::class, 'getSongInformation']);


//Playlist routes
Route::get('/playlist', [PlaylistController::class, 'index'])->name('playlist');
Route::get('/playlist/{song}', [PlaylistController::class, 'addPlaylistitems']);
Route::post('/deletePlaylistItems', [PlaylistController::class, 'deletePlaylistItems']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [SongController::class, 'index'])->name('songs');
