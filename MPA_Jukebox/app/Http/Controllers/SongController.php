<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Playlist;
use Illuminate\Support\Facades\Auth;

class SongController extends Controller
{
    /**
     *  A function that allowes all songs on a certain page.
     */
    public function index(){
        $allSongs = Song::all();

        $playlist = new Playlist();
        $allPlaylists = $playlist->where("user_id", Auth::id())->get();

        return view('allSongs', ['allSongs' => $allSongs, 'allPlaylists' => $allPlaylists]);
    }
    /**
     *  A function that allowes to get a certain song information.
     */
    function getSongInformation(Song $song){

        return view('song',['song' => $song]);
    }

}
