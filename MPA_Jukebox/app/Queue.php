<?php

namespace App;

use App\Models\Song;


class Queue
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


    // Delete playlistItems function
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
    // totalTime function
    public function totalTime(){
        // Gives a base value 0
        $time = 0;
        
        // Loops trough the playlist and counts the song durations together
        foreach($this->playlist as $song){
            $time = $time + $song->duration;
        }
        // stop the function and returns the calculated time.
        return($time);
    }
}

