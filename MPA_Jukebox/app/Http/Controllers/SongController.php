<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Playlist;

class SongController extends Controller
{
    public function index(){
        $allSongs = Song::all();

        $playlist = new Playlist();
        $allPlaylists = $playlist->where("user_id", auth()->user()->id)->get();

        return view('allSongs', ['allSongs' => $allSongs, 'allPlaylists' => $allPlaylists]);
    }
    
    function getSongInformation(Song $song){

        return view('song',['song' => $song]);
    }

}
