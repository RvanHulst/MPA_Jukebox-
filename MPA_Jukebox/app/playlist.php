<?php

use Illuminate\Http\Request;

class Playlist{
    public $playlistItems = [];

public function Playlist(){
    return view('playlist');
}
// Add playlistItems fuction
 public function AddPlaylistitems($id){
    $song = Song::findOrFail($id);

    $playlist = session()->get('playlist', []);

    if(isset($playlist[$id])) {
        $playlist[$id]['quantity']++;
    } else {    
        $playlist[$id] = [
            "name" => $song->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image
        ];
    }
    session()->put('playlist', $playlist);

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

