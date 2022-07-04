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

    public function addPlaylist($request, $id){

    }

    public function editPlaylist(){
        
    }

    public function savePlaylist(){

    }

    public function totalTime(){
        $time = 0;
        
        foreach($this->playlist as $song){
            $time = $time + $song->duration;
            gmdate("H:i:s");
            
        }
        return($time);
    }
}

