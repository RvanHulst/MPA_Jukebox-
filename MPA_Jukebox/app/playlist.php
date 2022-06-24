<?php

namespace App;

use App\Models\Song;


class Playlist
{
    public $playlist;

    public function __construct($request){
        if($request->session()->has('playlist')){
            $this->playlist = $request->session()->get('playlist');
        } else{
            $this->playlist = [];
        }
    }

    // Add playlistItems fuction
    public function addPlaylistItems($request, $id){

        $song = Song::findOrFail($id);
        $request->session()->push('playlist', $song);
        //$request->session()->flush('playlist', $song);

        foreach($this->playlist as $song){
           print_r($song->name);
           print_r($song->duration);
        }
       // dd($request->session()->get('playlist'));
    }
    public function getPlaylistItems(){
        return $this->playlist;

    }
    //public function deletePlaylistItems($request, $id){
    //  $request->session->forget('id', $id);
    // }

    public function deletePlaylistItems($request, $id, $index){
        unset($this->playlist[$index]);
        $this->saveToSession($request);
    }

    public function saveToSession($request){
        $request->session()->forget('playlist');
        $request->session()->put('playlist', $this->playlist);

        //sessie ophalen.

        //sessie nieuwe opslaan en de oude overschrijven

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

