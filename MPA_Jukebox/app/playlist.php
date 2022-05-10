<?php

namespace App;

use Illuminate\Http\Request;
use App\Models\Song;


class Playlist
{
    private $playlist;

    public function __construct(){
        //$this->playlist = NULL;
        $this->playlist = session()->get('playlist');

    }

    public function Playlist(){
        return view('playlist');
    }

    // Add playlistItems fuction
    public function addPlaylistitems($request, $id){
        $song = Song::findOrFail($id);

        //dd($song);
        $request->session()->push('playlist', $song);
        

        foreach($this->playlist as $song){
           print_r($song->name);
           print_r($song->duration);
        }
       // dd($request->session()->get('playlist'));
        
        
    }

    // Remove playlistItems fuction

    // Skipp playlistItems fuction

    // Delete playlists fuction

    // Add playlists function

    // Show Playlists function

    // Show Playlistitems




    //public function __construct($playlistItems){
        //$this->playlistItems = $playlistItems;
    
    //}

}

